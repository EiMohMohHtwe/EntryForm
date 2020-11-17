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
                            id="name" name="name" wire:model="name">
                        </div>
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
                            id="Confirm Email" name="Confirm Email" wire:model="Confirm Email">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">Male</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
                                <span class="ml-2">Female</span>
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
                            id="favorite_programming_language" name="favorite_programming_language">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
                                <span class="ml-2">Yes</span>
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
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
                                <input type="radio" class="form-radio" name="sex" value="male">
                                <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="sex" value="female">
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
                            id="rollnumber" name="rollnumber" wire:model="rollnumber">
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
                <td>
                    <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Science & Economics
                            </label>
                            <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="jhs_school_name" name="jhs_school_name" wire:model="jhs_school_name">
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
                    <input type ="file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
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
                                School Name
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
                    <input type ="file" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                    </input>
                </td>
            </tr>
        </table>

        <hr class="border-2 mb-10 mt-8">

        <table class="table table-form ml-10 mr-10 mt-2">
            <tr>
                <td>
                    <p>What was the happiest thing that happened in your life?</p>
                    <textarea class="w-fill" ></textarea>
                </td>
                <td>

                </td>
            </tr>
        </table>

    <div>
</form>