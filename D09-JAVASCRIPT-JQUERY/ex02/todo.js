var tab = [];
var index = 0;
var flag = 0;

function update_cookie()
{
    var str = JSON.stringify(tab);
    document.cookie = "to_do=" + str;
}

function addEntry(txt){
    var to_do;

    if (flag == 0)
    {
        to_do = prompt("Add a new task: ");
    }
    else
        to_do = txt;
    if (to_do)
    {
        var list = document.getElementById("ft_list");
        var new_elem = document.createElement("div");
        new_elem.setAttribute("class", "new_elem");
        new_elem.setAttribute("onclick", "delElem(this)");
        new_elem.setAttribute("index", index);
        var textnode = document.createTextNode(to_do);
        tab[index] = to_do;
        index++;
        new_elem.appendChild(textnode);
        list.insertBefore(new_elem, list.childNodes[0]);
        if (flag == 0)
            update_cookie();
    }
}

function delElem(elem)
{
    if (confirm("Are you sure?") == true)
    {
        var ind = elem.getAttribute("index");
        tab.splice(ind, 1);
        elem.parentNode.removeChild(elem);
        update_cookie();
    }
}

window.onload = function()
{
    if (document.cookie)
    {
        flag = 1;
        var cook = document.cookie;
        var tab = cook.split("=");
        var test = JSON.parse(tab[1]);
        for (txt in test)
            addEntry(test[txt]);
        flag = 0;
    }
}