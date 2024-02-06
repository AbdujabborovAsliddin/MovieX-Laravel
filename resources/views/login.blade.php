@extends('layouts.main')

@section('content')
   
<div class="mt-36">
<h1 class="text-center mb-5 text-3xl">Login</h1>   
<form class="max-w-sm mx-auto w-96" action="" method="POST">
    
    <div class="mb-5">
      <label name="name" for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
      <input name="name" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required>
    </div>
     <div class="mb-5">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
      <input placeholder="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div> 
    <div class="flex items-start mb-5">
        
{{-- <div class="mt-3 mx-auto">
    <ul class="grid gap-8 md:grid-cols-4 mx-auto justify-center items-center text-center">
        <li class="">
            <input type="radio" id="react-option-1" name="avatar" value="1" class="hidden peer">
            <label for="react-option-1" class="inline-flex items-center justify-between cursor-pointer">
                <div class="block border-4 border-transparent rounded-full hover:border-gray-200" data-key="1">
                    <img class="w-12 h-12" src="/img/ava1.png" alt="Rounded avatar">
                </div>
            </label>
        </li>
    
        <li class="">
            <input type="radio" id="react-option-2" name="avatar" value="2" class="hidden peer">
            <label for="react-option-2" class="inline-flex items-center justify-between cursor-pointer">
                <div class="block border-4 border-transparent rounded-full hover:border-gray-200" data-key="2">
                    <img class="w-12 h-12" src="/img/ava2.png" alt="Rounded avatar">
                </div>
            </label>
        </li>
    
        <li class="">
            <input type="radio" id="react-option-3" name="avatar" value="3" class="hidden peer">
            <label for="react-option-3" class="inline-flex items-center justify-between cursor-pointer">
                <div class="block border-4 border-transparent rounded-full hover:border-gray-200" data-key="3">
                    <img class="w-12 h-12" src="/img/ava3.png" alt="Rounded avatar">
                </div>
            </label>
        </li>

        <li class="">
            <input type="radio" id="react-option-4" name="avatar" value="4" class="hidden peer">
            <label for="react-option-4" class="inline-flex items-center justify-between cursor-pointer">
                <div class="block border-4 border-transparent rounded-full hover:border-gray-200" data-key="4">
                    <img class="w-12 h-12" src="/img/ava4.png" alt="Rounded avatar">
                </div>
            </label>
        </li>
    </ul>
    
</div> --}}
    



    </div>
    <div class="flex justify-between items-center">
        <button type="submit" class="text-gray-900 bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
        <a class="hover:underline" href="#">Don't registered yet?</a>
    </div>
  </form>
  
</div>
        
{{-- <script>
  $(document).ready(function () {
    $('label').on('click', function () {
        var key = $(this).find('div').data('key');
        var radio = $('#react-option-' + key);

        // Toggle background color for the selected label if the radio is checked
        if (radio.prop('checked')) {
            // Remove bg-red-500 from all labels
            $('label').find('div').removeClass('bg-red-500');
            
            // Toggle background color for the selected label
            $(this).find('div').addClass('bg-red-500');

            // Add name="avatar" to the label and input
            $(this).attr('name', 'avatar');
            radio.attr('name', 'avatar');
        } else {
            // If the radio is unchecked, remove the background color and the name attribute
            $(this).find('div').removeClass('bg-red-500');
            $(this).removeAttr('name');
            radio.removeAttr('name');
        }
    });
});
        </script>     --}}
  
        
@endsection
