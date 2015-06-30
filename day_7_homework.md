# Day 7 Homework

After presenting your `class Student` to the school board, they are satisfied with your work so far, but they want a more complete system to manage all the `Student` objects.

To solve this problem, you decide to write `class School`. A `School` maintains an array of `Student`s. 

A `School` should have the following functions:
	
- `function addStudent($student)` adds a student to the `School`
- `function listStudents()` echoes a list of all the students in the `School`
- `function getStudent($name)` returns the `Student` previously added to the `School` with the corresponding `$name`

Here is some example code showing how `class Student` will be used, to help your implementation:

	$school = new School();
	
	// add the Students from last time
	$school->addStudent(new Student("Alice", 3.5, 15));
	$school->addStudent(new Student("Bob", 3.0, 10));

	// echoes 'Alice' and 'Bob'	
	$school->listStudents();

	// returns the student we added earlier
	$alice = $school->getStudent("Alice");
	
	echo $alice->enrollment_status(); // from last time