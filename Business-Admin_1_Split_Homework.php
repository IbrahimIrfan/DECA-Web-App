<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Business-Admin Exam 5</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. One of the main functions of the legal procedure is to</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. establish laws.</option><option value="B">B. enact legislation.</option><option value="C">C. resolve disputes.</option><option value="D">D. dissolve businesses.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: resolve disputes.</h5><h5>The legal procedure is the process of reviewing disputes or claims and resolving them
in a fair manner. Businesses are often involved in disputes with other entities, such as suppliers or
competitors. If a business believes it has been wronged by another, the business follows the appropriate
legal procedure to resolve the issue. Enacting legislation, establishing laws, and dissolving businesses
are not the main functions of the legal procedure.
</h5></div><h5 id='q2'>2. Marsha wants to invest her savings in a business. However, she wants to protect all of her personal
assets. Which type of business ownership would be most appropriate for Marsha?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Sole proprietorship</option><option value="B">B. Franchise</option><option value="C">C. Partnership</option><option value="D">D. Corporation</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is D: Corporation</h5><h5>A corporation is a form of ownership owned by stockholders who have purchased stock.
The liability of each owner is limited to the amount invested. A franchise is an agreement between a
parent company and a franchisee to distribute goods and services. A partnership is a form of business
ownership owned by two or more persons. A sole proprietorship is a form of business ownership in which
the business is owned by one person.
</h5></div><h5 id='q3'>3. Which of the following statements regarding company policies is true:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Company policies identify general company rules.</option><option value="B">B. Company policies and procedures are the same thing.</option><option value="C">C. Company policies describe emergency measures.</option><option value="D">D. Company policies identify very specific employee actions.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: Company policies identify general company rules.</h5><h5>Company policies are rules made in advance by
management to assist employees in decision making. They are typically general rather than specific in
nature and relate to the company's overall vision. Company policies also describe whom the rules apply
to and why they exist. Company policies and procedures are not the same; company procedures provide
more detailed step-by-step plans of how to carry out policies and processes. Company procedures
identify very specific employee actions, such as what to do in the event of an emergency.
</h5></div><h5 id='q4'>4. Before an individual can follow verbal directions, s/he must first be ready to</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. listen.</option><option value="B">B. write.</option><option value="C">C. speak.</option><option value="D">D. understand.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: listen.</h5><h5>Speaking and/or writing does not help a person to follow verbal directions. Following directions
can only be accomplished by listening to what the other person has to say and interpreting its meaning.
Understanding is the result of good listening.
</h5></div><h5 id='q5'>5. What is important to do when giving verbal directions to make sure the audience understands?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Maintain eye contact</option><option value="B">B. Ask questions</option><option value="C">C. Use gestures</option><option value="D">D. Explain information</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: Ask questions</h5><h5>When giving verbal directions, it is important to regularly ask questions to make sure the
audience understands the directions. Asking if listeners understand a certain word or phrase will provide
feedback that indicates understanding. Many times, listeners will not admit that they do not understand,
and the only way to find out is to ask questions. Maintaining eye contact, using gestures, and explaining
information are techniques for giving verbal directions. However, they will not indicate if the audience
understands the directions.
</h5></div><h5 id='q6'>6. It is most appropriate for businesspeople to use complex, technical jargon when they are</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. introducing a friend to a business associate.</option><option value="B">B. greeting new customers.</option><option value="C">C. speaking with coworkers.</option><option value="D">D. informally conversing with an acquaintance.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is C: speaking with coworkers.</h5><h5>Jargon is a specialized language known only to a certain group of people.
Industries and companies often use jargon that is meaningful to their businesses and may not be easily
understood by people outside their industries or companies. Coworkers are more likely to use jargon
because they are familiar with the terms and their meanings or applications. New customers, friends,
business associates, and acquaintances may not be familiar with a specific industry's jargon.
</h5></div><h5 id='q7'>7. You have a customer on the phone who always ends up talking about his personal life for far too long.
Today, he's telling you a long story about his recent vacation. However, you have several other calls on
the line and tons of work to do. How should you handle this situation?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Tell the customer you don't have time to talk about personal issues, so he should stay on topic.</option><option value="B">B. Tell the caller you're happy to hear about his vacation, but you have to take another call.</option><option value="C">C. Transfer the call to someone else who has more time to talk to the customer.</option><option value="D">D. Talk to the customer as long as he wants to appear more interested.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: Tell the caller you're happy to hear about his vacation, but you have to take another call.</h5><h5>It's important to
be as professional and polite as possible, even if a talkative caller is taking up too much of your work
time. By saying something courteous yet assertive, like, "I'm happy to hear about your vacation, but I
have to take another call now," you're letting the caller know that you appreciate his personal stories, but
that you also have work to do. This customer brings money to your business, so you don't want to be
rude or risk offending him. You shouldn't tell the customer that you don't have time for him, even if he's
just telling personal stories. You also shouldn't transfer the call to another person, as that would be
considered rude both to the customer and your coworker. Although it's important to sound interested
when you're talking to a customer, you shouldn't talk to them for too long, especially not if you have
important work to do. It's necessary to strike a good balance between making a customer connection and
asserting yourself.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this
policy up to and including disqualification of competitors and chapters from further participation.

Test 1106

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

1

1. One of the main functions of the legal procedure is to</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. appoint a leader.</option><option value="B">B. try to socialize.</option><option value="C">C. interrupt a speaker.</option><option value="D">D. be aggressive.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: be aggressive.</h5><h5>negotiate members' grievances with management. The National Labor Relations Board is a
federal agency concerned with unfair labor practices.
</h5></div><h5 id='q9'>9. What should a business employee do before writing an informational message?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Identify the audience</option><option value="B">B. Plan a response</option><option value="C">C. Wait for feedback</option><option value="D">D. Select the medium

®
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is A: Identify the audience</h5><h5>Before writing informational messages, business employees need to know who the
audience is so they can present the message in a way that is relevant to that audience. For example, one
audience might be the business's customers while another audience might be the business's investors.
The message a business employee sends to customers is very different from the message that will be
sent to investors. Before writing informational messages, employees do not need to plan a response or
wait for feedback. In most cases, the message will generate a response or feedback from those who read
it. The medium is the written message.
</h5></div><h5 id='q10'>10. Which of the following are characteristics of a well-written executive summary:</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Error free, simple, and creative</option><option value="B">B. Clear, concise, and error free</option><option value="C">C. Creative, concise, and informal</option><option value="D">D. Concise, informal, and error free</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: Clear, concise, and error free</h5><h5>An executive summary is a section of a formal report that highlights the
most important information that appears in the body of the document. A well-written executive summary
should be clear, concise, and error free. An executive summary should be easy to read and simple to
understand. Because an executive summary is part of a formal report, it should follow a formal format. An
executive summary does not need to be creative—its primary purpose is to inform the reader about
essential facts.
</h5></div><h5 id='q11'>11. What information should be included in the recommendations section of an analytical report?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Benefits and risks</option><option value="B">B. Product characteristics</option><option value="C">C. Budgetary constraints</option><option value="D">D. Project status data</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: Benefits and risks</h5><h5>An analytical report is a document that explains and evaluates an issue, opportunity,
or problem. An important aspect of developing an analytical report involves providing recommendations
for a course of action related to the issue, opportunity, or problem. When providing recommendations, the
writer should clearly state both the benefits and risks associated with the recommendation, so the
reader(s) can make informed business decisions. Analytical reports may discuss a particular product, a
project, or the business's budget, depending on the report topic.
</h5></div><h5 id='q12'>12. Which of the following statements would be placed in the introductory section of a research report:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. The purpose of this study is to determine why sales have been decreasing for three consecutive
quarters.</option><option value="B">B. Based on the previously stated findings, it is recommended that the XYZ Company revise its
operating budget.</option><option value="C">C. The survey consisted of 250,600 respondents from the northern region of the country.</option><option value="D">D. The statistics indicate that the business is losing up to 15% of its market share to new
competitors.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is A: The purpose of this study is to determine why sales have been decreasing for three consecutive
quarters.</h5><h5>A research report is a written document that summarizes an investigation related to a particular
issue or problem. A comprehensive research report contains several sections. In the introductory section
of the research report, the writer identifies the problem and the purpose of the report, such as declining
sales. Recommendations are detailed at the end of the report. Details about the research process, such
as survey data, are addressed in the methodology section of the research report. Statistics are included
in the results section of the research report.
</h5></div><h5 id='q13'>13. Alex is very skilled in building positive customer/client relations because he can express himself without
offending others. Alex would be described as having</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. tact.</option><option value="B">B. integrity.</option><option value="C">C. character.</option><option value="D">D. generosity.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: tact.</h5><h5>Tact is the ability to say or do the right thing in all circumstances. Tact helps to build good
customer/client relations because it shows courtesy and respect to others. Generosity is a willingness to
give of oneself or one's means. Character is the combination of traits or the reputation of an individual.
Integrity is adhering to an established set of personal ethics.
</h5></div><h5 id='q14'>14. Kate's coworker Jack is meeting with a very important German client tomorrow. Kate has been to
Germany several times, and tells Jack that German businesspeople tend to be very formal and serious in
business situations. After learning this information, Jack now knows that he should avoid</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. using titles.</option><option value="B">B. using humor.</option><option value="C">C. shaking hands.</option><option value="D">D. making eye contact.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: using humor.</h5><h5>Because Germans tend to be very formal and serious about their business, they do not find
it appropriate to use humor during business situations. It is appropriate to use titles, shake hands, and
make eye contact with Germans in business situations. These behaviors are respectful to Germans.
</h5></div><h5 id='q15'>15. Interpreting business policies to customers is usually easier if the business has created a ____________
atmosphere.</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. remote</option><option value="B">B. distant</option><option value="C">C. friendly</option><option value="D">D. superior</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: friendly</h5><h5>Treating customers in a friendly manner will make them feel more comfortable. They will feel
that the business has a personal interest in them and be more accepting of any explanation of policies.
Distant, remote, and superior are terms that refer to an unfriendly and cold atmosphere that would make
customers feel uncomfortable.
</h5></div><h5 id='q16'>16. Combining steel, glass, and other raw materials into a vehicle is an example of __________ utility.</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. time</option><option value="B">B. place</option><option value="C">C. form</option><option value="D">D. possession</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: form</h5><h5>Form utility means altering or changing the shape of a product to make it more useful to the
consumer, as in transforming various raw materials into cars and trucks. Time utility involves making
products available at the time they are wanted or needed by consumers. Place utility occurs when goods
and services are available at the place (location) they are wanted or needed by consumers. Possession
utility is created when ownership of a product is transferred from the seller to the person who will use it.
</h5></div><h5 id='q17'>17. Monica has always loved to work with preschool children. She would like to open a day care center in her
area. However, she does not have enough capital saved at this time. What business activity should
Monica address first?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Accounting</option><option value="B">B. Information management</option><option value="C">C. Financial analysis</option><option value="D">D. Marketing

</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: Financial analysis</h5><h5>This is the process of planning, maintaining, monitoring, controlling, and reporting the
use of financial resources. Aspects of this activity involve obtaining funds and using them to achieve the
goals of the business. The accounting activities keep and interpret financial records. Information
management is the process of coordinating the resources pertaining to business knowledge, facts, or
data. Marketing is the process of creating, communicating, and delivering value to customers and
managing customer relationships in ways that benefit the organization and its stakeholders.
</h5></div><h5 id='q18'>18. “Brain drain” occurs when</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. a country loses talented employees to better opportunities overseas.</option><option value="B">B. consumers spend too much time shopping online.</option><option value="C">C. businesses outsource jobs to other countries.</option><option value="D">D. people who speak different languages try to communicate with each other.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: a country loses talented employees to better opportunities overseas.</h5><h5>"Brain drain" occurs when
employees leave their native countries for better jobs in other nations. It can have a negative effect on
developing countries struggling to build strong economies. "Brain drain" does not refer to online
shopping, offshoring, or communication between people who speak different languages.
</h5></div><h5 id='q19'>19. Which of the following will foster a business's ability to adapt to changing markets:</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Authoritarian leadership</option><option value="B">B. Reactive management</option><option value="C">C. Proactive management</option><option value="D">D. Conservative leadership</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: Proactive management</h5><h5>To thrive and grow, businesses must be willing to accept and adapt to changes
in the marketplace. This requires a proactive attitude by management, which involves looking for new
market opportunities and taking quick action to accommodate trends. Reactive management involves
taking action after an occurrence. Authoritarian management (rather than leadership) is a management
style in which managers prefer to exercise a high degree of control over their subordinates. Conservative
leaders tend to favor tradition and shy away from drastic change.
</h5></div><h5 id='q20'>20. Which of the following is most likely to be a result of competition:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Development of new products</option><option value="B">B. Reduction in product quality</option><option value="C">C. High prices</option><option value="D">D. More monopolies</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: Development of new products</h5><h5>Competition encourages businesses to develop new products in order to
meet consumers' needs. Businesses feel that the company which best satisfies consumers will be the
most successful company. Competition helps to control prices because businesses must keep prices in
line with production costs in order to be competitive. Businesses must also maintain or improve product
quality to be competitive. A monopoly exists when a market is controlled by one supplier, and there are
no substitute goods or services readily available. No competition exists in a true monopoly.
</h5></div><h5 id='q21'>21. Which of the following is a negative effect on businesses of government regulation:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. The use of resources is regulated.</option><option value="B">B. Unfair trade practices are prohibited.</option><option value="C">C. Additional expense and inefficiency are experienced.</option><option value="D">D. Patents, trademarks, and copyright protection are provided.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: Additional expense and inefficiency are experienced.</h5><h5>They occur because businesses need large
numbers of employees just to handle government requirements. Some businesses become so involved
in meeting government requirements that they do not operate efficiently. Property protection, regulation
of resources, and prohibition of unfair trade practices are all positive effects of government regulation.
</h5></div><h5 id='q22'>22. What organization helps union locals to become established, recruit new members, and negotiate with
management?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Shop stewards</option><option value="B">B. Federal government</option><option value="C">C. National union</option><option value="D">D. National Labor Relations Board</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: National union</h5><h5>This organization exercises a great deal of control over local unions. For instance, local
rules must always be in line with those established on the national level. National unions serve the locals
by promoting union growth, recruiting new members, helping to establish new locals, and negotiating with
management. Neither federal nor state government would be involved in union establishment. Shop
stewards negotiate members' grievances with management. The National Labor Relations Board is a
federal agency concerned with unfair labor practices.
</h5></div><h5 id='q23'>23. To calculate total revenue, a business multiplies the number of units sold by</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. average price per unit.</option><option value="B">B. marginal revenue.</option><option value="C">C. fixed costs.</option><option value="D">D. marginal costs.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: average price per unit.</h5><h5>Total revenue is one of the two key measures of revenue that businesses use to
decide what amount of output will produce the greatest profits. It is calculated by multiplying the number
of units sold by the average price per unit. Marginal revenue, on the other hand, is the extra revenue
associated with the production and sale of one additional unit of output. Marginal revenue is not used to
calculate total revenue. Fixed costs are costs that do not change, even if output is zero, and are not used
to calculate total revenue. Marginal costs are the extra costs incurred when a business produces one
additional unit of a product. Marginal costs are not used to calculate total revenue.
</h5></div><h5 id='q24'>24. The United States' business culture tends to embrace self-reliance and personal accomplishment, which
are characteristics of</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. an individualist society.</option><option value="B">B. the concept of collectivism.</option><option value="C">C. a long-term orientation.</option><option value="D">D. a team-oriented mindset.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: an individualist society.</h5><h5>An individualist society is one in which group ties are loose and everyone is
expected to take care of himself/herself. When a person takes care of herself/himself, s/he is being selfreliant. Because self-reliant people are independent, they take pride in accomplishing goals on their own.
Collectivism embraces interdependence, group affiliation, and team orientation. A long-term oriented
society focuses on future rewards and values actions such as persistence.
</h5></div><h5 id='q25'>25. During a meeting with German businesspeople, an American businessperson introduced a change to the
agenda. Because the German businesspeople were caught off guard by this change, they became upset,
which indicates that German culture tends to</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. have a low tolerance for uncertainty.</option><option value="B">B. be highly ethnocentric.</option><option value="C">C. take greater risks than other cultures.</option><option value="D">D. prefer a less-structured environment.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: have a low tolerance for uncertainty.</h5><h5>Cultures that have numerous rules and like to know what to expect
tend to have a low tolerance for uncertainty and ambiguity. Because these cultures prefer structure and
order, they do not easily accept new ideas or change, nor do they feel comfortable taking risks. The
example does not indicate that Germans are highly ethnocentric, which is the belief that your own culture
is naturally better than other cultures.
</h5></div><h5 id='q26'>26. Because Costa Ricans do not like to be kept waiting, it is important for businesspeople to</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. arrive at meetings on time.</option><option value="B">B. schedule frequent meeting breaks.</option><option value="C">C. discuss business during lunch.</option><option value="D">D. comply with local ordinances.

</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: arrive at meetings on time.</h5><h5>The way a culture views the concept of time is an important consideration
when conducting international business. In some cultures, punctuality is very important; therefore, it is
important to arrive on time for business meetings or social functions. Meeting breaks, luncheon meetings,
and government ordinances do not relate to keeping people waiting.
</h5></div><h5 id='q27'>27. Which of the following is an example of a Saudi Arabian custom that relates to gender:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Friday is the day of rest.</option><option value="B">B. Women are not permitted to drive a car.</option><option value="C">C. The “thumbs up” symbol is offensive.</option><option value="D">D. It is illegal to eat pork.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: Women are not permitted to drive a car.</h5><h5>Different cultures have different expectations and rules in
relation to gender. In Saudi Arabia, women are not permitted to drive a car. The day of rest is often
associated with religious traditions. Laws regarding the consumption of pork are related to religious
practices. The “thumbs up” symbol is a form of nonverbal communication.
</h5></div><h5 id='q28'>28. A businessperson offended a foreign client when s/he continuously made an insulting gesture. As a
result, the client severed ties with the businessperson's company. This situation could have been avoided
if the businessperson had</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. made an effort to learn the country's language before the meeting.</option><option value="B">B. asked the client why s/he was upset during the meeting.</option><option value="C">C. taken the time to learn about the client's culture before the meeting.</option><option value="D">D. sent a letter of apology to the country's ambassador after the meeting.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: taken the time to learn about the client's culture before the meeting.</h5><h5>Because customs and gestures
differ by country, businesspeople must understand and monitor their body language, when conducting
business in other countries. Certain gestures may be friendly in some cultures and offensive or
disrespectful in other cultures. If the businessperson had taken time to learn about the client's country
and culture, s/he could have avoided making the offensive gesture altogether. There is not enough
information provided to determine if the client expressed his/her discomfort—verbally or nonverbally—
about the businessperson's offensive behavior during the meeting. Gestures are nonverbal behaviors
rather than a verbal or language barrier. A letter of apology would not have prevented the
businessperson from making the gesture in the first place. A letter of apology may have helped smooth
things over with the client, but the letter should have been sent directly to the client rather than the
country's ambassador.
</h5></div><h5 id='q29'>29. Refusing to do things you really don't want to do is __________ your self-esteem.</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. not good for</option><option value="B">B. harmful to</option><option value="C">C. of no help to</option><option value="D">D. good for</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: good for</h5><h5>Not doing things you don't want to do is one way of being responsible to yourself. It is as good
for your self-esteem as doing the things that make you feel good about yourself.
</h5></div><h5 id='q30'>30. As the manager of her own company, Brooke is able to guide the company and its employees in a
desired manner. Brooke possesses the trait of</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. leadership.</option><option value="B">B. creativity.</option><option value="C">C. empathy.</option><option value="D">D. initiative.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: leadership.</h5><h5>Leadership is one type of personality trait that will contribute to success in personal and
professional endeavors. Leadership is the ability to guide or direct the actions of others. The ability to
guide employees is an important aspect of managing a company's employees. Creativity is the ability to
generate unique ideas, approaches, solutions, etc. Empathy is the ability to put oneself in another
person's situation. Initiative is the willingness to act without having to be told to do so.
</h5></div><h5 id='q31'>31. What is often a positive result of accepting responsibility for a poor decision?</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. You reinforce skeptical attitudes.</option><option value="B">B. You control others' opinions.</option><option value="C">C. You demonstrate self-importance.</option><option value="D">D. You gain others' respect.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: You gain others' respect.</h5><h5>Most people do not like to make mistakes, but everyone makes them from time
to time. It's the way that a person handles a mistake or poor decision that is important. Taking
responsibility means admitting the wrongdoing, accepting the consequences of the decision, and trying to
do better the next time. When a person admits making a mistake, s/he is likely to gain the respect of
others and gain trust. When people do not admit their mistakes or they blame others for mistakes, they
are showing that they value their well-being over others, which is demonstrating self-importance. Most
people do not trust individuals who do not accept responsibility for their actions or decisions, and are
likely to be skeptical about those individuals' true motives. People cannot control others' opinions.
</h5></div><h5 id='q32'>32. To manage their work commitments in a timely manner, businesspeople should</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. estimate the time that it takes them to perform their tasks.</option><option value="B">B. ask their coworkers to help them with routine activities.</option><option value="C">C. work on enjoyable tasks before tackling the unpleasant tasks.</option><option value="D">D. identify shortcuts that they can take get their work done quickly.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: estimate the time that it takes them to perform their tasks.</h5><h5>When businesspeople estimate the time that it
takes to perform their tasks, it helps them to plan, prioritize, and manage their workloads effectively.
Planning their work helps businesspeople avoid scheduling activities too close together, which can affect
the quality of their work. For example, if it takes a businessperson one hour to prepare a status report
that is due at 4:00 p.m., s/he should not start the report at 3:30 p.m. Because coworkers have their own
work commitments, they only should help in emergencies with management's approval. Pleasant tasks
are not always priorities for businesspeople. Taking shortcuts and performing work too quickly often
results in errors and low-quality work.
</h5></div><h5 id='q33'>33. As a new employee, you receive constructive criticism about your job performance. This criticism is
designed to</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. improve your ability to do the job.</option><option value="B">B. show your lack of ability.</option><option value="C">C. hurt and discredit you.</option><option value="D">D. demonstrate the supervisor's superior job knowledge.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: improve your ability to do the job.</h5><h5>Constructive criticism points out mistakes for the purpose of helping
someone to improve. It is your responsibility to accept the criticism and to improve your job performance.
Showing you your lack of ability, demonstrating the supervisor's superior job knowledge, or trying to hurt
or discredit you are examples of destructive criticism.
</h5></div><h5 id='q34'>34. Effective managers involve employees in planning changes because people who help to initiate changes
are usually more __________ to those changes.</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. resigned</option><option value="B">B. receptive</option><option value="C">C. resistant</option><option value="D">D. indifferent

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: receptive</h5><h5>Most people are resistant to change out of fear or insecurity. They are, however, more likely
to accept change that they have helped to create. Employees feel a sense of responsibility when involved
in the process of making changes. Consequently, smart business managers frequently involve
employees in the decision-making process leading up to the change. Employees who have had no input
may react negatively by being indifferent, resistant, or resigned.
</h5></div><h5 id='q35'>35. During a negotiation, a non-verbal behavior that indicates a negotiator's high level of confidence is</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. foot tapping.</option><option value="B">B. direct eye contact.</option><option value="C">C. arm crossing.</option><option value="D">D. defensive facial expression.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: direct eye contact.</h5><h5>During a negotiation, a person is usually more credible and successful in getting what
s/he wants if s/he conveys self-confidence—a belief in his/her own talents, skills, and objectives. To
convey self-confidence, a person should speak clearly, maintain direct eye contact, and make sure that
s/he does not engage in negative body language, such as nervous foot tapping, arm crossing, or
defensive facial expressions.
</h5></div><h5 id='q36'>36. Which of the following is an indication that employees might be experiencing a lot of stress:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Drinking one or two cups of coffee a day</option><option value="B">B. Being irritated when dealing with customers</option><option value="C">C. Concentrating on doing the job correctly</option><option value="D">D. Having occasional conversations with coworkers</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Being irritated when dealing with customers</h5><h5>Interaction with customers is a major cause of stress in the
workplace. Customers are not always polite and understanding. Sometimes they are demanding,
unrealistic, and angry. Employees who are not experiencing a lot of stress usually are able to handle
these types of situations with customers and resolve the problem. However, when employees are under
a lot of stress, they often feel annoyed and irritated when dealing with customers—even those customers
who are behaving appropriately. Routinely feeling this way is an indication that an employee is stressed,
in which case management should take steps to help the employee reduce the level of stress.
Concentrating on doing the job correctly, drinking one or two cups of coffee a day, and having occasional
conversations with coworkers are not indications that employees are under a lot of stress.
</h5></div><h5 id='q37'>37. Henry's been at his current job for five years. He doesn't really like it but doesn't want to look for a new
job because he's so used to this one. Henry avoids adapting because of</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. fear.</option><option value="B">B. contentment.</option><option value="C">C. lack of control or trust.</option><option value="D">D. a desire for change.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: contentment.</h5><h5>Adapting to new circumstances isn't always easy. Many people avoid trying new things at
all costs, even if it means staying in the same job, position, or town for years. In Henry's case, he doesn't
want to adapt to a new job because of contentment. He doesn't want to stretch, try new things, or get out
of his comfort zone. This attitude might be easy, but it means his job situation will never change or get
any better. Henry is not refusing to adapt because of fear or lack of control or trust. A desire for change is
not a reason that people refuse to adapt.
</h5></div><h5 id='q38'>38. Naya truly cares about her coachee, Jamie, and she wants Jamie to succeed. Which of the following
coaching characteristics does Naya illustrate:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Positivity/Enthusiasm</option><option value="B">B. Humility</option><option value="C">C. Flexibility</option><option value="D">D. Genuine concern for others</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Genuine concern for others</h5><h5>Coaching involves working hard to make a positive change in someone's
life, and it's hard to do that unless you really want to help. Naya wants Jamie to succeed because she is
genuinely concerned. Coaches who possess humility admit that they don't know everything and own up
to their mistakes. Coaches who are flexible are able to accept changes. Positivity and enthusiasm involve
keeping coachees excited about their goals.
</h5></div><h5 id='q39'>39. How does empathy help coworkers to be fair to each other?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Empathy gives coworkers the ability to learn a job quickly.</option><option value="B">B. Coworkers with empathy are better able to understand others.</option><option value="C">C. Coworkers with empathy are not likely to have disagreements.</option><option value="D">D. Empathy helps coworkers to understand legal guidelines.</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is B: Coworkers with empathy are better able to understand others.</h5><h5>Empathy is the ability to put yourself in
another person's place. When you can "walk in someone else's shoes," even though you have not had
the same experiences, you are better able to understand and to get along with that person. Empathy
cannot prevent disagreements, help workers to understand legal guidelines, or enable them to learn a job
quickly.
</h5></div><h5 id='q40'>40. For an investment to yield positive results at the end of the investment period, the earnings should</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. grow by at least ten percent.</option><option value="B">B. exceed the rate of inflation.</option><option value="C">C. be accrued on a debt security.</option><option value="D">D. be documented appropriately.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: exceed the rate of inflation.</h5><h5>When making investments, it is important to consider the time value of
money, which is the difference between the money's current purchasing power in relation to its
purchasing power at a future date. Earnings from investments can come in different forms, such as
accumulated interest from debt securities or dividends from equity securities. At the end of the
investment period, a successful investment will yield more money than the investor started with.
However, it is important to consider the rate of inflation—which is an increase in prices of goods and
services. If inflation increases more rapidly than the investment earns (e.g., 10%) during the investment
period, then the value of money earned will not yield the desired results. Documents and forms do not
affect the time value of money.
</h5></div><h5 id='q41'>41. Regular credit accounts are sometimes called open accounts because they allow</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. first-time credit users to buy without having a credit check.</option><option value="B">B. credit users to buy at any time during a set period.</option><option value="C">C. credit users to make minimum payments any time during the month.</option><option value="D">D. long-time credit users to make purchases without finance charges.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: credit users to buy at any time during a set period.</h5><h5>This period is usually 30 days. At the end of that time,
the person or business is expected to pay the entire amount that is due. Most credit accounts require a
credit check of first-time or regular credit users. Having a credit account for a long time does not eliminate
finance charges if the customer does not pay the account according to the account's requirements.
</h5></div><h5 id='q42'>42. What do many individuals establish when planning for future financial needs?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Living will</option><option value="B">B. College fund</option><option value="C">C. Emotional intelligence</option><option value="D">D. A work history</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: College fund</h5><h5>In many cases, paying for college is a future financial need for which many individuals and
married couples plan. In order to make sure sufficient money will be available to pay for college,
individuals often establish a college fund. This may be set up with a bank or an investment company.
People often set aside a certain amount to invest on a monthly basis so the fund will have a certain value
by the time it is needed to pay college expenses. A living will involves a person's wishes concerning
medical issues. A work history is a list of jobs a person has had during his/her life. Emotional intelligence
is the ability to recognize and manage emotions in ourselves and in others.
</h5></div><h5 id='q43'>43. Ian's employer electronically places Ian's paycheck directly into his bank checking account every pay
period. In what column on Ian's bank statement will he find these transactions?</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Deposits and debits</option><option value="B">B. Withdrawals and debits</option><option value="C">C. Deposits and credits</option><option value="D">D. Withdrawals and credits

</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is C: Deposits and credits</h5><h5>A bank statement is a summary of all transactions that occur for a certain period of
time, usually one month. The bank statement will indicate the day, amount, and transaction type on the
statement. The account holder compares the bank statement with his/her checkbook to determine
problems or discrepancies. Ian's employer is electronically putting his paycheck into his account;
therefore, the amount will be recorded as a deposit (credit) since money is being added to the account on
Ian's behalf. The withdrawals and debits column on the bank statement records all of Ian's withdrawals
(debits). Ian bills are located in this column—rent, car payment, groceries, etc.
</h5></div><h5 id='q44'>44. Which of the following is the most likely action that the government takes when a person misses the
deadline for filing his/her income tax return:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Penalty</option><option value="B">B. Refund</option><option value="C">C. Extension</option><option value="D">D. Allowance</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Penalty</h5><h5>A penalty is a punishment. The government depends on income tax to support public programs.
When people do not provide income tax information when it is needed, the government often imposes a
penalty, usually a fine or fee. Ongoing failure to report income can result in imprisonment. The
government does not offer a refund or allowance for missing an important deadline. However, a person
can file for an extension to avoid being penalized for missing a filing deadline.
</h5></div><h5 id='q45'>45. The section of the marketing plan that should address where the business will be located is the
__________ section.</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. promotion</option><option value="B">B. price</option><option value="C">C. product</option><option value="D">D. place</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is D: place</h5><h5>Place decisions also include where products or supplies will be purchased and how the inventory
of products or supplies will be managed. The price section should identify the range of prices to be
offered. The promotion section should describe how efforts will be coordinated to increase sales. The
product section should describe the quality, variety, and style of goods or services sold by the business.
</h5></div><h5 id='q46'>46. Two employees used a business's computerized accounting system to change some records. They were
able to steal $50,000 from the business because the accounting system lacked which of the following:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Protection from theft and fraud</option><option value="B">B. An affordable price</option><option value="C">C. A manual system as backup</option><option value="D">D. Printed financial statements</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Protection from theft and fraud</h5><h5>The accounting system should be set up in a way that makes it difficult
for employees to gain access to the system and make changes to the information. The cost of operating
the system and the capability to generate printed financial statements are not related to the issue of theft.
A business would not be likely to maintain both a computerized and a manual accounting system.
</h5></div><h5 id='q47'>47. An estimate of a business's income and expenses for a specified period of time is a(n)</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. income statement.</option><option value="B">B. report.</option><option value="C">C. balance sheet.</option><option value="D">D. budget.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: budget.</h5><h5>Budgets are based on reports of figures recorded in previous years. A balance sheet is a
summary of a business's assets, liabilities, and capital at a particular point in time. An income statement
provides information about a company's profits and losses.
</h5></div><h5 id='q48'>48. What is an indicator of strong organizational ethics?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Refusal to accept responsibility</option><option value="B">B. Overpromising</option><option value="C">C. Underperforming</option><option value="D">D. High trust and mutual respect</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: High trust and mutual respect</h5><h5>Human-resources managers play a significant role in ensuring the
existence and adherence to organizational ethics. In fact, they set the standard for ethical behavior within
their organization and serve as examples for other employees. Indicators of strong organizational ethics
include high trust and mutual respect, complete information, open discussion of different options, and
concrete goals. Overpromising, underperforming, and a refusal to accept responsibility are indicators of
poor ethics.
</h5></div><h5 id='q49'>49. A computer program that captures the knowledge of experienced workers is known as a(n)</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. expert system.</option><option value="B">B. intranet.</option><option value="C">C. spreadsheet.</option><option value="D">D. decision support system.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: expert system.</h5><h5>An expert system captures the knowledge of experienced workers from both within and
outside an organization. It can be used to guide employees when they encounter certain situations or
problems. An intranet is an organization's "internal Internet." A spreadsheet is simply a software program
for arranging figures in rows and columns. A decision support system is a computer program that draws
on gathered knowledge to help managers improve their decision-making skills.
</h5></div><h5 id='q50'>50. Because Robert is up for a promotion and wants to impress his manager, he will not share with his
coworkers the tacit knowledge that helps him efficiently perform his job. Robert's reason for not sharing
the information relates to</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. inevitable disclosure.</option><option value="B">B. personal gain.</option><option value="C">C. privacy issues.</option><option value="D">D. group cohesiveness.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is B: personal gain.</h5><h5>Robert possesses certain knowledge that may help other employees perform their jobs
more efficiently, which might improve the group's cohesiveness and teamwork. Because Robert is
purposely withholding this information, he is more concerned with his personal career advancement than
he is with helping the company improve its performance. Inevitable disclosure is a concept that suggests
that workers are likely to intentionally or unintentionally share their current employers' trade secrets with
future employers. Inevitable disclosure and privacy are not reasons why Robert is unwilling to share his
knowledge with coworkers.
</h5></div><h5 id='q51'>51. What do companies often use to assign and track various business tasks?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Surveillance system</option><option value="B">B. Customer database</option><option value="C">C. Accountability matrix</option><option value="D">D. Magnetic cards

</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: Accountability matrix</h5><h5>An accountability matrix is a table that assigns tasks to workers and tracks the
workers' progress in relation to various business or project activities. Accountability matrices are
components of project-management software. Businesses may design their own accountability matrices
through word-processing or spreadsheet applications. A customer database is a central location in which
the business records and maintains information about its customers. A surveillance system consists of
audio/visual equipment that is used to monitor various activities. Magnetic cards (e.g., debit cards, credit
cards) contain data that can be read by electronic devices. Businesses do not use customer databases,
surveillance systems, and magnetic cards to assign and track various business tasks.
</h5></div><h5 id='q52'>52. Corsica Steel Mill has developed a new process to reduce the time it takes to complete a phase of
production. To legally protect this new process from unauthorized use, the company should obtain a</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. trade name.</option><option value="B">B. copyright.</option><option value="C">C. trademark.</option><option value="D">D. patent.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is D: patent.</h5><h5>Intellectual property is intangible business assets that result from thinking processes. Businesses
can obtain legal protection of their intellectual property from the government. A patent is legal protection
for a product or process, such as a production process. The patent is granted to the inventor or owner for
a specific number of years and is a legal means of preventing the product from being recreated and
distributed by unauthorized entities. Copyrights legally protect written documents and artistic
compositions. A trademark is legal protection for a symbol, design, or word (name) that a business uses
to identify its brand.
</h5></div><h5 id='q53'>53. The belief that profitable sales volume will result from giving customers quality products at fair and
reasonable prices is part of the</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. consumers' movement.</option><option value="B">B. planning process.</option><option value="C">C. marketing mix.</option><option value="D">D. marketing concept.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is D: marketing concept.</h5><h5>The marketing concept expresses a philosophy of conducting business that is based
on the belief that all business activities should be aimed toward satisfying consumer wants and needs
while achieving company goals. Product planning, pricing, promoting, and distributing goods and services
are elements of the marketing mix. The consumers' movement refers to organized efforts by consumers
to establish fairness, quality, and safety in the marketplace.
</h5></div><h5 id='q54'>54. Which of the following is the most efficient tool for gathering external information that businesses need:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Internet</option><option value="B">B. Library</option><option value="C">C. Software</option><option value="D">D. Textbooks</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: Internet</h5><h5>The Internet is a worldwide network of computers that enables users to access information and
communicate with others. Many businesses use the Internet to obtain needed external information
efficiently. For example, businesses can access the websites of governmental agencies as well as
competitors to find information about specific issues. This is a fast and efficient way to obtain information
from a variety of sources without needing to visit the library and look through printed materials such as
textbooks. Software instructs computers to perform specific operations. Not all software is used to obtain
information.
</h5></div><h5 id='q55'>55. Which of the following types of information should a business keep on file indefinitely:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Cancelled checks</option><option value="B">B. Federal income tax returns</option><option value="C">C. Invoices</option><option value="D">D. Credit card statements</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: Federal income tax returns</h5><h5>The IRS suggests there are some records that a company should keep for
the life of the business. These records include federal income tax returns. Some other types of business
documents don't need to be kept as long. Documents such as cancelled checks and invoices only need
to be kept about six or seven years, while credit card statements only need to be retained for a year. It's
important to keep documents for the recommended amount of time in the event of a tax audit. When it's
time to dispose of a file, per the company's policy, that file should be completely destroyed.
</h5></div><h5 id='q56'>56. Information management can be a challenge because the business world is</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. completely dependent on paper files.</option><option value="B">B. suffering from a lack of information.</option><option value="C">C. not open to new technology.</option><option value="D">D. constantly changing.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is D: constantly changing.</h5><h5>Information management can be a challenge because the business world is
constantly changing. Companies can't sit back and assume their current programs will continue to fit the
bill. They must stay alert to information management needs and trends and be willing to adjust
accordingly. Business technology is always changing and, more and more, companies' information is
electronic rather than paper. Employees often suffer from too much information, known as information
overload.
</h5></div><h5 id='q57'>57. The capability of combining graphics, text, animation, and sound is a unique characteristic of
__________ software programs.</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. electronic</option><option value="B">B. communication</option><option value="C">C. numeric</option><option value="D">D. presentation</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: presentation</h5><h5>Presentation software programs give the user the capability of presenting information by
combining graphics, text, animation, photographs, and sound. Presentation software can be used to
create slide programs, overhead transparencies, multimedia presentations, etc. This software enables
users to develop visual presentations that are lively, colorful, and appealing to viewers. Communication
software programs establish connections between computers. Numeric and electronic are not types of
software programs, although some programs analyze numerical data.
</h5></div><h5 id='q58'>58. Which of the following functions in a spreadsheet software program allows the computer user to change
the format of the data from ascending to descending order:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Replace</option><option value="B">B. Chart</option><option value="C">C. Consolidate</option><option value="D">D. Sort</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sort</h5><h5>The sort function allows computer users to change the order of data in a spreadsheet. The chart
function allows the computer user to place a graph or pie chart in the spreadsheet. The consolidate
function allows the computer user to add, average, or count numerical data in a spreadsheet. The find
and replace function allows the computer user to locate text or numerical values within the spreadsheet
and replace them with designated text or numbers.
</h5></div><h5 id='q59'>59. Project-management software can help businesspeople allocate necessary resources and</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. authorize payments.</option><option value="B">B. hire contractors.</option><option value="C">C. establish credit.</option><option value="D">D. schedule tasks.

</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: schedule tasks.

</h5><h5>Explanation not available</h5></div><h5 id='q60'>60. Dale stores his customer records in a remote database that he accesses via the Internet. Where does
Dale maintain his customer files?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. In the cloud</option><option value="B">B. On his hard drive</option><option value="C">C. On a flash drive</option><option value="D">D. In a log file</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: In the cloud</h5><h5>An increasingly popular method for storing business records is in "the cloud." Cloud storage
involves storing your records in a database maintained by a third party at an off-site database storage
facility. Rather than storing his records to his computer hard drive, a flash drive, or other nearby storage
device, Dale uploads his files to the Web and then saves them to the remote database—the cloud. To
retrieve any files that he's saved to the cloud, he simply goes online, logs into the database, and
accesses whatever records he needs. Dale's customer records are not maintained on his hard drive, on a
flash drive, or in a log file.
</h5></div><h5 id='q61'>61. Why is it important for businesses to interpret statistical findings?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. To develop charts and tables</option><option value="B">B. To obtain useful information</option><option value="C">C. To calculate frequency distributions</option><option value="D">D. To organize a database</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: To obtain useful information</h5><h5>Statistical findings need to be interpreted in order to convert them to useful
information. Simply gathering statistics, which are data presented in numerical form, is not helpful unless
a business analyzes them and converts them to useful information. For example, it is not useful to know
that 500 customers buy a certain product unless the business also knows the total number of potential
customers and what percentage of the potential customers are current customers. Perhaps 500 seems
like a strong customer base, but that is not the case if the potential is 10,000. Businesses often use
statistical findings to develop charts and tables and calculate frequency distributions. However, those are
not reasons why the business interprets them. Businesses do not interpret statistical findings to organize
a database.
</h5></div><h5 id='q62'>62. Plastico Manufacturing Company had to temporarily shut down one of its factories because it was
emitting toxic chemicals into the air. Plastico was not complying with the community's</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. environmental regulations.</option><option value="B">B. construction codes.</option><option value="C">C. administrative policies.</option><option value="D">D. estate laws.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: environmental regulations.</h5><h5>If a business does not follow the jurisdiction's environmental laws, it risks
being shut down until it is in compliance. High emissions of toxic chemical in the air create pollution and
can negatively affect the natural environment and the health of people and animals. Building codes,
rather than construction codes, regulate the structure of facilities such as offices, factories, and homes to
ensure their safety. Administrative policies are internal guidelines for carrying out the business's work.
Estate laws regulate the distribution of a person's assets to his/her beneficiaries.
</h5></div><h5 id='q63'>63. Which of the following is a true statement about safety hazards in the workplace:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Ongoing equipment maintenance prevents most hazards.</option><option value="B">B. Safety hazards are obvious to most people.</option><option value="C">C. Safety hazards are the same for most businesses.</option><option value="D">D. Poor housekeeping can cause safety hazards.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: Poor housekeeping can cause safety hazards.</h5><h5>Cluttered areas of the workplace can create safety
hazards. For example, people can trip over items lying on the floor, slip on liquids that have been spilled,
or be injured when poorly-stacked containers fall over. Ongoing equipment maintenance can reduce risks
of some types of accidents and injuries. However; operator error can cause injuries and other types of
hazards can exist in the workplace. Safety hazards differ according to the kind of business. Safety
hazards are not obvious to most people unless they have been taught to recognize them.
</h5></div><h5 id='q64'>64. What must be determined before the work effort can be coordinated effectively?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. The employees' requirements</option><option value="B">B. Technical changes</option><option value="C">C. Customer-satisfaction levels</option><option value="D">D. The necessary tasks</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: The necessary tasks</h5><h5>To coordinate work, you must know what tasks should be done, who should do
them, and the order in which they should be performed. It is important to communicate with all people
involved in the work effort so they know exactly the process and procedures they need to follow to
complete the work correctly. Technical changes are not always part of the work effort. High customer
satisfaction levels may result when the work is coordinated effectively. The business's requirements or
needs are considered when coordinating the work rather than the employees' requirements or needs.
</h5></div><h5 id='q65'>65. Project management can benefit greatly from user-generated, user-updated websites called</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. encyclopedias.</option><option value="B">B. forums.</option><option value="C">C. wikis.</option><option value="D">D. flash drives.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: wikis.</h5><h5>Project management can benefit greatly from user-generated, user-updated websites called wikis.
Encyclopedias, forums, and flash drives are not names of commonly used technologies for project
management.
</h5></div><h5 id='q66'>66. What should you develop during the process of identifying the people who have the skills that are needed
to complete the project?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Status report</option><option value="B">B. Sponsor list</option><option value="C">C. Realistic budget</option><option value="D">D. Job description</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: Job description</h5><h5>A job description is an explanation of all of the responsibilities and tasks associated with
a specific job. It is important to develop a job description to explain exactly what is involved such as
qualifications, education, or experience. Then, match the skills of project members to the job description.
If no one in the group is qualified to perform that job, having a job description will help when you ask
others to volunteer. When identifying the people who have the necessary skills, it is not important to
develop a sponsor list, a realistic budget, or a status report.
</h5></div><h5 id='q67'>67. One of the first steps that a business usually takes to develop a project plan is to</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. identify needed resources.</option><option value="B">B. prepare purchasing plans.</option><option value="C">C. recruit new employees.</option><option value="D">D. organize training classes.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: identify needed resources.</h5><h5>The success of a project depends on how well it is planned and organized.
One of the first steps in developing a successful project involves identifying the needed resources which
include the financial, technical, material, and human resources needed to complete the project. Before
any project can begin, a business needs to decide how much it will cost, what type of materials and
expertise are required, and how many employees are needed to perform the work. Once the needed
resources are identified, a business can begin to put them in place in order to start the project. After
identifying the necessary resources, a business can develop plans to purchase the resources, recruit the
needed employees, and organize training classes.
</h5></div><h5 id='q68'>68. Isabelle asks Todd, one of her project-team members, if he has collected all of the information that he
needs to start tabulating a survey. What project-management activity is Isabelle performing?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Monitoring</option><option value="B">B. Initiating</option><option value="C">C. Coordinating</option><option value="D">D. Assigning

</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is A: Monitoring</h5><h5>Controlling is an important aspect of managing projects effectively. Controlling is the
management function that monitors the work effort. Monitoring is periodically checking on the progress of
something. Because Isabelle is asking Todd about the status of his work, she is monitoring his work
effort. Initiating is the first step of the project-management process, which involves authorizing the work
to begin. Isabelle had to coordinate and assign work activities before team members could begin to work
on their tasks.
</h5></div><h5 id='q69'>69. A business that wants to maintain positive, long-term relationships with its vendors should</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. develop a competitive orientation.</option><option value="B">B. share relevant information.</option><option value="C">C. automate ordering processes.</option><option value="D">D. request volume discounts.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is B: share relevant information.</h5><h5>To maintain favorable relationships with its vendors, a business should share
relevant information. Open, frequent, and honest communication can build trust and respect, which
facilitate long-term business relationships. A competitive orientation may help the business achieve shortterm goals, but may damage long-term vendor relationships. Automating ordering processes and
requesting volume discounts will not always help the business maintain long-term relationships with its
vendors.
</h5></div><h5 id='q70'>70. Elaine, a buyer for a large retail chain, places a paper-goods order with Sheets Paper Company, one of
five paper suppliers she uses, because Sheets has the best prices and can ship the order tomorrow. This
is an example of a(n) ___________ order.</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. blanket</option><option value="B">B. open</option><option value="C">C. prepaid</option><option value="D">D. standing</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: open</h5><h5>An open order is an order for staple goods that is placed with one of several available vendors
who can meet the business's immediate requirements (e.g., time, price, quantity). Because Sheets Paper
Company was best able to meet the retail chain's requirements, it was the vendor selected to fulfill the
order. An advance order is a regular order that is placed now with delivery requested at a future time
(e.g., weeks, months). There is no indication that Elaine prepaid for this order. A standing order,
sometimes known as a blanket order, is an order that involves sending specific products at set intervals.
</h5></div><h5 id='q71'>71. Why does a business keep stock on hand for resale?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. So it can produce manufactured goods.</option><option value="B">B. To sell it to end users</option><option value="C">C. To use it in business operations</option><option value="D">D. So it can buy raw materials.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: To sell it to end users</h5><h5>Businesses keep different types of inventory on hand for different reasons. If the
business sells the goods that it buys to end users, it is resale stock. For example, an appliance-store
chain (retailer) buys stoves, refrigerators, and dishwashers from manufacturers, and sells the items to
consumers. Items such as parts (e.g., nails) and raw materials (e.g., wood) are used to produce
manufactured goods. Businesses also maintain an inventory of supplies (office, cleaning) for employees
to use to complete their work.
</h5></div><h5 id='q72'>72. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. make a concession.</option><option value="B">B. maintain its authority.</option><option value="C">C. obtain leverage.</option><option value="D">D. initiate a gridlock.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: make a concession.</h5><h5>A concession is something that one party gives up during a negotiation. Effective
negotiators plan the points that they are willing to concede before going to the negotiating table. Often,
the negotiator will use silence as a way to make the vendor feel uncomfortable. The business hopes that
the vendor might concede the point to fill the silence and keep the discussion going. The business will
work to maintain its leverage or power (authority) over the negotiation so it can get what it wants from the
vendor. If agreement cannot be reached, the negotiation may end in gridlock, a situation in which neither
party gets what it wants.
</h5></div><h5 id='q73'>73. One of the benefits of production to consumers is that production</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. provides a way to be competitive.</option><option value="B">B. provides a way to earn profits.</option><option value="C">C. makes use of automation.</option><option value="D">D. creates form utility.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: creates form utility.</h5><h5>One of the benefits of production is that it creates form utility—usefulness created by
altering or changing the form or shape of a good to make it more useful to the consumer or user. Without
production, many resources would be of little use to consumers. All of the other alternatives are benefits
of production to businesses, not consumers.
</h5></div><h5 id='q74'>74. Another term for quality is</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. non-conformance.</option><option value="B">B. adequacy.</option><option value="C">C. mediocrity.</option><option value="D">D. excellence.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: excellence.</h5><h5>Another term for quality is excellence. Adequacy and mediocrity imply that something is "just
OK," not excellent. Quality means that something conforms to a predetermined set of standards.
</h5></div><h5 id='q75'>75. Which of the following is an area often used by customers that a business must maintain on a regular
basis:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Employee lounge</option><option value="B">B. Corporate office</option><option value="C">C. Exterior sidewalk</option><option value="D">D. Storage facility</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: Exterior sidewalk</h5><h5>Customers use exterior sidewalks to gain entry to a business. Exterior sidewalks must
be maintained on a regular basis in order to prevent damage, such as cracks and holes, that might
present a safety hazard to customers. Maintaining sidewalks on a regular basis is less expensive for a
business than replacing them once they deteriorate. Corporate offices, employee lounges, and storage
facilities are areas in a business not often used by customers.
</h5></div><h5 id='q76'>76. A comprehensive report reveals that the Sabin Company can increase its data-entry outputs by 20% in a
six-month period by installing the MMX software system. Sabin can use this type of business analysis to
determine</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. how to increase its efficiency.</option><option value="B">B. how to detect a problem.</option><option value="C">C. why it should obtain new markets.</option><option value="D">D. why it should evaluate work schedules.

</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: how to increase its efficiency.</h5><h5>In this situation, the business is analyzing an “if, then” situation. If the
company purchases a certain type of software, then it can increase its data-entry outputs. If the company
increases its outputs, it is increasing its efficiency (productivity). How does the business increase its
efficiency? It installs a specific type of software. The information does not indicate how to detect a
problem or why the company should evaluate work schedules. A business uses a marketing analysis to
determine why it should obtain new market segments.
</h5></div><h5 id='q77'>77. Which of the following statements about creativity in marketing occupations is true:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Creativity is applicable to working with things rather than with people.</option><option value="B">B. Creativity is not important for most marketing jobs.</option><option value="C">C. Opportunities to be creative are limited to advertising and display.</option><option value="D">D. Almost all marketing occupations involve creativity to some extent.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is D: Almost all marketing occupations involve creativity to some extent.</h5><h5>Creativity is the ability to generate
unique ideas, approaches, and solutions and can be used in many marketing jobs. For example,
employees can be creative when making sales presentations and in solving human-relations problems
among coworkers. Creativity is not limited to advertising and display nor to working with things rather
than with people.
</h5></div><h5 id='q78'>78. John frequently lists or ranks the things he needs to do in the order of their importance. John is
__________ his activities.</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. categorizing</option><option value="B">B. prioritizing</option><option value="C">C. grouping</option><option value="D">D. classifying</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: prioritizing</h5><h5>Prioritizing is determining the order for completion of activities based on their importance. It is
a helpful way to manage time. Classifying, categorizing, and grouping activities are sorting techniques in
which the importance of each activity is not a factor.
</h5></div><h5 id='q79'>79. Kate works closely with all the company's departments to develop computer software programs that
enhance the business's ability to communicate and obtain data. Kate works in the area of</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. marketing communications.</option><option value="B">B. corporate management.</option><option value="C">C. insurance and risk management.</option><option value="D">D. business information technology.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: business information technology.</h5><h5>Business information technology is an umbrella term covering those
careers that provide a bridge between business processes/initiatives and information technology (IT).
Employees in this area help to align business and IT goals. Examples of job titles in IT include project
manager, business process manager, and business process architect. People working in corporate
management focus on planning, organizing, directing, and evaluating part or all of a business
organization through the allocation and use of financial, human, and material resources. Careers in
insurance involve protecting individuals and businesses from financial losses by transferring risk from an
individual or business to an insurance company. An individual working in marketing communications
focuses on activities that inform, remind, and/or persuade the targeted audience about the business and
its goods and services.
</h5></div><h5 id='q80'>80. Which of the following characteristics are necessary for entrepreneurs to be successful:</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Creativity and innovation</option><option value="B">B. Determination and aggression</option><option value="C">C. Optimism and risk aversion</option><option value="D">D. Timidity and organization</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Creativity and innovation</h5><h5>There are many characteristics that all successful entrepreneurs share,
including creativity and innovation. Not all entrepreneurs are equally strong in these areas, but the
important thing is that they realize their weaknesses and work to improve them. Entrepreneurs must be
determined, but they don't necessarily have to be aggressive. Optimism is extremely important for
entrepreneurs, but risk aversion is not. A successful entrepreneur must be willing to take risks. While
organization is an important quality for an entrepreneur to possess, timidity isn't helpful—a successful
entrepreneur is confident in his/her ideas and abilities.
</h5></div><h5 id='q81'>81. When preparing an interview follow-up letter, what might applicants include that they forgot to mention
during the interview?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Position description</option><option value="B">B. Social Security number</option><option value="C">C. Personal background</option><option value="D">D. Important information</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: Important information</h5><h5>The cost of operating
the system and the capability to generate printed financial statements are not related to the issue of theft.
A business would not be likely to maintain both a computerized and a manual accounting system.
</h5></div><h5 id='q82'>82. One of the reasons why networking is so effective is because the contacts often</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. know how to communicate with others.</option><option value="B">B. are interested in the same position.</option><option value="C">C. have information about job skills.</option><option value="D">D. work at the company that is hiring.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: work at the company that is hiring.</h5><h5>Many of the people in a network are professionals that the individual
knows because of business or work-related activities. The advantage of including these people in a
network is that they often work at the company that is hiring and can pass on information to others in the
network. If the contacts are interested in the same position, they might not be willing to network and
share information. The contacts may have information about job skills and know how to communicate
with others, but those are not reasons why networking is so effective.
</h5></div><h5 id='q83'>83. What tends to increase when all employees follow the company's rules of conduct?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Inflexible attitudes</option><option value="B">B. Laissez-faire leadership</option><option value="C">C. Subculture power conflicts</option><option value="D">D. Organizational cohesiveness</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: Organizational cohesiveness</h5><h5>The rules of conduct are the company's policies, procedures, and
expectations for its employees' behavior in the workplace. When employees are consistently held to the
same basic expectations, and they follow the company's rules, the company's overall cultural
environment is stable, and employees tend to be more willing to cooperate with one another. If some
employees are allowed to get away with inappropriate behavior (e.g., consistent tardiness) and others
are reprimanded for the same behavior, conflict is more likely to occur. Laissez-faire managers assume
little or no leadership responsibility, and allow subordinates to determine their own work behavior and
productivity level. Depending on the situation, inflexible attitudes are likely to cause conflict.
</h5></div><h5 id='q84'>84. Sally is a production-line worker who is experiencing problems with the production equipment. Following
the appropriate chain of command, Sally should report the problem to</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Tom, the production-section manager.</option><option value="B">B. Sylvia, the vice president of operations.</option><option value="C">C. Jim, the production-line supervisor.</option><option value="D">D. Linda, the operations manager.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Jim, the production-line supervisor.</h5><h5>The chain of command defines the level of authority and identifies the
specific individual who supervises particular employees. Having a chain of command helps provide
structure for business. As a production-line worker, Sally should report problems to the production-line
supervisor (Jim). The production-line supervisor reports to the production-section manager (Tom). The
production-section manager is likely to report to the production manager, but possibly the operations
manager (Linda). Executive-level managers in charge of various operations functions report to the vice
president of operations (Sylvia).
</h5></div><h5 id='q85'>85. Which of the following provides the foundation for a business's overall planning and controlling activities:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Organizational goals</option><option value="B">B. Profit margins</option><option value="C">C. Ordering procedures</option><option value="D">D. Product objectives

</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: Organizational goals</h5><h5>Overpromising, underperforming, and a refusal to accept responsibility are indicators of
poor ethics.
</h5></div><h5 id='q86'>86. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Develop a mission statement</option><option value="B">B. Communicate priorities</option><option value="C">C. Create work subcultures</option><option value="D">D. Collect information</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Communicate priorities</h5><h5>Employees carry out the work to achieve the organization's goals. To carry out
the work, managers must communicate their work priorities to employees. When employees know and
understand their priorities, they can perform the most important tasks before they tackle the less
important tasks. An organization's mission statement guides the goal-setting process, but it does not
provide specific information for completing specific work tasks. Although a variety of work subcultures
(e.g., departmental, team, social) exist in most organizations, managers must communicate their work
priorities to employees so that they can carry out tasks that will achieve organizational goals. Collected
information must be communicated and acted upon to achieve the organization's goals.
</h5></div><h5 id='q87'>87. In which component of the project's statement of work (SOW) would the following message most likely
appear: “Due to the limited amount of time allocated to complete the study, the survey sample size may
need to be reduced.”</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Benefits</option><option value="B">B. Purpose</option><option value="C">C. Constraints</option><option value="D">D. Deliverables</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: Constraints</h5><h5>The statement of work (SOW) is a document that outlines the terms, commitments, and
conditions of the project. The SOW should outline any limits or restrictions (e.g., time, money, human
resources) that might affect the execution of the project, which should be placed in the constraints
component of the SOW. The purpose or reason for the project is outlined in the beginning of the SOW.
The benefits are the project's advantages. Deliverables are the goods, services, or documentation that
will be provided to the stakeholder upon completion of the project. The example does not describe the
purpose, benefits, or deliverables of the project.
</h5></div><h5 id='q88'>88. Isabelle is developing a document that divides a long-term project into meaningful subprojects and tasks,
which she will use to guide the workflow. Isabelle is developing the</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. work breakdown structure.</option><option value="B">B. project status report.</option><option value="C">C. data interchange program.</option><option value="D">D. technical operating system.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: work breakdown structure.</h5><h5>A work breakdown structure (WBS) is the process of dividing project tasks
into meaningful components to complete the project. Dividing the project into small work packages helps
the project manager effectively schedule, assign, and monitor project activities. Isabelle is not developing
a project status report, data interchange program, or a technical operating system.
</h5></div><h5 id='q89'>89. During a weekly status meeting, Tom said, “We've worked extremely hard and have made some
tremendous progress on this stage of the project, so I am taking the team out to lunch next Wednesday.”
What project-management activity is Tom performing?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Rewarding</option><option value="B">B. Mentoring</option><option value="C">C. Evaluating</option><option value="D">D. Encouraging</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: Rewarding</h5><h5>An important aspect of managing a project team is motivating the team members. Project
managers can motivate team members by showing appreciation for their efforts and by rewarding them
for reaching certain goals. A reward might include a nice meal, time off, or a financial bonus. Mentoring is
an activity in which one experienced employee helps or guides a new employee on the job. Evaluating is
a controlling activity.
</h5></div><h5 id='q90'>90. Releasing equipment, materials, and team members are tasks that are completed during the
___________ phase of a project.</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. closing</option><option value="B">B. scheduling</option><option value="C">C. planning</option><option value="D">D. initiating</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is A: closing</h5><h5>Many activities occur at the end or close of a project. Because the project has been completed,
equipment and materials (supplies) are disposed of or provided to others for different projects or uses.
Team members may be released to work on new projects or to return to work on previous assignments.
Scheduling is the process of setting timelines for tasks to be completed. The goals are established during
the planning phase of the project. During the initiating phase, the project is authorized to begin.
Releasing resources from the project are not activities that occur during the scheduling process or during
the project's planning or initiating phases.
</h5></div><h5 id='q91'>91. What is a necessary component of quality-assurance activities?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Systematic process</option><option value="B">B. Product innovation</option><option value="C">C. Classified information</option><option value="D">D. Supplier input</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: Systematic process</h5><h5>The patent is granted to the inventor or owner for
a specific number of years and is a legal means of preventing the product from being recreated and
distributed by unauthorized entities. Copyrights legally protect written documents and artistic
compositions. A trademark is legal protection for a symbol, design, or word (name) that a business uses
to identify its brand.
</h5></div><h5 id='q92'>92. The Six Sigma quality management framework involves monitoring improvement processes by analyzing</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. quantitative information.</option><option value="B">B. technology needs.</option><option value="C">C. expansion plans.</option><option value="D">D. employees' policies.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is A: quantitative information.</h5><h5>The cost of operating
the system and the capability to generate printed financial statements are not related to the issue of theft.
A business would not be likely to maintain both a computerized and a manual accounting system.
</h5></div><h5 id='q93'>93. A potential benefit to businesses that implement continuous quality improvement processes is</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. increased costs.</option><option value="B">B. increased sales.</option><option value="C">C. decreased outputs.</option><option value="D">D. decreased profits.

</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is B: increased sales.</h5><h5>The
product section should describe the quality, variety, and style of goods or services sold by the business.
</h5></div><h5 id='q94'>94. How can a business reduce risks that are associated with a poor public image:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Implement an ethics program</option><option value="B">B. Maintain minimal inventory levels</option><option value="C">C. Encourage fraudulent behavior</option><option value="D">D. Offer credit to few customers</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: Implement an ethics program</h5><h5>Because employees represent the business, their unethical behavior can
negatively affect the business's reputation. If a business develops a poor reputation or public image,
customers may take their business elsewhere. To reduce the risk of a tarnished reputation, the business
should implement an ethics program. An ethics program might include ongoing ethics training, which
provides continuous guidance for the employees as to what constitutes ethical behavior on the job. The
business should discourage fraudulent behavior, offer credit to customers who meet the business's credit
criteria, and maintain optimal inventory levels so that the products are available when customers need
them; these actions promote a positive public image for the company.
</h5></div><h5 id='q95'>95. What type of risk-management technology can track individual traders' risk limits and notify management
immediately if any trader exceeds her/his preset limit?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Automated oversight</option><option value="B">B. Stress testing</option><option value="C">C. Data aggregation</option><option value="D">D. Corporate governance</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: Automated oversight</h5><h5>Risk managers can use automated oversight technology to assign specific risk
limits to individual divisions, departments, or employees. If focused on individual employees, the
automated oversight technology tracks each employee's activity to determine if and when s/he exceeds
the preset risk limit. If the employee exceeds his/her limit, the software notifies management immediately.
Management can then take the necessary actions to reduce the risk exposure. Financial analysts use
stress testing to determine a particular financial instrument's stability in different extreme events. Data
aggregation involves pulling together data from several disparate systems into one central repository or
database. Corporate governance is the system by which directors handle their responsibility toward
shareholders.
</h5></div><h5 id='q96'>96. Risk retention groups are typically only allowed to offer __________ insurance coverage.</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. life</option><option value="B">B. liability</option><option value="C">C. homeowners</option><option value="D">D. health</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: liability</h5><h5>Risk retention groups are liability insurance companies owned by their members, who are
typically businesses, professionals, and municipalities that are unable to acquire liability insurance from
traditional insurance companies. Types of liability insurance that risk retention groups typically offer
include errors and omissions, medical malpractice, directors and officers, product liability, professional
liability, etc. Risk retention groups are not legally permitted to offer life, homeowners, or health insurance
in most countries.
</h5></div><h5 id='q97'>97. The process of managerial planning typically helps to</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. guarantee positive results.</option><option value="B">B. improve interpersonal relationships.</option><option value="C">C. influence employees' adaptability.</option><option value="D">D. maximize resource efficiency.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is D: maximize resource efficiency.</h5><h5>Planning is the management function of deciding what will be done and
how it will be accomplished. Effective planning helps the business to determine how to allocate all of its
resources—human, financial, equipment—in the most efficient and cost-effective ways. Businesses are
more likely to achieve their goals when they plan, but planning does not guarantee positive results.
Planning does not necessarily improve interpersonal relationships, nor does it influence employees'
adaptability.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this
policy up to and including disqualification of competitors and chapters from further participation.

Test 1106

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

1

1. One of the main functions of the legal procedure is to</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Leading</option><option value="B">B. Interviewing</option><option value="C">C. Coordinating</option><option value="D">D. Staffing</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: Staffing</h5><h5>negotiate members' grievances with management. The National Labor Relations Board is a
federal agency concerned with unfair labor practices.
</h5></div><h5 id='q99'>99. What management function involves motivating and encouraging an employee?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Planning</option><option value="B">B. Directing</option><option value="C">C. Organizing</option><option value="D">D. Recruiting</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is B: Directing</h5><h5>Directing is the management function of providing guidance to workers and work projects.
Directing activities include motivating, leading, and disciplining workers. When a manager encourages an
employee to do something, the manager is performing a directing activity. Organizing is the management
function of setting up the way the business's work will be done. Recruiting is a staffing activity. Staffing is
the management function of finding workers for the business.
</h5></div><h5 id='q100'>100. Which of the following is most likely to be a result of competition:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Development of new products</option><option value="B">B. Reduction in product quality</option><option value="C">C. High prices</option><option value="D">D. More monopolies</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: Development of new products</h5><h5>Competition encourages businesses to develop new products in order to
meet consumers' needs. Businesses feel that the company which best satisfies consumers will be the
most successful company. Competition helps to control prices because businesses must keep prices in
line with production costs in order to be competitive. Businesses must also maintain or improve product
quality to be competitive. A monopoly exists when a market is controlled by one supplier, and there are
no substitute goods or services readily available. No competition exists in a true monopoly.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Business-Admin_1_Split_Homework.js"></script></html>