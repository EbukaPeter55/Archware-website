@extends('layouts.app')
{{-- The loading spinner --}}
<div class="loader-container">
    <div class="spinner"></div>
</div>

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')


    <div class="container py-5">
        @include('errors.error_message')
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div>
                    <p style="font-weight: 700;font-size: 40px;line-height: 60px;color: #040856;">Ready To Join Us?</p>
                </div>
                <div class="pt-2 mb-3" style="width: 54px; height: 5px; background: #A6CE39; border-radius: 9000px;"></div>

                <form action="{{ route('recruit.store.web') }}" method="post" enctype="multipart/form-data" id="recruit">
                    @csrf

                    <div class="form-group row pt-4">
                        <div class="col-sm-6">
                            <input type="text" class="form-control @error('name') border border-danger @enderror"
                                id="name" placeholder="Your name" name="name" required>
                            @error('name')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control @error('post_applied') border border-danger @enderror"
                                id="post_applied" placeholder="Post Applied" name="post_applied" required>
                            @error('post_applied')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <div class="col-sm-6">
                            <input type="text" class="form-control @error('nationality') border border-danger @enderror"
                                id="nationality" placeholder="Nationality" name="nationality" required>
                            @error('nationality')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <select name="qualification" id="qualification"
                                class="@error('qualification') border border-danger @enderror form-select form-select-md mb-1"
                                required>
                                <option value="">Select your qualification <i class="text-danger">*</i></option>
                                <option value="Bachelor's Degree / Diploma">Bachelor's Degree / Diploma</option>
                                <option value="Master or PhD">Master or PhD</option>
                            </select>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Example: Bachelor of Engineering or Bachelor of Science or Technical/Diploma
                            </label>
                            @error('qualification')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-4">
                        <div class="col-sm-6">
                            <select class="form-control" name="major_in" id="major_in">
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Electrical Engineering">Electrical Engineering</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                            </select>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Example: Civil / Electrical / Mechanical / Electronics & Communication Engineering
                            </label>
                            @error('major_in')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control @error('school_name') border border-danger @enderror"
                                id="school_name" placeholder="Name of Your School" name="school_name" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                (University/Institute)
                            </label>
                            @error('school_name')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="date"
                                class="form-control @error('date_graduated') border border-danger @enderror"
                                id="date_graduated" placeholder="Date Graduated" name="date_graduated" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Date Graduated from (University/Institute)
                            </label>
                            @error('date_graduated')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <div class="col-sm-6">
                            <input type="number" min="1"
                                class="form-control @error('work_experience_yrs') border border-danger @enderror"
                                id="work_experience_yrs" placeholder="Years of Work Experience"
                                name="work_experience_yrs" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Total Years of Work Experience
                            </label>
                            @error('work_experience_yrs')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="number" min="1"
                                class="form-control @error('field_experience_yrs') border border-danger @enderror"
                                id="field_experience_yrs" placeholder="Years of Relevant Experience"
                                name="field_experience_yrs" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Total Years of Relevant Experience to the Applied Position
                            </label>
                            @error('field_experience_yrs')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-5">
                        <div class="col-sm-6">
                            <input type="number" min="1" max="10"
                                class="form-control @error('english_skills') border border-danger @enderror"
                                id="english_skills" placeholder="English skills" name="english_skills" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Your English Language Skills Written and Spoken (Rate Your self) - 1 to 10 (10 is Excellent)
                            </label>
                            @error('english_skills')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="date" class="form-control @error('dob') border border-danger @enderror"
                                id="dob" placeholder="Date Of Birth (Day-Month-Year)" name="dob" required>
                            <label for="driving_license">
                                Date Of Birth (Day-Month-Year)
                            </label>
                            @error('dob')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-5">
                        <div class="col-sm-6">
                            <input type="number"
                                class="form-control @error('current_salary') border border-danger @enderror"
                                id="current_salary" placeholder="Current/Last Salary" name="current_salary" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Current/Last Salary (in SAR)
                            </label>
                            @error('current_salary')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="number"
                                class="form-control @error('expected_salary') border border-danger @enderror"
                                id="expected_salary" placeholder="Expected Salary" name="expected_salary" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Expected Salary (in SAR)
                            </label>
                            @error('expected_salary')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-4">
                        <div class="col-sm-3">
                            <input type="text" class="form-control @error('country') border border-danger @enderror"
                                id="country" placeholder="Country" name="country" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                (Use your current location)
                            </label>
                            @error('country')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control @error('city') border border-danger @enderror"
                                id="city" placeholder="City" name="city" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                (Use your current location)
                            </label>
                            @error('city')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input type="text"
                                class="form-control @error('notice_period') border border-danger @enderror"
                                id="notice_period" placeholder="Notice Period / Availability to Join"
                                name="notice_period" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                Notice Period / Availability to Join
                            </label>
                            @error('notice_period')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row pt-4">
                        <div class="col-sm-3">
                            <input type="text"
                                class="form-control @error('contact_no') border border-danger @enderror" id="contact_no"
                                placeholder="Contact Number" name="contact_no">
                            @error('contact_no')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="text"
                                class="form-control @error('whatsapp_or_imo') border border-danger @enderror"
                                id="whatsapp_or_imo" placeholder="WhatsApp & IMO No." name="whatsapp_or_imo">
                            @error('whatsapp_or_imo')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control @error('skype_id') border border-danger @enderror"
                                id="skype_id" placeholder="Skype ID" name="skype_id">
                            @error('skype_id')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="email" class="form-control @error('email') border border-danger @enderror"
                                id="email" placeholder="Email" name="email" required>
                            @error('email')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-5">
                        <div class="col-sm-6">
                            <label for="drive">Driver's license</label>
                            <label for="driving_license">
                                Do you have Driving License? (GCC/ Saudi / International / Local (Home Country))
                            </label>
                            <div class="form-check">
                                <input class="form-check-input yes-ch" type="radio" name="driving_license" id="yes"
                                    value="yes" required onclick="checkStatus()">
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input no-ch" type="radio" name="driving_license" id="no"
                                    value="no" required onclick="negativeStatus()">
                                <label class="form-check-label" for="no">No</label>
                            </div>
                            @error('driving_license')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 dri-license">
                            <input type="date" class="form-control @error('dob') border border-danger @enderror"
                                id="dob" placeholder="Enter expiring date (Day-Month-Year)" name="dob" required>
                            <label for="driving_license">
                               Enter driving license expiring date (Day-Month-Year)
                            </label>
                            @error('dob')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-4">
                        <div class="col-sm-6">
                            <label for="drive">Saudi Council of Engineers</label>
                            <label for="saudi_council_question">Are you registered in the Saudi Council of
                                Engineers?</label>
                            <div class="form-check">
                                <input class="form-check-input saud-yes" type="radio" name="saudi_council_question" id="yes"
                                    value="yes" required onclick="showSaudiField()">
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input saud-no" type="radio" name="saudi_council_question" id="no"
                                    value="no" required onclick="hideSaudiField()">
                                <label class="form-check-label" for="no">No</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="saudi_council_question" id="na"
                                    value="na" required>
                                <label class="form-check-label" for="na">Not Applicable (N/A)</label>
                            </div>
                            @error('saudi_council_question')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="saudi-field col-sm-6">
                            <div class="row">

                                <div class="col-6">
                                    <input type="text" class="form-control @error('sce_number') border border-danger @enderror"
                                        id="sce_number" placeholder="SCE number" name="sce_number">
                                    <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                        Saudi Council of Engineers (SCE) certificate number
                                    </label>
                                    @error('sce_number')
                                        <div class="text-danger error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="date"
                                        class="form-control @error('sce_validity_date') border border-danger @enderror"
                                        id="sce_validity_date" placeholder="Date of validity" name="sce_validity_date">
                                    <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                        Saudi Council of Engineers (SCE) validity date
                                    </label>
                                    @error('sce_validity_date')
                                        <div class="text-danger error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row pt-5">
                        <div class="col-sm-6">
                            <label for="drive">Total QC or Inspection Experience</label>
                            <label for="qc_inspection_experience">Do you have total QC or Inspection Experience?</label>
                            <div class="form-check">
                                <input class="form-check-input qc-yes" type="radio" name="qc_inspection_experience"
                                    id="yes" value="yes" required onclick="showQC()">
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input qc-no" type="radio" name="qc_inspection_experience"
                                    id="no" value="no" required onclick="hideQC()">
                                <label class="form-check-label" for="no">No</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="qc_inspection_experience"
                                    id="na" value="na" required>
                                <label class="form-check-label" for="na">Not Applicable (N/A)</label>
                            </div>
                            @error('qc_inspection_experience')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 qc-field">
                            <input type="text"
                                class="form-control @error('aramcosap_no_or_id') border border-danger @enderror"
                                id="aramcosap_no_or_id" placeholder="Total QC number" name="aramcosap_no_or_id">
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                               If you have a total QC or Inspection Experience, kindly mention your Total QC number.
                            </label>
                            @error('aramcosap_no_or_id')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="form-group row pt-5">
                        <div class="col-sm-6">
                            <label for="drive">Saudi ARAMCO & QA/QC - Aramco Approval</label>
                            <label for="aramco_qa_qc_approval">
                                Do You have experience in Saudi ARAMCO & QA/QC - Aramco
                                Approval - Other Client (OIL & GAS)?
                            </label>
                            <div class="form-check">
                                <input class="form-check-input armaco-yes" type="radio" name="aramco_qa_qc_approval"
                                    id="yes" value="yes" required onclick="showArmaco()">
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input armaco-no" type="radio" name="aramco_qa_qc_approval"
                                    id="no" value="no" required onclick="hideArmaco()">
                                <label class="form-check-label" for="no">No</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aramco_qa_qc_approval"
                                    id="na" value="na" required>
                                <label class="form-check-label" for="na">Not Applicable (N/A)</label>
                            </div>
                            @error('aramco_qa_qc_approval')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 armaco-field">
                            <input type="text"
                                class="form-control @error('aramcosap_no_or_id') border border-danger @enderror"
                                id="aramcosap_no_or_id" placeholder="ARAMCO SAP No. or ID" name="aramcosap_no_or_id">
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                If you have an ARAMCO Approval, kindly mention your ARAMCO SAP No. or ID.
                            </label>
                            @error('aramcosap_no_or_id')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row pt-5">
                        <div class="col-sm-6">
                            <input type="text" class="form-control @error('id_no') border border-danger @enderror"
                                id="id_no" placeholder="ID No." name="id_no" required>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                National ID No. (for Saudi) or IQAMA No. (for Expat) who is currently working in Saudi and
                                Passport No. for Expat who are NOT working in Saudi
                            </label>
                            @error('id_no')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label for="drive">Transferable IQAMA</label>
                            <label for="transferrable_iqama">
                                Do you have Transferable IQAMA? (For Expats who are currently working) & Put N/A if it's not
                                applicable to you.
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transferrable_iqama" id="yes"
                                    value="yes" required>
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transferrable_iqama" id="no"
                                    value="no" required>
                                <label class="form-check-label" for="no">No</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transferrable_iqama" id="na"
                                    value="na" required>
                                <label class="form-check-label" for="na">Not Applicable (N/A)</label>
                            </div>
                            @error('transferrable_iqama')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-4">
                        <div class="col-sm-4">
                            <input type="file"
                                class="form-control @error('certificate_training') border border-danger @enderror"
                                id="certificate_training" name="certificate_training" required>
                            <label for="inputContactNumber">Certifications & Training's (If Available)</label>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                                e.g. AWS, CSWIP 3.1, CSWIP 3.2, NACE Level II, CSWIP-BGAS 2, API-510, API-570, API-650, API-
                                653, ASNT Level II in (UT, RT, PT, MT, VT), QMS Lead Auditor (ISO 9001:2008), QMS Auditor
                                (ISO 9001:2008), BICSI, etc.
                            </label>
                            @error('certificate_training')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <input type="file"
                                class="form-control @error('certificate_training') border border-danger @enderror"
                                id="certificate_training" name="certificate_training" required>
                            @error('certificate_training')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <input type="file"
                                class="form-control @error('certificate_training') border border-danger @enderror"
                                id="certificate_training" name="certificate_training" required>
                            @error('certificate_training')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pt-4">
                        <div class="col-sm-12">
                            <input type="file"
                                class="form-control @error('certificate_training') border border-danger @enderror"
                                id="certificate_training" name="certificate_training" required>
                            <label for="inputContactNumber">Resume/CV</label>
                            <label style="color: #819941; font-size: .7em; font-weight: 900;">
                               kindly upload your most updated resume or curriculum vitae in (pdf or doc format)
                            </label>
                            @error('certificate_training')
                                <div class="text-danger error">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="container mt-2 sumitbtn">
                        <a class="py-3" style="text-align:center;">
                            <button type="submit" class="small-mobile-long-button"
                                style="display: flex;justify-content: center;
                        align-items: center; gap: 4px;width: 440px;height: 52px;
                        border: none;
                        background: #1F3F95;border-radius: 8px; color:#FFFFFF">
                                Submit
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let drivLicense = document.querySelector('.dri-license');

       const checkStatus = () => {
        let checkInput = document.getElementById('yes');
        if(checkInput.checked === true){
            drivLicense.style.display = 'block';
        }else {
            drivLicense.style.display = 'none';
        }

       }

       const negativeStatus = () =>{
        let checkNot = document.getElementById('no');
        if(checkNot.checked === true){
            drivLicense.style.display = 'none';
        }else {
            drivLicense.style.display = 'block';
        }
        
       }
    // Toggle Saudi field
    let saudiFie = document.querySelector('.saudi-field');

    const showSaudiField = () =>{
        let saudYes = document.querySelector('.saud-yes');
        if(saudYes.checked === true){
        saudiFie.style.display = 'block'
        }
    }
    const hideSaudiField = () =>{
        let saudNo = document.querySelector('.saud-no');
        if(saudNo.checked === true){
        saudiFie.style.display = 'none'
        }
    }

    // Toggle QC or inspection experience
    let qcField = document.querySelector('.qc-field');
    const showQC = () =>{
        let qcYes = document.querySelector('.qc-yes');
        if(qcYes.checked === true){
        qcField.style.display = 'block'
        }
    }
    const hideQC = () =>{
        let qcNo = document.querySelector('.qc-no');
        if(qcNo.checked === true){
        qcField.style.display = 'none'
        }
    }
   
    // Toggle Saudi Aramco field
    let aramcoField = document.querySelector('.armaco-field');
    const showArmaco = () =>{
        let aramcoYes = document.querySelector('.armaco-yes');
        if(aramcoYes.checked === true){
        aramcoField.style.display = 'block'
        }
    }
    const hideArmaco = () =>{
        let aramcoNo = document.querySelector('.armaco-no');
        if(aramcoNo.checked === true){
        aramcoField.style.display = 'none'
    }
    }
    </script>
@endsection
