function buildModal(res) {
    $("#modals").html("");
    for(var object in res) {
        // get variables, set them depending on null
        let image =  (res[object].student_image_link != "") ? res[object].student_image_link : "default.jpg";
        let secondaryProgram = (res[object].student_program != res[object].student_secondary_program) ? res[object].student_secondary_program : '';
        secondaryProgram = (secondaryProgram) ? secondaryProgram : '';
        let hometown = (res[object].student_hometown) ? res[object].student_hometown : '';
        let goals = (res[object].student_career_goals) ? res[object].student_career_goals : '';
        let hobbies = (res[object].student_hobbies) ? res[object].student_hobbies : '';
        let website = (res[object].student_website_address) ? res[object].student_website_address : '';
        let linkedIn = (res[object].student_linkedin_profile) ? res[object].student_linkedin_profile : '';
        let secondaryWebsite = (res[object].student_secondary_website_address) ? res[object].student_secondary_website_address : '';

        // build modal
        let html = `
              <div id="${res[object].student_id}" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-6 modal-header">
                                    <img src="public/assets/images/${image}" width="140px" height="140px"/>
                                </div>
                                <div class="col-6 modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h5 class="modal-title">${res[object].student_first_name} ${res[object].student_last_name}</h5>
                                    <p>${res[object].student_program}</p>
                                    <p>${secondaryProgram}</p>
                                    <p><strong>Web Links</strong></p>
                                    <div style="display:flex; flex-direction: column;">`

                                    if(website) {
                                        html += `<button onclick="javascript:openWindow('${res[object].student_website_address}')">My website</button>`
                                    }
                                    if(linkedIn) {
                                        html += `<button onclick="javascript:openWindow('${res[object].student_linkedin_profile}')">My linkedin</button>`
                                    }
                                    if(secondaryWebsite) {
                                        html += `<button onclick="javascript:openWindow('${res[object].student_secondary_website_address}')">My github</button>`
                                    }

            html += `
                                    </div>
                                    <p><strong>Hometown</strong></p>
                                    <p>${hometown}</p>
                                    <p><strong>Career Goals</strong></p>
                                    <p>${goals}</p>
                                    <p><strong>Hobbies</strong></p>
                                    <p>${hobbies}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        $("#modals").append(html);
        $(`#${res[object].student_id}`).modal('show');
    }
}