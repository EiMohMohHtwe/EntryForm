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
                        </div>
                    </div>
                </td>

                <td>
                    <div class="md:flex ml-48">
                        <input type ="file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                        wire:model ="image" >
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
                            id="blood_type" name="blood_type">
                                <option>Please Select</option>
                                <option>B</option>
                                <option>A</option>
                                <option>B</option>
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
                            id="favorite_programming_language" name="favorite_programming_language">
                                <option>Please Select</option>
                                <option>B</option>
                                <option>A</option>
                                <option>B</option>
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
                            id="jhs_status" name="jhs_status">
                                <option>Please Select</option>
                                <option>B</option>
                                <option>A</option>
                                <option>B</option>
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
                            id="hs_status" name="hs_status">
                                <option>Please Select</option>
                                <option>B</option>
                                <option>A</option>
                                <option>B</option>
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
                    <input type ="file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                    wire:model ="hs_file">
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
                            id="univ_status" name="univ_status">
                                <option>Please Select</option>
                                <option>B</option>
                                <option>A</option>
                                <option>B</option>
                        </div>
                    </div>
                </td>
                <td>
                    <table class="table table-form ml-10">
                        <tr>
                            <td>
                                <div class="flex flex-wrap -mx-3 mb-6 mt-6">
                                    <div class="px-3">
                                        <select class="w-32 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="univ_period_from" name="univ_period_from" wire:model="univ_period_from">
                                        <option>4th</option>
                                        <option>5th</option>
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
                    <label colspan="2" class="ml-10 font-bold">Maticulation Examination Pass Certicate(*pdf)</label>
                </td>
                <td>
                    <input type ="file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                    wire:model ="univ_file">
                    </input>
                </td>
            </tr>
        </table>

        <hr class="border-2 mb-10 mt-8">

        <table>

        <div class="items-center justify-items-auto">
            <div class="grid grid-cols-2 justify-items-auto">
                <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                        What was the happiest thing that happened in your life?
                    </label>  
                </div>
                <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                        What was the hardest thing that happened in your life?
                    </label>
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
                </div>
                <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">
                        What was the thing that you worked hard other than school activity?
                    </label>  
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
                <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                    What type of person that you can't get along with?
                </div>
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
                <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                    What are your weak points?
                </div>
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
                <div class="text-gray-700 bg-gray-400 flex justify-center items-center px-4 py-2">
                    What types of IT technology that you learned at university?
                </div>
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
    </div>
</form>