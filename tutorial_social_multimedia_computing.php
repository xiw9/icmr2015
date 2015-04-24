<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'php/header.php' ?>
  <title>Tutorial on Social Multimedia Computing | ACM ICMR 2015 | Shanghai, China</title>
</head>
<body>
  <?php include 'php/navbar.php' ?>
  <div class="ord-header">
    <img class="img-responsive" src="img/header.jpg" alt="Scenery of Shanghai">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h1 class="panel-title">Tutorial on Social Multimedia Computing (Full Day)</h1>
          </div>
          <div class="panel-body" >
            <h3>Tutorial Description</h3>
<p>Social media has revolutionized the way people share and access information, from work, 
daily life, to entertainment. With the ubiquitous presence of capturing devices, multimedia has 
become the major sharing and interacting medium for information access and communication 
in various social media networks. There is a clear trend in social media information services for 
adopting multimedia content. For example, Twitter increases its support on pictures and 
videos, by releasing its 6-second video sharing app, Vine. Tencent's audio chatting tool, 
WeChat, has attracted more than 300 million users in less than two years, which is said to 
replace traditional SMS.</p><p>
On the other hand, the prominence of social media has also witnessed the social trend in 
multimedia data generation and consumption. For example, Facebook reportedly sees 350 
millions photos uploaded each day as of November 2013; 100 hours of video are uploaded to 
YouTube every minute, resulting in a total of more than 2 billion videos by the end of 2013. 
According to Alexa statistics, three out of the four fastest-growing social media websites 
around 2012-2013 focus on multimedia sharing. Moreover, social media gives birth to many 
new types of multimedia, e.g., image tweet, audio picture, geo-tagged video, etc. This 
significantly extends the scope and application areas of multimedia.</p><p>
The multimedia data generated and consumed under social media circumstances is 
referred to as social multimedia. Three elements are identified, i.e., multimedia content, user, 
and interactions (between both user-user and user-content). Impacted by the participatory 
nature of WEB 2.0, users actively participate in the generation as well as consumption 
processes. As the hybrid of multimedia and social media, social multimedia enjoys advantages 
of both direct rich sensory simulation and efficient information access and propagation, thus 
having great potentials in analysis and utilization.</p><p>
The emergence of social multimedia has brought challenges as well as opportunities to 
computing. On one hand, most social multimedia services are user-oriented, making it 
important to understand user demands from their interactions with the multimedia content. On 
the other hand, while multimedia content analysis still remains open, the participatory property 
of social multimedia offers a new solution perspective. Social multimedia computing, a 
multidisciplinary research and application field, has been developed to understand social 
multimedia content and connect the social multimedia content with users by exploiting the 
various social interactions. The potential applications range from information service, 
communication, entertainment, to healthcare, security, etc.</p><p>
Thanks to the wide prevalence of social multimedia data and the increasing demands for 
social multimedia services, there has been a growing number of research on social multimedia 
computing, evidenced by the volume of papers produced, and many related tracks and special 
issues in prestigious multimedia conferences and journals. In this tutorial, we will review 
related work in recent social multimedia computing from two perspectives, i.e. social-sensed 
multimedia computing, and user-centric social multimedia computing. </p><p>
<b>Social-sensed multimedia computing.</b> The ultimate goal of multimedia computing is to 
deliver multimedia content to users according to their information needs (intentions). 
Multimedia computing can be decomposed into various stages: multimedia compression (for 
storage), multimedia communication (for delivery), and multimedia content analysis (for 
intelligence). Among these, multimedia compression and communication are comparatively 
well established. Since the end of the last century, multimedia analysis has become
mainstream in the multimedia community, and related technologies have advanced
significantly. However, how to bridge the multimedia content with end users, the lastmile
technology for multimedia services, is rarely researched. This negligence directly causes an 
obvious Intention Gap between multimedia data and the real information needs of users, which 
has become a bottle-neck in advancing intelligent multimedia computing technologies for use 
in real applications.</p><p>
Users' (both crowds' and individuals') intention-related information (including long-term 
interests, instantaneous intentions, and emotions, etc), their behavior patterns, and ultimately, 
the common principles of user-multimedia interactions under different contexts can all be 
sensed from social media, which are summarized by social knowledge on user-multimedia 
interactions. It is these social knowledge that reflects user needs and establishes a bridge for 
multimedia data and user needs. How to organically integrate multimedia data, user needs 
and social knowledge into multimedia computing technology is a critical issue. Here, we 
propose a new multimedia computing paradigm, social-sensed multimedia computing, to glue
together all the recent works that bring social media, a valuable source of sensing user needs 
and social knowledge, into the loop of multimedia computing. It opens a brand new arena for 
the multimedia research community with a potentially big impact in both academia and 
industry. Researchers from the multimedia community have made significant progresses along 
this direction. The first part of this tutorial aims at: 1) reviewing and summarizing recent 
high-quality research works on social-sensed multimedia computing, including basic 
technologies and applicable systems, and 2) presenting insight into the challenges and future 
directions in this emerging and promising area.</p><p>
<b>User-centric social multimedia computing.</b> Social multimedia computing is very 
different from traditional and web multimedia computing. Web multimedia computing is heavily 
related to the WEB1.0 environment, which is dominated by broadcast media developed by 
professional designers for passive users. In traditional multimedia computing, the analysis 
focus is the multimedia content, and the goal is content understanding and application, e.g., 
media content analysis, semantic classification and annotation, structured media authoring. 
On the contrary, social multimedia computing has an obvious user-centric characteristic: (1) 
User is the basic data collection unit. Viewing each user as a data sensor, social multimedia is 
constituted by what users see, listen, think, feel and speak. Moreover, user bridges multimedia 
network and social network, contributing to most of the social interactions in social multimedia. 
(2) User is the ultimate information service target. As discussed above, social multimedia 
services are user-oriented and have a customized trend. Understanding the personalized 
demands is critical to most social multimedia computing problems.</p><p>
We present the user-centric research paradigm for social multimedia computing, and 
organize the related work into two basic tasks of ``From users, and For users'': (1) From users: 
user-perceptive multimedia content analysis. Users' social interactions capture what they 
perceive the multimedia content and can be exploited towards multimedia content analysis. 
For example, user-contributed picture tags indicate user-perceived visual semantics, user 
browsing behaviors, such as pause, fast-forward, indicate video structure information. (2) For 
users: user modeling and customized multimedia applications. Online activities reveals 
important clues of user background information and are utilized for user modeling of 
demographic facts, personal interests, social network status, mobility patterns, consuming 
patters, emotional orientation, etc. Given results from user-perceptive multimedia content 
analysis and user modeling, customized multimedia services are developed to satisfy 
personalized needs.</p><p>
The target audiences of the tutorial include both graduate students and senior researchers 
working in the field of multimedia and/or social computing, as well as industry practitioners who 
are working in the field of image/video processing, social applications, search engine 
development, developers of video/image sharing social platforms, advertising and 
recommendation systems, and so on. </p><p>
This tutorial will focus on introducing the important general concepts and themes of this 
timely topic, and not go deep into the algorithm details. The only prior knowledge expected for 
the audience is a familiarity with basic machine learning models, e.g., matrix factorization, 
collaborative filtering, probabilistic density estimation. We expect the attendees will gain (1) a 
good understanding of the concept of social multimedia and the importance of social 
multimedia computing; (2) a comprehensive overview of recent high-quality research work 
organized on social-sensed multimedia computing and user-centric social multimedia 
computing; and (3) the insight into the challenges and future directions in this emerging and 
promising area.
</p>

            <h3>Biographies of Organizers</h3>
            <p><b>Peng Cui</b> is now an Assistant Professor in Tsinghua University, China. He received his PhD 
degree from Tsinghua University in 2010. He is an active researcher dedicated to novel 
algorithms and systems in social multimedia computing, and he is keen to promote the 
convergence of social media data mining and multimedia computing technologies. Dr. Cui has 
strong backgrounds in both data mining and multimedia communities. He has published more 
than 30 papers in prestigious conferences and journals in data mining and multimedia, 
including ACM MM, SIGKDD, SIGIR, AAAI, IEEE TMM, IEEE TKDE, IEEE TIP etc. His recent 
research won the ACM MM12 Grand Challenge Multimodal Award, and MMM13 Best Paper 
Award. He is the Area Chair of ACM MM 2014, ICASSP 2013, Associate Editor of Frontier of 
Computer Science journal, Guest Editor of Information Retrieval journal, and co-organized 
several special sessions and workshops on social multimedia in ICMR, ICME, ACM MM and 
WSDM.</p>
<p><b>Wenwu Zhu</b> is with Computer Science Department of Tsinghua University as Professor of 
“1000 People Plan” of China. Prior to his current post, he was a Senior Researcher and 
Research Manager at Microsoft Research Asia. He was the Chief Scientist and the Director at 
Intel Research China from 2004 to 2008. He worked at Bell Labs New Jersey as Member of 
Technical Staff during 1996-1999. Wenwu Zhu is an IEEE Fellow, SPIE Fellow and ACM 
Distinguished Scientist. He has published over 200 referred papers in the areas of multimedia 
computing, communications and networking. He is inventor or co-inventor of over 40 patents. 
His current research interests are in the area of multimedia cloud computing, social media 
computing, multimedia big data, and multimedia communications and networking. He served(s) 
on various editorial boards, such as Guest Editor for the Proceedings of the IEEE, IEEE 
T-CSVT, and IEEE JSAC; Associate Editor for IEEE Transactions on Mobile Computing, IEEE 
Transactions on Multimedia, and IEEE Transactions on Circuits and Systems for Video 
Technology; Leading Editor of the Area “Computer Networks and Distributed Computing” of 
Journal of Computer Science and Technology. He received the Best Paper Award in ACM 
Multimedia 2012, the Best Paper Award in IEEE Transactions on Circuits and Systems for 
Video Technology in 2001, and the other 3 international Best Paper Awards. He was the Chair 
of Visual Signal Processing and Communication Technical Committee of IEEE Circuits and 
Systems Society (2006-2008), and served in the Steering Committee of IEEE Transactions on 
Mobile Computing (2007-2010). He currently serves as the Chair of Beijing Chapter at IEEE 
Circuits and Systems Society and advisory board of International Journal of Handheld 
Computing Research. He served as TPC Co-Chair of IEEE ISCAS 2013 and serves as TPC 
Co-Chair for ACM Multimedia 2014.</p>
<p><b>Jitao Sang</b> is assistant professor in National Laboratory of Pattern Recognition at Chinese
Academy of Sciences (CAS). He graduated with the highest honor for CAS PhD students, the 
special prize of CAS president scholarship. His research interest is in social multimedia 
computing, where the recent research in user-centric social multimedia computing has 
attracted increasing attentions, with award-winning publications in the prestigious conferences 
(best paper finalist in MM2012 and MM2013, best student paper in MMM2013). 
So far, he has authored one book, filed three patents, co-authored more than 40 
peer-referenced papers in multimedia-related journals and conferences. He is program 
co-chair in PCM 2015, ICIMCS 2015, publicity chair in MMM 2015, publication chair in ICIMCS 
2013, 2014, special session organizer in ICME2015, MMM2013, ICIMCS 2013, and program 
committee member in many conferences (MM2013, MM2014, CIKM2014, etc.). He is guest 
editor in many journals such as MMSJ and MTA. He is keynote speaker at Social Media 2013, 
and tutorial speaker at MM 2014, MMM 2015, ICMR 2015 and ICME 2015.</p>
          </div>
        </div>  
      </div>
      <div class="col-md-3">
      <?php include 'php/sidebar.php' ?>
      </div>
    </div>
    <hr class="featurette-divider">
  </div><!-- /.container -->
  <?php include 'php/footer.php' ?>
</body>
</html>