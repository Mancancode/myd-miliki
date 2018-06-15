/* 
### Copyright 2017 Snyder Group Inc.
### MIT License
### Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions: 
### The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
### THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

function submit_form() {    
    // Check Fields
    var complete = true;
    var error_color = '#FFD9D9';
    var fields = ['data_form','surname','mid_name','last_name','sex','marital_status','dob','pob','age','occupation','id_type','nationality','state','lga','home_town','phone','email','religion','tr_centre','contact_address','guardian_name','guardian_address','guardian_rel','guardian_phone','mum_maiden','city','school_1','qualification_1','course_1','graduation_year1','school_2','qualification_2','course_2','graduation_year2','other_qualifications','skills_acquired','intended_skills','org_type','org_town','org_lga','male_count','female_count','total_staff_count','any_other_branch','other_branches','org_obj','religious','meeting_day','meeting_venue','meeting_time','meeting_duration','sec_address','org_phone','org_activities','patron_name','patron_address','patron_phone','period1','period2','period3','period4','any_formal_skills','courses'];
    var row = '';
    var i;
    for(i=0; i < fields.length; ++i) {
        var field = fields[i];
        $('#'+field).css('backgroundColor', 'inherit');
        var value = $('#'+field).val();       
        // Validate Field
        if(!value) {
            if(field != 'message') {
                $('#'+field).css('backgroundColor', error_color);
                var complete = false;
            }
            } else {            
            // Sheet Data
            row += '"'+value+'",';
        }
    }
   
    // Submission
    if(complete) {      
        // Clean Row
        row = row.slice(0, -1);     
        // Config
        var gs_sid = '1Q5RNMQB4mRc5yAfgq8Q_-9PBmDYgEi5_Wox8mht1iZg'; // Enter your Google Sheet ID here
        var gs_clid = '989042709181-5v6u8hr3ut4829u4v2uup3vb95k6tpi0.apps.googleusercontent.com'; // Enter your API Client ID here
        var gs_clis = 'Bvx6sOpdPMMVuqTplEFcswBK'; // Enter your API Client Secret here
        var gs_rtok = '1/dccSmAF3PYn2BJCWCRmlq4GB7Oi49I4N3VMgPqZleR4'; // Enter your OAuth Refresh Token here
        var gs_atok = false;
        var gs_url = 'https://sheets.googleapis.com/v4/spreadsheets/'+gs_sid+'/values/A1:append?includeValuesInResponse=false&insertDataOption=INSERT_ROWS&responseDateTimeRenderOption=SERIAL_NUMBER&responseValueRenderOption=FORMATTED_VALUE&valueInputOption=USER_ENTERED';
        var gs_body = '{"majorDimension":"ROWS", "values":[['+row+']]}';        
         // HTTP Request Token Refresh
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'https://www.googleapis.com/oauth2/v4/token?client_id='+gs_clid+'&client_secret='+gs_clis+'&refresh_token='+gs_rtok+'&grant_type=refresh_token');
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {            
            var response = JSON.parse(xhr.responseText);
            var gs_atok = response.access_token;            
            // HTTP Request Append Data
            if(gs_atok) {
                var xxhr = new XMLHttpRequest();
                xxhr.open('POST', gs_url);
                xxhr.setRequestHeader('Content-length', gs_body.length);
                xxhr.setRequestHeader('Content-type', 'application/json');
                xxhr.setRequestHeader('Authorization', 'OAuth ' + gs_atok );
                xxhr.onload = function() {
                    if(xxhr.status == 200) {
                        // Success
                        $('#message').html('<p>Row Added to Sheet | <a href="http://snydergroupinc.com/tutorials/tutorial-google-sheets-api.php">Add Another &raquo;</a></p><p>Response:<br/>'+xxhr.responseText+'</p>');
                        } else {
                        // Fail
                        $('#message').html('<p>Row Not Added</p><p>Response:<br/>'+xxhr.responseText+'</p>');
                    }
                };
                xxhr.send(gs_body);
            }            
        };
        xhr.send();
    }
}


