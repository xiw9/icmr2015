<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'php/header.php' ?>
  <title>Keynotes | ACM ICMR 2015 | Shanghai, China</title>
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
            <h1 class="panel-title">Keynotes</h1>
          </div>
          <div class="panel-body" >
            <a name="keynote1"></a>
            <h3>Keynote 1: Multimedia Retrieval: Are We Doing it Right?</h3>
            <h4>June 24, Wednesday</h4>
            <h4>Presenter</h4>
            <p>Tat-Seng Chua (National University of Singapore)</p>
            <div class="pull-right" style="margin-left: 20px;">
            <img class="img-responsive" src="img/keynote1.jpg" style="max-width:200px;">
            </div>
            <h4>Abstract</h4>
            <p>Multimedia has long been associated with visual media by many researchers. While visual media is one of the most challenging medium to deal with, the use of visual analysis alone is often insufficient nor necessary to tackle many real-life problems. The current wisdom seems to suggest that for real-world problem solving, it is necessary to make fuller use of content information including text and audio, and various kinds of contextual information, such as the user’s mobile device settings, social postings, check-in history etc., when available. This, for example, applies to social media and wellness research where a combination of text, visual, audio, health or other sensors, and public data are needed to fully analyze the problem. The second issue is the obser-vation that big multimedia application ideas hardly come from the multimedia research communities. For example, many recent innovative applications in video like contextual advertising, live situational sensing, real-time news gathering, online navigation, wear-able health devices, and personalized healthcare etc. have all come from the commer-cial world. While in research, we seem to barely even start on video research, as ob-served from the technical programs in recent ACM Multimedia and ACM ICMR confer-ences, where only a small fraction of visual papers is about video. This talk discusses issues in these two areas with examples, suggests directions to move forward as a research community, and outlines approaches to make our community more inclusive. The talk, however, will open up more questions than answers.</p>
            <h4>Bio</h4>
            <p>Dr. Chua is the KITHCT Chair Professor at the School of Computing, National Universi-ty of Singapore. He was the Acting and Founding Dean of the School during 1998-2000. Dr Chua's main research interest is in multimedia information retrieval and social me-dia analysis. In particular, his research focuses on the extraction, retrieval and ques-tion-answering (QA) of text, video and live media arising from the Web and social net-works. He is the Director of a multi-million-dollar joint Center between NUS and Tsing-hua University in China to develop technologies for live media search. The project will gather, mine, search and organize user-generated contents within the cities of Beijing and Singapore. His group participated regularly in TREC-QA and TRECVID evaluations in early 2000.</p>
            <p>Dr. Chua is active in the international research community. He has organized and served as program committee member of numerous international conferences in the areas of computer graphics, multimedia and text processing. He is the conference co-chair of ACM Multimedia 2005, ACM CIVR (now ACM ICMR) 2005, ACM SIGIR 2008, and ACM Web Science 2015. He serves in the editorial board of: ACM Transactions of Information Systems (ACM), Foundation and Trends in Information Retrieval (NOW), The Visual Computer (Springer Verlag), and Multimedia Tools and Applications (Kluwer). He is the Chair of steering committee of ICMR (International Conference on Multimedia Retrieval) and Multimedia Modeling conference series; and as member of International Review Panel of a large-scale research project in Europe. He is the co-Founder of two technology startup companies and an independent Director of a publicly listed company in Singapore.</p>
            <hr>
            <a name="keynote2"></a>
            <h3>Keynote 2: Dense Models from Videos: Can YouTube be the Font of All Knowledge Bases?</h3>
            <h4>June 25, Thursday</h4>
            <h4>Presenter</h4>
            <p>Michael Witbrock (Cycorp) </p>
            <div class="pull-right" style="margin-left: 20px;">
            <img class="img-responsive" src="img/keynote2.jpg" style="max-width:200px;">
            </div>
            <h4>Abstract</h4>
            <p>Many recent advances in computer science have been driven by the convergent availability of large numbers of data and of fast machines on which to analyze them. This availability has enabled us to acquire implicit partial models of the underlying gen-erators for the data and apply those models to tasks such as translation, transcription, and image captioning. To date, though, few if any of these models have been dense, in the sense of thoroughly modelling some aspect of the world in way that can facilitate any relevant task. Dense models should support: </p>
            <ul>
              <li>Prediction: What might happen next in this situation, or what might be true in the vicinity?</li>
              <li>Interpolation: What may have happened between these situations? What might be located between these things?</li>
              <li>Causal reasoning: Why did this happen?</li>
              <li>Purpose reasoning: What is this configuration of things for? For what purpose is that happening?  </li>
              <li>Task performance: The model should be able to aid (e.g.) a robot performing a domain task.</li>
              <li>Explanation: The model should be at a level that supports communication.</li>
            </ul>
            <p>In short, a dense model is the sort of model — including both implicit and explicit components — humans form about aspects of their worlds: aspects like meetings, plants, lawnmowers, rivers and kitchens. These models support pretty-much any kind of relevant reasoning.</p>
            <p>These are also the sorts of models that builders of large-scale“commonsense” knowledge bases have been working to construct. But, to date, although some such knowledge bases support particular instances of each kind of reasoning task, they do not approach doing so comprehensively, even within quite narrow domains. Although some work is being done on automating KB construction, this generally aims at breadth, ra-ther than density.</p>
            <p>Similarly, although machine vision and NLP researchers have long discussed the po-tential use of background knowledge in scene and text understanding, demonstrating that utility in any general way has been hampered by the vast incompleteness of availa-ble KBs. </p>
            <p>The time is ripe for a 5-10 year AI challenge problem in production of dense models directly from data. As a particular example, kitchens are somewhat limited in complex-ity, from a human point of view, and are densely modelled by most humans; we are not frequently surprised by what we find in a kitchen, or by what happens there. And we are not lacking for data; there are more than 6 million YouTube hits for “kitchen”, around 5 million for cooking. If each was a mere 1 minute long, this represents 22 years of kitch-en video. Dull perhaps, but also, presumably, enough grist for building a very dense model. </p>
            <p>The proposed challenge is this: to have computers automatically build, from just the vast amount of video found on the web, a sufficiently dense local world model to enable that video to be thoroughly understood for prediction, interpolation, explanation and other tasks.</p>
            <h4>Bio</h4>
            <p>Michael Witbrock has a PhD in Computer Science from Carnegie Mellon University and a BSc Hons in Psychology from Otago University. He currently is Vice President for Research at Cycorp. Before joining Cycorp, in 2001, to direct its knowledge formation and dialogue processing efforts, he had been Principal Scientist at Terra Lycos, working on integrating statistical and knowledge based approaches to understanding web user behavior, a research scientist at Just Systems Pittsburgh Research Center, working on statistical summarization, and a systems scientist at Carnegie Mellon on the Informedia visual and spoken document information retrieval project. His current research focuses on automated reading to inferentially-productive representations, application of back-ground knowledge to video retrieval and to reasoning about the molecular biology liter-ature, and automatic and semi-automatic knowledge capture and use, more broadly. He is author of numerous publications in areas ranging across computational linguistics, speech modelling and recognition, neural networks, automated inference, automated reading and multimedia information retrieval, and has dabbled in web browser design, genetic design and parallel computer architecture. As well as his technical work, Dr. Witbrock is very interested in entrepreneurship around AI and for social good, and in the social and economic outcomes of advances in AI. He is pursuing that latter interest, inter alia, via AI4Good.org.</p>
            <hr>
            <a name="keynote3"></a>
            <h3>Keynote 3: Is Real-World Visual Search Really Coming? </h3>
            <h4>June 26, Wednesday</h4>
            <h4>Presenter</h4>
            <p>Xian-Sheng Hua (Alibaba)</p>
            <div class="pull-right" style="margin-left: 20px;">
            <img class="img-responsive" src="img/keynote3.jpg" style="max-width:200px;">
            </div>
            <h4>Abstract</h4>
            <p>Visual search has been studied for decades since 1990s and it was called “con-tent-based image retrieval” in the beginning. It almost died in the early 21st century and then becomes very hot in recent years mainly due to the rapid development of dis-tributed computing, high-dimensional indexing, deep learning and big data analytical techniques. Many visual search research prototypes and preliminary products are avail-able to the public. However, is real-world visual search really coming? Have we solved all the big technical and non-technical challenges? Are semantic gaps and intention gaps still there, and do they really matter? Are people really using it and why do they want to use it? What are the users expecting? What is the right business model? Which direction that visual search is going towards? What are still missing? In this talk, we will discuss all these questions based on a real-world visual search engine that has a considerable number of users.</p>
            <h4>Bio</h4>
            <p>Dr Xian-Sheng Hua became a Researcher and Senior Director of Alibaba Group in April of 2015, leading the multimedia technology team in the Search Division. Before that, he was a senior researcher of Microsoft Research Redmond since 2013, worked on Web-scale image and video understanding and search, as well as related applications. He was a Principal Research and Development Lead in Multimedia Search for the Mi-crosoft search engine, Bing, since 2011, where he led a team that designed and deliv-ered leading-edge media understanding, indexing and searching features. He joined Microsoft Research Asia in 2001 as a researcher. Since then, his research interests have been in the areas of multimedia search, advertising, understanding, and mining, as well as pattern recognition and machine learning. He has authored or co-authored more than 250 research papers in these areas and has filed more than 90 patents. Dr Hua received his BS in 1996 and PhD in applied mathematics in 2001 from Peking University, Beijing. He served or is now serving as an associate editor of IEEE Transactions on Multimedia, an associate editor of ACM Transactions on Intelligent Systems and Technology, an edi-torial board member of Advances in Multimedia and Multimedia Tools and Applications, and an editor of Scholarpedia (multimedia category). He was vice program chair; work-shop organizer; senior TPC member and area chair; and demonstration, tutorial, and special session chairs and PC member of many more international conferences. He served as a program co-chair for IEEE ICME 2013, ACM Multimedia 2012, and IEEE ICME 2012, as well as on the Technical Directions Board of IEEE Signal Processing Society. He was honored as one of the recipients of the prestigious 2008 MIT Technology Review TR35 Young Innovator Award for his outstanding contributions to video search. He won the Best Paper and Best Demonstration Awards at ACM Multimedia 2007, the Best Poster Award at IEEE International Workshop on Multimedia Signal Processing 2008, the Best Student Paper Award at ACM Conference on Information and Knowledge Man-agement 2009, the Best Paper Award at International Conference on MultiMedia Mod-eling 2010, the best demonstration award at ICME 2014 and best paper award of IEEE Trans. On CSVT in 2014. He was named one of Global Entrepreneur's "Business Elites of People under 40 to Watch" in 2009.</p>
            <hr>
            <a name="keynote4"></a>
            <h3>Keynote 4: Trends of Multimedia Research and Application in Tencent Social Network</h3>
            <h4>June 26, Wednesday</h4>
            <h4>Presenter</h4>
            <p>Yongjian Wu (Tencent)</p>
            <div class="pull-right" style="margin-left: 20px;">
            <img class="img-responsive" src="img/keynote4.jpg" style="max-width:200px;">
            </div>
            <h4>Abstract</h4>         
            <p>On May 1st, 2015, Q-Zone users uploaded 650 million photos in one single day, which creates a new record and shows itself as one of the most influential photo platforms in China internet industry. Besides Q-Zone, there are many other platforms in Tencent with the massive data of multimedia, such as QQ, QQ music, Tencent Map and so on. Basing on these big platforms, BestImage team is one of the research teams in Tencent, who does research on big data of multimedia area and has made outstanding achieve-ments on applying research results into products.</p>
            <p>In this talk, firstly I’ll introduce the development of image processing in both acade-my and industry in these years. Secondly, I’ll introduce the multimedia business devel-opment in Tencent under the background of historical transition from PC internet to mobile internet. Thirdly, I’ll demonstrate the achievements in face and image field, and shows while maintaining our research result in advance, how we find good way to com-bine research and application in company. Fourthly, I’ll demonstrate how the positive interaction of data, technology and application, which plays a significant role in acceler-ating the team's development. In the last but not the least, I’ll introduce future plan for our team.</p>
            <h4>Bio</h4>
            <p>Yongjian Wu is the team manager of BestImage team and a senior research fellow of Social Network Platform Department in Tencent. He Joined in Tencent in 2008 and has been working on the multimedia research field, machine learning and high perfor-mance computing technology till now, and owns many international patents with the research results. With his leading on the research in multimedia, the research results have been widely used in many company-level products, such as Q-Zone, QQ Music, Tencent Map, Pitu and Webank, and have made many outstanding achievements inside and outside the company, such as ShangHai Technology Advanced Award, "Key Tech-nology Breakthough Award" of Tencent in two consecutive years, and also been report-ed by many public media like CCTV, 36Kr.com and LeiPhone.com.</p>
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