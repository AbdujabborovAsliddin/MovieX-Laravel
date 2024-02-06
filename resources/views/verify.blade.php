@extends('layouts.main')

@section('content')
   
<div class="mt-36">
<h1 class="text-center mb-5 text-3xl">Last Step )</h1>   
<form class="max-w-sm mx-auto w-96" action="{{ route('register.verify') }}" method="POST">
    @csrf
     <div class="mb-5">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verify password</label>
      <input placeholder="password" type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div> 
    <div class="flex items-start mb-5">
    </div>
    <div class="flex justify-between items-center">
        <button type="submit" class="text-gray-900 bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Verify</button>
        <a class="hover:underline" href="#">Didn't get Code?</a>
    </div>
  </form>
</div>

        
@endsection
