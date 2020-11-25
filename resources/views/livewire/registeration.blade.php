<form wire:submit.prevent="submit" class="w-full mt-10 " >
    <div class="items-center">
    <h1 class="block w-full text-center mb-6 font-bold">Entry Form</h1>
        <table class="table table-form ml-10 mr-10">
            <tr>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="name" name="name" wire:model="name">
                            @error('name')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Birthday
                            </label>
                            <input type="date" class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="birthday" name="birthday" wire:model="birthday">
                            @error('birthday')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>

                <td>
                    <div class="md:flex ml-40">
                
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="200" alt="temp">
                        @else
                            <img src="/profileimage.jpg" width="200" alt="cover image">
                        @endif
                       
                        <input type ="file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                        name="image" wire:model ="image" >
                        @error('image')<span class="error">{{$message}}</span>@enderror
                        </input>

                    </div>                 
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Address
                            </label>
                            <input type="textarea" class="w-full appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="address" name="address" wire:model="address">
                            @error('address')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Email
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="email" name="email" wire:model="email">
                            @error('email')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Confirm Email
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="confirm_email" name="confirm_email" wire:model="confirm_email">
                            @error('confirm_email')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="ml-12">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Gender
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="gender" value="male" wire:model="gender" checked>
                                <span class="ml-2" for="gender">Male</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="gender" value="female" wire:model="gender">
                                <span class="ml-2" for="gender">Female</span>
                            </label>
                        </div>
                        @error('gender')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8 mt-2">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Hobby
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="hobby" name="hobby" wire:model="hobby">
                            @error('hobby')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8 mt-4">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Phone Number
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="phone" name="phone" wire:model="phone">
                            @error('phone')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8 mt-4">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Blood Type
                            </label>
                            <select class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="blood_type" name="blood_type" wire:model="blood_type">
                                <option>Please Select</option>
                                <option value="1">A+</option>
                                <option value="2">A</option>
                                <option value="3">B+</option>
                                <option value="4">B</option>
                                <option value="5">O+</option>
                                <option value="6">O</option>
                                <option value="7">AB</option>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8 mt-2">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Favorite Subject
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="favorite_subject" name="favorite_subject" wire:model="favorite_subject">
                            @error('favorite_subject')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8 mt-2">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Favorite Programming Language
                            </label>
                            <select class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="favorite_programming_language" name="favorite_programming_language"  wire:model="favorite_programming_language">
                                <option>Please Select</option>
                                <option value="1">PHP</option>
                                <option value="2">C++</option>
                                <option value="3">Java</option>
                                <option value="4">Java Script</option>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <hr class="border-2">

        <table class="table table-form ml-10 mr-10 mt-8 mb-10">
            <tr>
                <td>
                    <div class="ml-12">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Cooking
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="cooking" value="no" wire:model="cooking" checked>
                                <span class="ml-2" for="cooking">No</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="cooking" value="yes" wire:model="cooking">
                                <span class="ml-2" for="cooking">Yes</span>
                            </label>
                        </div>
                        @error('cooking')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
                <td>
                    <div class="ml-48">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Group Life Experience
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="group_life_experience" value="no" wire:model="group_life_experience" checked>
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="group_life_experience" wire:model="group_life_experience" value="yes">
                                <span class="ml-2">Yes</span>
                            </label>
                        </div>
                        @error('group_life_experience')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <div class="ml-12 mt-8">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Eye Sight
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="eye_sight" value="no" checked>
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="eye_sight" value="yes">
                                <span class="ml-2">Yes</span>
                            </label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="ml-48 mt-8">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Color Blindness
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="color_blindness" value="no" wire:model="color_blindness" checked>
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="color_blindness" value="yes" wire:model="color_blindness">
                                <span class="ml-2">Yes</span>
                            </label>
                        </div>
                        @error('color_blindness')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
            </tr> 

            <tr>
                <td>
                    <div class="ml-12 mt-8">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Tattoo
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="tattoo" value="no" wire:model="tattoo"checked>
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="tattoo" value="yes" wire:model="tattoo">
                                <span class="ml-2">Yes</span>
                            </label>
                        </div>
                        @error('tattoo')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
                <td>
                    <div class="ml-48 mt-8">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Drinking
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="drinking" value="no" wire:model="drinking" checked>
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="drinking" value="yes" wire:model="drinking">
                                <span class="ml-2">Yes</span>
                            </label>
                        </div>
                        @error('drinking')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="ml-12 mt-8">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Smoking
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="smoking" value="no" wire:model="smoking" checked>
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="smoking" wire:model="smoking" value="yes">
                                <span class="ml-2">Yes</span>
                            </label>
                        </div>
                        @error('smoking')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
                <td>
                    <div class="ml-48 mt-8">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Medical History
                        </label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="medical_history" value="no" wire:model="medical_history" checked>
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="medical_history" wire:model="medical_history" value="yes">
                                <span class="ml-2">Yes</span>
                            </label>
                        </div>
                        @error('medical_history')<span class="error">{{$message}}</span>@enderror
                    </div>
                </td>
            </tr> 

        </table>

        <hr class="border-2 mb-8">

        <table class="table table-form ml-10 mr-10 mt-8">
            <h1 class="ml-12 font-bold">University Grades</h1>

            <tr>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                GPA
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="gpa" name="gpa" wire:model="gpa">
                            @error('gpa')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Roll Number
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="roll_number" name="roll_number" wire:model="roll_number">
                            @error('roll_number')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <hr class="border-2 mb-10">

        <h1 class="ml-12 font-bold">Educational Backgrounds</h1>

        <table class="table table-form ml-10 mr-10 mt-8">
            
            <tr>
                <h3 class="ml-12 mt-4">Junior High School</h3>
            </tr>

            <tr>
                <td>
                    <table class="table table-form ml-10">
                        <tr>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            From
                                        </label>
                                        <input type="date" class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="jhs_period_from" name="jhs_period_from" wire:model="jhs_period_from">
                                        @error('jhs_period_from')<span class="error">{{$message}}</span>@enderror
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            To
                                        </label>
                                        <input type="date" class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="jhs_period_to" name="jhs_period_to" wire:model="jhs_period_to">
                                        @error('jhs_period_to')<span class="error">{{$message}}</span>@enderror
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                School Name
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="jhs_school_name" name="jhs_school_name" wire:model="jhs_school_name">
                            @error('jhs_school_name')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                               Status
                            </label>
                            <select class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="jhs_status" name="jhs_status" wire:model="jhs_status">
                                <option>Please Select</option>
                                <option value="1">Graduated</option>
                                <option value="2">Drop Out</option>
                                <option value="3">Studying</option>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <table class="table table-form ml-10 mr-10 mt-4">
            <tr>
                <h3 class="ml-12 mt-2">High School</h3>
            </tr>
            
            <tr>
                <td>
                    <table class="table table-form ml-10">
                        <tr>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            From
                                        </label>
                                        <input type="date" class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="hs_period_from" name="hs_period_from" wire:model="hs_period_from">
                                        @error('hs_period_from')<span class="error">{{$message}}</span>@enderror
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            To
                                        </label>
                                        <input type="date" class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="hs_period_to" name="hs_period_to" wire:model="hs_period_to">
                                        @error('hs_period_to')<span class="error">{{$message}}</span>@enderror
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                School Name
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="hs_school_name" name="hs_school_name" wire:model="hs_school_name">
                            @error('hs_school_name')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                               Status
                            </label>
                            <select class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="hs_status" name="hs_status" wire:model="hs_status">
                                <option>Please Select</option>
                                <option value="1">Graduated</option>
                                <option value="2">Drop Out</option>
                                <option value="3">Studying</option>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Science & Economics
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="hs_science_ecnomics" name="hs_science_ecnomics" wire:model="hs_science_ecnomics">
                            @error('hs_science_ecnomics')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <table class="table table-form ml-10 mr-10 mt-2">
            <tr>
                <td>
                    <label colspan="2" class="ml-10 font-bold">Maticulation Examination Pass Certicate(*pdf)</label>
                </td>
                <td>
                    <input type = "file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                    name = "hs_file" wire:model ="hs_file">
                    @error('hs_file')<span class="error">{{$message}}</span>@enderror
                    </input>
                </td>
            </tr>
        </table>

        <table class="table table-form ml-10 mr-10 mt-4">
            <tr>
                <h3 class="ml-12 mt-2">University</h3>
            </tr>
            
            <tr>
                <td>
                    <table class="table table-form ml-10">
                        <tr>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            From
                                        </label>
                                        <input type="date" class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="univ_period_from" name="univ_period_from" wire:model="univ_period_from">
                                        @error('univ_period_from')<span class="error">{{$message}}</span>@enderror
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            To
                                        </label>
                                        <input type="date" class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="univ_period_to" name="univ_period_to" wire:model="univ_period_to">
                                        @error('univ_period_to')<span class="error">{{$message}}</span>@enderror
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                University Name
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="univ_school_name" name="univ_school_name" wire:model="univ_school_name">
                            @error('univ_school_name')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                               Status
                            </label>
                            <select class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="univ_status" name="univ_status" wire:model="univ_status">
                                <option>Please Select</option>
                                <option value="1">Graduated</option>
                                <option value="2">Drop Out</option>
                                <option value="3">Studying</option>
                        </div>
                    </div>
                </td>
                <td>
                    <table class="table table-form ml-10">
                        <tr>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            School Year
                                        </label>
                                        <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="univ_school_year" name="univ_school_year" wire:model="univ_school_year">
                                        <option>Please Select</option>
                                        <option value="1">4th</option>
                                        <option value="2">5th</option>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Faculty Department
                                        </label>
                                        <input class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="univ_faculty_department" name="univ_faculty_department" wire:model="univ_faculty_department">
                                        @error('univ_faculty_department')<span class="error">{{$message}}</span>@enderror
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table class="table table-form ml-10 mr-10 mt-2">
            <tr>
                <td>
                    <label colspan="2" class="ml-10 font-bold">Latest Report Card(*pdf)</label>
                </td>
                <td>
                    <input type ="file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                    name = "univ_file" wire:model ="univ_file">
                    @error('univ_file')<span class="error">{{$message}}</span>@enderror
                    </input>
                </td>
            </tr>
        </table>

        <hr class="border-2 mb-10 mt-8">
        
        <table class="table table-form ml-10 mr-10 mt-2">
            <h1 class="ml-12 font-bold">Family Structure</h1>
            <tr>
                <div class="col-md-12 ml-12 mt-4">
                    <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                    wire:click.prevent="add({{$i}})">
                    + Add Another Data
                    </button>
                </div>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="family_name" name="family_name" wire:model="family_name.0">
                            @error('family_name')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-4">
                        <div class="px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Relationship
                            </label>
                            <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="relationship" name="relationship" wire:model="relationship.0">
                            <option>Please Select</option>
                            <option value="1">GrandFather</option>
                            <option value="2">GrandMother</option>
                            <option value="3">Father</option>
                            <option value="4">Mother</option>
                            <option value="5">Brother</option>
                            <option value="6">Sister</option>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-4">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Age
                            </label>
                            <input class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="age" name="age" wire:model="age.0">
                            @error('family_age')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-4">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Place of employment/ school
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="job" name="job" wire:model="job.0">
                            @error('job')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <table class="table table-form ml-10">
                        <tr>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Residing with applicant
                                        </label>
                                        <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="live_together" name="live_together" wire:model="live_together.0">
                                        <option>Please Select</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Consent for overseas work
                                        </label>
                                        <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="agreement" name="agreement" wire:model="agreement.0">
                                        <option>Please Select</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>

            @foreach($families as $key => $value)

            <tr>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="family_name" name="family_name" wire:model="family_name.{{ $value }}">
                            @error('family_name')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-4">
                        <div class="px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Relationship
                            </label>
                            <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="relationship" name="relationship" wire:model="relationship.{{ $value }}">
                            <option>Please Select</option>
                            <option value="1">GrandFather</option>
                            <option value="2">GrandMother</option>
                            <option value="3">Father</option>
                            <option value="4">Mother</option>
                            <option value="5">Brother</option>
                            <option value="6">Sister</option>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-4">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Age
                            </label>
                            <input class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="age" name="age" wire:model="age.{{ $value }}">
                            @error('family_age')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-4">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Place of employment/ school
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="job" name="job" wire:model="job.{{ $value }}">
                            @error('job')<span class="error">{{$message}}</span>@enderror
                        </div>
                    </div>
                </td>
                <td>
                    <table class="table table-form ml-10">
                        <tr>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Residing with applicant
                                        </label>
                                        <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="live_together" name="live_together" wire:model="live_together.{{ $value }}">
                                        <option>Please Select</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Consent for overseas work
                                        </label>
                                        <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="agreement" name="agreement" wire:model="agreement.{{ $value }}">
                                        <option>Please Select</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </div>
                                </div>
                            </td>
                            <div class="col-md-12 ml-24">
                                <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                                wire:click.prevent="remove({{$key}})">
                                    Remove
                                </button>
                            </div>
                        </tr>
                    </table>
                </td>
            </tr>
            @endforeach
        </table>

        <hr class="border-2 mb-10 mt-8">

        <table>
            <div class="items-center justify-items-auto">
                <div class="grid grid-cols-2 justify-items-auto">
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                            What was the happiest thing that happened in your life?
                        </label>
                        @error('question_happiest_event')<span class="error">{{$message}}</span>@enderror  
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                            What was the hardest thing that happened in your life?
                        </label>
                        @error('question_hardest_event')<span class="error">{{$message}}</span>@enderror  
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_happiest_event"  wire:model="question_happiest_event"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_hardest_event"  wire:model="question_hardest_event"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                            What was the thing that you have tried the best in your life?
                        </label>
                        @error('question_hardest_event')<span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                            What was the thing that you worked hard other than school activity?
                        </label>
                        @error('question_worked_hard')<span class="error">{{$message}}</span>@enderror
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_worked_hard"  wire:model="question_worked_hard"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_outside_of_school"  wire:model="question_outside_of_school"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        Do you want to return to Myanmar in the future of remain in Japan?
                    </div>
                    @error('question_future_workplace')<span class="error">{{$message}}</span>@enderror 
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        What type of person that you can't get along with?
                    </div>
                    @error('question_poor_person')<span class="error">{{$message}}</span>@enderror 
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_future_workplace"  wire:model="question_future_workplace"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_poor_person"  wire:model="question_poor_person"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        What are your strong points?
                    </div>
                    @error('question_speciality')<span class="error">{{$message}}</span>@enderror 
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        What are your weak points?
                    </div>
                    @error('question_weak')<span class="error">{{$message}}</span>@enderror 
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_speciality" wire:model="question_speciality"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_weak"  wire:model="question_weak"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        What do you value the most in work?
                    </div>
                    @error('question_emphasis')<span class="error">{{$message}}</span>@enderror 
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        What types of IT technology that you learned at university?
                    </div>
                    @error('question_it_technology')<span class="error">{{$message}}</span>@enderror 
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_emphasis"  wire:model="question_emphasis"></textarea>
                    </div>
                    <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        name="question_it_technology"  wire:model="question_it_technology"></textarea>
                    </div>
                </div>
            </div>
        </table><br>

        <hr class="border-2 mb-10 mt-8">

        <div class="flex items-center w-fill justify-center mb-10">
            <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                Register
            </button>
        </div>

        <div class="container">
            @if(session()->has('notification'))
                <div class="row">
                    <div class="alert alert-success bg-green-500 mb-10">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            &times;
                        </button>
                        <strong>Notification</strong>{{ session()->get('notification') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</form>