/*******************************************************************************************
 intForm LIBRARY
 Easily integrate Js, PHP and MySQL on your web forms!
 
 Jorge F. García-Samartín
 www.gsamartin.es
 *******************************************************************************************
 HISTORY;	
 2020-06-17: Creation
 *******************************************************************************************/
 
 /* ---------------------------------------------------------------------------
 Global variables
------------------------------------------------------------------------------ */
pathPHP = "./assets/plugins/intforms/";			// --- Location of PHP files

 /* ---------------------------------------------------------------------------
 Class form
 Manage all related to the HTML <form> tag (submission, fields...)
------------------------------------------------------------------------------ */
class form {
	
	// --- Constructor
	constructor (settings, ...fields) {
		// --- General Settings
		this.id = settings.id;						// --- Value of the primary key
		this.dbTable = settings.dbTable;			// --- Table of the database with the primary key
		this.timeField = settings.timeField;		// --- Field which stores the form sending time
		this.idField = settings.idField;			// --- Field of the primary key
		this.mode = settings.mode || 'create';		// --- Binary variable to specify if there will be or not preloaded data (create is the default mode)
		
		// --- Related to the fields
		this.fieldList = [];						// --- Array referencing all the form's fields
		this.formOptions = [];						// --- Array with all the form options (class, action, method...)
		
		// --- Sucess and error messages
		this.okMess = settings.okMess || 'Your form has been submited properly! See you soon!';
		this.errMess = settings.errMess || 'Any error ocurred :-(...Please, contact site admin for help';
		
		// --- Processing the rest of the data
		for (var i = 0; i < fields.length; i++) {
			
			// --- If argument is a button, we make consider it as the form button
			if (fields[i].constructor.name == 'button') {
				this.sendButton = fields[i];
			} 
			// --- If argument is a normal field, we add it to the list of fields
			else if (fields[i].constructor.name == 'field') {
				this.fieldList.push(fields[i]);
			}
			// --- In the other cases, we consider the input argument as an array containing the form options
			else {
				this.formOptions = fields[i];
			}
		}
	}
	
	// --- Print form in HTML code
	makeHTML (locID) {
		
		// --- ID of the HTML element in where the form will be placed
		var formDestination = document.getElementById(locID);
		
		// --- Creating the form
		var frm = document.createElement("form");
			
		// --- Fields
		for (let i in this.fieldList) {
			// --- Getting field HTML data
			let f = this.fieldList[i].makeHTML();
			// --- Adding field to the form
			frm.appendChild(f);
			// --- A breakline will be added between elements (it's necessary to create it in each iteration)
			let brk = document.createElement("br");
			frm.appendChild(brk);
		}
		
		// --- Send Button
		if (this.sendButton) {
			// --- Getting button HTML data
			var b = this.sendButton.makeHTML();
			// --- Connecting the button to the form
			b.setAttribute('form', this.formOptions.id);
			b.setAttribute('onclick', 'form1.readData("' + this.formOptions.id + '");');
			// --- Adding button to the form
			frm.appendChild(b);			
		}
		
		// --- Adding extra options
		if (this.formOptions) {
			for (var nopt in this.formOptions) {
				frm.setAttribute(nopt, this.formOptions[nopt]);
			}
		}
		
		// --- Place the form in the HTML DOM
		formDestination.appendChild(frm);	
		
	}
	
	// --- Retrieve the data from HTML page and send it to be stocked in db
	readData (formID) {
		
		// --- Form with the data
		var form2Read = document.getElementById(formID);
		
		// --- Structure with the form options to be sent
		var formConfig = {id: this.id, dbTable: this.dbTable, timeField: this.timeField, idField: this.idField, mode: this.mode};
		
		// --- Structure with the data to send
		var formResults = [];	
		
		// --- Success and error message (to be able to retrieve them in the POST)
		var messages = {ok: this.okMess, error: this.errMess}
		
		// --- Reading the data
		for (let field of this.fieldList) {
			
			// --- If no table is specifed, the form default one will be taken
			let dbTable = field.dbTable || this.dbTable;
			
			// --- For choice fields
			if (field.type == 'radio' || field.type == 'checkbox') {
				
				let choiceField = document.getElementsByName(field.id);
				
				// --- Read all the options and onlye consider the checked ones
				for (let choiceOpt of choiceField) {
					if (choiceOpt.checked) {
						formResults.push({type: 'multi', dbTable: dbTable, id: field.dbPrmKey, content: choiceOpt.value});
					}
				}
			}
			// --- For other fields
			else {
				formResults.push({type: 'one', dbTable: dbTable, id: field.id, content: document.getElementById(field.id).value});
			}
		}
		
		// --- Error during the form setup (code errors)
		if (!this.dbTable || !this.timeField) {
			// --- Selecting the div
			let configErrorDiv = document.getElementById('vuelta');
			// --- Content of the div
			configErrorDiv.innerHTML = messages.error;
		// ---	Sending the info to the db	
		} else {
			$.post(pathPHP + "readForm.php", {formOptions: formConfig, formData: formResults}, function(formSendStatus) {
				$("#vuelta").html(formSendStatus);
				//document.getElementById('vuelta').innerHTML = messages.ok;
			});
		}
	}

}
 
/* ---------------------------------------------------------------------------
 Class field
 Manage each one of the fields of the form (aspect, properties ...)
------------------------------------------------------------------------------ */
class field {
	
	// --- Constructor
	constructor (dataField = []) {
		
		// --- General information about the field
		this.id = dataField.id;								// --- ID and name of the field
		
		// --- For the db
		this.dbTable = dataField.dbTable;					// --- Table of the database in which the information will be stored
		this.dbPrmKey = dataField.dbPrmKey;					// --- Column of the db which contents the associated primary keys (for the select/radio/checkbox fields)
		this.dbAuxTable = dataField.dbAuxTable;				// --- Table of the database with the legend of the keys  (for the select/radio/checkbox fields)
		this.dbImg = dataField.dbImg;						// --- Table of the database with the auxiliary images (for the select/radio/checkbox fields)
		
		// --- Format options
		this.type = dataField.type;							// --- Type of the field (text, email, ....)
		this.label = dataField.label;						// --- Text preceding the field with some info or instructions
		this.defaultTxt = dataField.defaultTxt;				// --- Default text
		this.options = dataField.options;					// --- Array with the config options, in key-value format: styles, required, default values...
		this.optionsImg = dataField.optionsImg;				// --- Array with the config options for images in checlboxes or select fields, in key-value format: styles, ridth, ...
	}
	
	// --- HTML display
	makeHTML () {
		
		// --- Function auxiliary variables
		let isSelect;										// --- Binary variable to say if a field is type select or not
		
		// --- Returned object: label + content
		var newField = document.createElement("div");
		newField.id = 'div_' + this.id;
		
		// --- Label of the field
		if (this.label) {
			var lab = document.createElement("label");			
			lab.setAttribute('for', this.id);				// --- The conventional syntax (label.for) cannot be used because for is a reserved keyword in JS	
			lab.innerHTML = this.label;
			
			// --- Adding the label to the returned object
			newField.appendChild(lab);
		}
		
		// --- Depending on the type, different actions will be done
		switch (this.type) {
				
			// --- Free text area without format or with it (wym-editor)
			// --- ONLY ONE WYM-EDITOR CAN BE PUT PER PAGE
			case 'textarea':
			case 'wym-editor':
			
				// --- Creating the element and basic setup
				var fieldCont = document.createElement("textarea");
				fieldCont.id = this.id;
				fieldCont.name = this.id;
				
				// --- Only for type wym-editor
				if (this.type == 'wym-editor') {
					fieldCont.setAttribute('class', 'wymeditor');
				}
				
				// --- Default text
				if (this.defaultTxt) {
					fieldCont.innerHTML = this.defaultTxt;
				}				
				
				// --- Extra options
				if (this.options) {
					for (let nopt in this.options) {
						fieldCont.setAttribute(nopt, this.options[nopt]);
					}
				}
				
				// --- Adding the field content to the returned object
				newField.appendChild(fieldCont);
				
				break;
			
			// --- Drop-down list (select)
			case 'select':
				// --- Flag to make faster further comparisons
				isSelect = 1;
				
			// --- Checkbox (multiple choice list of elements)
			case 'checkbox':
			// --- Radio (list of elements with one choice)
			case 'radio':
				
				// --- Array with the results of the query to the DB
				var optResults;
				
				// --- Reference to the field object (this "disappears" when making the POST)
				var presentField = this;
				
				// --- Query to the database: specify table with the correspondance betweeb key and values, the name of the keys row, the name of
				// --- the values row and the name of the images row.
				$.post(pathPHP + "getOptions.php", {optData: [this.dbAuxTable, this.dbPrmKey, this.id, this.dbImg]}, function(queryReturn) {
					
					optResults = JSON.parse(queryReturn);
					
					// --- If there is any result
					if (optResults) {
						
						// --- If there a "select", we create the element and make the basic setup
						if (presentField.type == 'select') {
							var fieldCont = document.createElement("select");
							fieldCont.id = presentField.id;
							fieldCont.name = presentField.id;
						} else {
							var fieldCont = document.createElement("div");
							fieldCont.id = "options_" + presentField.id;
							fieldCont.name = "options_" + presentField.id;
						}
						
						// --- Adding the field content to the returned object
						newField.appendChild(fieldCont);
						
						// ---- Displaying the result
						for (var optionDB of optResults) {
							
							// --- Differentiating select and input/checkbox
							if (isSelect) {
								var option = document.createElement("option");
								option.innerHTML = optionDB.val;					// --- Visible text for the user
							} else {
								var option = document.createElement("input");
								option.type = presentField.type;
							}
							
							// --- Creating each one of the options
							option.id = presentField.id;							// --- ID and name are the same for all of the elements of the list
							option.name = presentField.id;
							option.value = optionDB.id;								// --- Primary key
							
							// --- Adding the option to the field
							fieldCont.appendChild(option);
							
							// --- In checkbox and radio, a label has to be added
							if (!isSelect) {
								
								// --- If there is any images
								if (optionDB.img) {
									var imgToShow = document.createElement("img");
									imgToShow.src = optionDB.img;
									imgToShow.alt = optionDB.val;
									imgToShow.title = optionDB.val;
									
									// --- Image config options
									if (this.optionsImg) {
										for (let nopt in this.optionsImg) {
											imgToShow.setAttribute(nopt, this.optionsImg[nopt]);
										}
									}
									
									fieldCont.appendChild(imgToShow);
									
								}
								
								// --- Text of each option
								let optLabel = document.createElement("label");
								optLabel.setAttribute('for', presentField.id);
								optLabel.innerHTML = optionDB.val;
								fieldCont.appendChild(optLabel);
								
								// --- Adding a breakline betweeb options
								let brk = document.createElement("br")
								fieldCont.appendChild(brk);
							}
							
						}
						
						// --- Extra options
						if (this.options) {
							for (let nopt in this.options) {
								fieldCont.setAttribute(nopt, this.options[nopt]);
							}
						}
						
					} else {
						// --- Error message
						presentField.queryError();
					}
				}); 
				
				break;
			
			// --- Input type: for text, colors, dates, emails, passwords,...;
			default:
			
				// --- Creating the element and basic setup
				var fieldCont = document.createElement("input");
				fieldCont.type = this.type;
				fieldCont.id = this.id;
				fieldCont.name = this.id;
				
				// --- Default text
				if (this.defaultTxt) {
					fieldCont.value = this.defaultTxt;
				}				
				
				// --- Extra options
				if (this.options) {
					for (var nopt in this.options) {
						fieldCont.setAttribute(nopt, this.options[nopt]);
					}
				}
				
				// --- Adding the field content to the returned object
				newField.appendChild(fieldCont);
				
				break;
		}
		
		// --- Returning de field to be appended and displayed
		return newField;
	}
	
	// --- Error function, when no data is found in queries
	queryError () {
		
		// --- Returned object: label + content
		var newField = document.createElement("div");
		newField.id = 'div_' + this.id;
		
		var fieldCont = document.createElement("p");
		fieldCont.id = this.id;
		fieldCont.name = this.id;
		fieldCont.innerHTML = 'No ' + this.label + ' found! :-(' + "\n";
				
		// --- Adding the field content to the returned object
		newField.appendChild(fieldCont);
		
	}
}

 /* ---------------------------------------------------------------------------
 Class button
 Manage all related to the HTML <button> tag (text, class, form ID...)
------------------------------------------------------------------------------ */
class button {
	
	// --- Constructor
	constructor (dataField) {
		this.id = dataField.id;								// --- ID and name of the button
		this.defaultTxt = dataField.defaultTxt;				// --- Text shown in the button
		this.options = dataField.options;					// --- Array with the config options in key-value format: styles, required, default values...
	}
	
	// --- Print form in HTML code
	makeHTML () {
		
		// --- Creating the button and basic setup
		var but = document.createElement("input");
		but.id = this.id;
		but.name = this.id;
		but.type = 'submit';
		
		// --- Default text
		if (this.defaultTxt) {
			but.value = this.defaultTxt;
		} else {
			but.value = 'Send';
		}				
		
		// --- Extra options
		if (this.options) {
			for (var nopt in this.options) {
				but.setAttribute(nopt, this.options[nopt]);
			}
		}
		
		// --- Returning the button to be displayed
		return but;
		
	}

}