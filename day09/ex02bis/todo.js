$(document).ready(function(){
	$("#new-task").click(newTask);
	var ourCookieArr = findOurCookie();
	if (ourCookieArr.length > 0)
	{
		populateList(ourCookieArr);
	}
})

function newTask()
{
	/* Pop up window. */
	task = window.prompt("Enter new task");

	if (task === null || task === '')
	{
		return;
	}
	/*
	IndexOf checks in task array if there is the ";" and return it,
	after that we just replace it with null.
	*/
	if (task.indexOf(';') >= 0)
	{
		task = task.replaceAll(';', '🖕');
	}
	if (task.indexOf(' ') >= 0)
	{
		task = task.replaceAll(' ', '🖕');
	}
	if (task !== '')
	{
		addTaskElem(task);
		addTaskCookie(task);
	}
}


function removeTask ()
{
	/* Confirm window pop up. */
	if (confirm("You sure you want this task removed?"))
	{
		var cookieArr = findOurCookie();
		var idx = cookieArr.indexOf($(this).html());

		/*
		Removing cookies from the array.
		*/
		if (idx !== -1)
		{
			cookieArr.splice(idx, 1);
		}

		$(this).remove();

		/*
		Handling if only 2 cookie left to not delete both at the same time.
		*/
		if (cookieArr.length === 0)
		{
			document.cookie = 'ft_list=' + "; expires=Sun, 1 Jan 2020 00:00:00 UTC; secure; path=/;";
		}
		else
		{
			document.cookie = 'ft_list=' + cookieArr.join('Ω') + "; expires=Thu, 18 Dec 2050 12:00:00 UTC; secure; path=/;";
		}
	}
}


function addTaskElem (task)
{
	/*
	Creating the task box with an option if clicking to it can remove.
	*/

	const newDiv = $('<div>', { class: 'task' });
	newDiv.click(removeTask);

	/*
	Transferting the task array content into the task box and adding it to the list.
	*/
	//const newContent = document.createTextNode(task);
	newDiv.append(task);

	/*
	With prepend function listing from the newest top to oldest bottom in ft_list box.
	*/
	$('#ft_list').prepend(newDiv);
}


function addTaskCookie(task)
{
	ourCookieArr = findOurCookie();

	/* unshift() adds new items to the beginning of an array. */
	if (task !== '')
	{
		ourCookieArr.unshift(task);
	}

	/*
	Set expire date to the cookie and joining them with pipe (|).
	*/
	document.cookie = 'ft_list=' + ourCookieArr.join('Ω') + "; expires=Thu, 18 Dec 2050 12:00:00 UTC; secure; path=/;";
}


function findOurCookie()
{
	let i;

	/*
	Separating the cookies into individuals, so from string to array.
	*/
	allCookiesArr = document.cookie.split(';');

	for (i = 0; i < allCookiesArr.length; i++)
	{

		if (allCookiesArr[i].indexOf('ft_list=') == 0)
		{
			break;
		}
	}
	if (i === allCookiesArr.length)
	{

		return [];
	}
	else
	{
		return allCookiesArr[i].replace('ft_list=', '').split('Ω');
	}
}

/*
Will output what we already have in case of reloading the page.
*/
function populateList(cookieArr)
{
	for (let i = cookieArr.length - 1; i >= 0; i--)
	{
		if (cookieArr[i] !== '')
		{
			addTaskElem(cookieArr[i]);
		}
	}
}