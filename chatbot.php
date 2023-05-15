<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['message'])) {
    $message = $_POST['message'];
    // Process the message and generate a response
    $response = getBotResponse($message);

    // Send the response back to the client
    echo $response;
  } else {
    echo 'Bot: No message received.';
  }
} else {
  echo 'Invalid request.';
}
function getBotResponse($message) {
    // Convert user input to lowercase for easier comparison
    $message = strtolower($message);
  
    // Generate bot response based on user input
    if (strpos($message, 'courses') !== false || strpos($message, 'subjects') !== false) {
      $response = "Bot: We offer a wide range of courses covering various subjects such as mathematics, science, literature, history, languages, and more. Our course catalog provides detailed information on the subjects and topics covered in each course.";
    } elseif (strpos($message, 'curriculum') !== false) {
      $response = "Bot: Certainly! Our courses follow a comprehensive curriculum that includes lectures, interactive discussions, hands-on activities, and assessments. The curriculum is designed to ensure a thorough understanding of the subject matter and to enhance critical thinking and problem-solving skills.";
    } elseif (strpos($message, 'prerequisites') !== false) {
      $response = "Bot: The prerequisites for each course may vary. Some courses may have specific prerequisites, such as prior knowledge of a certain subject or completion of a prerequisite course. However, many of our courses are designed to accommodate students with various backgrounds and prior knowledge, making them accessible to a wide range of learners.";
    } elseif (strpos($message, 'duration') !== false || strpos($message, 'schedule') !== false) {
      $response = "Bot: The duration of each course can vary. Some courses may span a few weeks, while others may extend over a semester or an academic year. The schedule of the course will be provided at the time of enrollment, outlining the specific dates and times of lectures, assignments, and assessments.";
    } elseif (strpos($message, 'flexible') !== false || strpos($message, 'part-time') !== false) {
      $response = "Bot: Yes, we understand the needs of working students, and we offer flexible course options to accommodate their schedules. We provide part-time courses, evening classes, and online courses that allow students to learn at their own pace and balance their work commitments.";
    } elseif (strpos($message, 'instructors') !== false || strpos($message, 'qualifications') !== false) {
      $response = "Bot: Our instructors are highly qualified professionals with extensive experience in their respective fields. They possess advanced degrees and relevant expertise, ensuring that students receive high-quality instruction and guidance throughout the courses.";
    } elseif (strpos($message, 'structure') !== false || strpos($message, 'lecture-based') !== false || strpos($message, 'interactive') !== false) {
      $response = "Bot: Our courses are designed to be engaging and interactive. While lectures are an essential component of the learning process, we also emphasize active participation, group discussions, case studies, practical exercises, and hands-on projects. This combination of teaching methods ensures a well-rounded learning experience.";
    } elseif (strpos($message, 'assessments') !== false || strpos($message, 'exams') !== false) {
      $response = "Bot: Yes, assessments and exams are an integral part of the learning process. They are designed to evaluate students' understanding of the course material. The assessments may include quizzes, assignments, projects, presentations, and exams. The specific format and timing of assessments will be communicated to students at the beginning of the course.";
    } else {
      $response = "Bot: I'm sorry, I didn't understand your question. Could you please rephrase or ask something else?";
    }
  
    // Return the bot response
    return $response;
  }
  