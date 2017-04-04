<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/studentReg.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="css/icon.css">
  <title>Registration Interncamp | Ecell</title>

</head>

  <body>

  <form action="regSuccess2.php" id="studentForm" name="studentForm" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
      <div class="col s12">
          <div class="col s12 m4 l2">
               <div class="card-panel hoverable">
                <h4>KIIT Entrepreneurship Cell Internship Camp 2016 Registrations</h4>
                <div class="row">
                          <div class="input-field col s8">
                               <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate" name="name">
                                <label for="icon_prefix">Your Name</label>
                          </div>
                        </div>  
                        <div class="row">
                          <div class="input-field col s8">
                                <i class="material-icons prefix">business</i>
                                <input id="business" type="tel" class="validate" name="college">
                                <label for="business">college</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s8">
                               <i class="material-icons prefix">note_add</i>
                                <input id="note_add" type="text" class="validate" name="study">
                                <label for="note_add">Course Of Study</label>
                          </div>
                        </div>
                         <div class="row">
                          <div class="input-field col s8">
                               <i class="material-icons prefix">library_books</i>
                                <input id="library_books" type="text" class="validate" name="branch">
                                <label for="library_books">Branch</label>
                          </div>
                        </div> 
                        <div class="row">
                          <div class="input-field col s8">
                              <select name="year" id="year">
                                 <option value="" disabled selected>Choose your option</option>
                                 <option value="1">1<sup>st</sup>(If you have received mail from E-Cell)</option>
                                 <option value="2">2<sup>nd</sup></option>
                                 <option value="3">3<sup>rd</sup></option>
                                 <option value="4">4<sup>th</sup></option>
                              </select>
                              <label>Year of Study</label>
                           </div>
                       </div>
                           <div class="row">
                             <div class="input-field col s8">
                               <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate" name="phone">
                                <label for="icon_telephone">Where can we call you?</label>
                             </div>
                           </div>
                           <div class="row">
                              <div class="input-field col s8">
                               <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate" name="mail">
                                <label for="email">And if we wish to drop you a mail?</label>
                             </div>
                         </div>
                         <div class="row">
                              <div class="input-field col s8">
                                <label>Field in which you wish to do your internship?</label></br>
                                <p>
                                  <input type="checkbox" id="field1" name="field[]" value="Coder/Developer" />
                                  <label for="field1">Coder/Developer</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field2" name="field[]" value="Graphic Designer/Videographer/Video editor"/>
                                  <label for="field2">Graphic Designer/Videographer/Video editor</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field3" name="field[]" value="Marketing/Digital Marketing/Brand Management" />
                                  <label for="field3">Marketing/Digital Marketing/Brand Management</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field4" name="field[]" value="Sales/Supply Chain Management" />
                                  <label for="field4">Sales/Supply Chain Management</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field5" name="field[]" value="Content Creation/Blogging" />
                                  <label for="field5">Content Creation/Blogging</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field6" name="field[]" value="Operations/Front-end or Back-end Logistics" />
                                  <label for="field6">Operations/Front-end or Back-end Logistics</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field7" name="field[]" value="Human Resource Management" />
                                  <label for="field7">Human Resource Management</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field8" name="field[]" value="Technical related to Electronics/Electrical" />
                                  <label for="field8">Technical related to Electronics/Electrical</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field9" name="field[]" value="Technical related to Mechanical/Automobile" />
                                  <label for="field9">Technical related to Mechanical/Automobile</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field10" name="field[]" value="Technical related to Hardware" />
                                  <label for="field10">Technical related to Hardware</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="field11" name="field[]" value="Technical related to Civil" />
                                  <label for="field11">Technical related to Civil</label>
                                </p>
                             </div>
                         </div>
                         <div class="row">
                              <div class="input-field col s8">
                                <label>Preferred location of your internship.</label></br>
                                <p>
                                  <input type="radio" id="location1" name="location" value="Bhubaneswar" />
                                  <label for="location1">Bhubaneswar</label>
                                </p>
                                <p>
                                  <input type="radio" id="location2" name="location" value="Bangalore"/>
                                  <label for="location2">Bangalore</label>
                                </p>
                                <p>
                                  <input type="radio" id="location3" name="location" value="Kolkata" />
                                  <label for="location3">Kolkata</label>
                                </p>
                                <p>
                                  <input type="radio" id="location4" name="location" value="Hyderabad" />
                                  <label for="location4">Hyderabad</label>
                                </p>
                                <p>
                                  <input type="radio" id="location5" name="location" value="Delhi/NCR" />
                                  <label for="location5">Delhi/NCR</label>
                                </p>
                                <p>
                                  <input type="radio" id="location6" name="location" value="Mumbai" />
                                  <label for="location6">Mumbai</label>
                                </p>
                              </div> 
                          </div> 
                          <div class="row">
                              <div class="input-field col s8">
                                <label>Duration for which you are available for internship.</label></br>
                                <p>
                                  <input type="radio" id="duration1" name="duration" value="1month" />
                                  <label for="duration1">1 month</label>
                                </p>
                                <p>
                                  <input type="radio" id="duration2" name="duration" value="2months"/>
                                  <label for="duration2">2 months</label>
                                </p>
                                <p>
                                  <input type="radio" id="duration3" name="duration" value="3months" />
                                  <label for="duration3">3 months</label>
                                </p>
                                 <p>
                                  <input type="radio" id="duration4" name="duration" value="4-6months" />
                                  <label for="duration4">4-6 months</label>
                                </p>
                                <br>
                                <p>
                                  <input type="radio" id="duration5" name="duration" value="">
                                  <label for="duration5">Other</label><br>
                                  <input type="text" id="durationlength" class="input-field col s4" placeholder="Enter details if any" disabled="disabled">
                                </p>
                            </div>
                          </div>
                          <div class="row">
                              <div class="input-field col s8">
                                <label>Is Stipend a necessary factor for you?</label></br>
                                <p>
                                  <input type="radio" id="stip1" name="stip" value="Yes" />
                                  <label for="stip1">Yes</label>
                                </p>
                                <p>
                                  <input type="radio" id="stip2" name="stip" value="No"/>
                                  <label for="stip2">No</label>
                                </p>
                                <p>
                                  <input type="radio" id="stip3" name="stip" value="Depends on the Opportunity" />
                                  <label for="stip3">Depends on the Opportunity</label>
                                </p>
                              </div>
                            </div>
                             <div class="row">
                              <div class="input-field col s8">
                                <label>How did you get to know about our Internship Camp?</label></br>
                                <p>
                                  <input type="radio" id="info1" name="info" value="Facebook" />
                                  <label for="info1">Facebook</label>
                                </p>
                                <p>
                                  <input type="radio" id="info2" name="info" value="Posters"/>
                                  <label for="info2">Posters</label>
                                </p>
                                <p>
                                  <input type="radio" id="info3" name="info" value="Peers" />
                                  <label for="info3">Peers</label></br>
                                </p>
                              </div>
                            </div></br>
                            <label><h6>Upload your updated Resume</h6></label>
                             <div class="file-field input-field">
                              <div class="btn">
                                <span>File</span>
                                <input type="file" name="file">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your resume within 3 days from registration date">
                              </div>
                            </div>
                              <div class="row">
                                 <div class="input-field col s12">
                                  <i class="material-icons prefix">mode_edit</i>
                                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                                  <label for="textarea1">We would love to have your suggestions to make this Internship camp better.</label>
                                 </div>
                              </div>
                              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                              </button>
                     </div>
                </div>
            </div>
         </div>
      </div>

</form>
<!-- // <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/studentReg.js"></script>
 </body>
 </html>