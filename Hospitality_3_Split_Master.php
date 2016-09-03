<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Hospitality Exam 6</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. An offer must be made by one party and accepted by the other party in order for a contract to be</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. notarized.</option><option value="B">B. legally binding.</option><option value="C">C. put in written form.</option><option value="D">D. interpreted correctly.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: legally binding.</h5><h5>In order for a contract to be legally binding, an offer must be made by one party and
accepted by the other party. In effect, the two parties are agreeing to the terms stated in the contract.
Then, both parties must live up to those terms. All contracts do not need to be notarized, put in written
form, or interpreted correctly.
</h5></div><h5 id='q2'>2. When an agent legally acts in the best interests of his/her client, the agent is establishing a(n) _______
relationship.</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. principal</option><option value="B">B. authoritative</option><option value="C">C. fiduciary</option><option value="D">D. legislative</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: fiduciary</h5><h5>An agent is someone who acts on the behalf of another party. The agent often negotiates
contracts and handles legal issues for another person with that person's consent. The agent who shows
that s/he is loyal, trustworthy, and acting in the best interest of his/her client (principal) is fostering a
fiduciary relationship. Authoritative relationships are based on a particular level of control. Principal is a
legal term that describes the client. Legislative processes involve the procedures in which people or
governments establish laws.
</h5></div><h5 id='q3'>3. Which of the following is one of the rights of customers in the travel and tourism industry:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. To be reminded that foreign travel is often dangerous</option><option value="B">B. To be asked if they want to buy trip insurance</option><option value="C">C. To be informed about a destination's social conditions</option><option value="D">D. To be told about a competitor's refund policy</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is C: To be informed about a destination's social conditions</h5><h5>Travel agents and tour operators have an
obligation to inform clients about the social and political conditions in a destination that they are
considering visiting. Clients have a right to know if there is political unrest, a threat of terrorism, or other
dangerous situations that might affect their travel plans or their safety. They should be made aware of
possible problems in order to make an informed decision as to whether to visit certain destinations.
Travel agents and tour operators usually do not discuss a competitor's refund policy. They often ask
customers if they want to buy trip insurance, but that is not considered a customer right. Travel to most
foreign countries is not dangerous. However, if travel to some areas is dangerous, customers have a
right to know.
</h5></div><h5 id='q4'>4. Kathy's once-booming traditional brick-and-mortar travel agency is financially struggling. For many years,
the majority of Kathy's revenue came from commissions on airline ticket sales. Now, though, most of
Kathy's clients purchase their tickets online instead of from her travel agency. These clients can
purchase tickets directly from the airlines or through online travel agencies like Priceline or Expedia.
Oftentimes, the tickets that they purchase online are less expensive than the tickets that Kathy offers.
This is an example of</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. disintermediation.</option><option value="B">B. discrepancy of assortment.</option><option value="C">C. bulk-breaking.</option><option value="D">D. exclusive distribution.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: disintermediation.</h5><h5>Traditionally, disintermediation has involved the elimination of intermediaries or
middlemen like Kathy. This results in the transfer of products directly from producers (in this case,
airlines) to the ultimate consumer. More broadly, though, disintermediation can include the displacement
of traditional intermediaries with new, radically different types of intermediaries such as online travel
agencies. The online travel agencies are successful because they can bring more value to consumers
than many traditional brick-and-mortar travel agencies. A discrepancy of assortment is a difference
between the product lines that a firm offers and the assortment of products that the consumer wants.
Bulk-breaking involves dividing large quantities of products into smaller quantities as products move from
the producer to middlemen to consumers. There is no indication that bulk-breaking is occurring.
Exclusive distribution involves selling products through only one intermediary in a certain geographic
area. Since more than one firm is selling airline tickets in the geographic area, exclusive distribution is not
taking place.
</h5></div><h5 id='q5'>5. One way that a manufacturer can foster positive relationships with its channel members is by</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. encouraging a competitive culture.</option><option value="B">B. providing training programs.</option><option value="C">C. selling directly to end users.</option><option value="D">D. using aggressive tactics.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: providing training programs.</h5><h5>Positive channel relationships require collaboration among channel
members. Collaboration involves sharing relevant information, setting mutually-beneficial goals, and
developing a team-oriented attitude. Channel leaders have the most power or leverage in the channel,
and can implement tactics to foster positive relationships. Providing channel members with product
training programs helps channel members be successful in selling the products. Encouraging a
competitive culture among channel members, using aggressive tactics, and selling directly to end users
are more likely to create conflict and have a negative impact on channel relationships.
</h5></div><h5 id='q6'>6. What should employees be willing to accept when defending their ideas objectively?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Critical feedback</option><option value="B">B. Additional responsibility</option><option value="C">C. Nonverbal support</option><option value="D">D. Personal attack</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: Critical feedback</h5><h5>When employees present their ideas to management or coworkers, they should be
prepared to defend those ideas and provide supporting information. They also should be willing to accept
critical feedback because others might not agree with the ideas or have different opinions. Being
prepared will help employees remain objective and be able to offer logical evidence to back up their
ideas. Critical feedback is often useful because it allows employees to view their ideas from a different
perspective. Defending ideas usually does not involve accepting additional responsibility or nonverbal
support. It is not acceptable to attack employees on a personal level because of their ideas.
</h5></div><h5 id='q7'>7. Why do businesses often make it possible for employees to meet during work time and participate in
group discussions?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. To plan extracurricular activities</option><option value="B">B. To discuss personal issues</option><option value="C">C. To share many different opinions</option><option value="D">D. To have casual conversations</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: To share many different opinions</h5><h5>Many businesses encourage employees to participate in group
discussions to analyze problems and find solutions. The advantage is that when employees share many
different opinions, there is an increase in the chance of developing useful recommendations. However,
for the group discussions to be useful, all members must feel comfortable and be willing to express their
opinions. Businesses do not make it possible for employees to participate in group discussions to discuss
personal issues, to plan extracurricular activities, or to have casual conversations.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1070

HOSPITALITY AND TOURISM CLUSTER EXAM

1

1. An offer must be made by one party and accepted by the other party in order for a contract to be</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Name</option><option value="B">B. Invoice number</option><option value="C">C. Location</option><option value="D">D. Time</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: Time</h5><h5>to analyze problems and find solutions. The advantage is that when employees share many
different opinions, there is an increase in the chance of developing useful recommendations. However,
for the group discussions to be useful, all members must feel comfortable and be willing to express their
opinions. Businesses do not make it possible for employees to participate in group discussions to discuss
personal issues, to plan extracurricular activities, or to have casual conversations.
</h5></div><h5 id='q9'>9. Which of the following is a guideline for writing clear instructions for your coworkers:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Write from your supervisor's perspective.</option><option value="B">B. Understand the process you are explaining. </option><option value="C">C. Write complex, lengthy statements.</option><option value="D">D. Confine the instructions to one page.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: Understand the process you are explaining. </h5><h5>Explanation not available</h5></div><h5 id='q10'>10. A transmittal letter is a business letter whose purpose is to</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. apologize to a customer.</option><option value="B">B. accompany other written material.</option><option value="C">C. extend good wishes.</option><option value="D">D. sell specific products.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: accompany other written material.</h5><h5>A transmittal letter is sent along with other documents or reports as an
introduction and explanation. The purpose of a transmittal letter is to identify what is being sent so that
the recipient will know what should be included and if any action needs to be taken. The other
alternatives would require letters that apply to the specific situation. A letter of congratulations would
extend good wishes, a letter of apology would make amends with a customer, and a sales letter would try
to sell specific products.
</h5></div><h5 id='q11'>11. When writing informational messages, business employees should explain the situation and include
sufficient data for the recipient to be able to</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. agree with the content.</option><option value="B">B. read the message.</option><option value="C">C. contact the business.</option><option value="D">D. make a decision.

®
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: make a decision.

®
</h5><h5>Explanation not available</h5></div><h5 id='q12'>12. What type of simple report might a buyer for a business prepare in order to periodically inform other
departments about the status of scheduled deliveries?</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Research</option><option value="B">B. Analytical</option><option value="C">C. Progress</option><option value="D">D. Statistical</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: Progress</h5><h5>A progress report is a type of simple report that businesses often use to keep the various
departments informed of each other's activities. Progress reports briefly provide updated information
about long-term activities. They are short and usually include only summaries of necessary information.
Analytical, research, and statistical are examples of complex written reports that are lengthy and contain
detailed information.
</h5></div><h5 id='q13'>13. It is appropriate for a participant to ask questions during a staff meeting when</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. another participant is speaking.</option><option value="B">B. s/he needs a point clarified.</option><option value="C">C. the agenda is being distributed.</option><option value="D">D. s/he does not agree with the speaker.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is B: s/he needs a point clarified.</h5><h5>When employees do not understand what the speaker has said, it is
appropriate to raise their hand to ask for clarification; however, it is rude to interrupt another person while
s/he is speaking. In many meetings, the leader will ask the participants if they have questions, and it
would be appropriate to ask for clarification at that time. Asking questions due to differing opinions or
when the agenda is being distributed may not be appropriate.
</h5></div><h5 id='q14'>14. You have a customer-service mindset if you believe that your customers are your</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. relatives.</option><option value="B">B. associates.</option><option value="C">C. friends.</option><option value="D">D. employers.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: employers.</h5><h5>A customer-service mindset is the belief that giving customers good service should be a top
priority of a business. Without customers, there would be no need for employees. The business would
have to close, and you would be out of a job. You should, therefore, keep in mind that customers pay
your salary and are, in effect, your employers. Having a customer-service mindset does not involve
believing that your friends, associates, and relatives are your customers, although they may be at times.
</h5></div><h5 id='q15'>15. In order to interpret business policies to customers, salespeople must</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. get permission from management.</option><option value="B">B. understand the business's policies.</option><option value="C">C. feel good about the policies.</option><option value="D">D. help to set the business's policies.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: understand the business's policies.</h5><h5>Salespeople must have a clear understanding of the business's
policies in order to explain them to customers and to answer questions. Management is responsible for
setting policies. Salespeople are expected to interpret and to implement policies, and they do not need
permission to do so. The salesperson must follow the business's policy even if s/he disagrees with it.
</h5></div><h5 id='q16'>16. A business exhibits ethical behavior in customer relationship management by implementing policies that</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. encourage repeat sales.</option><option value="B">B. require customer feedback.</option><option value="C">C. offer exclusive benefits.</option><option value="D">D. protect its customers' privacy.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is D: protect its customers' privacy.</h5><h5>An ethical business implements strategies to protect its customers'
privacy. This is an important consideration to build long-term relationships with its customers, which
requires earning the customers' trust. One way for a business to earn its customers' trust is by
developing, implementing, communicating, and adhering to a customer privacy policy. Although privacy
policies vary by business, they might include limiting the access that employees have to customer
information and refusing to sell customer lists to third parties. If customers feel that the business respects
their privacy, they are more likely to trust the business and become loyal customers. Loyal customers
provide the business with repeat sales. A business can ask, but cannot require, its customers to provide
feedback. Offering exclusive benefits is a strategy that a business might use in customer relationship
management; however, this practice does not indicate or prove that the business is behaving in an
ethical manner.
</h5></div><h5 id='q17'>17. An individual books a hotel reservation on an Internet web site. This is an example of</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. place.</option><option value="B">B. promotion.</option><option value="C">C. product.</option><option value="D">D. possession.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is A: place.</h5><h5>Place refers to the ability to make sure that products are available where they are needed or
wanted by customers. In the hospitality industry, place can be a physical location (e.g., restaurant, hotel)
or a site where a want or need (e.g., reservation) is fulfilled. An Internet web site fulfills a customer's
desire to make a hotel reservation. Promotion is the marketing element referring to the various types of
communications that marketers use to inform, persuade, or remind customers of their products. Product
is defined as goods and services that businesses offer their customers. Possession refers to the goods
that people own.
</h5></div><h5 id='q18'>18. Which of the following situations involves finding another source of a limited natural resource:</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Conserving the oil that we use</option><option value="B">B. Searching for oil on the ocean floor</option><option value="C">C. Paying a higher price for oil</option><option value="D">D. Replacing oil with natural gas</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: Searching for oil on the ocean floor</h5><h5>The ocean is another place we can look for oil besides land. Natural
gas is an alternative resource. Conserving oil to prevent waste and paying a higher price for it are not
ways of finding more oil.
</h5></div><h5 id='q19'>19. What economic activity examines how money payments are divided between resource owners and
producers?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Distribution</option><option value="B">B. Consumption</option><option value="C">C. Exchange</option><option value="D">D. Production</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: Distribution</h5><h5>This economic activity examines how the money payments received by resource owners and
producers are divided or distributed. Resource owners must feel that the incomes they receive are large
enough so that they will continue to be willing to supply resources. Producers must receive enough
income so that they are able to continue making or providing goods and services. Consumption is the
process or activity of using goods and services. Production is the making of goods and services.
Exchange involves the exchange of money payments between producers and the owners of resources.
</h5></div><h5 id='q20'>20. Which of the following describes the services offered by trade industries:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. They are always limited.</option><option value="B">B. They may be limited or full line.</option><option value="C">C. They vary from day to day.</option><option value="D">D. They are always full line.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: They may be limited or full line.</h5><h5>Each trade industry must decide how broad the range of services it offers
to customers will be. They are not always limited or always full line, but they are not changed on a daily
basis as this would be confusing to customers and cause problems for the business.
</h5></div><h5 id='q21'>21. You pay Burger King for the right to set up a location in Barcelona under the corporate headquarters'
guidance and regulation. This is an example of</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. franchising.</option><option value="B">B. a joint venture.</option><option value="C">C. a wholly owned subsidiary.</option><option value="D">D. exporting.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: franchising.</h5><h5>A franchise is a contractual agreement between a parent company and a franchisee to
distribute goods or services. Franchising is very common in the restaurant business. A joint venture is an
arrangement that involves two or more businesses entering into a relationship by combining
complementary resources, such as technology, skills, capital, or distribution channels, for the benefit of
all parties. A wholly owned subsidiary is a firm that is completely owned and controlled by the parent
company. Exporting is selling domestic goods in a foreign nation.
</h5></div><h5 id='q22'>22. One of the benefits of competition to consumers is that competition encourages</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. businesses to limit their product lines.</option><option value="B">B. businesses to develop new products.</option><option value="C">C. government to fix prices.</option><option value="D">D. government to finance business activity.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: businesses to develop new products.</h5><h5>Competition encourages the development of products that satisfy
consumers' needs. Government does not finance business activity. Price fixing is an illegal activity that
would not benefit consumers, and is prohibited by law. When businesses limit their product lines, they
often create dissatisfaction among customers.
</h5></div><h5 id='q23'>23. Government can prevent unqualified persons from operating a business by</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. refusing to grant them a license.</option><option value="B">B. closing their bank accounts.</option><option value="C">C. raising their taxes.</option><option value="D">D. helping their competitors.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: refusing to grant them a license.</h5><h5>In some types of businesses, owners/operators must meet certain
standards to obtain a license to operate the business. The government can refuse to grant a license to
unqualified applicants. The government cannot use unfair practices such as helping competitors or
raising individual taxes. The holder of a bank account has control of the account.
</h5></div><h5 id='q24'>24. Generating revenue to pay for services that are provided to the public is the reason for</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. quotas.</option><option value="B">B. sales.</option><option value="C">C. prices.</option><option value="D">D. taxes.

</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: taxes.

</h5><h5>Explanation not available</h5></div><h5 id='q25'>25. What action expands economic activities?</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Increasing inventory levels</option><option value="B">B. Decreasing the purchase of durable goods

3
</option><option value="C">C. Increasing the unemployment rate</option><option value="D">D. Decreasing investments in capital goods
</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: Increasing inventory levels</h5><h5>When producers are optimistic about business activity, they increase their
inventory levels in order to be prepared for the increase in demand. This action expands economic
activities. Increasing the unemployment rate, decreasing the purchase of durable goods, and decreasing
investments in capital goods would contract economic activities.
</h5></div><h5 id='q26'>26. To find a career that's best suited for your strengths, it's important to be __________ about your
strengths and weaknesses.</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. realistic</option><option value="B">B. general</option><option value="C">C. hopeful</option><option value="D">D. competitive</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: realistic</h5><h5>To find a career that's best suited for your strengths, it's important to be realistic about your
strengths and weaknesses. You must be honest about your aptitudes and limitations if you want to
succeed. You should be specific in your self-assessment, rather than general. It's OK to be hopeful, but
you must be realistic as well. Self-assessment involves only you—it's not a competition.
</h5></div><h5 id='q27'>27. Accepting blame for failure and credit for success is an indication of a person's</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. responsibility.</option><option value="B">B. initiative.</option><option value="C">C. consideration.</option><option value="D">D. interpersonal skills.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: responsibility.</h5><h5>Responsible individuals are accountable for things that are within their control. Initiative is
the ability and willingness to think or act without being told. Interpersonal skills are how a person gets
along with others. Consideration means showing kindness or thoughtfulness to others.
</h5></div><h5 id='q28'>28. Mary often frowns and shakes her finger when she is communicating with customers. Mary should try to
develop self-control by controlling her</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. body language.</option><option value="B">B. service attitude.</option><option value="C">C. patient behavior.</option><option value="D">D. listening skills.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: body language.</h5><h5>Body language is gestures, facial expression, posture, or any other form of
communicating without words. People who exhibit self-control make sure that their forms of nonverbal
communication do not send a negative message. Customers probably would interpret frowning and finger
shaking as negative gestures. Patience is the ability to endure life's aggravations and difficulties calmly.
A service attitude is the salesperson's commitment to the client's needs as expressed through
professional behavior. Salespeople try to improve their listening skills in order to better assist customers.
</h5></div><h5 id='q29'>29. One of the reasons you should listen to criticism carefully is that it shows that you</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. know you have made a mistake.</option><option value="B">B. believe the criticism is valid.</option><option value="C">C. don't have any questions.</option><option value="D">D. take the criticism seriously.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: take the criticism seriously.</h5><h5>You should listen carefully to criticism, even though you may not like what
you are hearing. The speaker thinks the criticism is valid and expects you to take it seriously. Listening
carefully does not indicate that you know you have made a mistake, that you don't have any questions, or
that you believe the criticism is valid.
</h5></div><h5 id='q30'>30. Why is it important to be patient when learning to exhibit cultural sensitivity?</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. You will definitely offend someone.</option><option value="B">B. You'll never make mistakes.</option><option value="C">C. It's a lifelong process.</option><option value="D">D. It's a one-time goal.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is C: It's a lifelong process.</h5><h5>It's important to be patient when learning to exhibit cultural sensitivity because it's
a lifelong process, not a one-time goal. You'll make mistakes along the way, and you may offend
someone, but you can apologize and learn from your mistakes.
</h5></div><h5 id='q31'>31. A person can determine the reason for a conflict by</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. taking responsibility for his/her own actions.</option><option value="B">B. taking a break and ignoring the situation.</option><option value="C">C. evaluating the other person's behavior and attitudes.</option><option value="D">D. asking why the disagreement is occurring.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: asking why the disagreement is occurring.</h5><h5>To determine why a conflict is occurring, a person should ask
why the disagreement is occurring. Ignoring the situation does not help an individual determine why a
conflict is occurring. Evaluating the other person's behavior and attitudes helps to determine the best way
to approach or confront the conflict. When confronting the conflict, it is important for a person to take
responsibility for her/his own actions.
</h5></div><h5 id='q32'>32. One of the disadvantages of using consensus building as a decision-making tool is that it often
encourages group members to</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. communicate.</option><option value="B">B. compromise.</option><option value="C">C. collaborate.</option><option value="D">D. cooperate.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: compromise.</h5><h5>A compromise involves giving in to another's wishes so that an agreement may be
reached. This is one of the disadvantages of using consensus building as a decision-making tool. Group
members are encouraged to compromise, even when they really shouldn't, in order to settle differences.
Advantages of using consensus building is that it encourages group members to communicate their ideas
and collaborate, or work together, to reach an agreement. Consensus building is a cooperative effort
because it requires the effort of all members of the group.
</h5></div><h5 id='q33'>33. Why is accepting responsibility for your own actions important to effective human relations skills?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. People will not take advantage of you.</option><option value="B">B. It helps you to be objective.</option><option value="C">C. It helps you to be enthusiastic.</option><option value="D">D. People will be able to depend on you.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: People will be able to depend on you.</h5><h5>Taking full responsibility for your own actions and never blaming
others for your mistakes means you are reliable. People will know they can depend on you to do what
you say you will do. This does not help you to be objective or enthusiastic, and it will not keep people
from trying to take advantage of you.
</h5></div><h5 id='q34'>34. Although Anna works in a different department than Ryan, their job responsibilities overlap. Anna and
Ryan often talk about the mutually job-related problems, and they share ideas about how they can
improve situations in ways that will benefit not only them, but the company in general. By sharing
information and being objective, Anna and Ryan are</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. making suggestions to improve the company's finances.</option><option value="B">B. building collaborative working relationships.</option><option value="C">C. improving their chances of receiving promotions.</option><option value="D">D. developing a positive, relaxed work culture.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: building collaborative working relationships.</h5><h5>When employees are willing to collaborate with one another,
they are more likely to help the business achieve its overall goals. Collaboration involves working
together to solve problems and generating ideas that may improve the business's processes. There is
not enough information to determine if Anna and Ryan are discussing issues that are directly related to
the company's finances, if they are to receive promotions, or what type of work culture the company
supports.
</h5></div><h5 id='q35'>35. A business that buys services and goods in order to operate now and pay for them later is using</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. capital.</option><option value="B">B. collateral.</option><option value="C">C. currency.</option><option value="D">D. credit.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: credit.</h5><h5>Credit is the ability to obtain products now and pay later. Credit permits businesses to continue
operating without having to pay cash for all purchases. Currency is paper money. Collateral is the assets
pledged to a lender as security for a loan. Money and other assets owned by a company are called
capital.
</h5></div><h5 id='q36'>36. You are more likely to achieve your goals if they are</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. long term.</option><option value="B">B. based on needs only.
</option><option value="C">C. written down.</option><option value="D">D. short term.

</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: written down.</h5><h5>People who have written goals accomplish 50 to 100 times more than people who do not.
You are not more likely to achieve goals that are based on needs only or that are long- or short-term.
</h5></div><h5 id='q37'>37. When Jane received her first paycheck from her part-time job, she was surprised to see the amount was
much less than her $8.00 per hour pay rate multiplied by the number of hours she worked. Jane had not
planned on __________ tax being taken out of her paycheck.</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. income</option><option value="B">B. property</option><option value="C">C. sales</option><option value="D">D. excise</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: income</h5><h5>Income tax is a tax rate on all income a person earns. A percentage of Jane's pay is taken out to
pay for this tax. Property tax is tax on property, such as a home. Consumers pay a sales tax when they
purchase many types of goods. Since Jane is receiving her pay, not buying a good, sales tax does not
apply. Excise taxes are taxes paid when purchases are made on a specific good, such as gasoline.
Excise taxes are often included in the price of the product.
</h5></div><h5 id='q38'>38. Why is it important for individuals to periodically validate their credit histories?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. To understand credit laws</option><option value="B">B. To avoid being denied credit</option><option value="C">C. To find out about different types of credit</option><option value="D">D. To protect themselves from bankruptcy</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: To avoid being denied credit</h5><h5>Individuals should periodically validate their credit histories to make sure
that the information is correct. In some cases, inaccurate or false information may appear in a credit
history, which will result in an individual being denied credit. To make sure this doesn't happen,
individuals should review the information and contact the credit bureau to change or remove inaccurate
information. Individuals do not validate their credit histories to understand credit laws, find out about
different types of credit, or protect themselves from bankruptcy.
</h5></div><h5 id='q39'>39. To protect a business from natural risks, the business should purchase __________ insurance.</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. crime</option><option value="B">B. life</option><option value="C">C. property</option><option value="D">D. health</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: property</h5><h5>Insurance is a contractual agreement in which one company (insurer) will pay for specified
losses incurred by the other company (insured) in return for installment payments (premium). Businesses
purchase property insurance to protect against losses from natural circumstances, such as hurricanes,
hail, floods, and tornados. Life insurance pays a designated person (beneficiary) upon the carrier's death.
To obtain coverage for losses that result from theft, arson, and embezzlement, businesses purchase
crime insurance. Health insurance covers a certain percentage of a person's medical bills.
</h5></div><h5 id='q40'>40. Teresa is a new employee who received training in handling sales and returns for the business. Her
supervisor referred to both types of activities as</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. exchanges.</option><option value="B">B. credits.</option><option value="C">C. transactions.</option><option value="D">D. functions.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is C: transactions.</h5><h5>A transaction is a business activity such as a sale, a purchase, or a return. These
transactions must be recorded accurately as part of the accounting information. Credit is the arrangement
by which businesses or individuals can purchase now and pay later. An exchange is the trading of one
thing for another. A function is a group of activities that are similar in purpose.
</h5></div><h5 id='q41'>41. To keep communication flowing with other departments, the finance function depends on</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. information systems.</option><option value="B">B. accounts receivable.</option><option value="C">C. marketing.</option><option value="D">D. production.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: information systems.</h5><h5>To keep communication flowing with other departments, the finance function
depends on information systems. Information systems refers to any tools of communication within a
business. Accounts receivable refers to money owed to the business by others. Marketing and production
are not responsible for keeping communication flowing within the business.
</h5></div><h5 id='q42'>42. One of the most important ways that businesses use budgets is for</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. promotion.</option><option value="B">B. evaluation.</option><option value="C">C. research.</option><option value="D">D. renovation.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: evaluation.</h5><h5>Budgets are critical for evaluation of a business. When businesses want to know if they are
accomplishing their goals, budgets show where they are on target and where they are not. By comparing
original budget figures to actual figures, businesses can see specifically what costs more than expected
or less than expected and make accommodations to meet their goals. One of the business's goals might
be renovation. Businesses do not use budgets for research or for promotion, although they often allocate
a certain amount of money in the budget for these items.
</h5></div><h5 id='q43'>43. Which of the following activities typically occurs during new employee orientation:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. A tour of the business</option><option value="B">B. Contact with the employee's references</option><option value="C">C. A performance appraisal</option><option value="D">D. Review of the employee's résumé</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: A tour of the business</h5><h5>New employee orientation usually includes activities that will provide new
employees with information about the business. Orientation also helps to put new employees at ease and
helps to eliminate many of their anxieties about their new surroundings. Reviewing the employee's
résumé and contacting the employee's references is usually done before the business hires the
employee. A performance appraisal is a tool that evaluates how well the employee performs his/her job
duties. Employees receive performance appraisals after they have worked for a certain amount of time.
</h5></div><h5 id='q44'>44. Alonzo, the marketing director at the local convention and visitors bureau, conducted a series of focus
groups with people in different age groups to determine what entertainment they are interested in. He
then compared his findings to determine similarities across groups. This is an example of</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. primary data.</option><option value="B">B. secondary data.</option><option value="C">C. quantitative research.</option><option value="D">D. longitudinal research.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: primary data.</h5><h5>If recipients
clearly understand the who, what, where, when, why, and how of the situation, they usually have
sufficient information to make a decision. Clear and concise writing enables a recipient to read the
message. The letterhead usually includes the business's name, address, and phone number so
recipients are able to contact the business. Explaining the situation and including sufficient data does not
guarantee that the recipient will agree with the content.
</h5></div><h5 id='q45'>45. To track environmental changes impacting hospitality and tourism marketing, a destination marketer
should use</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. model building.</option><option value="B">B. push technology.</option><option value="C">C. customer discovery.</option><option value="D">D. market-basket analysis.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is B: push technology.</h5><h5>Marketers can keep up with environmental changes by scanning information that is
automatically delivered to their computer by push technology. This helps marketers identify trends in their
early stages of development. LexisNexis is an example of a company that scans information, finds
relevant information, and forwards it to subscribers so that they can review and interpret the information
at their convenience. Model building involves identifying relationships between variables. Customer
discovery is a data-mining application that enables researchers to determine who will make a valuable
customer. Market-basket analysis is another data-mining technique used to identify relationships
between product purchases and retail shopping information.
</h5></div><h5 id='q46'>46. Which of the following can be learned from monitoring the sales data of any hospitality and tourism
business:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Average amount of sales per customer</option><option value="B">B. Median age of customers</option><option value="C">C. Average size of customers' families</option><option value="D">D. Most frequently preferred color of customers</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Average amount of sales per customer</h5><h5>By totaling the amount of all sales and dividing by the number of
customers, hospitality and tourism businesses can determine the average amount of sales per customer.
Hospitality and tourism employees can use this information as a target amount to work toward attaining
and exceeding with their sales efforts. The age of customers, the size of their families, and their preferred
color cannot be obtained from all hospitality and tourism sales data.
</h5></div><h5 id='q47'>47. When examining two data sets, the hotel manager found that one set had a correlation of +1 and the
other had a correlation of -1. What should the hotel manager understand about the strength of the
relationship of the two data sets?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. The strength of the relationship of the two data sets is the same.</option><option value="B">B. No relationship exists with the -1 correlation.</option><option value="C">C. The strength of the relationship of the +1 correlation is twice as strong as the -1 correlation.</option><option value="D">D. The strength of the relationship of the -1 correlation is less than that of the +1 correlation.

</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: The strength of the relationship of the two data sets is the same.</h5><h5>The +1 correlation has a direct
relationship with the X and Y coordinates, while the -1 correlation has an inverse relationship with them.
However, the strength of that relationship is the same.
</h5></div><h5 id='q48'>48. The audience for the research report is young professionals. What should you incorporate into a visual
presentation that will appeal specifically to that audience?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Different backgrounds in each slide</option><option value="B">B. Pictures</option><option value="C">C. Concise information</option><option value="D">D. Animated backgrounds</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: Animated backgrounds</h5><h5>The use of animated backgrounds appeals to young professionals, whereas
older professionals would prefer having clear, concise information. Pictures and concise information
appeal to all audiences. Using different backgrounds on each slide makes the presentation appear
"busy."
</h5></div><h5 id='q49'>49. Which major marketing function determines how various products will be shipped?</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Servicing</option><option value="B">B. Warehousing</option><option value="C">C. Distribution</option><option value="D">D. Transportation</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: Distribution</h5><h5>Distribution is the process of moving, storing, locating, and/or transferring ownership of
goods or services. Shipping is one aspect of distribution. Important considerations in selecting the
method of shipment are the weight of the product, its size, and whether it is perishable and/or fragile.
Warehousing, a component of distribution, involves the storage, recording, and care of goods for future
sale to customers. Servicing is the maintenance, repair, or replacement of defective parts of a product
after it has been sold. Transportation is the act of moving anything from one place to another or the
method by which it is moved, and is an aspect of distribution.
</h5></div><h5 id='q50'>50. A major pharmaceutical company is considering replacing meetings with teleconferences and substituting
regional meetings for national meetings. This consideration is in response to which factor affecting
marketing in the travel environment?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Competition</option><option value="B">B. Economic</option><option value="C">C. Technology</option><option value="D">D. Legislation and regulation</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is B: Economic</h5><h5>In a time of economic uncertainty, companies look for substitute goods and services such as
teleconferencing instead of holding a meeting or having one national meeting instead of several regional
meetings. The competition factor in the travel environment refers to competition within the travel industry
itself. Regulations in the travel industry do not affect the drug industry. Technology has made
teleconferencing possible but does not affect the substitution of regional meetings for national meetings.
</h5></div><h5 id='q51'>51. A reason that hotels keep guest-history records that tell them the geographic locations of the majority of
their guests is in order to</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. order appropriate newspapers.</option><option value="B">B. advertise in specific areas.</option><option value="C">C. serve regional menu items.</option><option value="D">D. provide local travel brochures.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: advertise in specific areas.</h5><h5>Knowing the part of the country that most of their guests are from helps hotels
to choose appropriate areas in which to advertise. They are able to target the majority of their advertising
to the areas that provide the most guests. Knowing the home towns of guests would not influence a
hotel's selection of newspapers, menu items, or travel brochures.
</h5></div><h5 id='q52'>52. You have been asked to provide information to management about the impact a highway bypass will
have on your business, identifying a recommended course of action. What would be the best way to
organize the information?</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. By emphatic order</option><option value="B">B. In chronological order</option><option value="C">C. By cause/effect</option><option value="D">D. In alternating organization</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: By cause/effect</h5><h5>Identifying the causes and/or the effects of the highway bypass will be helpful in
persuading management to make a decision about its course of action. Cause tells management why the
bypass happened, while effect presents the results of the bypass. Chronological order would provide
management with information according to the sequence in which the bypass occurred. An alternating
organization pattern would stress the points you want to make about a comparison you are making.
Emphatic order would present your ideas in their order of importance, either the strongest point being
given first or last.
</h5></div><h5 id='q53'>53. Payroll, hotel reservations, and sales orders are handled by a(n) __________ type of information system.</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. decision support system</option><option value="B">B. knowledge work system</option><option value="C">C. transaction processing system</option><option value="D">D. executive support system</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: transaction processing system</h5><h5>This is a computerized information system that processes daily, routine
business transactions at the operational level of companies. Knowledge work systems aid knowledge
workers in the creation and integration of new knowledge into companies. Its purpose is to improve
worker productivity. Decision support systems aid managers in making decisions that are unique and
rapidly changing. Executive support systems are reporting tools that enable managers to turn a
company's data into useful reports.
</h5></div><h5 id='q54'>54. Which of the following is available to all people around the world who have access to a computer that has
connectivity:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Intranet</option><option value="B">B. Internet</option><option value="C">C. Extranet</option><option value="D">D. Broadband</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: Internet</h5><h5>The Internet is a worldwide network of computers that enables users to access information and
communicate with others. The Internet is available to all people around the world who have access to a
computer that has connectivity. Today, connectivity may be by dial-up to telephone lines, through
broadband technology, or through wireless routers. All people around the world do not have access to an
Intranet or an Extranet. Broadband is a type of technology.
</h5></div><h5 id='q55'>55. When conducting a web search, keywords entered into the query field should</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. be as specific as possible.</option><option value="B">B. be entered as all lower case letters.</option><option value="C">C. be very broad or general.</option><option value="D">D. contain fewer than 10 characters.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: be as specific as possible.</h5><h5>By being as specific as possible, results are narrowed to the most relevant
material, which saves the researcher time from reading through unnecessary information. For example, if
an individual is researching information on George Washington, the researcher should enter the
keywords "George Washington" rather than "presidents" to retrieve the most relevant information.
"Presidents" is a very broad, general term. The researcher would need to sift through much more
information to obtain the needed information. Generally, most search engines are not case sensitive so it
does not matter how the letters are entered into the query. Most search engines can conduct searches
with more than 10 characters in the query field.
</h5></div><h5 id='q56'>56. The capability of combining graphics, text, animation, and sound is a unique characteristic of
__________ software programs.</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. communication</option><option value="B">B. presentation</option><option value="C">C. numeric</option><option value="D">D. electronic</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: presentation</h5><h5>Presentation software programs give the user the capability of presenting information by
combining graphics, text, animation, photographs, and sound. Presentation software can be used to
create slide programs, overhead transparencies, multimedia presentations, etc. This software enables
users to develop visual presentations that are lively, colorful, and appealing to viewers. Communication
software programs establish connections between computers. Numeric and electronic are not types of
software programs, although some programs analyze numerical data.
</h5></div><h5 id='q57'>57. A business owner wants to compare last year's sales to the business's sales in 2001. Unfortunately, the
owner has no way to read the 2001 data, since the data are stored on a floppy disk. This scenario
illustrates which of the following drawbacks to keeping digital records:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Some digital records become inaccessible due to obsolete technology.</option><option value="B">B. Constant use and rough handling damage some electronic media.</option><option value="C">C. Digital records are more expensive to store than paper records.</option><option value="D">D. Digital records often do not comply with government regulations.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: Some digital records become inaccessible due to obsolete technology.</h5><h5>The business's 2001 sales data
have become inaccessible due to obsolete technology—the floppy disk. Unless the business owner
saved the sales data in another form or can acquire a floppy disk drive, s/he simply cannot access the
data that the disk contains. Another drawback of electronic records is that constant use and rough
handling have the potential to damage some electronic media. However, there is no indication that the
floppy disk has been damaged; instead, it is simply an outdated form of technology. Digital records are
actually less expensive to store than paper records. There is no way to know if the data on the floppy disk
comply with government regulations, but, in general, businesses keep government regulations in mind
when creating and storing digital records.
</h5></div><h5 id='q58'>58. Changing attitudes about family roles is an example of a shift in</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. demographics.</option><option value="B">B. society and culture.</option><option value="C">C. the economy.</option><option value="D">D. competition.

</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: society and culture.</h5><h5>Changing attitudes about family roles is an example of a shift in society and culture.
Businesses scan social factors so that they can continue to be sensitive to customer needs and wants.
Demographics are the physical and social characteristics of the population, such as age, gender, and
race/ethnic origin. The economy is the system in which people make and spend their incomes. Changing
cultural attitudes do not reflect a shift in the competition.
</h5></div><h5 id='q59'>59. Which 1990s technological development has allowed travel and tourism information to be obtained by the
general public on personal computers:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Internet</option><option value="B">B. Fax machine</option><option value="C">C. Cellular telephones</option><option value="D">D. Central Reservation Systems</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: Internet</h5><h5>A personal computer is used to access Internet services. In addition, the Internet can be
accessed through cell phones and personal digital assistants (PDAs). Internet services can be used to
research, reserve, cancel, and pay for travel and tourism services. Fax machines were developed prior
to1990. Cellular telephones do not require personal computers for usage. Central Reservation Systems
were implemented prior to 1990 and are used by persons employed in the travel and tourism industry,
not the general public.
</h5></div><h5 id='q60'>60. The purpose of a company's operations function is to manage its</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. communications.</option><option value="B">B. long-term goals.</option><option value="C">C. day-to-day activities.</option><option value="D">D. employees.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is C: day-to-day activities.</h5><h5>Progress reports briefly provide updated information
about long-term activities. They are short and usually include only summaries of necessary information.
Analytical, research, and statistical are examples of complex written reports that are lengthy and contain
detailed information.
</h5></div><h5 id='q61'>61. What is one way that a business can reduce unsafe working conditions?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Obtain OSHA regulations</option><option value="B">B. Improve housekeeping</option><option value="C">C. Inspect yearly</option><option value="D">D. Eliminate coffee breaks</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: Improve housekeeping</h5><h5>Simple housekeeping procedures, such as cleaning up work areas and putting
away tools, are easy ways to keep a work area safe and reduce hazardous conditions. A yearly
inspection would not correct ongoing safety problems. OSHA regulations must be enforced in order to be
effective. Employees need periodic breaks from the work routine.
</h5></div><h5 id='q62'>62. Businesses that are common targets for robbery are those that</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. are located in isolated areas.</option><option value="B">B. keep little cash on hand.</option><option value="C">C. are brightly lit at night.</option><option value="D">D. have many employees.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: are located in isolated areas.</h5><h5>Robbery is theft that involves the use of force, violence, or fear. Other
common targets are businesses that have large amounts of cash on hand, are poorly lit at night, or are
attended by only one employee.
</h5></div><h5 id='q63'>63. One procedure that businesses often establish to protect company information from computer crime is to
require the use of</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. virus detectors.</option><option value="B">B. security cameras.</option><option value="C">C. search engines.</option><option value="D">D. virtual software.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: virus detectors.</h5><h5>Viruses are programs designed to disrupt computer operations. These viruses often
have the ability to destroy information or to shut down a business's computer system. These actions are
types of computer crimes that businesses try to protect themselves from by requiring the use of virus
detectors. Virus detectors are software programs that search for possible viruses that might attack a
business's computer system. Security cameras are used to prevent theft. Businesses do not use search
engines or virtual software to protect company information from computer crime.
</h5></div><h5 id='q64'>64. Which of the following is an important question that a business should ask when selecting a vendor:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. What are our business's strengths and weaknesses?</option><option value="B">B. What computer program does the vendor use for its project management processes?</option><option value="C">C. What is our business's target market?</option><option value="D">D. Does the vendor have the resources to consistently meet our business's needs?</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Does the vendor have the resources to consistently meet our business's needs?</h5><h5>A business that wants to
build a long-term relationship with a vendor must consider many factors. Most importantly, the business
must determine if the vendor has the resources to meet the business's needs. Some resources include
the product availability, technical-system compatibility, customer-service support, etc. The vendor's
project management computer program is not usually a primary consideration during the vendorselection process. The business's own target market is a marketing consideration for the business rather
than for vendor selection. The business's strengths and weaknesses are identified in its SWOT analysis,
and do not directly relate to the vendor-selection process.
</h5></div><h5 id='q65'>65. Which of the following is necessary to the actual production of goods and services:</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Capital resources</option><option value="B">B. Consumers</option><option value="C">C. Utility</option><option value="D">D. Fiscal control</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: Capital resources</h5><h5>Producers must receive enough
income so that they are able to continue making or providing goods and services. Consumption is the
process or activity of using goods and services. Production is the making of goods and services.
Exchange involves the exchange of money payments between producers and the owners of resources.
</h5></div><h5 id='q66'>66. What is an example of a housekeeping activity that a gift-shop employee would perform?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Purchasing cleaning supplies</option><option value="B">B. Straightening display areas</option><option value="C">C. Washing store windows</option><option value="D">D. Inspecting fire extinguishers</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is B: Straightening display areas</h5><h5>Most gift-store salespeople have responsibility for performing certain
housekeeping activities such as straightening display areas. These employees are able to arrange the
merchandise in displays during the time they are not assisting customers. Keeping displays in a neat and
orderly condition helps customers to locate items and tends to encourage buying. Management usually is
responsible for purchasing cleaning supplies. Maintenance workers usually wash store windows. Fire
professionals usually are responsible for inspecting fire extinguishers.
</h5></div><h5 id='q67'>67. To lower their risk of inhaling the harmful fumes of cleaning chemicals, hotel housekeeping employees
might wear protective</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. gloves.</option><option value="B">B. masks.</option><option value="C">C. nets.</option><option value="D">D. mouth guards.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: masks.</h5><h5>A ventilation mask, which is placed over the mouth and nose, hinders the risk of lung irritation or
damage that might be caused by harmful cleaning chemicals. Gloves protect the hands. Nets and mouth
guards do not protect a hotel's housekeeping employees from inhaling vapors.
</h5></div><h5 id='q68'>68. Which of the following is a guideline for the manager of a business or department to follow after a
robbery:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Ask witnesses to remain until the police arrive</option><option value="B">B. Leave doors unlocked for the police</option><option value="C">C. Send all customers out of the area</option><option value="D">D. Allow the victim(s) of the robbery to talk with the witnesses</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is A: Ask witnesses to remain until the police arrive</h5><h5>In an effort to help authorities apprehend the robber(s),
witnesses should be asked to remain until the police arrive. If witnesses are on hand, police will be able
to ask questions and obtain descriptions that will be helpful in the investigation. The victim(s) of the
robbery should be taken to a quiet area instead of being left to talk with other witnesses. This will help
prevent their memory from being confused or distorted. Any customers should remain on hand until
released by the police. The doors need to be secured so that only the police or witnesses can enter the
business. This is to protect the evidence.
</h5></div><h5 id='q69'>69. A general guideline for putting together an outfit of clothes is to make sure that the outfit</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. has several focal points.</option><option value="B">B. looks as though it is expensive.</option><option value="C">C. is appropriate for the occasion.</option><option value="D">D. minimizes personal strengths.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: is appropriate for the occasion.</h5><h5>The clothing outfits you choose should suit the occasion—whether
professional or personal. Colors, patterns, and textures should be well balanced. An outfit should have
one focal point and should maximize personal strengths. Clothing that looks, or is, expensive would not
be appropriate for all occasions.
</h5></div><h5 id='q70'>70. It is important to develop a personal plan of action for goals because</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. goals cannot be achieved without a plan.</option><option value="B">B. a plan helps you to achieve your goals.</option><option value="C">C. a plan guarantees success.</option><option value="D">D. you can share the plan with others.

</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: a plan helps you to achieve your goals.</h5><h5>With a personal plan of action, you will have a written, step-bystep method of achieving your goal, not just a vague idea of something you desire. However, not even a
written plan can guarantee success in reaching goals. It is possible to achieve goals without having a
written plan. It is not necessary to share the plan with others.
</h5></div><h5 id='q71'>71. To help make tentative career decisions, you should know the educational and training requirements as
well as</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. your major strengths, aptitudes, and interests.</option><option value="B">B. the salary level to expect.</option><option value="C">C. the level of computer literacy and skills required.</option><option value="D">D. employment opportunities that will be available in the next decade.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: your major strengths, aptitudes, and interests.</h5><h5>This information will be the most important because it will
help you to determine whether you will be happy and successful in a certain career area. Salary is
important to some, but most people try to find occupations that will provide personal satisfaction. People
often expect that career opportunities will change according to the needs of the market and that they may
need to adapt in the future. Technology is an important part of many occupations, but not all. In addition,
technology is constantly changing, which means that your computer skills will likely change over time.
</h5></div><h5 id='q72'>72. Jared was just hired for a new job. The employee who interviewed him and took him through the hiring
process works in</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. marketing management.</option><option value="B">B. human resource management.</option><option value="C">C. banking services.</option><option value="D">D. operations management.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: human resource management.</h5><h5>The employee who interviewed Jared and took him through the hiring
process works in human resource management. Human resource management careers focus on the
staffing activities that involve planning, recruitment, selection, orientation, training, performance
appraisal, compensation, and safety of employees. This employee does not work in marketing
management, banking services, or operations management. Careers in marketing management involve
all marketing functions, including channel management, marketing-information management, pricing,
product/service management, promotion, and selling. Banking services include cash management, shortterm investments, mortgages and other loans, credit cards, and bill payment. Employees working in
operations management focus on planning, organizing, coordinating, and controlling the resources
needed to produce/provide a business's goods and/or services.
</h5></div><h5 id='q73'>73. A job applicant who wants to write a follow-up letter should follow the guidelines for</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. preparing a report.</option><option value="B">B. writing a personal letter.</option><option value="C">C. writing a business letter.</option><option value="D">D. preparing a résumé.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: writing a business letter.</h5><h5>Job applicants should follow the rules for writing a business letter when they
write letters of application and interview follow-up letters. The follow-up letter should express the
applicant's appreciation for the interview and for being considered as a possible employee of the firm.
Reports and résumés have their own guidelines. Personal letters are informal and usually reflect the
writer's personality.
</h5></div><h5 id='q74'>74. Victoria is new to the marketing field and wants to meet other marketing professionals. What would be
the best way for Victoria to meet other marketing professionals?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Wait until she is approached by others</option><option value="B">B. Join a local professional marketing or trade organization</option><option value="C">C. Go to after-work activities at the local country club</option><option value="D">D. Visit all businesses in the community</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is B: Join a local professional marketing or trade organization</h5><h5>People who are members of a professional
trade organization have a common need and have gained strength through pooling their talents and
resources. Visiting every business is ambitious but too time consuming and may not produce the desired
results. Attending after-work activities is a possibility, but it is too limiting, and she has no control over
who will be at those activities. Victoria could wait until approached by others, but the process would be
slow. She would only meet those who took the time to approach her.
</h5></div><h5 id='q75'>75. To become the general manager of a large hotel, you will probably need to go to</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. a community college.</option><option value="B">B. graduate school.</option><option value="C">C. seminars and workshops.</option><option value="D">D. college.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: graduate school.</h5><h5>To become the general manager of a large hotel, an employee will need advanced
education. The general manager is responsible for the daily operation of the entire hotel. This represents
years of experience in the industry as well as graduate school. Attending community college, college, and
seminars and workshops would not be sufficient education for the employee to move into the ranks of a
GM at a large hotel.
</h5></div><h5 id='q76'>76. In what segment of the hospitality and tourism industry is destination marketing?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Restaurants and managed services</option><option value="B">B. Travel and tourism</option><option value="C">C. Recreation</option><option value="D">D. Event management</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: Event management</h5><h5>The employee who interviewed Jared and took him through the hiring
process works in human resource management. Human resource management careers focus on the
staffing activities that involve planning, recruitment, selection, orientation, training, performance
appraisal, compensation, and safety of employees. This employee does not work in marketing
management, banking services, or operations management. Careers in marketing management involve
all marketing functions, including channel management, marketing-information management, pricing,
product/service management, promotion, and selling. Banking services include cash management, shortterm investments, mortgages and other loans, credit cards, and bill payment. Employees working in
operations management focus on planning, organizing, coordinating, and controlling the resources
needed to produce/provide a business's goods and/or services.
</h5></div><h5 id='q77'>77. Which of the following is an example of promotion in the hospitality industry:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. A resort reservationist asks a guest if s/he would like a beachfront room.</option><option value="B">B. A hotel advertises a free breakfast buffet for guests on select mornings during slow seasons.</option><option value="C">C. A general manager sends hotel employees a memo regarding insurance policy changes.</option><option value="D">D. A guest orders room service at a European bed and breakfast inn.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: A hotel advertises a free breakfast buffet for guests on select mornings during slow seasons.</h5><h5>Promotion
is defined as a marketing function that communicates information about goods, services, images, and/or
ideas to achieve a desired outcome. Advertising, coupons, frequent-buyer programs, and samples are a
few tools that marketers use to promote products. By advertising free goods and services (e.g., free
breakfast buffet), the hotel is implementing a promotional activity. A guest ordering room service or a
manager sending employees a memo regarding compensation information are not considered
promotional activities. A resort employee asking guests about room preferences is a selling activity.
</h5></div><h5 id='q78'>78. Creating an economical image of a new product to match the business's low-cost image is an example of</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. persuasive selling.</option><option value="B">B. promotional pricing.</option><option value="C">C. publicity planning.</option><option value="D">D. product positioning.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is D: product positioning.</h5><h5>Positioning is a product mix strategy in which a business creates a certain image or
impression of a product in the minds of consumers. In most cases, businesses want the image of the new
product to match the business's image and the image of its other products. Businesses create an overall
image that they project to consumers, and maintain that image by positioning new products accordingly.
It would confuse customers if a business with a low-cost image positioned a new product as expensive or
exclusive. Also, customers might not buy an expensive new product from a business with a low-cost
image. Promotional pricing is pricing goods/services at low levels and advertising them heavily. Creating
an economical image of a new product to match the business's low-cost image is not an example of
publicity planning or persuasive selling.
</h5></div><h5 id='q79'>79. When deciding what products to buy, businesses tend to offer only those products that</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. employees prefer.</option><option value="B">B. vendors recommend.</option><option value="C">C. customers expect.</option><option value="D">D. managers suggest.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is C: customers expect.</h5><h5>Customers expect businesses to provide certain products. These goods and services
vary by type of business or industry. For example, customers expect an office-supply store to carry
paper and pens, and a hotel gift shop to sell souvenirs. Businesses do not offer only those items that
vendors recommend, employees prefer, or managers suggest.
</h5></div><h5 id='q80'>80. Which of the following is an example of a service provided by the hospitality industry:</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Electronic room keys</option><option value="B">B. Restaurant meals</option><option value="C">C. Airline tickets</option><option value="D">D. Valet parking</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: Valet parking</h5><h5>A service is an intangible product; one that can be felt, seen, heard, or experienced rather
than touched. Many hospitality businesses offer valet parking as a service for their guests. Valet parking
service occurs when a hotel or restaurant employee parks and retrieves the guests' vehicles upon the
guests' arrival or departure from the business (e.g., hotel, restaurant). Meals, airline tickets, and
electronic room keys are tangible items.
</h5></div><h5 id='q81'>81. The Coleman Company sells its own brand of tents, coolers, grills, and sleeping bags. This is an example
of</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. product positioning.</option><option value="B">B. monopolizing the outdoor market.</option><option value="C">C. product extensions.</option><option value="D">D. upselling.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is C: product extensions.</h5><h5>Product extensions occur when a business puts its name on a variety of products,
such as Oakley sunglasses, electronics, apparel, footwear, watches, etc. Businesses use these
extensions to leverage the awareness of an existing brand, to make a new product readily recognizable,
to reach new customers, to keep a competitor from offering the product, and to refresh its image. The
Coleman Company is not monopolizing the outdoor market since it has a variety of competitors.
Upselling occurs when a salesperson sells a more expensive product than that originally requested by
the customer in order to better meet the person's needs. Product positioning occurs when a business
creates an image of the product or company in customers' minds.
</h5></div><h5 id='q82'>82. What technology should a travel agent use specifically to notify clients of web pages of interest?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. E-mail</option><option value="B">B. HTML</option><option value="C">C. Social bookmarks</option><option value="D">D. Search engine optimization

</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: Social bookmarks</h5><h5>Social bookmarks enable businesses to store, organize, search, share, and manage
web pages they find of interest. By tagging, or categorizing, websites or web pages, businesses can
share information with as many or as few customers as they'd like. Examples of social bookmarking sites
include Digg, StumbleUpon, Delicious, Reddit, Technorati, and many others. Although e-mail could be
used to give this information to clients, it is not specific to this purpose. HTML, hypertext markup
language, is language used in developing websites. Search engine optimization, SEO, involves a variety
of techniques used to improve the rank of websites in search engines.
</h5></div><h5 id='q83'>83. An e-mail that allows the reader to click on certain text and be transported to a specific web site is using</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. contact lists.</option><option value="B">B. hyperlinks.</option><option value="C">C. gateways.</option><option value="D">D. affiliations.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: hyperlinks.</h5><h5>A hyperlink is a component of an electronic document that can be clicked on to jump to
another place within the document or into a different document. A common use of hyperlinks is to make it
possible to link from somewhere within the e-mail to a web site. Hyperlinks are a great way to drive traffic
to web sites. An address book or contact list is a list of Internet addresses. A gateway is a combination of
hardware and software that connects different types of networks that convert an e-mail so that the
software program understands it. The ability to click on text and be transported to another web page or
web site is not called an affiliation.
</h5></div><h5 id='q84'>84. The Treetop Resort and Spa wants to increase its web site's visibility on major search engines such as
AOL and Google. Which of the following strategies is most likely to optimize the resort's ranking on the
search engines:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Widespread HTML code</option><option value="B">B. Extensive use of JavaScript</option><option value="C">C. Detailed, accurate site map</option><option value="D">D. Web site age and longevity</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Detailed, accurate site map</h5><h5>A search engine is a software program that automatically crawls the Web
looking for information pertaining to specified search terms and displays a list of results. Businesses use
search-engine optimization strategies to obtain a good position in the search results. The key to search
engine optimization is designing and submitting web pages so that they can be found easily by search
engine spiders. A simple, yet effective, way to optimize a web site's ranking on the search engines is to
develop a detailed, accurate site map that helps the spiders to quickly and easily locate information
throughout the web site. Extensive use of JavaScript and widespread HTML code works against searchengine optimization because these computer languages create barriers that spiders have difficulty
bypassing. The age of a web site usually has very little bearing on its ranking on search engines.
</h5></div><h5 id='q85'>85. Which of the following is an important part of designing an effective advertisement:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Frequency</option><option value="B">B. Storyboard</option><option value="C">C. Typography</option><option value="D">D. Position</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Typography</h5><h5>Typography is the effective use of type. However, typography involves more than the type
or lettering. It involves the style and size of type as well as the space between letters or words.
Typography has a significant effect on the look of an ad and helps to convey a message and express a
certain feeling. Therefore, typography is an important part of designing an effective advertisement.
Creating a storyboard is an important part of developing a television commercial. Frequency and position
are factors to consider when placing print ads.
</h5></div><h5 id='q86'>86. What should a destination marketer put in the lower right-hand corner of an ad layout?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. White space</option><option value="B">B. Headline</option><option value="C">C. Illustration</option><option value="D">D. Logo</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: Logo</h5><h5>Readers in the U.S. and Canada generally read from left to right and top to bottom. Putting the
logo in the bottom right-hand corner of an advertising layout makes the logo the last element of the ad
that the reader sees and makes it the most likely element to be remembered. Headlines generally appear
towards the top of advertising layouts to attract attention. White space is blank space that is good to use
in advertising layouts to unify the elements of an advertisement and to attract attention. The illustration is
used to attract attention and helps to lead the reader into the headline and copy.
</h5></div><h5 id='q87'>87. What color harmonies tend to stimulate intense emotion and energy?</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Blue, green, and purple</option><option value="B">B. Red, yellow, and orange</option><option value="C">C. Black, blue, and yellow</option><option value="D">D. Orange, green, and white</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: Red, yellow, and orange</h5><h5>Color harmonies are the ways in which colors are combined on the page to
create a sense of visual order and appeal. Colors tend to trigger certain feelings in people. Because the
color red attracts the most attention visually, it tends to generate intense emotion and energy. Yellow also
attracts attention and tends to be an “optimistic” color. Because yellow is hard on the eyes, it should be
used sparingly. Orange is a mixture of red and yellow and often generates feelings of enthusiasm and
warmth. Blue and purple are cool colors that create a sense of calm and tranquility. Green is easiest on
the eye and is most often associated with nature. White signifies purity, and black signifies authority.
</h5></div><h5 id='q88'>88. One week prior to its official grand opening, Wacky Wild Fun Park invited 200 teenagers to a
complimentary "sneak preview Saturday" of all that the amusement park has to offer—its rides, food, and
entertainment. At the end of the day, as each teen passed through the exit gate, park employees gave
each guest five Wacky Wild Key chains to pass on to her/his friends. Park employees also reminded the
departing guests to tell their friends about all the fun they had at the amusement park. This is an example
of</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. personal selling.</option><option value="B">B. buzz marketing.</option><option value="C">C. print advertising.</option><option value="D">D. merchandising.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: buzz marketing.</h5><h5>Buzz marketing involves generating excitement and “buzz” among early adopters of a
product so that they pass along information about the product to others. The amusement park invited 200
teens to be the first to visit the park and asked them to tell their friends about how much they enjoyed it.
Personal selling is a form of promotion that determines client needs and wants and responds through
planned, personalized communication that influences purchase decisions and enhances future business
opportunities. Print advertising is a paid form of nonpersonal presentation of ideas, images, goods, or
services in a newspaper, magazine, etc. Merchandising is the process of having the right goods in the
right place at the right time in order to make a profit.
</h5></div><h5 id='q89'>89. An up-and-coming international hotel chain invited a popular syndicated television talk show host to stay
at one of its hotels for a night and then share her experiences with her viewing audience and blog
readers. The hotel chain asked the talk show host to act as a(n) __________ in its word-of-mouth
marketing campaign.</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. infomercial host</option><option value="B">B. advertising agent</option><option value="C">C. fact-finding personality</option><option value="D">D. influencer</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: influencer</h5><h5>An influencer is an individual who has the credibility and capability to share his/her positive
product/service experiences with a large population. The talk show host is popular and has the means to
talk with thousands of people about her positive hotel experience at the same time via her show and
blog. She is not acting as an advertising agent, fact-finding personality, or infomercial host. An
advertising agent is someone who develops paid forms of nonpersonal presentation of ideas, goods, or
services. A fact-finder is a basic type of customer personality characterized by the customer's challenging
a salesperson to know the products, doing comparison shopping, liking to see variety, and/or wanting
factual information. An infomercial host is someone starring in a lengthy commercial that look likes a
television program.
</h5></div><h5 id='q90'>90. The main message of advertising copy usually focuses on a product's</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. dependability.</option><option value="B">B. features.</option><option value="C">C. warranty.</option><option value="D">D. benefits.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: warranty.</h5><h5>Explanation not available</h5></div><h5 id='q91'>91. Which of the following is a characteristic of effective Internet ad copy:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Inclusive by addressing the copy as "we" and "us"</option><option value="B">B. Detailed so that the copy answers all possible customer questions</option><option value="C">C. Non-emotional to keep from upsetting the readers</option><option value="D">D. Bulleted content to facilitate skimming and understanding</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bulleted content to facilitate skimming and understanding</h5><h5>When people read Internet ad copy, they
generally skim content rather than reading ads in-depth or looking for detailed copy. The ad copy should
be emotional to gain the readers' interest. Rather than talking about “we,” the writer should direct the
copy to “you.”
</h5></div><h5 id='q92'>92. An account manager for a large national travel company is responsible for proofing print ads that will
coincide with the company's Super Bowl ads. What type of proof should the account manager request?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Velox</option><option value="B">B. Black-and-white laser</option><option value="C">C. Blue lines</option><option value="D">D. Press

</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: Press

</h5><h5>Explanation not available</h5></div><h5 id='q93'>93. You handle your restaurant's public-relations activities. Which of the following issues would be most
appropriate for the restaurant to address:</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Buying new uniforms for Little League players</option><option value="B">B. Buying books for adults who are learning to read</option><option value="C">C. Feeding the homeless</option><option value="D">D. Feeding late-night airport arrivals who don't know where to get food</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Feeding the homeless</h5><h5>Feeding the homeless is a natural fit for a restaurant. Depending on the type of
restaurant, unused prepared-food items may be thrown out, used in appetizers the next day, or even
used in compost piles. Rather than throwing food out, the restaurant staff could take the food to the
homeless. That is a worthy cause that exists in many locales. The activity could then be publicized in a
press release on the restaurant's website and/or in the local newspaper. Buying books and uniforms are
also worthy causes but are not as good a fit as feeding the homeless. Many late-night airport arrivals are
going to their homes. Also, there are usually a number of fast-food restaurants located adjacent to the
airport that could meet the needs of that group.
</h5></div><h5 id='q94'>94. Why is a fact sheet helpful to writers of news releases?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. It provides an outline for writers to follow.</option><option value="B">B. It includes guidelines for the specific medium.</option><option value="C">C. It helps writers to prioritize the information.</option><option value="D">D. It helps to make the news release look professional.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: It helps writers to prioritize the information.</h5><h5>A fact sheet is a list of facts that can be presented to the
media instead of a news release or used in the preparation of the release. Writers can number the items
included on the fact sheet in the number of their importance so that the most important facts are
presented at the beginning of the release. Fact sheets are not intended for a specific medium, they do
not provide an outline for the writer to follow, and they do not contribute to the appearance of the news
release.
</h5></div><h5 id='q95'>95. The Smart Travelers' Store is planning a special promotion for Valentine's Day. What should you do the
day before to make sure that your department is prepared?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Staff the store with the same salespeople who worked last year.</option><option value="B">B. Determine whether anything needs to be ordered.</option><option value="C">C. Make sure advertisements appeared in the newspaper.</option><option value="D">D. Confirm that red items have been displayed.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: Confirm that red items have been displayed.</h5><h5>The day before a special promotion you should make sure
that all the items related to the event are on display. If it's a Valentine's Day promotion, you should make
sure that red items are prominently displayed because customers will be looking for those items. The day
before a special event is too late to order goods or make sure that ads have appeared in the newspaper.
It should not matter whether the salespeople who worked last year are working this year.
</h5></div><h5 id='q96'>96. To track how customers respond to advertisements, many marketers use __________ measures.</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. exposure</option><option value="B">B. processing</option><option value="C">C. market-share</option><option value="D">D. communication effects</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: processing</h5><h5>A number of different measurements can be used to track promotional activities such as
advertising. For example, processing measures can be used to track how customers respond to the
advertising. Exposure measures are used to track how many potential customers have been exposed to
advertisements. Market-share measures help marketers determine if they have achieved the sales that
they wanted. Communication effects measures can be used to track if customers are reacting to
advertising in the way that advertisers had hoped.
</h5></div><h5 id='q97'>97. Before suggesting substitute products to customers, salespeople should</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. clarify the customer's needs.</option><option value="B">B. point out features and benefits.</option><option value="C">C. reinforce the customer's decision.</option><option value="D">D. check availability of the requested item.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is D: check availability of the requested item.</h5><h5>There are several steps involved in offering substitute products.
The first step is to check availability of the requested item in order to satisfy customers' requests. If the
item is unavailable or out of stock, salespeople should explain that to the customers and continue with
the substitute selling process. Clarifying customers' needs is the second step in substitute selling.
Pointing out features and benefits is the fourth step, and reinforcing the customer's decision is the fifth
step.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1070

HOSPITALITY AND TOURISM CLUSTER EXAM

1

1. An offer must be made by one party and accepted by the other party in order for a contract to be</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Their needs and wants are satisfied.</option><option value="B">B. The rate of returns decreases.</option><option value="C">C. Others learn about the business.</option><option value="D">D. They become repeat customers.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: They become repeat customers.</h5><h5>to analyze problems and find solutions. The advantage is that when employees share many
different opinions, there is an increase in the chance of developing useful recommendations. However,
for the group discussions to be useful, all members must feel comfortable and be willing to express their
opinions. Businesses do not make it possible for employees to participate in group discussions to discuss
personal issues, to plan extracurricular activities, or to have casual conversations.
</h5></div><h5 id='q99'>99. When Maddie checked in at the Happy Airline ticket counter for her five-hour economy-class flight to
California, the customer service agent explained that hot meals and complimentary cocktails would only
be served to business-class and first-class passengers. For that reason, the Happy Airline agent
suggested that Maddie pay a small fee to move from economy-class to business-class for the flight. This
is an example of</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. a trade-in allowance.</option><option value="B">B. affiliate marketing.</option><option value="C">C. comparison shopping.</option><option value="D">D. up-selling.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: up-selling.</h5><h5>Up-selling is a sales technique in which a higher priced product than the one originally
requested by the customer is suggested. The customer-service agent suggested that Maddie pay a bit
more for a higher priced business-class ticket rather than sitting in economy class, which is what Maddie
had planned to do. Affiliate marketing is the process of promoting and selling another business's products
on a web site in exchange for a sales commission. The ticket agent is selling her/his company's products,
not another business's merchandise. Comparison shopping is the act of visiting other businesses to learn
what competing stores are selling and the prices they charge. Maddie is not comparison shopping. A
trade-in allowance is a price reduction offered for selling back an old model of the product being
purchased. There is no indication that the airline would reduce the price of a business-class ticket for
Maddie.
</h5></div><h5 id='q100'>100. Which of the following describes the services offered by trade industries:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. They are always limited.</option><option value="B">B. They may be limited or full line.</option><option value="C">C. They vary from day to day.</option><option value="D">D. They are always full line.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: They may be limited or full line.</h5><h5>Each trade industry must decide how broad the range of services it offers
to customers will be. They are not always limited or always full line, but they are not changed on a daily
basis as this would be confusing to customers and cause problems for the business.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Hospitality/Hospitality_3_Split_Master.js"></script></html>