
function printNameLastnamePaganti() {

  var nameCont = $(".paganti");
  var name = nameCont.children(".pagante");
  name.remove();

  $.ajax ({

    url: "getNameLastnamePaganti.php",
    method: "POST",
    success: function(data) {

      var names = JSON.parse(data);
      var template = $("#template").html();
      var compiled = Handlebars.compile(template);

      for (var i = 0; i < names.length; i++) {

        var name = names[i];
        var finalHTML = compiled(name);

        $(".paganti").append(finalHTML);
      }

    }
  });
}

function printAddressPagante() {

  var me = $(this);
  var id = me.parent().data("id");

  $.ajax({

    url: "getAddressPagante.php",
    method: "POST",
    data: {

      id: id
    },
    success: function(data) {

      var address = JSON.parse(data);
      var liAddress = me.siblings("ul");

      liAddress.text(address[0]["address"]);
    }
  });
}

function deletePagante() {

  var me = $(this);
  var id = me.parents(".pagante").data("id");

  $.ajax ({

    url: "deletePagante.php",
    method: "POST",
    data: {

      id: id
    },
    success: function() {

      printNameLastnamePaganti();
    }
  });
}

function editPagante() {

  var me = $(this);
  var id = me.parents(".pagante").data("id");
  var newname = prompt("give me new name");
  var newlastname = prompt("give me new lastname");

  $.ajax({

    url: "editPagante.php",
    method: "POST",
    data: {

      id: id,
      name: newname,
      lastname: newlastname
    },
    success: function() {

      printNameLastnamePaganti();
    }
  });
}

function init() {

  printNameLastnamePaganti();
  $(document).on("click", "#addr-button", printAddressPagante);
  $(document).on("click", ".delete", deletePagante);
  $(document).on("click", ".edit", editPagante);
}

$(document).ready(init);
