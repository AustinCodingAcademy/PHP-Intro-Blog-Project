# Day 8 Homework

`<table>` is a versatile HTML tag used to display information in a grid:

	<table border="1">              <!-- start a table -->
	  <tr>                          <!-- first row -->
	    <th>Todo Item</th>          <!-- header -->
	    <th>Date Added</th>
	  </tr>                         <!-- end first row -->
	  <tr>                          <!-- second row -->
	    <td>Make coffee</td>
	    <td>26 June 2015</td>
	  </tr>                         <!-- end second row -->
	  <tr>                          <!-- third row -->
	    <td>Write code</td>
	    <td>30 June 2015</td>
	  </tr>                         <!-- end third row -->
	</table>                        <!-- end the table -->

Output:
<table border="1">              <!-- start a table -->
  <tr>                          <!-- first row -->
    <th>Todo Item</th>          <!-- header -->
    <th>Date Added</th>
  </tr>                         <!-- end first row -->
  <tr>                          <!-- second row -->
    <td>Make coffee</td>
    <td>26 June 2015</td>
  </tr>                         <!-- end second row -->
  <tr>                          <!-- third row -->
    <td>Write code</td>
    <td>30 June 2015</td>
  </tr>                         <!-- end third row -->
</table>                        <!-- end the table -->

1. Modify your todo list to use a table when displaying the list items.

2. Add a date column to your todo_list table. When a todo item is added, save the current date/time in the database along with the todo item. Display it in the list. The PHP `date()` function will be helpful.
