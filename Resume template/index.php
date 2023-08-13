<!DOCTYPE html>
<html>
<head>
    <title>Resume Template</title>
    <link href="styles.css" type="text/css" rel="stylesheet"></link>
    
</head>
<body>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"):
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $skill1 = $_POST["skill1"];
        $skill2 = $_POST["skill2"];
        $linkedin = $_POST["linkedin"];
        $objective = $_POST["objective"];
        $image = $_POST["hiddenImageDataURL"];
        $education1 = $_POST["education1"];
        $education2 = $_POST["education2"];
        $education3 = $_POST["education3"];
        $project_title = $_POST["project_title"];

        $project_desc = $_POST["project_desc"];

        $experience = $_POST["experience"];
        $jobtitle = $_POST["job_title"];
        $jobdesc = $_POST["jobdesc"];
        $jsonProjects1 = $_POST["hiddenprojects1"];
        $jsonProjects2 = $_POST["hiddenprojects2"];


// Convert the JSON string to an array
    $projects1 = json_decode($jsonProjects1);
    $projects2 = json_decode($jsonProjects2);
    echo $jsonProjects2;
        ?>
            
            <div class="container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="actualform">
                        <div class="left">

                        <label for="profilePicture">Profile Picture:</label>
                        <img id="imagePreview" src="<?php echo empty($image) ? 'https://th.bing.com/th/id/OIP.tvaMwK3QuFxhTYg4PSNNVAHaHa?pid=ImgDet&rs=1' : $image; ?>" alt="Profile Picture" style="max-width: 100%; cursor: pointer; pointer-events: none;">
                        <input id="imageInput" name="image" type="file" accept="image/*" style="display: none;" onchange="updateImage(event); readonly">
                        <input type="hidden" id="hiddenImageDataURL" name="hiddenImageDataURL" readonly>
                            <label for="email">Personal Information:</label>
                            <div class="input-container">
                                <input class="readonly-noborder" id="checking" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" readonly>
                            </div>
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="phone" placeholder="Contact No" value="<?php echo $phone; ?>" readonly>
                            </div>
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="linkedin" placeholder="LinkedIn" value="<?php echo $linkedin; ?>"readonly>
                            </div>


                            <label for="name">Skills:</label>
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="skill1" placeholder="Skill1" value="<?php echo $skill1; ?>"readonly>
                            </div>                        
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="skill2" placeholder="Skill2" value="<?php echo $skill2; ?>"readonly>
                            </div>
                        </div>
                        <div class="right">
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"readonly>
                            </div>
                            <div class="input-container">
                                <input class="readonly-noborder" id="obj" type="text" name="objective" placeholder="Objective" value="<?php echo $objective; ?>"readonly>
                            </div>

                            <div><label for="name">Education:</label></div>
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="education1" placeholder="B.Tech" value="<?php echo $education1; ?>"readonly>
                            </div>
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="education" placeholder="Inter" value="<?php echo $education2; ?>" readonly>
                            </div>
                            <div class="input-container">
                                <input class="readonly-noborder" type="text" name="education" placeholder="School" value="<?php echo $education3; ?>" readonly>
                            </div>
                            <div>
                            <label for="name">Experience: <?php echo $experience?> </label>
                            
                            </div>
                            <div class="input-container">
                            <input class="readonly-noborder" type="text" name="job_title" placeholder="Job Title" value="<?php echo $jobtitle; ?>" readonly>
                            <textarea class="readonly-noborder desc" name="job_desc" placeholder="Job Description" style="border:none;"  readonly><?php echo $jobdesc; ?></textarea>
                            </div>
                            <div><label for="name">Projects:</label></div>
                            <div class="add-project-button-container">
                            </div>
                            <div class="input-container projects">
                            <input class="readonly-noborder"type="text" name="project_title" placeholder="Project Title" value="<?php echo $project_title; ?>"readonly>
                            <textarea class="readonly-noborder desc" name="project_desc" placeholder="Project Description" style="border:none;"  readonly><?php echo $project_desc; ?></textarea>
                            </div>
                            <div class="project-inputs-container">
                            <?php if (!empty($projects1) && !empty($projects2)) { ?>
                                <?php for ($i = 0; $i < count($projects1); $i++) { ?>
                                    <div class="input-container projects">
                                        <input class="readonly-noborder" type="text" name="project_title" placeholder="Project Title" value="<?php echo htmlspecialchars($projects1[$i]); ?>" readonly>
                                        <textarea class="readonly-noborder desc" name="project_desc" placeholder="Project Description" style="border:none;"  readonly><?php echo $projects2[$i]; ?></textarea>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            </div>
                            

                            
                        </div>
                    </div>

                    
                </form>
            </div>
            
            </div>
<?php elseif($_SERVER["REQUEST_METHOD"] != "POST"):  ?>
    <div>
    <h1>Resume Template</h1>
    
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="actualform">
                    <div class="left">

                    <label for="profilePicture">Profile Picture:</label>
                    <img id="imagePreview" src="https://th.bing.com/th/id/OIP.tvaMwK3QuFxhTYg4PSNNVAHaHa?pid=ImgDet&rs=1" alt="Profile Picture" style="max-width: 100%; cursor: pointer;">
                    <input id="imageInput" name="image" type="file" accept="image/*" style="display: none;" onchange="updateImage(event);">
                    <input type="hidden" id="hiddenImageDataURL" name="hiddenImageDataURL">
                        <label for="email">Personal Information:</label>
                        <div class="input-container">
                            <input id="checking" type="email" name="email" placeholder="Email" readonly>
                            <button type="button" class="toggleButton toggleButtonleft">Edit</button>
                        </div>
                        <div class="input-container">
                            <input type="text" name="phone" placeholder="Contact No" readonly>
                            <button type="button" class="toggleButton toggleButtonleft">Edit</button>
                        </div>
                        <div class="input-container">
                            <input type="text" name="linkedin" placeholder="LinkedIn" readonly>
                            <button type="button" class="toggleButton toggleButtonleft">Edit</button>
                        </div>


                        <label for="name">Skills:</label>
                        <div class="input-container">
                            <input type="text" name="skill1" placeholder="Skill1" readonly>
                            <button type="button" class="toggleButton toggleButtonleft" >Edit</button>
                        </div>                        
                        <div class="input-container">
                            <input type="text" name="skill2" placeholder="Skill2" readonly>
                            <button id="change" type="button" class="toggleButton toggleButtonleft" >Edit</button>
                        </div>
                    </div>
                    <div class="right">
                        <div class="input-container">
                            <input type="text" name="name" placeholder="Name" readonly>
                            <button type="button" class="toggleButton toggleButtonright" >Edit</button>
                        </div>
                        <div class="input-container">
                            <input id="obj" type="text" name="objective" placeholder="Objective" readonly>
                            <button type="button" class="toggleButton toggleButtonright" style="right:42%;">Edit</button>
                        </div>

                        <div><label for="name">Education:</label></div>
                        <div class="input-container">
                            <input type="text" name="education1" placeholder="B.Tech"readonly>
                            <button type="button" class="toggleButton toggleButtonright" >Edit</button>
                        </div>
                        <div class="input-container">
                            <input type="text" name="education2" placeholder="Inter"readonly>
                            <button type="button" class="toggleButton toggleButtonright" >Edit</button>
                        </div>
                        <div class="input-container">
                            <input type="text" name="education3" placeholder="School"readonly>
                            <button type="button" class="toggleButton toggleButtonright" >Edit</button>
                        </div>
                        <div>
                        <label for="name">Experience:</label>
                        <select style = "background-color:#dde7e3"name="experience" id="experience">
                            <option value="Internship">Internship</option>
                            <option value="FTE">FTE</option>
                            <option value="Contractual">Contractual</option>
                        </select>
                        </div>
                        <div class="input-container extra">
                        <input  type="text" name="job_title" placeholder="Job Title" readonly>
                        <button type="button" class="toggleButton toggleButtonright toggleButtonright2" >Edit</button>
                        </div>
                        <div class="input-container extra">
                        <textarea class="desc" name="jobdesc" placeholder="Job Description" readonly></textarea>
                        <button type="button" class="toggleButton toggleButtonright toggleButtonright2 toggleButtonright2desc" >Edit</button>
                        </div>
                        <div><label for="name">Projects:</label></div>
                        <div class="add-project-button-container">
                        <button type="button" class="addProjectButton" onclick="addProject()">Add Project</button>
                        </div>
                        <div class="input-container projects extra">
                        <input type="text" name="project_title" placeholder="Project Title" readonly>
                        <button type="button" class="toggleButton toggleButtonright toggleButtonright2" >Edit</button>
                        </div>
                        <div class="input-container projects extra">
                        <textarea class="desc" name="project_desc" placeholder="Project Description" readonly></textarea>
                        <button type="button" class="toggleButton toggleButtonright toggleButtonright2 toggleButtonright2desc" >Edit</button>
                        </div>
                        <input type="hidden" id="hiddenprojects1" name="hiddenprojects1">
                        <input type="hidden" id="hiddenprojects2" name="hiddenprojects2">
                        <div class="project-inputs-container"></div>
                        

                        
                    </div>
                </div>

                <div>
                    <input type="submit" value="Generate Resume">
                </div>
            </form>
        </div>
        
    </div>
    
    <?php endif; ?>
    <script>
        var selectedImageData = "";

        function updateImage(event) {
    var imagePreview = document.getElementById('imagePreview');
    var imageInput = document.getElementById('imageInput');
    
    var selectedFile = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function () {
        imagePreview.src = reader.result;
        
        selectedImageData = reader.result;
        document.getElementById('hiddenImageDataURL').value = selectedImageData;
    };
    reader.readAsDataURL(selectedFile);

    
    
}
document.getElementById('imagePreview').addEventListener('click', function() {
    document.getElementById('imageInput').click();
});




var projectTitleValues = [];         
var projectDescriptionValues = []; 
function addProject(){
    
    var projectInputsContainer = document.querySelector('.project-inputs-container');

var projectContainer1 = document.createElement('div');
projectContainer1.className = 'input-container projects extra';

var projectTitleInput1 = document.createElement('input');
projectTitleInput1.type = 'text';
projectTitleInput1.name = 'education';
projectTitleInput1.placeholder = 'Project Title';
projectTitleInput1.readOnly = true;



var toggleButton1 = document.createElement('button');
toggleButton1.type = 'button';
toggleButton1.className = 'toggleButton toggleButtonright toggleButtonright2';
toggleButton1.textContent = 'Edit';

projectContainer1.appendChild(projectTitleInput1);
projectContainer1.appendChild(toggleButton1);

var projectContainer2 = document.createElement('div');
projectContainer2.className = 'input-container projects extra';


var projectDescriptionInput2 = document.createElement('textarea');
projectDescriptionInput2.name = 'education';
projectDescriptionInput2.placeholder = 'Project Description';
projectDescriptionInput2.readOnly = true;
projectDescriptionInput2.classList.add('desc');

var toggleButton2 = document.createElement('button');
toggleButton2.type = 'button';
toggleButton2.className = 'toggleButton toggleButtonright toggleButtonright2 toggleButtonright2desc';
toggleButton2.textContent = 'Edit';

projectContainer2.appendChild(projectDescriptionInput2);
projectContainer2.appendChild(toggleButton2);

projectInputsContainer.appendChild(projectContainer1);
projectInputsContainer.appendChild(projectContainer2);

toggleButton1.addEventListener('click', function() {
    if (projectTitleInput1.hasAttribute('readonly')) {
        projectTitleInput1.removeAttribute('readonly');
        toggleButton1.textContent = 'Save';
    } else {
        projectTitleInput1.setAttribute('readonly', true);
        toggleButton1.textContent = 'Edit';
        projectTitleValues.push(projectTitleInput1.value);
        var jsonProjectTitleValues = JSON.stringify(projectTitleValues);
        document.getElementById('hiddenprojects1').value = jsonProjectTitleValues;
    }
});

toggleButton2.addEventListener('click', function() {
    if (projectDescriptionInput2.hasAttribute('readonly')) {
        projectDescriptionInput2.removeAttribute('readonly');
        toggleButton2.textContent = 'Save';
    } else {
        projectDescriptionInput2.setAttribute('readonly', true);
        toggleButton2.textContent = 'Edit';
        projectDescriptionValues.push(projectDescriptionInput2.value);
        var jsonProjectDescValues = JSON.stringify(projectDescriptionValues);
        document.getElementById('hiddenprojects2').value = jsonProjectDescValues;
    }
});

}







        

document.addEventListener('DOMContentLoaded', function() {
    var editButtons = document.querySelectorAll('.toggleButton');
    
    editButtons.forEach(function(button) {
        var input = button.previousElementSibling;
        
        // Initial state setup
        if (input.hasAttribute('readonly')) {
            button.textContent = 'Edit';
        } else {
            button.textContent = 'Save';
        }
        
        button.addEventListener('click', function() {
            if (input.hasAttribute('readonly')) {
                input.removeAttribute('readonly');
                button.textContent = 'Save';
            } else {
                input.setAttribute('readonly', true);
                button.textContent = 'Edit';
            }
        });
    });
});
</script>

</body>
