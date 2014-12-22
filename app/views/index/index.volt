{{ content() }}

<!-- CONTENT -->
<section id="content">

    <aside>
        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>
    </aside>
    <!-- /aside -->

    <article id="maincontent">
        <h1>News From Hundreds of Sources In One Spot</h1>
        <p><strong>ReadForMe</strong> is a central silo for all your news. You can archive and share specific articles, publications and blogs. Create a single document from all your saved articles and read them on any device. Update daily, weekly, or monthly. Whatever fits your schedule. No-BS, just the good stuff.</p>
        <p>Beautifully crafted with attention to detail. We have focused our time and effort on bringing you the best user experience possible. Every little detail has been carefully thought through and we will continuously bring you updates with great new features.</p>
    </article>
    <!-- /#maincontent -->

</section>
<!-- /#content -->

<!-- NEWSLETTER -->
<section id="newsletter" class="">
    <article>
        <aside>
            &nbsp;
        </aside>
        <div id="feed-form">
            <h2>Sign Up</h2>
            <br/>
            <br/>

            {{ form('class': 'form-search') }}

                <table class="signup">
                    <tr>
                        <td align="right">{{ signUpForm.label('name') }}</td>
                        <td>
                            {{ signUpForm.render('name') }}
                            {{ signUpForm.messages('name') }}
                        </td>
                    </tr>
                    <tr>
                        <td align="right">{{ signUpForm.label('email') }}</td>
                        <td>
                            {{ signUpForm.render('email') }}
                            {{ signUpForm.messages('email') }}
                        </td>
                    </tr>
                    <tr>
                        <td align="right">{{ signUpForm.label('password') }}</td>
                        <td>
                            {{ signUpForm.render('password') }}
                            {{ signUpForm.messages('password') }}
                        </td>
                    </tr>
                    <tr>
                        <td align="right">{{ signUpForm.label('confirmPassword') }}</td>
                        <td>
                            {{ signUpForm.render('confirmPassword') }}
                            {{ signUpForm.messages('confirmPassword') }}
                        </td>
                    </tr>
                    <tr>
                        <td align="right"></td>
                        <td>
                            {{ signUpForm.render('terms') }} {{ signUpForm.label('terms') }}
                            {{ signUpForm.messages('terms') }}
                        </td>
                    </tr>
                    <tr>
                        <td align="right"></td>
                        <td>{{ signUpForm.render('Sign Up') }}</td>
                    </tr>
                </table>

                {{ signUpForm.render('csrf', ['value': security.getToken()]) }}
                {{ signUpForm.messages('csrf') }}

            </form>

            <div class="success-block"></div>
        </div>
    </article>
</section>
<!-- /#newsletter -->
