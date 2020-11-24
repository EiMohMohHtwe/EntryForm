<table class="table table-form ml-10 mr-10 mt-2">
    <h1 class="ml-12 font-bold">Family Structure</h1>
    <tr>
        <td>
            <div class="flex flex-wrap -mx-3 mb-6 ml-8">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Name
                    </label>
                    <input class="w-64 appearance-none block bg-blue-200 text-gray-700 border border-gray-200 py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="family_name" name="family_name" wire:model="family_name">
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
                    id="relationship" name="relationship" wire:model="relationship">
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
                    id="age" name="age" wire:model="age">
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
                    id="job" name="job" wire:model="job">
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
                                id="live_together" name="live_together" wire:model="live_together">
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
                                id="agreement" name="agreement" wire:model="agreement">
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
</table>
