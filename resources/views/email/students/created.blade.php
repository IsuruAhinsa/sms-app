<x-mail::message>
Your Student Added to the our system.

Student Name: {{$student->fullname}} <br>
Student Birthday: {{$student->birthday}} <br>
Student Address: {{$student->address}} <br>
Student City: {{$student->city}} <br>
Student District: {{$student->district}} <br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
