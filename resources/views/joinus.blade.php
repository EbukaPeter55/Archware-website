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

<section class="pt-5">
    <div class="py-5 img-fluid" style="background-image: url(../customImages/Group6700.png); background-repeat:no-repeat; background-size:cover;">
        <div class="container col-md-8 py-5">
            <p class="px-5" style="font-style: normal;font-weight: 700;font-size: 40px;line-height: 116%;text-align: center;color: #FFFFFF;">Joining us means growth. It also means great responsibility.</p>
            <p style="font-weight: 400;font-size: 18px;line-height: 155%;text-align: center;color: #FFFFFF;">
            We are constantly on the look out for distinctive individuals with exceptional skill sets who are passionate
            about changing Africa through tech-based innovations and dedicated to becoming a part of the new African story.
            </p>
        </div>
    </div>
</section>

<section class="container pt-5">
    <div class=" d-flex flex-row flex-wrap justify-content-center pt-5">
        <div class="col-lg-4 col-md-11 " >
            <img class="join-us-img img-fluid pt-4" src="/customImages/Rectangle 682.png" >

        </div>
        <div class="col-lg-8 px-3 pt-3 mt-3 px-4 theext" style="font-weight: 400;font-size: 18px;line-height: 172%;text-align: justify;color: rgba(4, 8, 86, 0.7);">
        We are constantly on the lookout for distinctive individuals with exceptional skill sets who are
        passionate about changing Africa through tech-based innovations and dedicated to becoming a part of the new 
        African story.<br>
        We operate a culture that encourages everyone to think creatively and offer innovations that can move our 
        Group forward and, by extension, our nation and continent. Collectively, we are responsible for living our 
        corporate values and ethics, being the bedrock of our organisation.<br>
        With impeccable employee development programs to support you through life’s transitions, we care for our
        own like family. We also consider our employees as investments in a better society. We respect our ties with them and keep in touch as they traverse through life.
        </div>
    </div>
</section>
<section class="container pt-5">
    <div class="d-flex flex-wrap-reverse  pt-5">
        <div class="col-lg-8 pt-3 mt-3 px-2 all-employees" style="font-weight: 400;font-size: 18px;line-height: 172%;text-align: justify;color: rgba(4, 8, 86, 0.7);">
        All of our employees receive specialized training, coaching, and mentorship that is created with their interests in 
        mind and in accordance with their peculiar individual needs. Our strong succession plan and career progression 
        framework guarantee growth opportunities with clearly defined eligibility criteria, as well as a solid foundation to 
        take on new responsibilities.<br>
        We value our employees’ overall well-being, and our compensation philosophy is thorough and well-rounded, incorporating 
        our core values. Our base benefits package is extremely competitive and includes full family health plans, life 
        insurance, paid time off, competitive salaries, and more.
        </div>
        <div class="col-lg-4 pt-4 px-2">
            <img class="join-us-img img-fluid" src="/customImages/Rectangle 684.png" style="float:right;">

        </div>

    </div>
</section>

<section class="container-fluid">
    <div class="basic-skills mt-5" style="height: auto;margin-left: 9em;margin-right:auto;
                background: linear-gradient(90.18deg, #A6CE39 -27.2%, #0A655F 248.97%);border-radius:21px 0px 0px 21px
                ">
        <div class="d-flex flex-row flex-wrap align-items-center">
            <div class="col-lg-4">
                <img class="img-fluid join-us-img" src="{{ asset('customImages/Rectangle 683.png') }}" alt="" style="width:451px; align-items:center">
            </div>
            <div class=" col-lg-8 pr-5">
                <div class="container-fluid">
                    <div class="basic-skill-sect mx-5">
                    <img src="{{ asset('customImages/quote.png') }}" style="position:absolute; margin-top:0px">
                        <h1 class="basic-skill-text mt-3 pt-3 " style="font-style: normal;font-weight: 600;font-size: 23px;line-height: 164%;text-align: justify;color: #FFFFFF;">
                        Basic skills, ability to work hard, determination and honesty towards the craft are the four simple things needed to 
                        excel at work. you know the rest of it (which is quite a lot) just happens to fall in place. At Archware Group, we 
                        provide you with an enabling environment to reach your maximum potential, surrounded by intelligent forward-looking 
                        people who share the same passion for making an impact.</h1>
                        <img src="{{ asset('customImages/quotation.png') }}" style="float:right;">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="mt-5 pt-5">
    <div class="container col-lg-4  pt-5 px-3">
        <div>
            <p style="font-weight: 700;font-size: 40px;line-height: 60px;color: #040856;">Ready To Join Us?</p>
        </div>
        <div class="pt-2" style="width: 54px; height: 5px; background: #A6CE39; border-radius: 9000px;"></div>
        <form id="joinusData" enctype="mutipart/form-data">
            <div class="pt-5">
                <input class="pt-3" required type="text" id="fullname" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="Your Full Name">
            </div>

            <div class="pt-3">
                <input class="section6-form4" required id="email" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email" placeholder="Your Email Address">
            </div>

            <div class="pt-3">
                <input class="section6-form4" required id="position" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="text" placeholder="Title of role you are applying for here">
                <p>
            </div>
            <div class="pt-3">
                <label style="font-weight: 400;font-size: 16px;line-height: 155%;color: #A6A0A0;"> </label>
            </div>

            <div class="">
                <textarea class="form-control" class="" required id="brief_info" placeholder="Why should we choose you?" style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" rows="5"></textarea>
            </div>
            <div class="pt-3">
                <label 
                 style="font-weight: 400;font-size: 16px;line-height: 155%;color: #A6A0A0;">Upload resume</label><br>
                <input type="file" id="resume_directory">
            </div>

            <div class="container mt-2 sumitbtn">
                <a class="py-3" style="text-align:center;"> 
                    <button type="submit" class="small-mobile-long-button" style="display: flex;justify-content: center;
                    align-items: center; gap: 4px;width: 440px;height: 52px;
                    border: none;
                    background: #1F3F95;border-radius: 8px; color:#FFFFFF">
                        Submit
                    </button>
                </a>
            </div>
        </form>
    
    </div>
</section>

<script type="text/javascript">
// Hide and show a loader logic
const loaderContainer = document.querySelector('.loader-container');


const displayLoading = () => {
loaderContainer.style.display = 'block';
};

const hideLoading = () => {
    loaderContainer.style.display = 'none';
};

document.getElementById('joinusData').addEventListener('submit', handleJoinus);



function handleJoinus(event){
    let res = document.getElementById("joinusData");
    event.preventDefault();
    displayLoading();

    // Get all the input field and store them in their unique variable each
    let fullname = document.getElementById('fullname').value;
    let email = document.getElementById('email').value;
    let position = document.getElementById('position').value;
    let brief_info = document.getElementById('brief_info').value;
    let fileData = document.getElementById('resume_directory');

    const formData = new FormData(); 
    formData.append("fullname", fullname);
    formData.append("email", email);
    formData.append("position", position);
    formData.append("brief_info", brief_info);

    console.log(fileData.files[0]);
    // console.log(formData);
    formData.append("resume_directory", fileData.files[0]);


        function handleErrors(response) {
        if (!response.ok) {
            throw Error(response.statusText);
        }
        return response;
        }
        fetch("https://archwaretechgroup.com/api/recruit-store", {
            method: 'POST',
                // headers: {
                //     'Accept': 'application/json, text/plain, */*',
                // },
                body: formData 
        })
        .then(handleErrors)
        .then(response => {
            console.log("ok", response)
        hideLoading();
            Swal.fire({
                    icon: 'success',
                    title: 'Application received, We will get back if we think you are a great fit',
                    showConfirmButton: false,
                    timer: 1500,

                  })
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
                  res.reset();
        });



}


</script>
@endsection