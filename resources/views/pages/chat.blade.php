@extends('pages.base')

@php
    $activeMember = 1;
@endphp

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        @if (count($members) > 0)
        <div class="row">
        
            <div class="col-md-3">
                <ul class="list-group">
                    @foreach ($members as $member)
                        <li class="list-group-item {{ ($member->id == $activeMember) ? 'active' : '' }}">
                            {{ $member->name }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex-container col-md-9">
                @foreach ($members as $member)
                    {{-- @if ($member->id == $activeMember) --}}
                        <div class="chat card card-prirary cardutline direct-chat direct-chat-primary">
                            
                            <div class="card-header pb-0">
                                <h3 class="card-title">{{ $member->name }}</h3>
                                {{-- <div class="card-tools">
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-primary">3</span>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                    </button>
                                </div> --}}
                            </div>
                            
                            <div class="card-body">
                                @foreach ($chats as $chat)
                                    @if ($chat->member_id == $member->id)
                                        
                                        <div class="direct-chat-messages">
                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                Is this template really for free? That's unbelievable!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->
                        
                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                You better believe it!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->
                                        </div>
                                        
                                        <div class="direct-chat-contacts">
                                            <ul class="contacts-list">
                                            <li>
                                                <a href="#">
                                                <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">
                        
                                                <div class="contacts-list-info">
                                                    <span class="contacts-list-name">
                                                    Count Dracula
                                                    <small class="contacts-list-date float-right">2/28/2015</small>
                                                    </span>
                                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            </ul>
                                            <!-- /.contatcts-list -->
                                        </div>

                                    @endif
                                @endforeach
                            </div>
                            
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        
        </div>
        @endif
    </div>
@endsection

<style scoped>

    .chat {
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 600px) {
        .chat {
            margin-top: 20px !important;
        }
    }

    .page-banner-half {
        float: left;
        width: 95%;
        height: 300px;
        object-fit: cover;
        object-position: top;
    }

    .contact {
        width: 45%;
    }

    .message {
        width: 95%;
    }

    .clinic-image {
        float: left;
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: top;
        /* margin-bottom: 30px; */
    }

    .clinic-title {
        font-size: 22px;
        font-weight: 700;
    }

    .heading {
        font-size: 18px;
        margin-top: 20px; 
        margin-bottom: 10px;
        font-variant: small-caps;
    }

    .block {
        display: block;
    }

</style>


{{-- 
@if(count($clinics) > 0)
    <div class="flex-container">
        @foreach($clinics as $clinic)
            @if ($clinic->id == 1)
                <img class="page-banner-half mb-4" src="img/clinic/contact-support.jpg">
                <div class="card contact">
                    <div class="card-body" style="height: 85px"> 
                        <p class="h5 font-weight-bold">Call us</p>
                        <p class="mt-2">{{ $clinic->mobile }}</small>
                    </div>
                </div>
                <div class="card contact">
                    <div class="card-body" style="height: 85px"> 
                        <p class="h5">
                            <strong>Mail us</strong>
                            <small class="block mt-2">{{ $clinic->email }}</small>
                        </p>
                    </div>
                </div>
                <div class="card message">
                    <div class="card-body"> 
                        <p class="h5"><strong>Send your message</strong></p>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <input id="message" class="form-control" type="text" name="message" placeholder="Message">
                            </div>
                            <input type="submit" class="btn btn-primary" style="width: 100% !important">
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endif
--}}