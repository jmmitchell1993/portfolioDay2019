function callModal(id) {
    $.ajax({
        url: "public/apis/student.php?id=" + id,
        dataType: 'json',
        type: 'GET',
        success: function(res) {
            if(res.error) {
                console.log('oof');
            }
            
            buildModal(res);
        }
    });
}

function getStudents(query) {
    console.log('hi');
    $("#students").html("");
    $.ajax({
        url: "public/apis/student.php?program=" + query,
        dataType: 'json',
        type: 'GET',
        success: function(res) {
            if(res.error) {
                $("#students").append(res.error);
                return;
            }
            
            for(var object in res) {
                // if image none default path img
                let image =  (res[object].student_image_link != "") ? res[object].student_image_link : "default.jpg";
                let secondaryProgram = (res[object].student_program != res[object].student_secondary_program) ? res[object].student_secondary_program : '';
                let html = `
                <div onclick="javascript:callModal(${res[object].student_id})">
                    <div>
                        <img src="public/assets/images/${image}" width="140px" height="140px"/>
                        <p><strong>${res[object].student_first_name} ${res[object].student_last_name}</strong></p>
                    </div>
                </div>
                `;
                $("#students").append(html);
            }
        }
    });
}