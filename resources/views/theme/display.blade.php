@extends('theme.master')

@Section('contact-active', 'active')

@Section('hero-title', 'Contact Us')

@Section('content')

    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contacts) > 0)
                        @foreach ($contacts as $key => $contact)
                            <tr>
                                <th scope="row">{{ $contacts->firstItem() + $loop->index }}</th>
                                <td>{{ $contact->first_name }}</td>
                                <td>{{ $contact->last_name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->category?->name }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            {{ $contacts->render("pagination::bootstrap-5") }}

        </div>


    </div>


    <!-- End Contact Form -->

@endsection
