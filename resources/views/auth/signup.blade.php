{{-- @extends('layouts.base',['cssClass'=>'page-signup'])
@section('title','SignUp')
@section('childContent') --}}
<x-guest-layout title="SignUp" bodyClass="page-signup">
<form action="" class="form w-75 m-auto bg-light p-3">
       <h4> Please SignUp</h4>

        <x-slot:footerLink>
            Already have an account ? <br>
            <a href="/login">Click Here To Login </a>
        </x-slot:footerLink>
</x-guest-layout>