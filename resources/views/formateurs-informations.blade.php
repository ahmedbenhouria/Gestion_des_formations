<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    x-label{
      
    }
    </style>
<x-guest-layout>
    <x-auth-card>
    <img src="../assets/img/logo.png" alt="" style="width:180px; height:180px; margin-top:-60px; margin-left:110px;">


       
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

<form enctype="multipart/form-data" method="POST" action="{{ route('formateursInfo') }}">
    @csrf
    <div >
        <x-label style=" font-weight:600; font-size:15px; " for="image" :value="__('Upload your personal image:')" />
    <input style="margin-left:20px; margin-top:10px; font-size:15px; margin-bottom:20px;"type="file" name="avatar">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    </div>
    <!-- Name -->
    <div>
        <x-label style="  font-weight:600; font-size:15px;" for="formateur_number" :value="__('Mobile Number:')" />

        <x-input id="formateur_number" class="block mt-1 w-full" type="text" name="formateur_number" :value="old('formateur_number')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label style="  font-weight:600; font-size:15px;" for="formateur_job" :value="__('Position/Role:')" />

        <x-input id="formateur_job" class="block mt-1 w-full" type="text" name="formateur_job" :value="old('formateur_job')" required />
    </div>

    <!-- Password -->
   
    <div class="mt-4">
        <x-label style="  font-weight:600; font-size:15px;" for="formateur_description" :value="__('Describe yourself:')" />

        <x-input id="formateur_description" class="block mt-1 w-full" type="text" name="formateur_description" :value="old('formateur_description')" required />
    </div>


    <div class="flex items-center justify-end mt-4">
       
        <x-button class="ml-4">
            {{ __('Continue') }}
        </x-button>
    </div>
</form>
           

        
        </form>
    </x-auth-card>
</x-guest-layout>

