//   function addtowishlist(){
// console.log(carname);

// console.log(carvid);
$(document).on("click", "#wishlist", function () {
  var networkId = $(this).val();
  var diid = $(this).data("id");
  // console.log(diid);
  // Make an AJAX request to fetch data bundles for the selected network
  $.ajax({
    url: "addwishlist.php",
    method: "POST",
    data: { networkId: diid },
    success: function (responses) {
      // var data = response;
      console.log(responses);
      // Populate the data bundles dropdown with the fetched options
      // $('#data_type').php(response);

      // // Trigger the change event to update the amount input
      // $('#data_type').trigger('change');
    },
  });
});

//   }
