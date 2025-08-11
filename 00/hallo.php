<?php
    $name =" nada ahmed ";
    $id = "202301638";
    $grade = 85;
    $faculty = "Engineering";
    // 1.Admission based on grade
    if ($grade >= 90) {
        echo "$name is accepted with scholarship\n";
    } elseif ($grade >= 70){
        echo "$name is accepted with scholarship\n";
    } else { 
        echo "$name is not accepted\n";
    }
    // 2.Assign building based on faculty 
    switch ($faculty) {
        case "Engineering":
            echo "Assigned to Engineering Building\n";
            break;
            case "Medicine":
                echo "Assigned to Medicine Building\n";
                break;
                default:
                echo "Assigned to General Studies Building\n";
    }
    // 3.while _ student waits in a queue to get student ID
    $position_in_queue = 1; 
    $my_turn = 4;
    while ($position_in_queue < $my_turn) { 
        echo "position $position_in_queue:still waiting in line ...\n";
        $position_in_queue++;
    }
    echo "position $position_in_queue: It's Your turn. Getting student ID.\n";
    // 4.do ...while _ Student submits assignment until it's uploaded successfully
    $upload_attempts = 0;
    $uploaded = false;
    do {
        ++$upload_attempts;
        echo "Uploading assignment (Attempt $upload_attempts)...\n";
        //Simulate success on 2nd attempt
        if ($upload_attempts == 2) { 
            $uploaded = true;
            echo "Assignment uploaded successfully.\n";
        } else {
            echo "Upload failed. Trying again...\n";
        }
    } while (!$uploaded);
    // 5. For _ register for 3 courses
    for ($course = 1; $course <=3; $course++) {
        echo "Registered for Course $course\n";
    }
   