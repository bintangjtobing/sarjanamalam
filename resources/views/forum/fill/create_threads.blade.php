@extends('forum.layouts.frontpage')
@section('title','Add new threads')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <!-- POST -->
            <div class="post">
                <form action="#" class="form newtopic" method="post">
                    <div class="topwrap">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="{{asset('storage/img/user.jpg')}}" alt="" />
                            </div>

                            <div class="icons">
                                <img src="{{asset('storage/icon/icon3.png')}}" alt="" /><img
                                    src="{{asset('storage/icon/icon4.png')}}" alt="" /><img
                                    src="{{asset('storage/icon/icon5.png')}}" alt="" /><img
                                    src="{{asset('storage/icon/icon6.png')}}" alt="" />
                            </div>
                        </div>
                        <div class="posttext pull-left">

                            <div>
                                <input type="text" name="subject" placeholder="Enter Topic Title" class="form-control"
                                    required>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <select name="category" id="category" class="form-control custom-select" required>
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($category_data as $cat)
                                        <option value="{{$cat->category}}">{{$cat->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <select name="subcategory" id="subcategory" class="form-control" required>
                                        <option value="" disabled selected>Select Subcategory</option>
                                        @foreach ($subcat_data as $subcat)
                                        <option value="{{$subcat->sub_category}}">{{$subcat->sub_category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div>
                                <textarea name="thread" id="thread" placeholder="Type your discussion here..."
                                    class="form-control" autofocus></textarea>
                            </div>
                            <div class="row newtopcheckbox">
                                <div class="col-lg-6 col-md-6">
                                    <div>
                                        <p>Who can see this?</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="everyone" /> Everyone
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="friends" /> Only Friends
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div>
                                        <p>Share on Social Networks</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="fb" /> <i
                                                        class="fab fa-facebook-square"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="tw" /> <i class="fab fa-twitter"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="gp" /> <i
                                                        class="fab fa-google-plus-square"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="postinfobot">

                        <div class="notechbox pull-left">
                            <input type="checkbox" name="note" id="note" class="form-control" />
                        </div>

                        <div class="pull-left">
                            <label for="note"> Email me when some one post a reply</label>
                        </div>

                        <div class="pull-right postreply">
                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                            <div class="pull-left"><button type="submit" class="btn btn-primary">New topic
                                    discussion</button></div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </form>
            </div><!-- POST -->
        </div>
        @endsection
