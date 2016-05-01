/**
 * Created by Josh on 4/30/2016.
 */
function complete() {

    new Ajax.Autocompleter("pin", "suggested", "getUsers.php", {paramName:"sq"});

};
