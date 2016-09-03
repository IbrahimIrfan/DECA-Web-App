<?phpob_start();session_start();require_once 'dbconnect.php'if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Business-Admin_Exam_3</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Which of the following is an example of a tort associated with the invasion of privacy:</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. An employee receives serious injuries while improperly using a business's equipment.</option><option value="B">B. A salesperson intentionally misrepresents the facts about a product's performance to get a
sizable sale.</option><option value="C">C. A business airs a television ad that makes statements that are designed to harm a competitor's
reputation.</option><option value="D">D. A company uses an athlete's photo without permission to imply the endorsement of the product.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: A company uses an athlete's photo without permission to imply the endorsement of the product.</h5><h5>A tort is
a wrongful action that harms another person or business. The invasion of privacy is a type of tort. For
example, if a business uses a well-known athlete's image without his/her permission to imply that the
athlete uses or endorses the product, the business has committed a tort related to the athlete's right to
privacy. Misrepresenting facts is a tort related to fraud. A statement that harms an entity's reputation is a
defamation tort. There is not enough information provided to determine if a tort has occurred in relation to
the employee's injuries. For example, the employee may have knowingly operated the equipment
incorrectly. A tort may exist if the business neglected to maintain the equipment or did not train the
employee to use it correctly.
</h5></div><h5 id='q2'>2. As an audience member, which of the following should you do to encourage a speaker during an oral
presentation?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Keep a straight face to communicate that you are serious</option><option value="B">B. Refrain from asking questions</option><option value="C">C. Smile</option><option value="D">D. Quietly discuss the speech with the person sitting next to you</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: Smile</h5><h5>A smile shows the speaker that you support and encourage him/her. It is a good idea to ask
questions when asked. It shows interest in the topic. A straight face is difficult for a speaker to interpret. It
may mean a person is upset, is daydreaming, or is seriously listening. Talking to others during a
presentation is rude to the speaker and may cause him/her to lose his/her train of thought.
</h5></div><h5 id='q3'>3. Roberto has just finished giving a presentation about global warming. An obviously irritated audience
member stands and says that there is no evidence to prove global warming exists. Roberto calmly reads
results from three scientific reports on its existence. Roberto's response is an example of</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. defending an idea objectively.</option><option value="B">B. an effective conclusion.</option><option value="C">C. a transition.</option><option value="D">D. expressing a cultural barrier.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: defending an idea objectively.</h5><h5>Roberto is using facts to overcome an objection and defend his idea in a
professional manner. A conclusion is the prepared ending of a presentation. Since Roberto had just
finished his presentation, he had already delivered the conclusion. A transition occurs mid-speech to shift
from one point to another smoothly. Cultural barriers to new ideas occur when a person allows his/her
cultural background to affect his/her thinking. Roberto is trying to overcome a barrier to his presentation
by using fact-based research.
</h5></div><h5 id='q4'>4. A primary use of flow charts in business documents or presentations is to</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. compare and contrast data.</option><option value="B">B. identify trends.</option><option value="C">C. explain relationships.</option><option value="D">D. summarize numerical data.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: explain relationships.</h5><h5>Graphic aids help to clarify, reinforce, and summarize information. Flow charts help
explain relationships. For example, an organizational chart illustrates a business's chain of command.
Flow charts may also show the ways in which sequential processes work, such as project management.
Line graphs are often used to illustrate timelines and to identify trends. Bar charts are effective graphic
aids to compare and contrast data. Tables are often used to summarize complex numerical data.
</h5></div><h5 id='q5'>5. When writing e-mail correspondence to customers and coworkers, it is important to remember that the
messages</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. should be written in an entertaining, informal way.</option><option value="B">B. are often seen by people other than the recipients.</option><option value="C">C. should include graphics to hold the reader's interest.</option><option value="D">D. are usually deleted as soon as they are read.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: are often seen by people other than the recipients.</h5><h5>When writing e-mail messages to customers and
coworkers, the correspondence should address various business issues; therefore, writers should
develop the messages using a concise, friendly, and businesslike tone. If the writer uses language that is
very casual, personal, or questionable, there is a risk of offending the recipient or others to whom the
recipient forwards the message. Because many businesses have e-mail policies and can monitor the
contents of e-mail messages going into and out of their companies, e-mail writers should take care not to
send inappropriate messages. Business e-mail messages do not need to be entertaining or informal, nor
do they need to include graphics. Many businesspeople save important e-mail messages and flag them
for follow-up at a later time.
</h5></div><h5 id='q6'>6. Jessica must develop an analytical report that assesses the product opportunities for 18- to 34-year-old
sports enthusiasts in the greater Seattle area. What type of analytical report is Jessica writing?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Market analysis</option><option value="B">B. Troubleshooting</option><option value="C">C. Justification</option><option value="D">D. Feasibility</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: Market analysis</h5><h5>Analytical reports are documents that evaluate issues, opportunities, or problems. A
market analysis is a type of analytical report that evaluates a particular market. A market, for example,
might include a specific age range of a particular group who live in a specific geographic location.
Troubleshooting reports address specific problems, such as a problem with a process. A justification
report is a type of analytical report that evaluates the success or failure of a previous decision or course
of action. A feasibility report summarizes the positive and negative consequences of taking a certain
course of action.
</h5></div><h5 id='q7'>7. In which component of a research report should the writer place the following statement:
"Based on our findings, we believe that it is imperative that PNJ Corporation make the necessary
adjustments."</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Assumptions</option><option value="B">B. Analyses
</option><option value="C">C. Recommendations</option><option value="D">D. Methodology
</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: Recommendations</h5><h5>The recommendations section is the last component of a research report and
contains a proposed course of action (recommendation), which is based on the results or findings. The
methodology section of the report outlines the research plan. It appears in the middle of the report and
discusses the types of research tools used in the study and why they were selected. The analyses
section of the report describes the findings based on the assumptions made and the methodology used
to obtain the data.
</h5></div><h5 id='q8'>8. Which of the following is an example of a purpose statement in a research report:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. In this study, we will examine the causes and effects of global warming.</option><option value="B">B. In 2005, Sims Research surveyed 150,000 college professors.</option><option value="C">C. The quality of soil may affect plant growth.</option><option value="D">D. 2,500 residents reported power outages during the ice storm.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is A: In this study, we will examine the causes and effects of global warming.</h5><h5>The purpose statement appears
in a research report's introduction and summarizes the purpose of the report, such as the causes and
effects of global warming. The background section of a research report provides pertinent information
previously gathered by other researchers, such as the 2005 survey conducted by Sims Research. A
hypothesis is a proposed explanation of a situation or event, such as how the quality of soil may affect
the growth rate of a plant. Factual statements contain true data or information that can be verified, such
as the number of reported power outages during a specific event or time period.
</h5></div><h5 id='q9'>9. It is appropriate for a participant to ask questions during a staff meeting when</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. another participant is speaking.</option><option value="B">B. s/he needs a point clarified.</option><option value="C">C. the agenda is being distributed.</option><option value="D">D. s/he does not agree with the speaker.
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: s/he needs a point clarified.</h5><h5>When employees do not understand what the speaker has said, it is
appropriate to raise their hand to ask for clarification; however, it is rude to interrupt another person while
s/he is speaking. In many meetings, the leader will ask the participants if they have questions, and it
would be appropriate to ask for clarification at that time. Asking questions due to differing opinions or
when the agenda is being distributed may not be appropriate.
</h5></div><h5 id='q10'>10. An example of how a company can reinforce its “environmentally friendly” image through its employees is
by giving a(n)</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. airline ticket to the employee who recycles the most over one year.</option><option value="B">B. bonus of $500 for finishing a project early.</option><option value="C">C. extra day of vacation for riding a bike to work instead of driving.</option><option value="D">D. luncheon for employees who turn in reports on time.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: extra day of vacation for riding a bike to work instead of driving.</h5><h5>Biking reduces car pollution. When
others see the company's employees riding their bikes, it reinforces the company's image as
environmentally friendly. The company is encouraging this behavior by offering a reward. A bonus of
$500 for finishing a project early may be important to employees and effective in motivating them to work
efficiently, but it is not seen by others outside the organization so it doesn't reinforce the company's
image. In addition, finishing early is not an activity that is perceived as environmentally friendly. Although
recycling does reinforce the "green" image, there are two problems with this response. First, those
outside the company aren't likely to see employees recycling, so it won't boost the company's image.
Secondly, airplanes pollute the environment, so the award is not in keeping with the company's green
image. The luncheon may motivate employees to turn in reports in a timely manner, but nothing about
this incentive or reward reinforces the company's environmentally friendly image.
</h5></div><h5 id='q11'>11. One form of technology that businesses use to personalize their ongoing communication with customers
is</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. opt-in e-mail.</option><option value="B">B. banner ads.</option><option value="C">C. infomercials.</option><option value="D">D. radio messages.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: opt-in e-mail.</h5><h5>Technology allows a business to track a customer's web page visits and purchasing habits,
which helps the business develop a personal profile of the customer. This information helps the business
develop product suggestions and customize sales promotions to offer the customer. These offers are
often sent to the customers via opt-in e-mail-or promotional messages that customers permit the
business to send to them electronically. Banner ads, infomercials, and radio messages are forms of nonpersonal promotion.
</h5></div><h5 id='q12'>12. A luxury spa has experienced decreased sales. The owner believes the reason is a rise in unemployment
in the area. What external environmental factor does this represent?</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Sociocultural</option><option value="B">B. Economic</option><option value="C">C. Technological</option><option value="D">D. Governmental</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: Economic</h5><h5>Economic trends, including unemployment, have an impact on business. The salon's sales
are likely to decline in a time of high unemployment because fewer people have money to spend on
luxury goods. Sociocultural factors include population changes, fashion trends, etc. If the business
specialized in spa services that became unfashionable, it may see sales decline for sociocultural
reasons. Technological factors deal with shifts in the type of technology available/used. Governmental
factors are controlled by the government, such as changes in the tax rate or government regulations.
</h5></div><h5 id='q13'>13. Which of the following is NOT a characteristic of private enterprise:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. The market is regulated by the government.</option><option value="B">B. Supply and demand determine the exchange of goods.</option><option value="C">C. A person's income depends mainly on the income their parents made.</option><option value="D">D. Businesses use marketing and advertising to influence consumers.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: A person's income depends mainly on the income their parents made.</h5><h5>In a private enterprise economy, a
person's skills are the main determinant of his/her income. Supply and demand determine the exchange
of goods. For example, the higher the number of people who want to purchase Super Bowl tickets, the
higher the price the NFL can charge for each ticket. Private enterprise is regulated by the government,
but it is not controlled by the government. Regulated means that companies must adhere to guidelines
and laws, such as the U.S. Department of Agriculture inspecting meat packing plants to ensure that
products are safe for consumption. In private enterprise, businesses may use marketing to increase sales
and cause consumers to become aware of product and services.
</h5></div><h5 id='q14'>14. Past sales records show that sales increased at a clothing store when a 10th rack of clothing was added
to the store floor. However, when an 11th rack is added, sales increased by only 1%. In economics, this
is explained by</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. economies of scale.</option><option value="B">B. the concept of competition.</option><option value="C">C. the private enterprise system.</option><option value="D">D. the law of diminishing returns.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: the law of diminishing returns.</h5><h5>The law of diminishing returns states that when increasing amounts of
one factor (clothing racks, in this case) are employed, holding all other factors constant, after some point,
the resulting increase in output (sales, in this case) becomes smaller and smaller. In this scenario, this
may be because more racks make the store crowded, and consumers had trouble viewing the
merchandise. While the store has competitors, its decision to add racks of merchandise does not take
competitors into consideration. While the store likely is operating in a private enterprise system, the
declining sales increase caused by another clothing rack is not explained by that concept. Private
enterprise simply means a business unit is established, owned, and operated by private individuals for
profit. Economies of scale is the reduction in cost per unit resulting from increased production, realized
through operational efficiencies. This scenario does not deal with the cost of the clothing.
</h5></div><h5 id='q15'>15. Which of the following is NOT a fiscal cost that results from a high unemployment rate:</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Increase in crime rate recognized</option><option value="B">B. Reduction in income taxes collected</option><option value="C">C. Reduction in sales taxes collected</option><option value="D">D. Increase in unemployment benefits paid</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: Increase in crime rate recognized</h5><h5>While the crime rate often does increase in a time of unemployment,
the crime rate is a social cost, not a fiscal cost. Income taxes will decrease during high unemployment
because fewer people have incomes that can be taxed. Sales tax collections will decrease because
people have less money to spend on goods that are taxed. Higher unemployment means more people
will be collecting unemployment benefits from the government, resulting in higher fiscal costs.
</h5></div><h5 id='q16'>16. A developing country sets its currency to be the same value as the U.S. dollar. This is called a(n)</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. pegged currency.</option><option value="B">B. free-floating currency.</option><option value="C">C. indirect exchange rate quotation.</option><option value="D">D. direct exchange rate quotation.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is A: pegged currency.</h5><h5>A pegged currency is set by a country's government to mirror another country's
currency. This is often done by developing nations to give its currency stability. Free-floating currency is
the opposite of pegged. Its value fluctuates based on supply and demand. In terms of U.S. dollars, an
indirect quote is the number of U.S. dollars that one unit of a foreign currency could buy. In terms of U.S.
dollars, a direct quote is the number of a foreign currency that one dollar could buy. For example, a direct
quote for the units could be US $1.50 = 1 Euro.
</h5></div><h5 id='q17'>17. To avoid the appearance of bribery, businesspeople should understand a culture's protocol regarding</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. risk taking.</option><option value="B">B. decision making.</option><option value="C">C. gift giving.</option><option value="D">D. ethnocentricity.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: gift giving.</h5><h5>Gift giving practices vary greatly among countries. In some countries, it is customary, or
expected to give gifts in business situations. In other countries, many businesses limit or prohibit gift
giving/receiving because it may be viewed as bribery, which is an illegal activity under certain
circumstances. Decision making is choosing among alternatives. Risk taking is understanding and
accepting the responsibility of not knowing the outcome of a course of action. Ethnocentricity is the belief
that your own culture is naturally better than other cultures.
</h5></div><h5 id='q18'>18. Which of the following scenarios represents a cultural issue associated with personal space for an
American businessperson:</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. A foreign business associate stands several feet away when talking to the person.</option><option value="B">B. A European client greets the person with a kiss on each cheek.</option><option value="C">C. The person is seated in a small room to meet with an international client.</option><option value="D">D. The person is invited to dine in a busy restaurant following the meeting with an international
client.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: A European client greets the person with a kiss on each cheek.</h5><h5>The concept of space and proximity
differs among cultures. In countries such as the United States and Japan, people prefer to maintain
distance from others during conversation. In these countries, maintaining space is a sign of respect for
the other person. Kissing someone on the cheek requires close proximity, so the American
businessperson may feel very uncomfortable, especially if s/he doesn't know the client well. It is not
unusual for Americans to meet in small conference rooms to discuss business or for Americans to dine
with clients after a meeting.
</h5></div><h5 id='q19'>19. In some countries, pictures are used on packaging to identify contents. Since Gerbers' baby food
products feature smiling, healthy babies, the company had to repackage its baby food when doing
business in those countries. This problem resulted from issues associated with</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. quotas.</option><option value="B">B. culture.</option><option value="C">C. segmentation methods.</option><option value="D">D. trade agreements.

</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: culture.</h5><h5>Culture refers to the customers, habits, and traditions of a particular group. To appeal to
international markets, businesses often need to adapt their products to a specific country's cultural
norms. The example is not an issue associated with quotas, segmentation methods, or trade
agreements.
</h5></div><h5 id='q20'>20. Which of the following represents an issue associated with perceptions of time that may occur when
conducting business internationally:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. The business meetings were conducted in the mornings.</option><option value="B">B. The business meetings were conducted on Tuesdays.</option><option value="C">C. The business meetings were scheduled to accommodate participants in different time zones.</option><option value="D">D. The business meetings started several hours later than originally scheduled.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: The business meetings started several hours later than originally scheduled.</h5><h5>The concept of time is an
important consideration when conducting business internationally. In some cultures punctuality is very
important, so it is important to arrive at meetings on time or a few minutes early. In other cultures, time is
less important or is viewed differently. In some countries, businesspeople will keep people waiting while
they finish another activity, so that s/he can provide the visitor with his/her undivided attention. This
action may appear rude to people in some cultures, while it is viewed as a courtesy in other cultures.
Accommodating meeting participants in other time zones is a courtesy rather than an issue related to
cultural differences. Holding meetings on specific days or at specific times of the day are not cultural
issues related to time.
</h5></div><h5 id='q21'>21. Japanese companies tend to use a “hands off” approach in supervising employees, allowing them to help
shape company policies. However, in many North American companies, the executive officers set
policies and have active supervisory roles. This is a cultural difference related to</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. management style.</option><option value="B">B. creative thinking processes.</option><option value="C">C. corporate needs.</option><option value="D">D. business technology.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: management style.</h5><h5>Business management styles vary by culture or country. When conducting business
with foreign companies, it is helpful for businesspeople to learn about these differences, so they can
understand and adapt to their management style. Innovation, business objectives or needs, and
technology can affect a business's management style.
</h5></div><h5 id='q22'>22. What issue is associated with product names that businesses often encounter when they start to sell their
products internationally?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Length of the product names</option><option value="B">B. Translation issues</option><option value="C">C. Pronunciation issues</option><option value="D">D. Readability</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: Translation issues</h5><h5>Because some words are not easily translated into other languages, businesses must
be careful when using an existing or selecting a new name for a product. By using an inappropriate
name, a business might offend an international market segment. The meaning of the name is not an
issue associated with pronunciation, readability, or the length of the product name.
</h5></div><h5 id='q23'>23. Because Allison is meeting with a foreign businessperson whose culture places a great importance on
modesty and a simple personal appearance, she should wear</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. elaborate jewelry.</option><option value="B">B. trendy clothing.</option><option value="C">C. conservative apparel.</option><option value="D">D. heavy makeup.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: conservative apparel.</h5><h5>Appropriate attire is an important consideration when doing business in another
country. In some countries, it is inappropriate for a person to show bare shoulders or legs. Trendy
clothing, elaborate jewelry, and heavy makeup do not convey a conservative appearance.
</h5></div><h5 id='q24'>24. A businessperson offended a foreign client when s/he continuously made an insulting gesture. As a
result, the client severed ties with the businessperson's company. This situation could have been avoided
if the businessperson had</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. taken the time to learn about the client's culture before the meeting.</option><option value="B">B. asked the client why s/he was upset during the meeting.</option><option value="C">C. made an effort to learn the country's language before the meeting.</option><option value="D">D. sent a letter of apology to the country's ambassador after the meeting.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: taken the time to learn about the client's culture before the meeting.</h5><h5>Because customs and gestures
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
</h5></div><h5 id='q25'>25. Which of the following is an example of an employee exhibiting self-confidence:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Jane believes that she can respond to unknown circumstances in a positive, calm way.</option><option value="B">B. Ted is nervous about making his presentation because he forgot to bring his note cards.</option><option value="C">C. Lindsey is embarrassed because her supervisor asked a question that she could not answer.</option><option value="D">D. Sam tries very hard to do his job well but becomes frustrated when he makes a small mistake.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: Jane believes that she can respond to unknown circumstances in a positive, calm way.</h5><h5>Self-confidence is
a positive belief in your own talents, skills, and objectives. Because Jane believes that she can respond
to unknown circumstances in a positive way, she is a self-confident person. Being nervous, being
embarrassed, and being frustrated may indicate a lack of self-confidence.
</h5></div><h5 id='q26'>26. Cameron said to his manager, “The order didn't ship because Sam didn't tell me that we didn't have
enough items in stock.” What is Cameron doing?</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Blaming another person for a communication breakdown</option><option value="B">B. Acknowledging that he failed to follow through with the order</option><option value="C">C. Stating the facts on Sam's behalf</option><option value="D">D. Responding to inappropriate remarks</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: Blaming another person for a communication breakdown</h5><h5>When you accept responsibility for your
behavior, you are willing to accept the consequences of your actions. In Cameron's situation, he is
blaming another person for a work-related mistake. While Sam may be partially responsible for not
communicating the stock outage to Cameron, Cameron did not follow up on the order. If he had followed
up on the order, he may have detected that there was a problem. Cameron is not acknowledging his
responsibility for the problem, and he is not stating facts on Sam's behalf. Sam may have another view or
opinion about the chain of events. There is not enough information provided to determine if Cameron's
manager made an inappropriate remark.
</h5></div><h5 id='q27'>27. After Caroline told her manager about the pricing mistake she made on a purchase order, her manager
said, “This does present a problem, but we can work it out. Thanks for letting me know right away.”
Because Caroline accepted responsibility for her mistake, her supervisor is likely to</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. recommend Caroline for a promotion.</option><option value="B">B. reprimand Caroline for having a bad attitude.</option><option value="C">C. respect Caroline for her honesty.</option><option value="D">D. require Caroline to pay the company for the mistake.

</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is C: respect Caroline for her honesty.</h5><h5>Everyone makes mistakes from time to time, and the way that a
person handles a mistake can affect the outcome. Caroline accepted responsibility for her mistake.
Taking responsibility means admitting the wrongdoing and accepting the consequences for the mistake.
When a person admits making a mistake, s/he is likely to gain the respect of others and gain trust. This is
apparent in Caroline's situation. Caroline's manager acknowledged the problem and thanked Caroline for
bringing it to his/her attention. In many situations, the sooner a mistake is acknowledged, the less severe
the consequences. If Caroline had hidden the mistake, her manager may have been angry. Caroline is
not exhibiting a bad attitude. There is not enough information provided to determine if her manager would
consider recommending Caroline for a promotion. The manager is unlikely to ask Caroline to pay the
company for making a mistake that can be worked out.
</h5></div><h5 id='q28'>28. As the assistant purchasing manager of a large company, Hannah juggles many workplace
commitments. Last week, Hannah had several meetings with vendors, and didn't leave herself enough
time to finish the weekly inventory report for her manager—a task that she really doesn't enjoy doing.
Because the report was late, Hannah's manager was annoyed with her. What barrier prevented Hannah
from effectively managing her workplace commitments?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Cultural awareness</option><option value="B">B. Competence</option><option value="C">C. Self-esteem</option><option value="D">D. Procrastination</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: Procrastination</h5><h5>Procrastination is putting off until tomorrow what could have been done today. One
reason employees procrastinate is because they don't like doing certain tasks, so they put those tasks off
until the last possible moment. All tasks—even those that are not enjoyable—are commitments that
employees must manage to perform their jobs efficiently and to help the company achieve its goals.
There is no indication that Hannah lacks competence, self-esteem, or cultural awareness.
</h5></div><h5 id='q29'>29. When having a business conversation with a person who has some difficulty understanding English, it is
important to</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. speak louder than you normally would.</option><option value="B">B. speak slower than you normally would.</option><option value="C">C. ask to speak to someone else in the company.</option><option value="D">D. not discuss important business.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: speak slower than you normally would.</h5><h5>This will help the person you're speaking with translate your
words in his/her mind. Speaking loudly does not help with translating. Remember that someone from
another country does not necessarily have a hearing problem. Show cultural sensitivity by patiently
working with persons who are not native English speakers. A language barrier does not mean s/he is not
the right person with whom to do business. Important international and domestic business partnerships
happen every day between persons whose native languages are different. It is not possible or smart to
avoid doing business with persons for whom English is a second language.
</h5></div><h5 id='q30'>30. Cameron, a high school student, is giving a speech to the school board. He wants to persuade them to
begin a recycling program for the school district. When a board member says the program will cost too
much money, Cameron displays a chart proving the recycling program will make money for the school in
five years. Cameron's chart has</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. backed up his point with an expert testimonial.</option><option value="B">B. connected emotionally with his audience.</option><option value="C">C. eliminated a competing alternative.</option><option value="D">D. proven he has cultural sensitivity.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is C: eliminated a competing alternative.</h5><h5>The board member would prefer that the school not recycle. His/her
reason is that it is too expensive. Cameron's chart shows that the reason is not valid, so the alternative of
doing nothing can be thrown out. Connecting emotionally with the audience involves talking to them on a
personal level. For example, he could have talked about how recycling will make the community a
cleaner place for their children and grandchildren. An expert testimonial involves sharing the opinion of
someone who is believed to be an expert on a subject. There is no information in this question that
relates to cultural sensitivity, which is being sensitive to differences between ourselves and others, such
as age, gender, or country of origin.
</h5></div><h5 id='q31'>31. For several months, June has felt very tired at work. She has a hard time focusing on her job, is often
irritated at her coworkers, and has turned in several late assignments. At home, June feels considerably
better. June is experiencing</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. employee stress.</option><option value="B">B. employee burnout.</option><option value="C">C. employee turnover.</option><option value="D">D. organizational change.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: employee burnout.</h5><h5>Burnout results when employees experience negative stress over a prolonged period
of time. Its symptoms include lethargic behavior and irritability among other signs. Employee stress can
lead to burnout, but stress, by definition, is not long-term. Employee turnover occurs when a person
leaves his/her job and is replaced by someone else. This is a cause, not a result, of stress.
Organizational change occurs when a company's management decides to run the company in a different
manner than its current state. This change can cause, but isn't a result, of stress.
</h5></div><h5 id='q32'>32. To improve the quality of its products and its business processes, a company will install a single new
computer system that will replace the systems currently used across the company. Every aspect of this
change is handled by representatives from the following departments: manufacturing, accounting, quality
control, finance, and IT. This is an example of a</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. standing committee.</option><option value="B">B. quality circle.</option><option value="C">C. project team.</option><option value="D">D. group.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: project team.</h5><h5>A project team is comprised of persons with complementary skills necessary to complete a
single project. Outside of the project, the team members have other responsibilities. When the project
ends, the team members go back to the positions for which they were hired. A quality circle is a
participative management technique in which employees voluntarily work together to solve quality or
performance-related problems and report the results to management. Participation in a quality circle is a
long-term position that doesn't end after one problem has been solved. A group is simply a collection of
people that meets regularly. A team is different from a group because a team has a full set of
complementary skills to accomplish a goal, e.g., the different positions on a baseball team.
</h5></div><h5 id='q33'>33. Although Anna works in a different department than Ryan, their job responsibilities overlap. Anna and
Ryan often talk about the mutually job-related problems, and they share ideas about how they can
improve situations in ways that will benefit not only them, but the company in general. By sharing
information and being objective, Anna and Ryan are</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. improving their chances of receiving promotions.</option><option value="B">B. making suggestions to improve the company's finances.</option><option value="C">C. building collaborative working relationships.</option><option value="D">D. developing a positive, relaxed work culture.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is C: building collaborative working relationships.</h5><h5>When employees are willing to collaborate with one another,
they are more likely to help the business achieve its overall goals. Collaboration involves working
together to solve problems and generating ideas that may improve the business's processes. There is
not enough information to determine if Anna and Ryan are discussing issues that are directly related to
the company's finances, if they are to receive promotions, or what type of work culture the company
supports.
</h5></div><h5 id='q34'>34. Every year since she was born, Sophia's grandparents invested $100 on her birthday. Sophia is now 18
and the investment has grown large enough to pay for most of her college expenses. Her grandparents
explain that this is because her money has grown in two ways: by earning interest, and then by earning
interest on that interest. This is an example of</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. simple interest.</option><option value="B">B. compound interest.</option><option value="C">C. present value.</option><option value="D">D. inflation.

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: compound interest.</h5><h5>This is an example of
A. simple interest.
C. present value.
B. compound interest.
D. inflation.

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

5

35. When Jane received her first paycheck from her part-time job, she was surprised to see the amount was
much less than her $8.00 per hour pay rate multiplied by the number of hours she worked. Jane had not
planned on __________ tax being taken out of her paycheck.
A. income
C. sales
B. property
D. excise
36. Sheila pays the minimum payment shown on her credit card bill each month. For the remaining amount
on the bill she will be charged a(n)
A. annual fee.
C. late fee.
B. annual percentage rate.
D. overdraft fee.
37. What activity does accounting software help businesses do?
A. Create virtual situations
C. Create and play AV media
B. Place orders for raw materials
D. Track credit transactions
38. Why do some governments require businesses to use specific accounting methods?
A. To ensure that the businesses are complying with intellectual property laws
B. To provide external sources with accurate financial information
C. To control the ways in which businesses develop credit policies
D. To monitor how businesses establish their sales goals and budgets
39. Joseph is the vice president of finance for a large corporation. Recently, he told his sister to dump her
stock in the company because it is about to declare bankruptcy. In some countries, Joseph could go to
prison for breaking laws pertaining to
A. insider trading.
C. money laundering.
B. embezzlement.
D. bribery.
40. Colleen doesn't like Reggie's political views, so she gives him a three percent pay increase instead of a
five percent increase. This is an example of unethical behavior in relation to __________ management.
A. business-information
C. capital-assets
B. human-resources
D. financial-services
41. What is the essential component for effective knowledge management in business?
A. Computer access
C. Short-term goals
B. Communication
D. Outputs
42. Zoe noticed that her coworker Tom has been performing a work activity incorrectly. Zoe hasn't corrected
Tom because she wants her manager to think she is more competent than Tom. Can Zoe's behavior
negatively impact her employer?
A. Yes. Tom's errors could be costly to the company.
B. Yes. Zoe is violating a procedural law.
C. No. Zoe is not a manager and should not train Tom.
D. No. Zoe knows that Tom's errors do not affect customer relationships.
43. Katrina is using a special software program to develop a business chart that shows the employees'
expertise and skills and how they access different types of information throughout the organization. What
type of software is Katrina using to document the information?
A. Intranet
C. Tactical production
B. Knowledge mapping
D. Accounting
44. Which of the following is a form of web-based technology that business professionals use to share their
expertise and to solve problems on an ongoing basis:
A. Autoresponders
C. Online communities
B. Analog receptors
D. Security devices

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

6

45. How does the fragmentation of processes help to protect a company's trade secret?
A. Employees' knowledge is limited to a specific part of the process.
B. It replaces the need to obtain a copyright for intellectual property.
C. The company will not need to monitor any part of the process.
D. The need for non-compete agreements is eliminated.
46. Which of the following is an example of a trade secret:
A. Customer list
C. Credit report
B. Trade journal
D. Legal document
47. A serious accident occurred on Putnam Chemical Company's production line. A Putnam employee
questioned the employees who were working during the accident to gather information about the
situation. The company plans to use the gathered knowledge to determine the cause of the accident and
to develop an action plan to prevent similar problems in the future. What technique did the company use
to capture knowledge?
A. Critical incident interview
C. Creative problem solving
B. Brainstorming survey
D. Employee performance review
48. After several failed attempts to obtain product information from Payton Manufacturing, Mr. Jones placed
a $150,000 order with Morgan Industries. Why did Payton lose the large order?
A. Its employees were not properly trained.
B. Its employees lacked concern about the environment.
C. Its employees were unresponsive.
D. Its employees did not have access to current technology.
49. What is an important question that all businesses should answer about their ethical behavior in managing
their customers' information?
A. How do we obtain information about our customers in ways that do not violate their privacy?
B. What information do we need to obtain about our customers to determine their ability to pay?
C. What research method will provide the most comprehensive results about our competitors'
activities?
D. Where can we obtain general demographic information about untapped market segments?
50. What part of the URL <http://maps.google.com/maps?hl=en&tab=wl> do the letters http represent?
A. Scheme
C. Path
B. Host
D. Query string
51. Which of the following is an example of employees using groupware computer applications:
A. Craig, Tessa, and Lily use presentation software to guide a group discussion about their
research project.
B. Kelli, Juan, and Phil can access and make changes to the company production schedule from
their home computers.
C. Dan, Kara, and Simon review their departments' budgets, which are saved as different computerspreadsheets files.
D. Michelle, Jeff, and Aubrey use the same desktop-publishing program to create advertisements
and brochures for their companies.
52. A primary use of project-management software is to
A. define the project's purpose.
B. allocate project resources.

C. develop project standards.
D. evaluate the quality of deliverables.

53. A limitation to the use of project-management software is that it lacks the ability to
A. calculate data.
C. track changes.
B. make decisions.
D. flag information.

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

7

54. Company B's management has determined that it must downsize. Three persons in the customer service
department will lose their jobs. Which of the following records can management use to help them
determine which employees to keep:
A. Human resources records
C. R&D records
B. Production records
D. Inventory records
55. The Halifax Retail chain uses computer applications to track its inventory and order goods from its
vendors. What form of technology is the company using to streamline its purchasing processes?
A. Electronic data interchange (EDI)
C. Customer relationship management (CRM)
B. Global positioning system (GPS)
D. Territorial routing application (TRA)
56. What do many businesses need to do to operate legally?
A. Purchase office equipment
C. Publish their codes of ethics
B. Obtain required permits
D. Analyze their strategies
57. A city in the southwestern region of the country requires community businesses to undergo health and
safety inspections to determine if the businesses are complying with
A. free-trade agreements.
C. securities regulations.
B. local ordinances.
D. consumer-protection laws.
58. Who is responsible for maintaining a safe work environment?
A. External safety inspectors
C. Department managers
B. Government legislators
D. All employees
59. When prioritizing work, employees should place the most importance on work that involves
A. tight deadlines.
C. interactive tasks.
B. routine activities.
D. interpersonal communication.
60. Which of the following work tasks must always be completed in designated sequential order:
A. Heather checks e-mail, Paul orders supplies, and Leah develops a stock list.
B. Jack pulls stock, Mary packs the box, and Tim places the order on the truck.
C. Calvin conducts the research, Eva files the report, and Ben reads the instructions.
D. Eve calls on customers, Ted writes the order, and Lily prepares the presentation.
61. During what phase of the project life cycle does the project manager activate project controls?
A. Execution
C. Definition
B. Planning
D. Closing
62. How can project managers monitor the project's quality of work and its current expenditures?
A. Review past correspondence
C. Conduct a project audit
B. Seek professional development
D. Compare industry reports
63. Genie's evaluates its suppliers on a variety of factors. To continue working with Genie's, a company is
required to score a minimum of 4.0 points on its supplier performance evaluation. Referring to the
following chart, will Raving Rivets be kept as a supplier?
Supplier: Raving Rivets
Category
Score (1-5)
On-time delivery
4
Rivet quality
5
Customer service
2

A.
B.
C.
D.

Weight
.2
.5
.3

No, because Raving Rivets' score of 1.2 is under the minimum.
No, because Raving Rivets' score of 3.9 is under the minimum.
Yes, because Raving Rivets' score of 12.0 is above the minimum.
Yes, because Raving Rivets' score of 39.0 is above the minimum.

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

8

64. What is needed to maintain collaborative relationships with suppliers?
A. Complete disclosure of information
C. Different goals and objectives
B. A comprehensive request for proposal
D. Effective conflict-resolution skills
65. Although it placed an order three weeks ago, a flower shop determines that it needs to purchase an
additional four cases of Model R28 glass flower vases for its flower arrangements. What type of order is
the shop placing with its primary vase supplier?
A. Reorder
C. Advance order
B. Open order
D. Backorder
66. Which of the following is an example of an item that most likely requires a retailer to place a special order
with a manufacturer:
A. A cell-phone charger for a popular smart phone
B. Windshield wipers for a 2008 Honda Accord
C. Blinds for a non-standard size window
D. A color-ink cartridge for a computer printer
67. Which of the following are maintenance supplies that a business is likely to keep on hand:
A. Batteries, computers, and cleaning items
C. Paper towels, pens, and sportswear
B. Trash bags, sanitizer, and light bulbs
D. Mops, furniture, and conveyer belts
68. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to
A. initiate a gridlock.
C. obtain leverage.
B. maintain its authority.
D. make a concession.
69. Which of the following is an example of a quality control method used in the workplace:
A. An advertising manager corrects a copywriter's ad copy.
B. A factory production line makes 2,465 widgets per minute.
C. An accounts receivable employee submits a weekly report.
D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

9

75. To perform his job, Andrew works a complex database program. Recently, a new version of the database
program that he uses was released. The new program is more powerful, efficient, and user friendly. To
learn how to use the program effectively, Andrew signed up to take a class at the community college. In
this situation, Andrew is continuing his education so that he can
A. update his technical skills.
C. ensure his employability.
B. change his career path.
D. obtain professional licensure.
76. What aspect of their employers' codes of conduct are employees violating when they regularly come into
work late or leave early?
A. Safety
C. Harassment
B. Appearance
D. Attendance
77. Patty Hollingsworth is the marketing manager for Burton Manufacturing. If the company uses a
hierarchical organizational structure, who reports directly to Patty?
A. Malcolm Jennings, Procurement Coordinator
B. Lucille Watson, Vice President of Sales and Marketing
C. Belinda Pickles, Employee-Relations Manager
D. Trent Simpson, Advertising Specialist
78. An organization's product goals often involve setting standards for
A. the variety of its goods and services.
C. expenses and income.
B. behavior in the workplace.
D. the target market's expectations.
79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?
A. Profit
C. Strategic
B. Tactical
D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

10

85. What is the primary purpose of developing a post-implementation review during the closure phase of a
project?
A. To archive all project documentation
B. To document necessary changes for future projects
C. To formally release all resources from the project
D. To determine if the deliverables achieved project goals
86. What is the focus of quality assurance?
A. Obtaining customer feedback about product features
B. Identifying defects in new products
C. Developing processes to prevent product defects
D. Taking steps to create better quality products
87. Six Sigma focuses on managing quality throughout the organization by focusing on
A. creativity and innovation.
C. customization and innovation.
B. discipline and measurement.
D. accountability and creativity.
88. What activity helps businesses identify the various opportunities for continuous quality improvement?
A. Monitoring data
C. Establishing budgets
B. Setting goals
D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

11

96. What function of management involves developing a system for producing work?
A. Supervising
C. Organizing
B. Arranging
D. Controlling
97. Which of the following is the management function that focuses on matching the appropriate person with
the necessary skills for a specific job:
A. Staffing
C. Coordinating
B. Interviewing
D. Leading
98. What is an important aspect of managerial directing?
A. Developing long-term business objectives
B. Interviewing job applicants for open positions
C. Providing employees with instructions
D. Creating work systems for workplace teams
99. A manager monitors an employee as the employee is performing job-related tasks. This is an example of
___________ managerial control.
A. remedial
C. external
B. preventive
D. concurrent
100. Quarterly, each of the international vice presidents of Smith & Webber completes the company's
scorecard and submits it to the president of the company. The scorecard tracks sales, profit, advertising
expenses, and other key information. The scorecard is a tool for which of the following management
functions:
A. Directing
C. Control
B. Planning
D. Organizing

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM—KEY

12

1. D
A company uses an athlete's photo without permission to imply the endorsement of the product. A tort is
a wrongful action that harms another person or business. The invasion of privacy is a type of tort. For
example, if a business uses a well-known athlete's image without his/her permission to imply that the
athlete uses or endorses the product, the business has committed a tort related to the athlete's right to
privacy. Misrepresenting facts is a tort related to fraud. A statement that harms an entity's reputation is a
defamation tort. There is not enough information provided to determine if a tort has occurred in relation to
the employee's injuries. For example, the employee may have knowingly operated the equipment
incorrectly. A tort may exist if the business neglected to maintain the equipment or did not train the
employee to use it correctly.
</h5></div><h5 id='q35'>35. When Jane received her first paycheck from her part-time job, she was surprised to see the amount was
much less than her $8.00 per hour pay rate multiplied by the number of hours she worked. Jane had not
planned on __________ tax being taken out of her paycheck.</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. income</option><option value="B">B. property</option><option value="C">C. sales</option><option value="D">D. excise</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: income</h5><h5>Income tax is a tax rate on all income a person earns. A percentage of Jane's pay is taken out to
pay for this tax. Property tax is tax on property, such as a home. Consumers pay a sales tax when they
purchase many types of goods. Since Jane is receiving her pay, not buying a good, sales tax does not
apply. Excise taxes are taxes paid when purchases are made on a specific good, such as gasoline.
Excise taxes are often included in the price of the product.
</h5></div><h5 id='q36'>36. Sheila pays the minimum payment shown on her credit card bill each month. For the remaining amount
on the bill she will be charged a(n)</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. annual fee.</option><option value="B">B. annual percentage rate.</option><option value="C">C. late fee.</option><option value="D">D. overdraft fee.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: annual percentage rate.</h5><h5>The annual percentage rate (APR) is the interest paid on the portion of the bill
Sheila does not pay each month. An annual fee is a once-a-year payment made to the credit card
company that permits the person to use the company's credit card. A late fee is issued when a person
does not submit any payment at all by the monthly due date. An overdraft fee is charged by a bank when
a customer writes a check for more money than is in his/her checking account.
</h5></div><h5 id='q37'>37. What activity does accounting software help businesses do?</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Create virtual situations</option><option value="B">B. Place orders for raw materials</option><option value="C">C. Create and play AV media</option><option value="D">D. Track credit transactions</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: Track credit transactions</h5><h5>Accounting software programs allow businesses to efficiently track various
financial data and generate financial reports. Accounting software tracks bank and credit transactions,
generates invoices, and maintains tax information. Some accounting software programs have inventory
applications. Inventory software applications are used to track various types of stock including office
supplies, raw materials, and resale items. Multimedia software is used to create and play audio and video
media. Simulation software applications are used to create virtual situations that are similar to real-life
situations, such as aircraft-flight simulations.
</h5></div><h5 id='q38'>38. Why do some governments require businesses to use specific accounting methods?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. To ensure that the businesses are complying with intellectual property laws</option><option value="B">B. To provide external sources with accurate financial information</option><option value="C">C. To control the ways in which businesses develop credit policies</option><option value="D">D. To monitor how businesses establish their sales goals and budgets</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: To provide external sources with accurate financial information</h5><h5>The accounting function collects and
records the financial information in the appropriate format. Governments require businesses to provide
certain types of financial information to regulatory agencies and shareholders in specific ways. For
example, some governments require large businesses to use a specific accounting method, such as the
accrual method. The accrual accounting method records transactions at the time they occur even if no
money changes hands at that time. An advantage of using the accrual method is that it provides
investors, creditors, and customers with a more accurate picture of a business's cash flows over time.
Governments do not require businesses to use a specific accounting method to ensure that they are
complying with intellectual property laws, to control the ways in which businesses develop credit policies,
or to monitor how businesses establish sales goals and budgets.
</h5></div><h5 id='q39'>39. Joseph is the vice president of finance for a large corporation. Recently, he told his sister to dump her
stock in the company because it is about to declare bankruptcy. In some countries, Joseph could go to
prison for breaking laws pertaining to</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. insider trading.</option><option value="B">B. embezzlement.</option><option value="C">C. money laundering.</option><option value="D">D. bribery.</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: insider trading.</h5><h5>Insider trading involves leaking information to others that is not known to the public.
Insider trading laws vary by country, but violators could face imprisonment. In Joseph's situation, he told
his sister about the company's bankruptcy before it was made public so she could try to sell her stock
before she lost money. Embezzlement involves theft of valuables that have been entrusted to another's
care. Money laundering involves legitimizing money that was obtained illegally. A bribe is an illegal
payment intended to secure business or products In return.
</h5></div><h5 id='q40'>40. Colleen doesn't like Reggie's political views, so she gives him a three percent pay increase instead of a
five percent increase. This is an example of unethical behavior in relation to __________ management.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. business-information</option><option value="B">B. human-resources</option><option value="C">C. capital-assets</option><option value="D">D. financial-services</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: human-resources</h5><h5>Compensation is a human-resources activity. In human resources management,
ethics involve treating all employees fairly. To treat employees fairly, decisions should be based on
performance rather than personal feelings, such as disliking an employee's political views. The example
does not relate to business-information, capital-assets, or financial-services management.
</h5></div><h5 id='q41'>41. What is the essential component for effective knowledge management in business?</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Computer access</option><option value="B">B. Communication</option><option value="C">C. Short-term goals</option><option value="D">D. Outputs</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: Communication</h5><h5>Knowledge management involves leveraging the expertise, insight, and information of
internal and external resources to help an organization achieve its goals. To manage knowledge, there
must be communication. Without communication, the knowledge remains limited or unknown.
Interpersonal interaction and computers are methods of communicating knowledge. Knowledge must be
communicated to achieve short-term goals or to produce outputs in business.
</h5></div><h5 id='q42'>42. Zoe noticed that her coworker Tom has been performing a work activity incorrectly. Zoe hasn't corrected
Tom because she wants her manager to think she is more competent than Tom. Can Zoe's behavior
negatively impact her employer?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Yes. Tom's errors could be costly to the company.</option><option value="B">B. Yes. Zoe is violating a procedural law.</option><option value="C">C. No. Zoe is not a manager and should not train Tom.</option><option value="D">D. No. Zoe knows that Tom's errors do not affect customer relationships.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is A: Yes. Tom's errors could be costly to the company.</h5><h5>Depending on the type of activity Tom is performing
and how long he has been performing it incorrectly, his errors could be costly to the business. Tom could
be using too many materials to produce a good, or he could be performing a process in a way that takes
too much time. Zoe's motives are self-serving because she wants to appear more efficient and
competent than Tom. These motives may be driven by a desire to get a salary increase or promotion.
Although some people may consider Zoe's motives unethical, there is no evidence that she has violated
procedural laws. If Zoe was concerned about the impact of Tom's performance on the company, she
could tell Tom what he was doing wrong, or she could advise her manager that Tom was performing a
task incorrectly. There is not enough information about Tom's task to know if it directly affects the
company's relationships with its customers.
</h5></div><h5 id='q43'>43. Katrina is using a special software program to develop a business chart that shows the employees'
expertise and skills and how they access different types of information throughout the organization. What
type of software is Katrina using to document the information?</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Intranet</option><option value="B">B. Knowledge mapping</option><option value="C">C. Tactical production</option><option value="D">D. Accounting</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is B: Knowledge mapping</h5><h5>Knowledge mapping software provides the ability to capture a business's
information sources and information flow in a graphic format. Knowledge maps help businesses
determine if there are underused sources of knowledge, as well as areas in which there is a breakdown
or gap in knowledge sharing. An Intranet is a business's internal computer network. Knowledge
management software can capture information stored on a company's Intranet, which is one of many
sources of a company's knowledge. Production and accounting software are different types of software
used in specific functions of business. Businesses do not use these software programs to capture and
track an entire organization's tacit and explicit knowledge.
</h5></div><h5 id='q44'>44. Which of the following is a form of web-based technology that business professionals use to share their
expertise and to solve problems on an ongoing basis:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Autoresponders</option><option value="B">B. Analog receptors</option><option value="C">C. Online communities</option><option value="D">D. Security devices

</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is C: Online communities</h5><h5>Online communities are groups of people who share common interests, issues, or
concerns and regularly communicate via the Internet using a variety of venues—social networking sites,
RSS feeds, chat rooms, wikis, etc. Online communities often form to share knowledge and solve
problems in specific industries, disciplines, and business functions. Autoresponder is an e-mail function
that automatically sends a reply to a message sender upon receipt of the message. Security devices,
such as firewalls and antivirus software, prevent unauthorized users from accessing or harming a
computer. Analog refers to a method used to convert data in to electrical signals to transmit information
via telephone, radio, and television.
</h5></div><h5 id='q45'>45. How does the fragmentation of processes help to protect a company's trade secret?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Employees' knowledge is limited to a specific part of the process.</option><option value="B">B. It replaces the need to obtain a copyright for intellectual property.</option><option value="C">C. The company will not need to monitor any part of the process.</option><option value="D">D. The need for non-compete agreements is eliminated.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Employees' knowledge is limited to a specific part of the process.</h5><h5>By limiting the amount of information
employees have about an entire process, there is less risk that the company's trade secret will be
revealed. For example, to protect Kentucky Fried Chicken's secret breading recipe (11 herbs and spices),
the company mixes small increments of the breading in different locations. Then, the company collects
and mixes the smaller increments to create the famous recipe. By fragmenting the mixing process, no
single employee knows all of the ingredients. Fragmentation of processes does not replace the need to
copyright written or artistic works, eliminate the need for non-compete agreements, or reduce the need to
monitor all aspects of the production process.
</h5></div><h5 id='q46'>46. Which of the following is an example of a trade secret:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Customer list</option><option value="B">B. Trade journal</option><option value="C">C. Credit report</option><option value="D">D. Legal document</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Customer list</h5><h5>A trade secret is information that a business develops or owns that can be used to obtain a
competitive advantage or financial gain. Customer lists, recipes, production techniques, and research
and development processes are examples of trade secrets. Businesses should develop procedures to
protect trade secrets to reduce the risk of competitors obtaining the knowledge for use and gain. Trade
journals, credit reports, and legal documents are not examples of trade secrets.
</h5></div><h5 id='q47'>47. A serious accident occurred on Putnam Chemical Company's production line. A Putnam employee
questioned the employees who were working during the accident to gather information about the
situation. The company plans to use the gathered knowledge to determine the cause of the accident and
to develop an action plan to prevent similar problems in the future. What technique did the company use
to capture knowledge?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Critical incident interview</option><option value="B">B. Brainstorming survey</option><option value="C">C. Creative problem solving</option><option value="D">D. Employee performance review</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: Critical incident interview</h5><h5>Companies collect knowledge for a variety of reasons. When workplace
accidents occur, companies want to know how and why they happened, so they can take steps to
prevent similar accidents in the future. Questioning employees who witnessed the accident is a good
starting point for determining the cause of the accident. This questioning process is called a critical
incident interview. The knowledge gathered from the interviews helps the company understand the
circumstances or problems that led up to the accident. Brainstorming is a creative thinking technique. An
employee performance review is a formal evaluation of an employee's work efforts.
</h5></div><h5 id='q48'>48. After several failed attempts to obtain product information from Payton Manufacturing, Mr. Jones placed
a $150,000 order with Morgan Industries. Why did Payton lose the large order?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Its employees were not properly trained.</option><option value="B">B. Its employees lacked concern about the environment.</option><option value="C">C. Its employees were unresponsive.</option><option value="D">D. Its employees did not have access to current technology.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: Its employees were unresponsive.</h5><h5>When employees do not return calls or provide information in a timely
manner, customers are likely to get what they want from the business's competitors. There is no
indication that the employees lacked training, concern for the environment, or access to current
technology.
</h5></div><h5 id='q49'>49. What is an important question that all businesses should answer about their ethical behavior in managing
their customers' information?</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. How do we obtain information about our customers in ways that do not violate their privacy?</option><option value="B">B. What information do we need to obtain about our customers to determine their ability to pay?</option><option value="C">C. What research method will provide the most comprehensive results about our competitors'
activities?</option><option value="D">D. Where can we obtain general demographic information about untapped market segments?</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: How do we obtain information about our customers in ways that do not violate their privacy?</h5><h5>Businesses
can track their customers' purchasing habits in many ways—from Internet surfing activities to point of
sale data. Businesses must carefully weigh how to obtain, store, release, and use this information to
protect their customers' right to privacy. Society values this right, and if it is breached (e.g., selling
customer lists to third parties without customer authorization), customers may go to competitors to
purchase goods and services. When developing credit policies, businesses establish criteria and must
identify the information they need to determine their customers' ability to pay. Research methods used in
a competitive analysis and sources of primary and secondary research are not directly associated with
the business's ethics and its customer-related data.
</h5></div><h5 id='q50'>50. What part of the URL <http://maps.google.com/maps?hl=en&tab=wl> do the letters http represent?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Scheme</option><option value="B">B. Host</option><option value="C">C. Path</option><option value="D">D. Query string</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: Scheme</h5><h5>The scheme identifies the protocol to be used to access the resource on the Internet. It can be
HTTP or HTTPS. The host name identifies the host that holds the resource, which is maps.google.com in
this example. A path identifies the specific resource within the host that the Web client wants to access,
which is /maps in this example. A query string follows a path and provides a string of information that the
resource can use for some purpose. In this question, the query string is ?hl=en&tab=wl
</h5></div><h5 id='q51'>51. Which of the following is an example of employees using groupware computer applications:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Craig, Tessa, and Lily use presentation software to guide a group discussion about their
research project.</option><option value="B">B. Kelli, Juan, and Phil can access and make changes to the company production schedule from
their home computers.</option><option value="C">C. Dan, Kara, and Simon review their departments' budgets, which are saved as different computerspreadsheets files.</option><option value="D">D. Michelle, Jeff, and Aubrey use the same desktop-publishing program to create advertisements
and brochures for their companies.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: Kelli, Juan, and Phil can access and make changes to the company production schedule from
their home computers.</h5><h5>undefined</h5></div><h5 id='q52'>52. A primary use of project-management software is to</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. define the project's purpose.</option><option value="B">B. allocate project resources.
</option><option value="C">C. develop project standards.</option><option value="D">D. evaluate the quality of deliverables.
</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is B: allocate project resources.
</h5><h5>undefined</h5></div><h5 id='q53'>53. A limitation to the use of project-management software is that it lacks the ability to</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. calculate data.</option><option value="B">B. make decisions.</option><option value="C">C. track changes.</option><option value="D">D. flag information.

</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: make decisions.</h5><h5>Project-management software helps project managers automate, schedule, and track
the various project components by computer. If used appropriately, the software can help a project run
efficiently. One thing software cannot do is make decisions. Individuals make decisions that are often
based on input entered into the computer.
</h5></div><h5 id='q54'>54. Company B's management has determined that it must downsize. Three persons in the customer service
department will lose their jobs. Which of the following records can management use to help them
determine which employees to keep:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Human resources records</option><option value="B">B. Production records</option><option value="C">C. R&D records</option><option value="D">D. Inventory records</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: Human resources records</h5><h5>A company's human resources records include employee attendance as well
as notes (positive or negative) about each employee's performance. Production records would not be
helpful in evaluating customer service employees because those employees do not work in the part of
the company that produces the products. R&D records are not helpful because customer service
employees do not work in research and development. Inventory records track the products in the
warehouse, which is not the responsibility of the customer service department.
</h5></div><h5 id='q55'>55. The Halifax Retail chain uses computer applications to track its inventory and order goods from its
vendors. What form of technology is the company using to streamline its purchasing processes?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Electronic data interchange (EDI)</option><option value="B">B. Global positioning system (GPS)</option><option value="C">C. Customer relationship management (CRM)</option><option value="D">D. Territorial routing application (TRA)</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: Electronic data interchange (EDI)</h5><h5>EDI systems allow businesses to transmit information to and from their
suppliers. EDI applications can track a business's inventory and determine when the business should
reorder, which increases the purchasing function's efficiency. GPS technology involves guiding and
tracking vehicles en route to a destination. CRM technology is used to monitor customer data and build
ongoing customer relationships. Sales departments use territorial routing software to develop efficient
sales-call patterns.
</h5></div><h5 id='q56'>56. What do many businesses need to do to operate legally?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Purchase office equipment</option><option value="B">B. Obtain required permits</option><option value="C">C. Publish their codes of ethics</option><option value="D">D. Analyze their strategies</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: Obtain required permits</h5><h5>All levels of government require businesses to obtain various types of permits
and licenses to operate within their jurisdictions. For example, restaurants must obtain a permit from the
health department to serve food. Jurisdictions often require businesses to obtain zoning permits to use
land for a specific purpose and special licenses to sell lottery tickets and alcohol. Businesses do not need
to purchase office equipment, analyze their strategies, or publish their codes of ethics to operate legally.
</h5></div><h5 id='q57'>57. A city in the southwestern region of the country requires community businesses to undergo health and
safety inspections to determine if the businesses are complying with</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. free-trade agreements.</option><option value="B">B. local ordinances.</option><option value="C">C. securities regulations.</option><option value="D">D. consumer-protection laws.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: local ordinances.</h5><h5>Businesses must follow various government regulations that are designed to protect
the public from illness and hazardous conditions. To ensure that businesses are following these
regulations, government agencies at all levels often inspect businesses. For example, the local fire
department may inspect a business facility to determine if the business has the appropriate number of
fire extinguishers as required by law. If an inspection determines that a business is violating regulations,
the agency may fine the business or close it until the business is in compliance. Free-trade agreements,
securities regulations, and consumer-protection laws do not involve inspecting facilities to determine if
the business is free of safety and health hazards.
</h5></div><h5 id='q58'>58. Who is responsible for maintaining a safe work environment?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. External safety inspectors</option><option value="B">B. Government legislators</option><option value="C">C. Department managers</option><option value="D">D. All employees</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: All employees</h5><h5>To reduce the risk of injury to themselves and to others, all employees are responsible for
performing their work carefully. Mangers are employees who guide and monitor other employees'
activities. Governments establish the safety laws that businesses must follow. Governments often require
designated agencies to conduct safety inspections to ensure that businesses are following safety laws.
</h5></div><h5 id='q59'>59. When prioritizing work, employees should place the most importance on work that involves</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. tight deadlines.</option><option value="B">B. routine activities.</option><option value="C">C. interactive tasks.</option><option value="D">D. interpersonal communication.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: tight deadlines.</h5><h5>Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

10

85. What is the primary purpose of developing a post-implementation review during the closure phase of a
project?
A. To archive all project documentation
B. To document necessary changes for future projects
C. To formally release all resources from the project
D. To determine if the deliverables achieved project goals
86. What is the focus of quality assurance?
A. Obtaining customer feedback about product features
B. Identifying defects in new products
C. Developing processes to prevent product defects
D. Taking steps to create better quality products
87. Six Sigma focuses on managing quality throughout the organization by focusing on
A. creativity and innovation.
C. customization and innovation.
B. discipline and measurement.
D. accountability and creativity.
88. What activity helps businesses identify the various opportunities for continuous quality improvement?
A. Monitoring data
C. Establishing budgets
B. Setting goals
D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

11

96. What function of management involves developing a system for producing work?
A. Supervising
C. Organizing
B. Arranging
D. Controlling
97. Which of the following is the management function that focuses on matching the appropriate person with
the necessary skills for a specific job:
A. Staffing
C. Coordinating
B. Interviewing
D. Leading
98. What is an important aspect of managerial directing?
A. Developing long-term business objectives
B. Interviewing job applicants for open positions
C. Providing employees with instructions
D. Creating work systems for workplace teams
99. A manager monitors an employee as the employee is performing job-related tasks. This is an example of
___________ managerial control.
A. remedial
C. external
B. preventive
D. concurrent
100. Quarterly, each of the international vice presidents of Smith & Webber completes the company's
scorecard and submits it to the president of the company. The scorecard tracks sales, profit, advertising
expenses, and other key information. The scorecard is a tool for which of the following management
functions:
A. Directing
C. Control
B. Planning
D. Organizing

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM—KEY

12

1. D
A company uses an athlete's photo without permission to imply the endorsement of the product. A tort is
a wrongful action that harms another person or business. The invasion of privacy is a type of tort. For
example, if a business uses a well-known athlete's image without his/her permission to imply that the
athlete uses or endorses the product, the business has committed a tort related to the athlete's right to
privacy. Misrepresenting facts is a tort related to fraud. A statement that harms an entity's reputation is a
defamation tort. There is not enough information provided to determine if a tort has occurred in relation to
the employee's injuries. For example, the employee may have knowingly operated the equipment
incorrectly. A tort may exist if the business neglected to maintain the equipment or did not train the
employee to use it correctly.
</h5></div><h5 id='q60'>60. Which of the following work tasks must always be completed in designated sequential order:</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Heather checks e-mail, Paul orders supplies, and Leah develops a stock list.</option><option value="B">B. Jack pulls stock, Mary packs the box, and Tim places the order on the truck.</option><option value="C">C. Calvin conducts the research, Eva files the report, and Ben reads the instructions.</option><option value="D">D. Eve calls on customers, Ted writes the order, and Lily prepares the presentation.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: Jack pulls stock, Mary packs the box, and Tim places the order on the truck.</h5><h5>When one task needs to be
completed before another task can be started, then the work must be done in sequential order. Before
Tim can place an order on the truck, Mary must pack the stock that Jack pulls from inventory. In this
situation, each employee depends on another employee to perform a task before s/he can perform
his/her assigned task.
</h5></div><h5 id='q61'>61. During what phase of the project life cycle does the project manager activate project controls?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Execution</option><option value="B">B. Planning</option><option value="C">C. Definition</option><option value="D">D. Closing</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: Execution</h5><h5>During the execution phase, project activities are being carried out. During this phase, the
manager controls and monitors the work that is being performed. During the definition phase of the
project, the project is initiated and the project charter is developed. The project objectives, work
breakdown structure, and resource allocation needs are established during the planning phase of the
project. During the closing phase of the project, the deliverables are evaluated and team members and
equipment returned or reallocated to other functions.
</h5></div><h5 id='q62'>62. How can project managers monitor the project's quality of work and its current expenditures?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Review past correspondence</option><option value="B">B. Seek professional development</option><option value="C">C. Conduct a project audit</option><option value="D">D. Compare industry reports</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Conduct a project audit</h5><h5>A project audit involves analyzing all aspects of the project at a given time during
the project development process. An audit provides a realistic, current assessment of the situation.
Conducting an audit may reveal that the project is over budget or the quality of work is above or below
expectations. The audit results help project managers determine if they should make changes or
improvements to get the project back on track. In some situations, stakeholders require project audits as
part of the project contract. Seeking professional development, reviewing past correspondence, and
comparing industry reports are not actions that help project managers monitor project activities and
results.
</h5></div><h5 id='q63'>63. Genie's evaluates its suppliers on a variety of factors. To continue working with Genie's, a company is
required to score a minimum of 4.0 points on its supplier performance evaluation. Referring to the
following chart, will Raving Rivets be kept as a supplier?
Supplier: Raving Rivets
Category
Score (1-5)
On-time delivery
4
Rivet quality
5
Customer service
2

A.
B.
C.
D.

Weight
.2
.5
.3

No, because Raving Rivets' score of 1.2 is under the minimum.
No, because Raving Rivets' score of 3.9 is under the minimum.
Yes, because Raving Rivets' score of 12.0 is above the minimum.
Yes, because Raving Rivets' score of 39.0 is above the minimum.

2011 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

8

64. What is needed to maintain collaborative relationships with suppliers?</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Complete disclosure of information</option><option value="B">B. A comprehensive request for proposal</option><option value="C">C. Different goals and objectives</option><option value="D">D. Effective conflict-resolution skills
65. Although it placed an order three weeks ago, a flower shop determines that it needs to purchase an
additional four cases of Model R28 glass flower vases for its flower arrangements. What type of order is
the shop placing with its primary vase supplier?
A. Reorder
C. Advance order
B. Open order
D. Backorder
66. Which of the following is an example of an item that most likely requires a retailer to place a special order
with a manufacturer:
A. A cell-phone charger for a popular smart phone
B. Windshield wipers for a 2008 Honda Accord
C. Blinds for a non-standard size window
D. A color-ink cartridge for a computer printer
67. Which of the following are maintenance supplies that a business is likely to keep on hand:
A. Batteries, computers, and cleaning items
C. Paper towels, pens, and sportswear
B. Trash bags, sanitizer, and light bulbs
D. Mops, furniture, and conveyer belts
68. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to
A. initiate a gridlock.
C. obtain leverage.
B. maintain its authority.
D. make a concession.
69. Which of the following is an example of a quality control method used in the workplace:
A. An advertising manager corrects a copywriter's ad copy.
B. A factory production line makes 2,465 widgets per minute.
C. An accounts receivable employee submits a weekly report.
D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: A comprehensive request for proposal</h5><h5>undefined</h5></div><h5 id='q64'>64. What is needed to maintain collaborative relationships with suppliers?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Reorder</option><option value="B">B. Open order</option><option value="C">C. Advance order</option><option value="D">D. Backorder
66. Which of the following is an example of an item that most likely requires a retailer to place a special order
with a manufacturer:
A. A cell-phone charger for a popular smart phone
B. Windshield wipers for a 2008 Honda Accord
C. Blinds for a non-standard size window
D. A color-ink cartridge for a computer printer
67. Which of the following are maintenance supplies that a business is likely to keep on hand:
A. Batteries, computers, and cleaning items
C. Paper towels, pens, and sportswear
B. Trash bags, sanitizer, and light bulbs
D. Mops, furniture, and conveyer belts
68. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to
A. initiate a gridlock.
C. obtain leverage.
B. maintain its authority.
D. make a concession.
69. Which of the following is an example of a quality control method used in the workplace:
A. An advertising manager corrects a copywriter's ad copy.
B. A factory production line makes 2,465 widgets per minute.
C. An accounts receivable employee submits a weekly report.
D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Backorder
66. Which of the following is an example of an item that most likely requires a retailer to place a special order
with a manufacturer:
A. A cell-phone charger for a popular smart phone
B. Windshield wipers for a 2008 Honda Accord
C. Blinds for a non-standard size window
D. A color-ink cartridge for a computer printer
67. Which of the following are maintenance supplies that a business is likely to keep on hand:
A. Batteries, computers, and cleaning items
C. Paper towels, pens, and sportswear
B. Trash bags, sanitizer, and light bulbs
D. Mops, furniture, and conveyer belts
68. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to
A. initiate a gridlock.
C. obtain leverage.
B. maintain its authority.
D. make a concession.
69. Which of the following is an example of a quality control method used in the workplace:
A. An advertising manager corrects a copywriter's ad copy.
B. A factory production line makes 2,465 widgets per minute.
C. An accounts receivable employee submits a weekly report.
D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</h5><h5>undefined</h5></div><h5 id='q65'>65. Although it placed an order three weeks ago, a flower shop determines that it needs to purchase an
additional four cases of Model R28 glass flower vases for its flower arrangements. What type of order is
the shop placing with its primary vase supplier?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. A cell-phone charger for a popular smart phone</option><option value="B">B. Windshield wipers for a 2008 Honda Accord</option><option value="C">C. Blinds for a non-standard size window</option><option value="D">D. A color-ink cartridge for a computer printer
67. Which of the following are maintenance supplies that a business is likely to keep on hand:
A. Batteries, computers, and cleaning items
C. Paper towels, pens, and sportswear
B. Trash bags, sanitizer, and light bulbs
D. Mops, furniture, and conveyer belts
68. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to
A. initiate a gridlock.
C. obtain leverage.
B. maintain its authority.
D. make a concession.
69. Which of the following is an example of a quality control method used in the workplace:
A. An advertising manager corrects a copywriter's ad copy.
B. A factory production line makes 2,465 widgets per minute.
C. An accounts receivable employee submits a weekly report.
D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: A cell-phone charger for a popular smart phone</h5><h5>undefined</h5></div><h5 id='q66'>66. Which of the following is an example of an item that most likely requires a retailer to place a special order
with a manufacturer:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Batteries, computers, and cleaning items</option><option value="B">B. Trash bags, sanitizer, and light bulbs</option><option value="C">C. Paper towels, pens, and sportswear</option><option value="D">D. Mops, furniture, and conveyer belts
68. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to
A. initiate a gridlock.
C. obtain leverage.
B. maintain its authority.
D. make a concession.
69. Which of the following is an example of a quality control method used in the workplace:
A. An advertising manager corrects a copywriter's ad copy.
B. A factory production line makes 2,465 widgets per minute.
C. An accounts receivable employee submits a weekly report.
D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: Paper towels, pens, and sportswear</h5><h5>undefined</h5></div><h5 id='q67'>67. Which of the following are maintenance supplies that a business is likely to keep on hand:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. initiate a gridlock.</option><option value="B">B. maintain its authority.</option><option value="C">C. obtain leverage.</option><option value="D">D. make a concession.
69. Which of the following is an example of a quality control method used in the workplace:
A. An advertising manager corrects a copywriter's ad copy.
B. A factory production line makes 2,465 widgets per minute.
C. An accounts receivable employee submits a weekly report.
D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: maintain its authority.</h5><h5>undefined</h5></div><h5 id='q68'>68. Silence is an effective negotiating technique to use with a vendor when a business wants the vendor to</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. An advertising manager corrects a copywriter's ad copy.</option><option value="B">B. A factory production line makes 2,465 widgets per minute.</option><option value="C">C. An accounts receivable employee submits a weekly report.</option><option value="D">D. A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: A human-resources manager completes paperwork for a new hire.
70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?
A. Promotional
C. Financial
B. Competitive
D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</h5><h5>undefined</h5></div><h5 id='q69'>69. Which of the following is an example of a quality control method used in the workplace:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Promotional</option><option value="B">B. Competitive</option><option value="C">C. Financial</option><option value="D">D. Productivity
71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to
A. resale goods.
C. efficiency levels.
B. return on investment.
D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: Promotional</h5><h5>undefined</h5></div><h5 id='q70'>70. Luke is reviewing several internal and external reports to compare his company's sales and market share
in relation to other companies in the industry. What type of business analysis is Luke conducting?</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. resale goods.</option><option value="B">B. return on investment.</option><option value="C">C. efficiency levels.</option><option value="D">D. waste reduction.
72. Which of the following is an example of an extensive decision:
A. Hiring a new department manager
C. Wearing a blue suit to a meeting
B. Printing a document on yellow paper
D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: return on investment.</h5><h5>undefined</h5></div><h5 id='q71'>71. A business analysis indicates that the TWB Corporation could save $125,675 a year in paper purchases
if all its employees decreased photocopying activities by 15%. The analysis provides TWB with important
information related to</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Hiring a new department manager</option><option value="B">B. Printing a document on yellow paper</option><option value="C">C. Wearing a blue suit to a meeting</option><option value="D">D. Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is D: Booking an airline flight for a business trip
73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:
A. She and her friends attend lectures at the science center each month.
B. Maria's father is a microbiologist.
C. She received a microscope for a gift last year.
D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</h5><h5>undefined</h5></div><h5 id='q72'>72. Which of the following is an example of an extensive decision:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. She and her friends attend lectures at the science center each month.</option><option value="B">B. Maria's father is a microbiologist.</option><option value="C">C. She received a microscope for a gift last year.</option><option value="D">D. Maria believes that it is important to protect the environment.
74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?
A. Promoting
C. Advising
B. Networking
D. Forecasting

</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: She and her friends attend lectures at the science center each month.</h5><h5>undefined</h5></div><h5 id='q73'>73. Maria's teacher says she has an aptitude for science. Which of the following may explain why Maria has
an aptitude for science:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Promoting</option><option value="B">B. Networking</option><option value="C">C. Advising</option><option value="D">D. Forecasting

</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: Networking</h5><h5>Networking involves exchanging information with others for the purpose of professional or
business development and/or advancement. Networking is an effective way to find and obtain jobs
because it involves talking with friends, relatives, acquaintances, and former employers who know about
certain industries and businesses. These contacts can pass on information about openings and make
referrals. Making a list of possible contacts is a good way to organize the networking process. Kim is not
promoting, advising, or forecasting.
</h5></div><h5 id='q74'>74. Kim is developing a list of friends, family, and acquaintances. Kim plans to contact the individuals on the
list and ask them if they know of any job openings in their companies. What activity is Kim performing?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. update his technical skills.</option><option value="B">B. change his career path.</option><option value="C">C. ensure his employability.</option><option value="D">D. obtain professional licensure.
76. What aspect of their employers' codes of conduct are employees violating when they regularly come into
work late or leave early?
A. Safety
C. Harassment
B. Appearance
D. Attendance
77. Patty Hollingsworth is the marketing manager for Burton Manufacturing. If the company uses a
hierarchical organizational structure, who reports directly to Patty?
A. Malcolm Jennings, Procurement Coordinator
B. Lucille Watson, Vice President of Sales and Marketing
C. Belinda Pickles, Employee-Relations Manager
D. Trent Simpson, Advertising Specialist
78. An organization's product goals often involve setting standards for
A. the variety of its goods and services.
C. expenses and income.
B. behavior in the workplace.
D. the target market's expectations.
79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?
A. Profit
C. Strategic
B. Tactical
D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is B: change his career path.</h5><h5>undefined</h5></div><h5 id='q75'>75. To perform his job, Andrew works a complex database program. Recently, a new version of the database
program that he uses was released. The new program is more powerful, efficient, and user friendly. To
learn how to use the program effectively, Andrew signed up to take a class at the community college. In
this situation, Andrew is continuing his education so that he can</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Safety</option><option value="B">B. Appearance</option><option value="C">C. Harassment</option><option value="D">D. Attendance
77. Patty Hollingsworth is the marketing manager for Burton Manufacturing. If the company uses a
hierarchical organizational structure, who reports directly to Patty?
A. Malcolm Jennings, Procurement Coordinator
B. Lucille Watson, Vice President of Sales and Marketing
C. Belinda Pickles, Employee-Relations Manager
D. Trent Simpson, Advertising Specialist
78. An organization's product goals often involve setting standards for
A. the variety of its goods and services.
C. expenses and income.
B. behavior in the workplace.
D. the target market's expectations.
79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?
A. Profit
C. Strategic
B. Tactical
D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: Safety</h5><h5>undefined</h5></div><h5 id='q76'>76. What aspect of their employers' codes of conduct are employees violating when they regularly come into
work late or leave early?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Malcolm Jennings, Procurement Coordinator</option><option value="B">B. Lucille Watson, Vice President of Sales and Marketing</option><option value="C">C. Belinda Pickles, Employee-Relations Manager</option><option value="D">D. Trent Simpson, Advertising Specialist
78. An organization's product goals often involve setting standards for
A. the variety of its goods and services.
C. expenses and income.
B. behavior in the workplace.
D. the target market's expectations.
79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?
A. Profit
C. Strategic
B. Tactical
D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: Trent Simpson, Advertising Specialist
78. An organization's product goals often involve setting standards for
A. the variety of its goods and services.
C. expenses and income.
B. behavior in the workplace.
D. the target market's expectations.
79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?
A. Profit
C. Strategic
B. Tactical
D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</h5><h5>undefined</h5></div><h5 id='q77'>77. Patty Hollingsworth is the marketing manager for Burton Manufacturing. If the company uses a
hierarchical organizational structure, who reports directly to Patty?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. the variety of its goods and services.</option><option value="B">B. behavior in the workplace.</option><option value="C">C. expenses and income.</option><option value="D">D. the target market's expectations.
79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?
A. Profit
C. Strategic
B. Tactical
D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is D: the target market's expectations.
79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?
A. Profit
C. Strategic
B. Tactical
D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</h5><h5>undefined</h5></div><h5 id='q78'>78. An organization's product goals often involve setting standards for</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Profit</option><option value="B">B. Tactical</option><option value="C">C. Strategic</option><option value="D">D. Productivity
80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?
A. Collect information
C. Create work subcultures
B. Develop a mission statement
D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Profit</h5><h5>undefined</h5></div><h5 id='q79'>79. Based on the firm's mission statement, upper management established a variety of long-term goals to
guide lower-level goal setting. What type of organizational goals has upper management set?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Collect information</option><option value="B">B. Develop a mission statement</option><option value="C">C. Create work subcultures</option><option value="D">D. Communicate priorities
81. Which of the following is a true statement about a project charter:
A. It serves as authorization to start the project.
B. It assesses the actual outcomes of the project.
C. It describes in detail the tasks to complete the project.
D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is C: Create work subcultures</h5><h5>undefined</h5></div><h5 id='q80'>80. What do managers need to do to help employees understand their specific responsibilities in achieving
the organization's goals?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. It serves as authorization to start the project.</option><option value="B">B. It assesses the actual outcomes of the project.</option><option value="C">C. It describes in detail the tasks to complete the project.</option><option value="D">D. It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: It can be modified by the project team members.
82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."
A. Scope statement
B. Communication plan

C. Purpose statement
D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</h5><h5>undefined</h5></div><h5 id='q81'>81. Which of the following is a true statement about a project charter:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Scope statement</option><option value="B">B. Communication plan
</option><option value="C">C. Purpose statement</option><option value="D">D. Goals and objectives

83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the
A. network diagram.
C. work breakdown structure dictionary.
B. project's statement of work.
D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: Scope statement</h5><h5>The statement of work (SOW) is a document that outlines the terms, commitments,
and conditions of the project. The scope statement is a component of the SOW that clearly defines the
things that the project team will do, as well as the things it won't do. The purpose statement defines the
purpose of or reason for carrying out the project. The communication plan provides details about the
types of reports and other forms of communication that the project team will provide stakeholders. The
goals and objectives section of the SOW outlines the desired outcomes of the project.
</h5></div><h5 id='q82'>82. In which section of the statement of work (SOW) document would you find the following information:
"AJB International will be responsible for collecting the research for the project, but will not interpret the
results."</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. network diagram.</option><option value="B">B. project's statement of work.</option><option value="C">C. work breakdown structure dictionary.</option><option value="D">D. production schedule.
84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?
A. Offering a financial incentive
C. Measuring the team's goals
B. Expressing empathy
D. Motivating the team

</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: network diagram.</h5><h5>undefined</h5></div><h5 id='q83'>83. Trevor needs to determine the procedures that he needs to follow for a specific project work activity.
Trevor can locate that information in the</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Offering a financial incentive</option><option value="B">B. Expressing empathy</option><option value="C">C. Measuring the team's goals</option><option value="D">D. Motivating the team

</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is C: Measuring the team's goals</h5><h5>In this situation, the project
manager is not expressing empathy, measuring goals, or offering a financial incentive, such as a bonus.
</h5></div><h5 id='q84'>84. During a weekly meeting, the project manager told the team, “All of you are doing a great job in meeting
your deadlines. Just a few more weeks of hard work, and the project will be complete. Then, we will all go
out to celebrate.” What is the project manager doing?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. To archive all project documentation</option><option value="B">B. To document necessary changes for future projects</option><option value="C">C. To formally release all resources from the project</option><option value="D">D. To determine if the deliverables achieved project goals
86. What is the focus of quality assurance?
A. Obtaining customer feedback about product features
B. Identifying defects in new products
C. Developing processes to prevent product defects
D. Taking steps to create better quality products
87. Six Sigma focuses on managing quality throughout the organization by focusing on
A. creativity and innovation.
C. customization and innovation.
B. discipline and measurement.
D. accountability and creativity.
88. What activity helps businesses identify the various opportunities for continuous quality improvement?
A. Monitoring data
C. Establishing budgets
B. Setting goals
D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is D: To determine if the deliverables achieved project goals
86. What is the focus of quality assurance?
A. Obtaining customer feedback about product features
B. Identifying defects in new products
C. Developing processes to prevent product defects
D. Taking steps to create better quality products
87. Six Sigma focuses on managing quality throughout the organization by focusing on
A. creativity and innovation.
C. customization and innovation.
B. discipline and measurement.
D. accountability and creativity.
88. What activity helps businesses identify the various opportunities for continuous quality improvement?
A. Monitoring data
C. Establishing budgets
B. Setting goals
D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</h5><h5>undefined</h5></div><h5 id='q85'>85. What is the primary purpose of developing a post-implementation review during the closure phase of a
project?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Obtaining customer feedback about product features</option><option value="B">B. Identifying defects in new products</option><option value="C">C. Developing processes to prevent product defects</option><option value="D">D. Taking steps to create better quality products
87. Six Sigma focuses on managing quality throughout the organization by focusing on
A. creativity and innovation.
C. customization and innovation.
B. discipline and measurement.
D. accountability and creativity.
88. What activity helps businesses identify the various opportunities for continuous quality improvement?
A. Monitoring data
C. Establishing budgets
B. Setting goals
D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: Taking steps to create better quality products
87. Six Sigma focuses on managing quality throughout the organization by focusing on
A. creativity and innovation.
C. customization and innovation.
B. discipline and measurement.
D. accountability and creativity.
88. What activity helps businesses identify the various opportunities for continuous quality improvement?
A. Monitoring data
C. Establishing budgets
B. Setting goals
D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</h5><h5>undefined</h5></div><h5 id='q86'>86. What is the focus of quality assurance?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. creativity and innovation.</option><option value="B">B. discipline and measurement.</option><option value="C">C. customization and innovation.</option><option value="D">D. accountability and creativity.
88. What activity helps businesses identify the various opportunities for continuous quality improvement?
A. Monitoring data
C. Establishing budgets
B. Setting goals
D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is C: customization and innovation.</h5><h5>undefined</h5></div><h5 id='q87'>87. Six Sigma focuses on managing quality throughout the organization by focusing on</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Monitoring data</option><option value="B">B. Setting goals</option><option value="C">C. Establishing budgets</option><option value="D">D. Rationing resources
89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?
A. Do
C. Act
B. Check
D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: Setting goals</h5><h5>Collaboration involves working
together to solve problems and generating ideas that may improve the business's processes. There is
not enough information to determine if Anna and Ryan are discussing issues that are directly related to
the company's finances, if they are to receive promotions, or what type of work culture the company
supports.
</h5></div><h5 id='q88'>88. What activity helps businesses identify the various opportunities for continuous quality improvement?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Do</option><option value="B">B. Check</option><option value="C">C. Act</option><option value="D">D. Plan
90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:
A. Ethics committee
C. Retribution board
B. Human-resources council
D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: Do</h5><h5>undefined</h5></div><h5 id='q89'>89. What step in the Plan-Do-Check-Act (PDCA) continuous-improvement technique involves analyzing the
results of a small-scale change to determine if the change was effective?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Ethics committee</option><option value="B">B. Human-resources council</option><option value="C">C. Retribution board</option><option value="D">D. Executive commission
91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting
A. what-if planning.
C. top-down forecasting.
B. product feasibility study.
D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: Human-resources council</h5><h5>undefined</h5></div><h5 id='q90'>90. Which of the following is a “checks and balances” system that often helps companies manage their
business risks and monitor the integrity of their organizations:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. what-if planning.</option><option value="B">B. product feasibility study.</option><option value="C">C. top-down forecasting.</option><option value="D">D. qualitative research.
92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)
A. organic entity.
C. generic provider.
B. captive insurer.
D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is A: what-if planning.</h5><h5>Companies often use computer software programs to analyze their levels of risk in
different business functions. The software calculates a company's risk levels in a variety of scenarios
based on different types of data queries. By establishing queries using different combinations of data, the
company obtains results under many circumstances. The company analyzes the quantitative results of
each scenario and uses them to make business decisions. This process is “what-if” planning. Qualitative
research is a study based on opinion or expertise. Top-down forecasting is a method of predicting sales.
During the product-development process, businesses conduct product feasibility studies to determine the
advantages and disadvantages of producing a certain good or service.
</h5></div><h5 id='q91'>91. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. organic entity.</option><option value="B">B. captive insurer.</option><option value="C">C. generic provider.</option><option value="D">D. lending institution.
93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with
A. breach of contract.
C. obstruction of justice.
B. expropriation.
D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: organic entity.</h5><h5>undefined</h5></div><h5 id='q92'>92. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. breach of contract.</option><option value="B">B. expropriation.</option><option value="C">C. obstruction of justice.</option><option value="D">D. substantiation.
94. Which of the following should effective managerial planning do:
A. Reduce uncertainty
C. Achieve goals
B. Limit communication
D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: expropriation.</h5><h5>undefined</h5></div><h5 id='q93'>93. If an accounting firm deliberately conceals information about a client's financial status, the government
may charge the business with</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Reduce uncertainty</option><option value="B">B. Limit communication</option><option value="C">C. Achieve goals</option><option value="D">D. Provide a chain of command
95. The general purpose of managerial planning is to
A. impact society.
B. provide direction.

C. create utility.
D. generate ideas.

</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Achieve goals</h5><h5>Collaboration involves working
together to solve problems and generating ideas that may improve the business's processes. There is
not enough information to determine if Anna and Ryan are discussing issues that are directly related to
the company's finances, if they are to receive promotions, or what type of work culture the company
supports.
</h5></div><h5 id='q94'>94. Which of the following should effective managerial planning do:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. impact society.</option><option value="B">B. provide direction.
</option><option value="C">C. create utility.</option><option value="D">D. generate ideas.

</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: impact society.</h5><h5>undefined</h5></div><h5 id='q95'>95. The general purpose of managerial planning is to</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Supervising</option><option value="B">B. Arranging</option><option value="C">C. Organizing</option><option value="D">D. Controlling
97. Which of the following is the management function that focuses on matching the appropriate person with
the necessary skills for a specific job:
A. Staffing
C. Coordinating
B. Interviewing
D. Leading
98. What is an important aspect of managerial directing?
A. Developing long-term business objectives
B. Interviewing job applicants for open positions
C. Providing employees with instructions
D. Creating work systems for workplace teams
99. A manager monitors an employee as the employee is performing job-related tasks. This is an example of
___________ managerial control.
A. remedial
C. external
B. preventive
D. concurrent
100. Quarterly, each of the international vice presidents of Smith & Webber completes the company's
scorecard and submits it to the president of the company. The scorecard tracks sales, profit, advertising
expenses, and other key information. The scorecard is a tool for which of the following management
functions:
A. Directing
C. Control
B. Planning
D. Organizing

</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: Arranging</h5><h5>undefined</h5></div><h5 id='q96'>96. What function of management involves developing a system for producing work?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Staffing</option><option value="B">B. Interviewing</option><option value="C">C. Coordinating</option><option value="D">D. Leading
98. What is an important aspect of managerial directing?
A. Developing long-term business objectives
B. Interviewing job applicants for open positions
C. Providing employees with instructions
D. Creating work systems for workplace teams
99. A manager monitors an employee as the employee is performing job-related tasks. This is an example of
___________ managerial control.
A. remedial
C. external
B. preventive
D. concurrent
100. Quarterly, each of the international vice presidents of Smith & Webber completes the company's
scorecard and submits it to the president of the company. The scorecard tracks sales, profit, advertising
expenses, and other key information. The scorecard is a tool for which of the following management
functions:
A. Directing
C. Control
B. Planning
D. Organizing

</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is C: Coordinating</h5><h5>undefined</h5></div><h5 id='q97'>97. Which of the following is the management function that focuses on matching the appropriate person with
the necessary skills for a specific job:</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Developing long-term business objectives</option><option value="B">B. Interviewing job applicants for open positions</option><option value="C">C. Providing employees with instructions</option><option value="D">D. Creating work systems for workplace teams
99. A manager monitors an employee as the employee is performing job-related tasks. This is an example of
___________ managerial control.
A. remedial
C. external
B. preventive
D. concurrent
100. Quarterly, each of the international vice presidents of Smith & Webber completes the company's
scorecard and submits it to the president of the company. The scorecard tracks sales, profit, advertising
expenses, and other key information. The scorecard is a tool for which of the following management
functions:
A. Directing
C. Control
B. Planning
D. Organizing

</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: Developing long-term business objectives</h5><h5>undefined</h5></div><h5 id='q98'>98. What is an important aspect of managerial directing?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. remedial</option><option value="B">B. preventive</option><option value="C">C. external</option><option value="D">D. concurrent
100. Quarterly, each of the international vice presidents of Smith & Webber completes the company's
scorecard and submits it to the president of the company. The scorecard tracks sales, profit, advertising
expenses, and other key information. The scorecard is a tool for which of the following management
functions:
A. Directing
C. Control
B. Planning
D. Organizing

</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: external</h5><h5>undefined</h5></div><h5 id='q99'>99. A manager monitors an employee as the employee is performing job-related tasks. This is an example of
___________ managerial control.</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Directing</option><option value="B">B. Planning</option><option value="C">C. Control</option><option value="D">D. Organizing

</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: Organizing

</h5><h5>undefined</h5></div><h5 id='q100'>100. Which of the following represents an issue associated with perceptions of time that may occur when
conducting business internationally:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. The business meetings were conducted in the mornings.</option><option value="B">B. The business meetings were conducted on Tuesdays.</option><option value="C">C. The business meetings were scheduled to accommodate participants in different time zones.</option><option value="D">D. The business meetings started several hours later than originally scheduled.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: The business meetings started several hours later than originally scheduled.</h5><h5>The concept of time is an
important consideration when conducting business internationally. In some cultures punctuality is very
important, so it is important to arrive at meetings on time or a few minutes early. In other cultures, time is
less important or is viewed differently. In some countries, businesspeople will keep people waiting while
they finish another activity, so that s/he can provide the visitor with his/her undivided attention. This
action may appear rude to people in some cultures, while it is viewed as a courtesy in other cultures.
Accommodating meeting participants in other time zones is a courtesy rather than an issue related to
cultural differences. Holding meetings on specific days or at specific times of the day are not cultural
issues related to time.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Business-Admin/Business-Admin_3_Whole_Master.js"></script></html>