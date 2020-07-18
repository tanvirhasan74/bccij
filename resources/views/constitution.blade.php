<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>BCCIJ</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   
    
    <!-- Start Main Top -->
    <div class="logoBlock" style="margin:auto;">
        <div class="navbar-header">
                    
                <a class="navbar-brand" href="{{url('/')}}" style="font-size:30px;font-weight:bold;font-style:italic;margin:0 75px;"><img src="{{asset('images/logo-bccij.png')}}" style="width:50%;" class="logo"   alt="">BCCIJ </a>
                
                </div>        

    </div>
    <header class="main-header" >
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
                
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-hover" data-toggle="dropdown">The BCCIJ</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/About')}}">About BCCIJ</a></li>
								<li><a href="{{url('/SteeringCommittee')}}">Executive Members</a></li>
                                <li><a href="{{url('/Constitution')}}">The Constitution</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Membership</a>
                            <ul class="dropdown-menu">
								<li><a href="{{url('/MembershipInstruction')}}">Instruction</a></li>
								<li><a href="{{url('/register')}}">Membership Application</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/News&Events')}}">News & Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contactUs')}}">Contact Us</a></li>
                        <li >
								
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                <li class="nav-item" ><i class="glyphicon glyphicon-user"></i><a class="nav-link" href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                                @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                @endauth
                            </div>
                            @endif
                       
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                
              
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->



    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container" id="containerAbout">
            <h2 class="text" >THE CONSTITUTION OF BCCIJ</h2>
        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >CHAPTER 1 : GENERAL PROVISIONS</h1>
        <h3 style="text-align:center;font-weight:bold;font-size: x-large;">Article 1 <br>-------------</style></h3> 
        <h1 class="text"> Name and registered office:</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;">
            Bangladesh Chamber of Commerce and Industry in Japan (in short BCCIJ)　hereby established office in Tokyo at 4-15-16, Meguro, Meguro-Ku,Tokyo 153-0063 (hereinafter called “the Chamber”).
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 2 <br>-------------</style></h3> 
        <h1 class="text"> Objectives:</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            The Chamber has the following objectives – Promotion of commercial exchanges and relations between Bangladesh and Japan and in particular specifically :
        </p>
        <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>To promote and protect the interests of the Bangladesh business community in Japan.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> To gather, evaluate and disseminate the specific information that may be useful for the memebrs to conduct their Business.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>To maintain positive relations with private and foreign organizations ,both Bangladesh and foreign ,inorder to keep the members informed of the development of matters of interest for them.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>To promote the projects which will contribute towards improving the image of  Bangladesh economic system and its enterprises.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>To promote obtain the financial support and assistance from the Japanese Government and Private Organizations for increased investment in Bangladesh and expansion of business undertaking in the ountry. </li>
            
        </ul>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 3 <br>-------------</style></h3> 
        <h1 class="text"> Principles :</h1>
        
        <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>The Chamber shall not render its services for a profit making purpose.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> The Chamber shall not carry out the projects aimed at making a profit for any particular individuals, juridical persons or corporate bodies.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> The Chamber shall not be put to use for the benefit of any particular political Parties.</li>
            
        </ul>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >CHAPTER 2 : MEMBERSHIP</h1>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 4 <br>-------------</style></h3> 
        <h1 class="text"> Categories of members :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            The BCCIJ will have two kinds of members :
        </p>
        <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>General Members.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Honorary Members. </li>
            
        </ul>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 5 <br>-------------</style></h3> 
        <h1 class="text"> Criteria, qualifications and rights of General Members :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            General Members: Any company registered in Japan within the framework of Japanese company registration law and already submitted at least one year tax return to the Japanese Taxation Authority can apply for general membership. The President or the Managing Director of the company must be Bangladeshi by birth or the Bangladesh origin of first generation. Valid company registration certificate(Genzai Tohon), latest one year tax return certificate(Kakutei shinkoku), original valid Bangladesh passport issued by the Bangladesh Government or Japanese passport issued by the Japan Government or passport issued by any other Country Government, of the President or the Managing Director or the director whose name or names must appear in the company registration certificate (Genzai Tohon), two latest passport size photographs  have to be submitted to Secretariat  of BCCIJ for getting membership application form. General membership will be approved only when above said terms conditions are be fulfilled.<br><br>

            The member company will be issued one membership ID card in the name of the company and another ID card will be issued in the name of the President or the Managing Director or the Director representing the company to BCCIJ. Once a general membership is approved, representative of the company can be changed by submitting a written notification to that effect.<br><br>

            General Members will have the right to vote and are eligible for the Board of of voting and contesting in the election becoming members of the Board of Directors (BOD - Article 12) and the Board of Advisers (BOA- Article 13 ,thereby enabling them to represent BCCIJ subject to the approval of the Chamber.<br><br>
            If the BCCIJ membership company is ordered by Court to suspend or withhold its business operation ,the Company will be barred from existing its membership qualification untill the company is released from such Court order.   
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 6 <br>-------------</style></h3> 
        <h1 class="text"> Criteria, qualifications and rights of Honorary Members :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Any company registered in Bangladesh and opened branch office or liaison office in Japan within the framework of Japanese company registration law and registered with the Japanese Government Taxation Authority can apply for Honorary Membership of the chamber. 
            Honorary members will not have rights to vote or contesting in the elections of Directors .     
            Honorary members can , however , be appointed to the member of the Board of Advisers. 
            Terms and conditions of eligibility for admission to the Chamber are same as the general membership.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 7 <br>-------------</style></h3> 
        <h1 class="text"> Admission of memebers :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            An  applicant for a membership of the  chamber must submit a prescribed application form , fulfilling the conditions of Article 4 and 5 of the chamber constitution.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 8 <br>-------------</style></h3> 
        <h1 class="text"> Members fee :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            Membership fee will be decided by the Board of Directors(or the interim board of directors) from time to time. Accordingly, the members have to update their regular membership fees and renewal fees to continue their valid membership and all pertaining rights.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 9 <br>-------------</style></h3> 
        <h1 class="text"> Non transfer of membership :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            Membership is not transferable.
        </p>
        
        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 10 <br>-------------</style></h3> 
        <h1 class="text"> Expulsion of members :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;">
            The chamber can expel a member :
        </p>
        <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>Upon the resolution of its Board of Directors in case of non-payment of membership fees or membership renewal fees.</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> At the Board of Directors meeting held for this purpose with the attendance of more than two thirds of the members, if the member is judged that his conduct is not befitting to the objectives of the Chamber and may damage the good name and prestige of the Chamber, he will offered a chance of explaining his position at the Members General Meeting and the decision on his expulsion may be made with the approval votes of one third or more of the attendants at the meeting. </li>
            
        </ul>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 11 <br>-------------</style></h3> 
        <h1 class="text"> Withdrawal of memebrship :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            A member company can withdraw its membership from the chamber with written application
            to the Board of Directors at any time . The Board of Directors has the right to allow the member company to withdraw its membership on satisfactory grounds.
        </p>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >CHAPTER 3 : Organization structure of BCCIJ</h1>
        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 12 <br>-------------</style></h3> 
        <h1 class="text"> Board of Directors (BOD) :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            A Director is a consisting Member of the Board of Directors of BCCIJ will be elected by the general members of the Chamber and nominated to the post of the Board of Directors which is consisted of 11 (eleven) members.
            The Board of Directors will elect the following executive officers from the members and appoint them to the undermentioned Posts :
        </p>
        <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
            <li><span class="fa-li"><i class="far fa-square"></i></span>President</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span> Vice President (3) : Vice President 1, Vice President 2 and Vice President 3. </li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>General Secretary</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Joint Secretary</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Treasurer</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Cultural and Publication Secretary</li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Directors : (3) </li>
            <li><span class="fa-li"><i class="far fa-square"></i></span>Auditor</li>
        </ul>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 13 <br>-------------</style></h3> 
        <h1 class="text"> Board of Advisers (BOA) :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The Board of Advisers (BOA) will be formed. BOD will consult the formation of the BOA and consult also with chief Patron.The consisting number of the BOA will be limited to 5 (five) persons ,being selected among general and honorary Members of the BCCIJ Members and those Japanese Persons who play or have played an important role in developing a significant relationship between Bangladesh and Japan in various areas.  
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 14 <br>-------------</style></h3> 
        <h1 class="text"> Activities and Powers of Elective Officers :</h1>
        <h1 class="text"> Chief Patron </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            His Excellency the Ambassador of Bangladesh in Japan will be Chief Patron of BCCIJ (ex-officio). However, Chief Patron will not assume the post of executive officer of the chamber.
        </p>
        <h1 class="text"> Associate Adviser </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Commercial Counsellor of the Embassy of Bangladesh in Japan will be Associate  Adviser (ex-officio) in the Board of Advisers. However, Associate Adviser will not assume the post of executive officer of the chamber.
        </p>
        <h1 class="text"> President </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            President is the chief executive post in the Board of Directors. President will preside over board meetings.
        </p>
        <h1 class="text"> Vice President </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Vice President will act as President according to seniority and preside over the board meetings, in absence of the President.
        </p>
        <h1 class="text"> General Secretary </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            General Secretary will convene all meetings in consultation with the President and will act as proxy for each executive Board of Directors of BCCIJ.
        </p>
        <h1 class="text"> Joint Secretary </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Joint Secretary will act in co-operation with the General Secretary and act as proxy for the the General Secretary in his absence.
        </p>
        <h1 class="text"> Treasurer </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The Treasurer will have the total financial control of BCCIJ and maintain accounts of BCCIJ. Treasurer with approval of the President will open the Bank account jointly with the Chamber Secretary and take charge of financial affairs of the Chamber.
        </p>
        <h1 class="text"> Cultural and Publication Secretary </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Cultural and Publication Secretary will be responsible for cultural affairs and publication of magazines, souvenir and directories highlighting trade and investment prospects and potentials of Bangladesh-Japan trade and investment relations.
        </p>
        <h1 class="text"> Director </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Director will preside over meetings according to seniority in absence of the President and the Vice Presidents.
        </p>
        <h1 class="text"> Auditor </h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Auditor will be responsible for internal audit.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 15 <br>-------------</style></h3> 
        <h1 class="text"> Election of the Board of Directors :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Election of Board of Directors will be held every two years by secret ballot. As the tenure of Board of Directors is two years the election of Directors should be completed 30 days before the end of their tenure and their duties will handed over to the new Board of Director before  the end of their tenure. 
            However if a member of the BOD falls under the stipulations of article 10, i) and ii), he will be expelled accordingly. 
        </p>
        <h1 class="text"> Election Commission :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Election Commission will be formed by 3 members who are declared neutrality ,being elected by the BOD and the BOA.
            The Election Commission will:-
            <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
                <li><span class="fa-li"><i class="far fa-square"></i></span>Fix up date, time and place of election.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span> Publish final voter list based on the information provided by the Board of Directors. </li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Receive nominations, scrutinize and declare the list of valid candidates.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Hold the election, count votes and declare unofficial and official results.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Within 30 days after the election date, the duties held by the former directors will be be handed over to the new directors.Before that time, the new BOD will elect new executive officers and appoint them to the respective posts.</li>
            </ul>
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 16 <br>-------------</style></h3> 
        <h1 class="text"> Calling of Meetings :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The general  members Meetings shall be ordinary and extra-ordinay. The ordinary general meeting shall be held more than one time every year. However , in the business year when the election of the BOD is to be held , the ordinary annual general meeting may be called within 3o days of the election. 
            The extra-ordinary meeting may be called by the President or the Chief Patron any time when the occasion demands.It may also be called at the request of two-thirds or more of the general members. 
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 17 <br>-------------</style></h3> 
        <h1 class="text"> Means of Calling :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The general members meeting shall be called by a written notice sent to the General Members by post, e-mail or facsimile at least two weeks prior to the date fixed for the meeting and shall contain an indication of the place, date, time and agenda for the meeting.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 18 <br>-------------</style></h3> 
        <h1 class="text"> Right to Vote at the General Members Meetings :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The General Members shall have the right to vote at the general members meetings provided that they have a valid membership by paying up their annual or renewal membership fees. Each member is allowed to send his proxy to the meeting with duly signed power of attorney for only one person.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 19 <br>-------------</style></h3> 
        <h1 class="text"> Validity of General Meetings and BOD Meetings and Resolutions :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            A meeting shall be deemed validly convened, at first calling if at least two thirds of the general members are present in person or by proxy. At second calling the meeting shall be deemed validly convened with attendance of a simple majority of general members or by proxy.
            The meeting shall resolve by the absolute majority of general members at first calling and by a simple majority at second calling, as the case may be.
            The BOD meeting shall be validly convened with the attendance of two-thirds of the members and pass a resolution by a simple mojority of the directors present at the meeting.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 20 <br>-------------</style></h3> 
        <h1 class="text"> President of the Meetings :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            General meetings and the BOD meetings shall be presided over the President and in his absence by the Vice President.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 21 <br>-------------</style></h3> 
        <h1 class="text"> Matters reserved for the Ordinary Meeting :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The ordinary General meeting shall :
            <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
                <li><span class="fa-li"><i class="far fa-square"></i></span> Approve the financial statements, settlement of accounts and annual report prepared by the BOD.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span> Resolve any other matter on the agenda. </li>
                
            </ul>
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 22 <br>-------------</style></h3> 
        <h1 class="text"> Matters Reserved for the Extra Ordinary General Meeting :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The extra ordinary General Meeting shall resolve on any matters on the agenda which are considered necessary for resolution at the meeting by the President or chief patron and  the matters requested by two-thirds or more of the general members.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 23 <br>-------------</style></h3> 
        <h1 class="text"> Alternation of the Constitution :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The articles of the constitution shall be alterable at the General Members Meetings by majority of more than two-thirds of the members present at the Meetings and any alteration of the Constitution shall be notified to all members in writting.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 24 <br>-------------</style></h3> 
        <h1 class="text"> Dissolution of the Chamber :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Dissolution of the Chamber may take place :
            <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
                <li><span class="fa-li"><i class="far fa-square"></i></span> Voluntarily dissolution adopted by approval votes of two-thirds or more of the members present at the Meeting.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span> Compulsory dissolution in the case in when the Chamber and its organs are inactive and unable to function any more.
                    In the case of dissolution, the disposal of the remaining assets must be resolved by the General Members Meeting.</li>
                
            </ul>
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 25 <br>-------------</style></h3> 
        <h1 class="text"> Financial Year :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The financial year of the Chamber shall begin the 1st of July and end on the 30th June of next calender year.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 26 <br>-------------</style></h3> 
        <h1 class="text"> Vacancy in the Board of Directors :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            If a vacancy occurs in the Board of Directors it shall by filled by a substitute be appointed by resolution of the BOD and remain in Office up to the expiration of the existing organ’s term of office.
        </p>

        <h1 class="text" style="border-bottom: 2px solid forestgreen;" >CHAPTER 4 : SUPPLEMENTAL PROVISIONS</h1>
        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 27 <br>-------------</style></h3> 
        <h1 class="text"> Relations with the Embassy of Bangladesh in Tokyo :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            H.E. Ambassador of Bangladesh for Japan and Commercial Counsellor shall invite to the meetings of its organs.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 28 <br>-------------</style></h3> 
        <h1 class="text"> Relations with Foreign Trade Missions in Japan :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            The Chamber shall maintain positive relations with the foreign trade missions in Japan to promote trade development with them for the benefit of the members.
        </p>

        <h3 style="text-align:center;font-weight:bold;font-size: x-large;margin-top: 40px;">Article 29 <br>-------------</style></h3> 
        <h1 class="text"> Reports & Documentation :</h1>
        <p style="font-family:'poppins',sans-serif;font-size: 20px;margin-bottom: 15px;text-align: justify;">
            Administration of Reports and Documents :

            <ul id="obj2" class="fa-ul" style="font-size: 20px;font-family:'poppins',sans-serif;line-height: 2;">
                <li><span class="fa-li"><i class="far fa-square"></i></span>Copies of resolutions made by the Chambers Organs.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span> Registration of the approval isuued by Ministry of Economy ,Trade and Industry  Japan on the use of the name “The Bangladesh Chamber of Commerce and Industry in Japan”. </li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Constitution of the BCCIJ.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Copies of the minutes of the Chambers meetings.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Copies of the Settlement of accounts for the preceding and current Years.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>List of the members with the record of changes made in the previous Year.</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Report on the Chamber’s activities in detail and results thereof. </li>
            </ul>
        </p>
        </div>
    </div>
    <!-- End My Account -->




    <!--------------------------->

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
			
					<p> All rights reserved by BCCIJ</p>

			</div>
        </div>
    </footer>
    <!-- End Footer  -->



    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/inewsticker.js')}}"></script>
    <script src="{{asset('js/bootsnav.js')}}"></script>

    <script src="'{{asset('js/isotope.min.js')}}'"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>