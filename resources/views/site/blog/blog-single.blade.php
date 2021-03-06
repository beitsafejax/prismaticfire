@extends('layouts.master')

@section('main')


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="post-snippet mb64">
                        <img class="mb24" alt="Post Image" src="img/blog-single.jpg" />
                        <div class="post-title">
                            <span class="label">23 Sep</span>
                            <h4 class="inline-block">A simple image post for starters</h4>
                        </div>
                        <ul class="post-meta">
                            <li>
                                <i class="ti-user"></i>
                                <span>Written by
                                            <a href="#">Craig Garner</a>
                                        </span>
                            </li>
                            <li>
                                <i class="ti-tag"></i>
                                <span>Tagged as
                                            <a href="#">Lifestyle</a>
                                        </span>
                            </li>
                        </ul>
                        <hr>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                        </p>
                        <blockquote>
                            It's our challenges and obstacles that give us layers of depth and make us interesting. Are they fun when they happen? No. But they are what make us unique. And that's what I know for sure... I think.
                        </blockquote>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        </p>
                        <ul class="bullets">
                            <li>Beatae vitae dicta sunt explicabo</li>
                            <li>Inventore veritatis et quasi architecto</li>
                            <li>Sed do eiusmod tempor incididunt</li>
                            <li>Accusamus et iusto odio dignissimos ducimus</li>
                        </ul>
                    </div>
                    <!--end of post snippet-->
                    <hr>
                    <div class="comments">
                        <h5 class="uppercase">3 Comments</h5>
                        <ul class="comments-list">
                            <li>
                                <div class="avatar">
                                    <img alt="Avatar" src="img/avatar1.png" />
                                </div>
                                <div class="comment">
                                    <span class="uppercase author">Jane Lovell, September 8</span>
                                    <a class="btn btn-sm" href="#">Reply</a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="avatar">
                                            <img alt="Avatar" src="img/avatar2.png" />
                                        </div>
                                        <div class="comment">
                                            <span class="uppercase author">Tim Jackson, September 8</span>
                                            <a class="btn btn-sm" href="#">Reply</a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img alt="Avatar" src="img/avatar3.png" />
                                </div>
                                <div class="comment">
                                    <span class="uppercase author">Roland Sims, September 9</span>
                                    <a class="btn btn-sm" href="#">Reply</a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        <h5 class="uppercase">Leave A Comment</h5>
                        <form>
                            <input name="name" type="text" placeholder="Your Name" />
                            <input name="email" type="text" placeholder="Email Address" />
                            <textarea rows="3" placeholder="Comment"></textarea>
                            <input type="submit" value="Leave Comment" />
                        </form>
                    </div>
                    <!--end of comments-->
                </div>
                <!--end of nine col-->
            </div>
            <!--end of container row-->
        </div>
        <!--end of container-->
    </section>


@endsection