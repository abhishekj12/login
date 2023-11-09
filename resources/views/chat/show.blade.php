@extends('layouts.alldata')
@section('maincontent')
    @include('chat.index', ['user_messages' => $user_messages])

    <!-- User Chat messages -->

    <div class="">
        <div class="chats">
            <div class="chat">
                <div class="chat-avatar">
                    <span class="avatar box-shadow-1 cursor-pointer">
                        <img src="{{ asset('admin/app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar"
                            height="36" width="36" />
                    </span>
                </div>
                <div class="chat-body">
                    <div class="chat-content">
                        <p>How can we help? We're here for you! 😄</p>
                    </div>
                </div>
            </div>
            <div class="chat chat-left">
                <div class="chat-avatar">
                    <span class="avatar box-shadow-1 cursor-pointer">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="36"
                            width="36" />
                    </span>
                </div>
                <div class="chat-body">
                    <div class="chat-content">
                        <p>Hey John, I am looking for the best admin template.</p>
                        <p>Could you please help me to find it out? 🤔</p>
                    </div>
                    <div class="chat-content">
                        <p>It should be Bootstrap 4 compatible.</p>
                    </div>
                </div>
            </div>
            <div class="divider">
                <div class="divider-text">Yesterday</div>
            </div>
            <div class="chat">
                <div class="chat-avatar">
                    <span class="avatar box-shadow-1 cursor-pointer">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36"
                            width="36" />
                    </span>
                </div>
                <div class="chat-body">
                    <div class="chat-content">
                        <p>Absolutely!</p>
                    </div>
                    <div class="chat-content">
                        <p>Vuexy admin is the responsive bootstrap 4 admin template.</p>
                    </div>
                </div>
            </div>
            <div class="chat chat-left">
                <div class="chat-avatar">
                    <span class="avatar box-shadow-1 cursor-pointer">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="36"
                            width="36" />
                    </span>
                </div>
                <div class="chat-body">
                    <div class="chat-content">
                        <p>Looks clean and fresh UI. 😃</p>
                    </div>
                    <div class="chat-content">
                        <p>It's perfect for my next project.</p>
                    </div>
                    <div class="chat-content">
                        <p>How can I purchase it?</p>
                    </div>
                </div>
            </div>
            <div class="chat">
                <div class="chat-avatar">
                    <span class="avatar box-shadow-1 cursor-pointer">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36"
                            width="36" />
                    </span>
                </div>
                <div class="chat-body">
                    <div class="chat-content">
                        <p>Thanks, from ThemeForest.</p>
                    </div>
                </div>
            </div>
            <div class="chat chat-left">
                <div class="chat-avatar">
                    <span class="avatar box-shadow-1 cursor-pointer">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="36"
                            width="36" />
                    </span>
                </div>
                <div class="chat-body">
                    <div class="chat-content">
                        <p>I will purchase it for sure. 👍</p>
                    </div>
                    <div class="chat-content">
                        <p>Thanks.</p>
                    </div>
                </div>
            </div>
            <div class="chat">
                <div class="chat-avatar">
                    <span class="avatar box-shadow-1 cursor-pointer">
                        <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36"
                            width="36" />
                    </span>
                </div>
                <div class="chat-body">
                    <div class="chat-content">
                        <p>Great, Feel free to get in touch on</p>
                    </div>
                    <div class="chat-content">
                        <p>https://pixinvent.ticksy.com/</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User Chat messages -->
    <!-- User Chat messages -->
@endsection
