
      $(document).ready(function(){
        $("#angka").keyup(function(){
          // console.log("berhasil")
          $(this).maskNumber({integer: true, thousands: "."})
        });
      });
    
      $(document).ready(function(){
        $("#potongan").keyup(function(){
          // console.log("berhasil")
          $(this).maskNumber({integer: true, thousands: "."})
        });
      });
    
      $(document).ready(function(){
        $("#pph").keyup(function(){
          // console.log("berhasil")
          $(this).maskNumber({integer: true, thousands: "."})
        });
      });
    