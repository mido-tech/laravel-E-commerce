<html>
    <body>
{{-- <script src="./assets/js/script.js"></script> --}}

  {{-- <script src="{{ asset('frontend/assets/js/script.js') }}"></script> --}}

   {{-- <script src="{{asset('frontend')}}/assets/js/jquery-3.7.0.min.js"></script> --}}
   <script src="{{asset('frontend')}}/assets/js/bootstab5.main.js"></script>
   <script src="{{asset('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
      const plusButtons = $(".plus");
      const minusButtons = $(".minus");
      const numElements = $(".num");

      plusButtons.each(function(index, plus) {
        $(plus).on("click", function() {
          let count = parseInt($(numElements[index]).val());
          count++;
          $(numElements[index]).val(count.toString().padStart(2, "0"));
          localStorage.setItem(`num-${index}`, $(numElements[index]).val());
        });
      });

      minusButtons.each(function(index, minus) {
        $(minus).on("click", function() {
          let count = parseInt($(numElements[index]).val());
          if (count > 1) {
            count--;
            $(numElements[index]).val(count.toString().padStart(2, "0"));
            localStorage.setItem(`num-${index}`, $(numElements[index]).val());
          }
        });
      });

      // Load the values from localStorage for each item
      numElements.each(function(index, num) {
        const savedCount = localStorage.getItem(`num-${index}`);
        if (savedCount) {
          $(num).val(savedCount);
        } else {
          $(num).val("01");
          localStorage.setItem(`num-${index}`, "01");
        }
      });

      $('.addToCardBtn').click(function(e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty_input').val();
        console.log('->->->anas');
        console.log( $('meta[name="csrf-token"]').attr('content'))
        $.ajaxSetup({
             headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
});

        $.ajax({
          method: "POST",
          url: "/add-to-cart",
          data: {
            'product_id': product_id,
            'product_qty': product_qty
          },
          success: function(response) {
            alert(response.status);
          }
        });
      });
   });
</script>
  <script>
    'use strict';

  //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {

            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");

const navElems = [overlay, navOpenBtn, navCloseBtn];

for (let i = 0; i < navElems.length; i++) {
  navElems[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}



/**
 * header & go top btn active on page scroll
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 80) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }
});
  </script>

</body>

</html>
