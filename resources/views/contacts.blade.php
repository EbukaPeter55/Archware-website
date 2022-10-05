@extends('layouts.app')
 {{-- The loading spinner --}}
 <div class="loader-container">
    <div class="spinner"></div>
  </div>
@section('description',
    'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
  
<section class='title-style-contact'>
<h1 class="row justify-content-center" style="font-weight: 700;font-size: 35px;letter-spacing: -0.02222em;color: #040856;">Contact Us</h1>
<div class="row justify-content-center pt-3">
                <p   style="width: 72px;height: 5px;justify-content: center;background: #A6CE39;border-radius: 9000px;"></p>
            </div>
</section>
<section class="container card mt-5 contact-card" style='margin-bottom: 12%;'>

    <div class="row justify-content-center">
        <div class="col-md-7 pt-5 px-3">
            <form id="sendData">
                <div class="row px-3">
                    <div class="col">
                        <label style="font-weight: 500;font-size: 14px;color: #040856 ">First Name</label>
                        <input class="" required type="text" id="Firstname"  style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="">
                        <p>
                    </div>
                    <div class="col">
                        <label style="font-weight: 500;font-size: 14px;color: #040856">Last Name</label>
                        <input class="" required type="text" id="Lastname" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" placeholder="">
                        <p>
                    </div>
                </div>
                <div class="px-3">
                    <label style="font-weight: 500;font-size: 14px;color: #040856">Email address</label>
                    <input class="section6-form4" required id="Email" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email" placeholder="hello@dummie.com">
                    <p>
                </div>
                <div class="px-3">
                    <label style="font-weight: 500;font-size: 14px;color: #040856">Service you are interested in</label>
                    <input class="section6-form4" required id="Services" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="text" placeholder="e.g. Web Development">
                    <p>
                </div>
                <div class="px-3">
                    <label style="font-weight: 500;font-size: 14px;color: #040856">What can we help you with? </label>
                    <textarea class="form-control" required id="Message" placeholder="Your Message" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" rows="5"></textarea>

                </div>
                <div class="text-end pt-3 px-3">
                    <button type="submit" class="my-4" style=" width: 155px;height: 40px;background: #A6CE39;border: none;
                        box-shadow: 0px 4px 7px -1px rgba(0, 0, 0, 0.11), 0px 2px 4px -1px rgba(0, 0, 0, 0.07);
                        border-radius: 8px;font-weight: 500;font-size: 12px;line-height: 12px;align-items: right;
                        text-align: center; color: #ffffff;">
                        Submit
                    </button>

                </div>
            </form>
        </div>

        <div class="col-md-5" style=" background-image: url(../customImages/Backgroundcard.svg);  background-repeat: no-repeat; background-size: 160%; height:inherit">
            <div class="sec6itext">
                <div class="mx-5 mt-5 pt-5">
                    <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact Information<h1>
                            <p class="pt-3" style="font-weight: 400;font-size: 16px;color: #FFFFFF;">Fill up the form and our Team will get back to you within 24
                                hours.</p>
                </div>
                <div class="pt-3 mx-5">
                    <p><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">+234-807-266-3033,</a>
                    </p>
                    <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwaretechgroup.com</a>
                    </p>
                    <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="">
                        <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">3, Ayanboye Street, Anthony Village, Lagos</a>
                    </p>
                    <p>
                    <p class="pt-4"><img class="px-2" src="{{ asset('customImages/White.svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (1).svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (2).svg') }}">
                        <img class="px-2" src="{{ asset('customImages/White (3).svg') }}">
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <script src="contact.js">

</script> -->

<script type="text/javascript">
 // Hide and show a loader logic
    const loaderContainer = document.querySelector('.loader-container');

    const displayLoading = () => {
    loaderContainer.style.display = 'block';
    };

    const hideLoading = () => {
        loaderContainer.style.display = 'none';
    };
document.getElementById('sendData').addEventListener('submit', handleSumbit);

function handleSumbit(event){
    event.preventDefault();
    displayLoading();

    // Get all the input field and store them in their unique variable each
    let firstname = document.getElementById('Firstname').value;
    let lastname = document.getElementById('Lastname').value;
    let email = document.getElementById('Email').value;
    let service = document.getElementById('Services').value;
    let message = document.getElementById('Message').value;

    let contactData = {
         firstname,
         lastname,
         email,
         service,
         message
    }
    // alert(JSON.stringify(contactData));
    // alert(`${firstName} and ${lastName}`);
    console.log(contactData);
     isLoading = true;

        function handleErrors(response) {
        if (!response.ok) {
            throw Error(response.statusText);
        }
        return response;
        }
        fetch("http://127.0.0.1:8000/api/contactus/message", {
            method: 'POST',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'content-type': 'application/json'
                },
                body: JSON.stringify(contactData)
        })
        .then(handleErrors)
        .then(response => {console.log("ok")
        hideLoading();
            Swal.fire({
                    icon: 'success',
                    title: 'Message sent, We will get back shortly!',
                    showConfirmButton: false,
                    timer: 1500,

                  })
                  let res = document.getElementById("sendData");
                  res.reset();
        })
        .catch(error => {console.log(error, 'wrong')
        hideLoading();
            Swal.fire({
                    icon: 'error',
                    title: 'Message not sent, something went wrong!',
                    showConfirmButton: false,
                    timer: 1500,

                  })

        });


}

</script>

@endsection
