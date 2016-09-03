<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Business-Admin Exam 9</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. As the principal in an agency business relationship, Lynn tells Bob to take specific action on her behalf
under certain circumstances. What type of authority has Lynn given Bob?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Unlimited</option><option value="B">B. Provisional</option><option value="C">C. Temporary</option><option value="D">D. Express</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: Express</h5><h5>An agent is a person or business that is authorized to conduct certain business activities with
third parties on the behalf of another person or business (principal). When the principal provides the
agent with express authority, the principal gives specific directions, often in writing, to the agent who is
handling certain business matters for the principal. Provisional, temporary, and unlimited are not widely
used terms to describe types of legal authority in agency relationships.
</h5></div><h5 id='q2'>2. Certain environmental regulations require businesses to develop operating and production systems that
are intended to</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. consume resources.</option><option value="B">B. create waste.</option><option value="C">C. control pollution.</option><option value="D">D. collect samples.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: control pollution.</h5><h5>Pollution is a growing problem that affects many large cities as well as small
communities throughout the world. In an effort to control pollution, many countries have established
environmental regulations that require businesses to develop clean and fuel-efficient operating and
production systems. These systems protect the environment from industrial pollution and help to
preserve natural resources. Many of these regulations also require businesses to control the amount of
waste and dispose of it properly. Environmental regulations are intended to conserve resources. A
business's operating and production systems are not intended to collect samples.
</h5></div><h5 id='q3'>3. Why is it important to identify sources that provide relevant, valid written material?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. To compile a database</option><option value="B">B. To read useful information</option><option value="C">C. To understand business communication</option><option value="D">D. To prepare a routine message</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: To read useful information</h5><h5>Business employees often read written material to obtain useful information
that they can use to apply to a specific task or problem. For the information to be useful, the sources
must provide relevant, valid written material. For example, employees might read industry publications to
identify trends so the business can take steps to remain competitive. Industry information is relevant and
valid and useful to businesses. It is not important to identify sources that provide relevant, valid written
material to compile a database, understand business communication, or prepare a routine message.
</h5></div><h5 id='q4'>4. During a brainstorming session, should participants be allowed to add new ideas to the list that are based
on another group member's idea?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. No, because using someone else's idea is considered stealing</option><option value="B">B. Yes, because other participants' ideas can trigger new ideas</option><option value="C">C. No, because it can be interpreted as a poor evaluation of the idea</option><option value="D">D. Yes, because ideas that are too outrageous should be immediately modified</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: Yes, because other participants' ideas can trigger new ideas</h5><h5>This process is called steppingstones or
triggers, and it is encouraged in brainstorming because one person's ideas can easily trigger new and
different ideas. It is not considered stealing, but instead is an important part of working together to build
on each others' ideas to find more ideas. Adding a steppingstone idea to a brainstorming list is not a form
of evaluating the original ideas. All ideas are considered equal in a brainstorming session, including those
that are very outlandish or outrageous.
</h5></div><h5 id='q5'>5. How group members interact usually depends on</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. who knows the most.</option><option value="B">B. who is the oldest.
</option><option value="C">C. who was in charge of the previous group.</option><option value="D">D. who asks questions.
</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: who knows the most.</h5><h5>Interaction among the group members has a lot to do with the topic at hand—and
who knows the most about it. The members want to know who knows the most about the subject. This
may or may not be the oldest member of the group, the group member who asks questions, or the one
who was in charge of the previous group.
</h5></div><h5 id='q6'>6. Anna, a new employee with Turbo Electronics, must write a letter to a customer. Because Anna does not
know which letter format to use, she should</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. ask her supervisor which letter format the company uses.</option><option value="B">B. select the block format because it is the mostly widely used.</option><option value="C">C. select the simplified format because it is impersonal.</option><option value="D">D. develop the letter in several formats and send the letter that her supervisor likes best.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: ask her supervisor which letter format the company uses.</h5><h5>Companies may prefer that their employees
format business correspondence in a specific way to ensure consistency within the organization. To save
time and effort, Ann should ask her supervisor which letter format the company uses, such as the block
format or simplified format. Developing the letter in a variety of formats is an inefficient use of time.
</h5></div><h5 id='q7'>7. Which of the following is a characteristic of an effective persuasive message:</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Creates desire</option><option value="B">B. Is aggressive</option><option value="C">C. Describes a process</option><option value="D">D. Summarizes an issue</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: Creates desire</h5><h5>A persuasive message is intended to change a person's mind or to convince someone to
take action. For the message to be effective, it should create a desire in the person to do what the
message wants. It should present a good reason or potential benefit that will persuade the reader.
Otherwise, there may be no incentive for the person to do what the message wants. Persuasive
messages often are assertive, but they should not be aggressive. Persuasive messages do not describe
a process or summarize an issue.
</h5></div><h5 id='q8'>8. What information should be included in the recommendations section of an analytical report?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Benefits and risks</option><option value="B">B. Product characteristics</option><option value="C">C. Budgetary constraints</option><option value="D">D. Project status data</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is A: Benefits and risks</h5><h5>An analytical report is a document that explains and evaluates an issue, opportunity,
or problem. An important aspect of developing an analytical report involves providing recommendations
for a course of action related to the issue, opportunity, or problem. When providing recommendations, the
writer should clearly state both the benefits and risks associated with the recommendation, so the
reader(s) can make informed business decisions. Analytical reports may discuss a particular product, a
project, or the business's budget, depending on the report topic.
</h5></div><h5 id='q9'>9. What section of a research report outlines the research plan?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Results</option><option value="B">B. Recommendations</option><option value="C">C. Methodology</option><option value="D">D. Introduction</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: Methodology</h5><h5>A research report is a written document that summarizes an investigation related to a
particular issue or problem. The methodology section of the report outlines the research plan. It appears
in the middle of the report and discusses the types of research tools used and why they were selected.
The results section reports the research findings. The recommendations section is the proposed course
of action, which is considered the research results. The recommendations section is the last component
presented in the report. The introduction appears at the beginning of the report and discusses the
purpose and significance of the research project.
</h5></div><h5 id='q10'>10. Which of the following is a type of information that supervisors often communicate to employees in
writing:</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Company policies</option><option value="B">B. Personal opinions</option><option value="C">C. Community news</option><option value="D">D. Workplace rumors</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: Company policies</h5><h5>Supervisors and employees need to communicate with each other on a regular basis
in order to function effectively. One type of information that supervisors often communicate to employees
in writing is information about company policies. Supervisors want to make sure that employees
understand company policies so that they will be able to work efficiently and accomplish company goals.
Providing this information in writing ensures that it is available to employees at all times. Personal
opinions and workplace rumors usually are communicated verbally. Supervisors usually do not
communicate community news to employees.
</h5></div><h5 id='q11'>11. By accurately explaining the company's policies to customers, salespeople often are able to avoid
misunderstandings with customers and improve the company's</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. image.</option><option value="B">B. routine.</option><option value="C">C. goals.</option><option value="D">D. rules.
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: image.</h5><h5>Business image is the view or opinion that customers have about a business. Salespeople can
improve the image of the company in the eyes of its customers by knowing company policies and
procedures and being able to accurately interpret them to the clientele. Properly explaining policies will
help to avoid misunderstandings and to improve the company's image. A routine is a regular course of
action; goals are objectives to be met. Rules are regulations. A business establishes routines, goals, and
rules in order to avoid misunderstandings with customers and improve its image.
</h5></div><h5 id='q12'>12. Salespeople sometimes have difficulty meeting the needs of customers who</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. feel empathy for salespeople.</option><option value="B">B. ask for the salesperson's opinion.</option><option value="C">C. voice their opinions in a loud manner.</option><option value="D">D. know exactly what they want.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: voice their opinions in a loud manner.</h5><h5>Customers who become loud and overbearing can be difficult to
handle. Salespeople are often embarrassed and may wish to conclude the sale as quickly as possible. It
is not difficult to sell something to customers who know what they want, ask for the salesperson's
opinion, or indicate that they understand the salesperson's job.
</h5></div><h5 id='q13'>13. Which of the following is an example of an economic activity:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Buying new company equipment</option><option value="B">B. Complimenting a coworker</option><option value="C">C. Conducting a meeting</option><option value="D">D. Developing an advertising budget</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: Buying new company equipment</h5><h5>An economic activity involves the exchange of something having
monetary value for something else that has monetary value. Conducting meetings and developing an
advertising budget are management activities. Complimenting a coworker may be good for the
coworker's morale, but it is not an economic activity.
</h5></div><h5 id='q14'>14. What type of market exists when a large supply of a product and a small demand have resulted in low
prices?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Monopolistic</option><option value="B">B. Seller's</option><option value="C">C. Productive</option><option value="D">D. Buyer's</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: Buyer's</h5><h5>A buyer's market is described as the best time for consumers to buy. During a buyer's market,
consumers can conserve their money by purchasing products at reduced prices. A seller's market is the
best time for producers to sell and is characterized by large demand, small supply, and high prices.
Monopolistic circumstances exist when there is only one supplier of a product and no substitute products
are readily available. Productive is not a type of market.
</h5></div><h5 id='q15'>15. A business that produces a product should be socially responsible to the __________ of the product.</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. endorsers</option><option value="B">B. providers</option><option value="C">C. users</option><option value="D">D. producers</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: users</h5><h5>Businesses should offer the users of their products safe, quality products. The business is the
provider of the product, and it is generally not held liable when the user of its product abuses the product
in some way. People who endorse a product are recommending it to others.
</h5></div><h5 id='q16'>16. Though employees who work for auto companies hold a variety of different jobs, they may all belong to
the same union—the United Auto Workers. This is an example of a(n)</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. industrial union.</option><option value="B">B. professional union.</option><option value="C">C. trade union.</option><option value="D">D. craft union.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is A: industrial union.</h5><h5>Workers in the auto industry may all belong to the United Auto Workers, an industrial
union. Industrial unions include a wide range of workers across an industry. Professional unions are
common in the public sector and include teachers, nurses, etc. Craft unions, also called trade unions,
include skilled laborers working in a specific occupation, such as plumbing.
</h5></div><h5 id='q17'>17. There are six workers employed by a manufacturer. Over the course of six months, the manufacturer
hires a new worker every month, so that at the end of the hiring period there are 12 workers total. The
total output increased dramatically with the hiring of the first two workers. It increased less dramatically
with each new hiring after the first two. This is an example of the law of diminishing</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. utility.</option><option value="B">B. production.</option><option value="C">C. output.</option><option value="D">D. returns.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: returns.</h5><h5>The marginal output gained from hiring another worker is less than it was for each previous
worker hired. There is no such thing as the law of diminishing production, output, or utility.
</h5></div><h5 id='q18'>18. An economy with a high unemployment level tends to have</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. a high supply of money.</option><option value="B">B. a lower rate of inflation.</option><option value="C">C. fewer monetary policies.</option><option value="D">D. rapid GDP growth.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: a lower rate of inflation.</h5><h5>When a lot of people are out of work, they lose their buying power, which means
less money is in circulation. Because unemployed people have less disposable income, the demand for
goods and services is low, which tends to slow or lower the rate of inflation (rise in prices). The amount of
monetary policies that the Fed establishes does not affect unemployment rates. When the GDP grows,
an economic expansion is occurring, which indicates that people and businesses are spending money,
and the unemployment levels are low.
</h5></div><h5 id='q19'>19. In Canada, businesspeople typically provide printed materials in both French and English. This is an
issue related to</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. time.</option><option value="B">B. language.</option><option value="C">C. space.</option><option value="D">D. creativity.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: language.</h5><h5>Canada is a bilingual country in which French and English are dominant languages.
Therefore, businesspeople there typically provide printed materials that include text written in both
languages. The example is not an issue that relates to differences in time or space, and does not relate
to creativity.
</h5></div><h5 id='q20'>20. German businesspeople value careful planning and attention to details. As a result, decision-making in
German business situations is often a ___________ process.</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. lengthy</option><option value="B">B. swift</option><option value="C">C. limited</option><option value="D">D. flexible</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: lengthy</h5><h5>Because German businesspeople are very detail oriented, it often takes them a long time to
make decisions. As a culture, Germans tend to take time to plan and consider many alternatives before
deciding on a course of action. By understanding that it may take time to get a response, foreigners can
adapt to German culture by being patient with German businesspeople. Careful planning and paying
attention to details take time, so decision making is not a swift, limited, or flexible process.
</h5></div><h5 id='q21'>21. Katherine is going on a business trip to Argentina. Cecilia, Katherine's coworker, is from Argentina.
Cecilia tells Katherine to make sure that she keeps her hands on the table because it is considered rude
to put your hands in your lap while in a restaurant. Cecilia's tip is related to</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. dining etiquette.</option><option value="B">B. dress and appearance.</option><option value="C">C. spatial differences.</option><option value="D">D. verbal communication.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: dining etiquette.</h5><h5>In Argentina, business is often discussed over meals. Because dining customs and
traditions vary by country, foreign businesspeople should learn about the proper dining etiquette before
going to another country to reduce the risk of embarrassment. Putting your hands in your lap is
considered poor table manners in Argentina. The tip that Cecilia provided Katherine does not relate to
dress and appearance, spatial differences, or verbal communication.
</h5></div><h5 id='q22'>22. Carmen Sanchez is a Chilean businessperson who is attending a business meeting with Mr. Takahasi in
Nagoya, Japan. She knows that a formal, conservative appearance is very important in Japanese
business situations. To make a favorable impression on Mr. Takahasi, Carmen should wear</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. neutral-colored casual slacks, a white, short-sleeve blouse, and slip-on shoes.</option><option value="B">B. a dark skirt and jacket, low-heeled shoes, and no jewelry.</option><option value="C">C. a colorful, knee-length dress, bold jewelry, and open-toe shoes.</option><option value="D">D. a black, sleeveless ball gown and high-heeled black shoes.

</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: a dark skirt and jacket, low-heeled shoes, and no jewelry.</h5><h5>By wearing a dark business suit, low-heel
shoes, and no jewelry, Carmen is presenting a conservative, professional appearance. Casual slacks, a
colorful dress, bold jewelry, and open-toe shoes are appropriate for casual and informal settings. A ball
gown and high-heeled shoes are appropriate for very formal affairs rather than for day-to-day business
meetings. There is not enough information provided about the short-sleeve white blouse or the slip-on
shoes to determine if these items would be appropriate, conservative attire.
</h5></div><h5 id='q23'>23. Which of the following is a factor related to appearance that foreign businesspeople must consider when
doing business in Middle Eastern countries:</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. It is common for Middle Easterners to communicate slowly with periods of silence.</option><option value="B">B. Most Middle Easterners are Muslim, and pray five times a day.</option><option value="C">C. Crossing one's legs is an offensive gesture to Middle Easterners.</option><option value="D">D. Both men and woman are expected to wear modest clothing in public.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is D: Both men and woman are expected to wear modest clothing in public.</h5><h5>When businesspeople visit a
foreign country, they should try to learn about the culture so that they don't do something offensive.
Before going to a foreign country, businesspeople should research the country's standards for
appearance and dress. For example, wearing shorts or tank tops in Middle Eastern country is exhibiting
an inappropriate appearance. Middle Eastern businesspeople would not take foreigners seriously and
would be quite offended if they walked around in shorts and tank tops. Other aspects of the culture that
foreign businesspeople may want to research include nonverbal behavior such as facial expressions and
gestures and communication styles. Because government and religion are closely connected in many
Middle Eastern countries, visitors should also understand the religious practices of Middle Eastern
countries.
</h5></div><h5 id='q24'>24. Foreign businesspeople should understand that Saudi Arabians might leave a business meeting for
several minutes to attend daily prayers. This is an example of a custom related to</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. speech.</option><option value="B">B. religion.</option><option value="C">C. age.</option><option value="D">D. punctuality.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: religion.</h5><h5>Religious practices and traditions are an important aspect of everyday life in Saudi Arabia.
Muslims pray five times a day, so it is customary for Saudi Arabian businesspeople to leave a meeting for
a few minutes during the day. Prayer is not a custom associated with speech, age, or punctuality.
</h5></div><h5 id='q25'>25. To Indian businesspeople, it is offensive to put your hands on your hips because it indicates anger. This
is an example of a practice or custom that relates to</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. social status.</option><option value="B">B. oral tradition.</option><option value="C">C. nonverbal behavior.</option><option value="D">D. appropriate clothing.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is C: nonverbal behavior.</h5><h5>Retrieved October 10, 2011, from
http://www.cyborlink.com/besite/germany.htm
21. A
Dining etiquette. In Argentina, business is often discussed over meals. Because dining customs and
traditions vary by country, foreign businesspeople should learn about the proper dining etiquette before
going to another country to reduce the risk of embarrassment. Putting your hands in your lap is
considered poor table manners in Argentina. The tip that Cecilia provided Katherine does not relate to
dress and appearance, spatial differences, or verbal communication.
</h5></div><h5 id='q26'>26. Which of the following is not a benefit of assessing your strengths and weaknesses:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Improved ability to make decisions</option><option value="B">B. Improved ability to work outside a group</option><option value="C">C. Enhanced positioning of your talents</option><option value="D">D. Increased ability to handle interview questions</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: Improved ability to work outside a group</h5><h5>Improved ability to work outside a group is not a benefit of
assessing your strengths and weaknesses. Assessing your strengths and weaknesses should improve
your ability to form effective groups, as well as improve your ability to make decisions, increase your
ability to handle interview questions, and enhance the positioning of your talents.
</h5></div><h5 id='q27'>27. Adhering to an established set of personal ethics is referred to as</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. honesty.</option><option value="B">B. deceit.</option><option value="C">C. integrity.</option><option value="D">D. truth.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is C: integrity.</h5><h5>Your integrity involves the overall quality of your moral character. Honesty refers to truthfulness,
fairness, and authenticity. Truth is an indisputable or accepted fact. The practice of cheating, misleading,
or misrepresenting is known as deceit.
</h5></div><h5 id='q28'>28. Ned is a line supervisor for a large distribution center. Part of his job is to gather and pack items for
customers' orders. Yesterday, when the warehouse manager asked Ned about an incorrect order that he
packed, Ned replied, "Well, Pete put the wrong product on the shelf. It's not my fault that the customer
received the wrong item." What is Ned doing?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Offering to correct the customer's order</option><option value="B">B. Blaming himself for Pete's mistake</option><option value="C">C. Failing to accept responsibility for his actions</option><option value="D">D. Acknowledging that he made a costly mistake</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: Failing to accept responsibility for his actions</h5><h5>When you take responsibility for your actions, you accept
the consequences (good and bad) of your behavior, which is based on the decisions you make. Taking
responsibility for your actions often involves admitting and learning from your mistakes and trying to do
better in the future. In the example, Ned became defensive about a mistake that he made and blamed
another employee. By blaming another employee, Ned is failing to accept responsibility for his actions,
which were pulling and packing an incorrect item. Ned is not offering to correct the customer's order, nor
is he acknowledging that he made a costly mistake.
</h5></div><h5 id='q29'>29. An important aspect of managing work commitments is</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. scheduling activities close together.</option><option value="B">B. planning ahead.</option><option value="C">C. focusing on unimportant details.</option><option value="D">D. organizing others' activities.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: planning ahead.</h5><h5>If you plan ahead, you leave yourself enough time to complete important tasks, which is
important when unexpected situations occur that require immediate attention. Scheduling activities too
close together may be stressful, particularly if unexpected situations or delays occur. When you focus on
the unimportant details, you are wasting time and energy. Managing work commitments does not always
involve organizing others' activities.
</h5></div><h5 id='q30'>30. When people dread change for no apparent reason, their feelings may be</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. sensible.</option><option value="B">B. irrational.</option><option value="C">C. logical.</option><option value="D">D. reasonable.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: irrational.</h5><h5>Thoughts and feelings that are not based on fact are often irrational or unreasonable. While
such fears are very real to the people who have them, they must be overcome so that they do not
interfere with the individuals' lives. Such feelings may be overcome by sensible, reasonable, or logical
thought processes.
</h5></div><h5 id='q31'>31. Jamie has been asked to join a group of students who are working together to establish a school store.
Jamie has been asked to be part of a</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. media channel.</option><option value="B">B. boycott.</option><option value="C">C. strike.</option><option value="D">D. team.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: team.</h5><h5>A team is a group of people who work cooperatively together to achieve common goals. In the
example, establishing a school store is the common goal of the team that Jamie has been asked to join.
A boycott is a union strategy in which union members refuse to buy a company's products. A strike is a
union strategy in which employees stop working and leave their jobs. A media channel is an individual
medium that transmits a message to the public (e.g., radio, television, newspaper).
</h5></div><h5 id='q32'>32. How does a group reach a decision by consensus?</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. The majority of the group members reach agreement.</option><option value="B">B. Group members vote to determine the best option.</option><option value="C">C. Each member agrees to the same course of action.</option><option value="D">D. The group leader solicits suggestions and makes the final decision.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: Each member agrees to the same course of action.</h5><h5>A consensus is a decision-making outcome that
requires the substantial agreement of each group member—every member must agree to a decision or
outcome. In consensus building, every group member has an equal level of power, so there are no
leaders. Voting is a decision-making method in which votes are counted for or against an alternative, and
whichever alternative has the greatest number of votes, wins. With consensus, no member wins because
each member must agree with the decision. Majority rule is not a consensus because most, not all, of the
members make the decision.
</h5></div><h5 id='q33'>33. Adaptability often involves seeking alternative ways of approaching a situation, or developing
____________ plans.</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. contingency</option><option value="B">B. corrective</option><option value="C">C. open</option><option value="D">D. external

</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: contingency</h5><h5>Contingency plans are specific guidelines that are used when responding to undesirable
circumstances. Corrective, external, and open are not terms that are widely used to describe the process
of developing or carrying out an alternative course of action.
</h5></div><h5 id='q34'>34. A change leader might find it difficult to get support from others in a group because the others may</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. dislike the status quo.</option><option value="B">B. fear the unknown.</option><option value="C">C. have a lot of good ideas.</option><option value="D">D. trust the change leader.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: fear the unknown.</h5><h5>A change leader is someone who has the ability to guide or direct others with the
intention to transform or alter something. Change leaders often run into problems when people resist
change. People resist change because they are afraid they won't be able to adapt to the change. People
also resist change when they are content with the way things are, distrust the change leader, and like the
status quo. When people are content with the way things are, they often do not share their ideas because
by doing so, change may occur.
</h5></div><h5 id='q35'>35. Which of the following loans would have the lowest total simple-interest charges:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. A loan for $4,000 @ 9% interest for 6 years</option><option value="B">B. A loan for $7,000 @ 8% interest for 2 years</option><option value="C">C. A loan for $6,000 @ 8 1/2% interest for 1 year</option><option value="D">D. A loan for $5,000 @ 8 3/4% interest for 4 years</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: A loan for $6,000 @ 8 1/2% interest for 1 year</h5><h5>The amount of simple interest is calculated by multiplying
the amount of money being borrowed times the interest rate, times the length of time for which the loan is
made. In this case, $6,000 x 8 1/2% x 1 = $510. The $5,000 loan will have an interest payment of $1,750.
The $4,000 loan will have an interest payment of $2,160. The $7,000 loan will have an interest payment
of $1,120. Time is a very important factor in determining the cost of using credit.
</h5></div><h5 id='q36'>36. Which of the following is an example of a person using credit in a responsible manner:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Seeking counseling to reduce unmanageable debt</option><option value="B">B. Paying credit-card balances on time</option><option value="C">C. Maintaining a low credit rating</option><option value="D">D. Using two or more high-interest credit cards</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Paying credit-card balances on time</h5><h5>Credit allows a person to purchase now and pay later. Building a
good credit history involves using credit responsibly, which includes making credit-card payments on
time. It is important to build good credit because lending institutions look at a person's credit history to
determine if s/he should receive a loan. When an individual has a poor credit history, s/he may not be
able to obtain large loans to buy a car or house or to start a new business. Responsible credit involves
striving to maintain a high credit rating, looking for the lowest interest rates possible, and limiting the
number of credit cards they use. Although it is a good idea to seek counseling to reduce unmanageable
debt, this action is taken when a person has not used credit responsibly.
</h5></div><h5 id='q37'>37. Which of the following is an advantage of using an online brokerage firm:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Additional financial products and services</option><option value="B">B. Personal guidance from a live broker</option><option value="C">C. 24-hour account access</option><option value="D">D. High commissions</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is C: 24-hour account access</h5><h5>One of the advantages of using an online brokerage firm is 24-hour access to
your account. Many self-directed investors like being able to access this information at any time without
having to call or visit their broker. Online brokerages do not offer personal guidance from a live broker or
many additional financial products and services. Online brokerages usually have low commissions rather
than high ones.
</h5></div><h5 id='q38'>38. Mr. Daly bought a vacation cottage on lakefront property. What type of investment did Mr. Daly
purchase?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Securities</option><option value="B">B. Ownership</option><option value="C">C. Stock</option><option value="D">D. Escrow</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: Ownership</h5><h5>Investments in which individuals purchase a portion or all of an item are called ownership
investments. Mr. Daly purchased real estate, which is property that consists of buildings and/or land.
Real estate is a type of ownership investment. Securities are the legal owning or lending agreements
between individuals, businesses, or governments. Stocks are shares or units of ownership in a
corporation. Escrow is a type of account in which money is held in a trust until the money can be
transferred to the designated receiver.
</h5></div><h5 id='q39'>39. Use of accounting standards helps accountants avoid certain pitfalls when preparing financial
statements. Which of the following is one of those pitfalls for accountants:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Evidence</option><option value="B">B. Transparency</option><option value="C">C. Acceptance</option><option value="D">D. Bias</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bias</h5><h5>Bias is the preference for a certain outcome or perspective. Accountants have to guard against their
own bias, such as looking for what they expect to find, as well as that of managers whose estimates may
have been colored by what they are trying to achieve in the company. Bias can be unintentional or
intentional. Accountants desire transparency and want to provide transparency so that everyone can
easily see how they arrived at their figures. Acceptance enables companies to compare their
performance with that of other companies or with other time periods. Businesses generally provide
evidence to auditors.
</h5></div><h5 id='q40'>40. Which of the following is one source of cash that flows into a business:</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Salaries</option><option value="B">B. Interest</option><option value="C">C. Taxes</option><option value="D">D. Equity</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: Interest</h5><h5>Some businesses receive cash in the form of interest, which is money payments for the use of
borrowed money. One way that businesses obtain interest is by charging their customers interest in
exchange for the ability to purchase goods and services on credit. Salaries, equity, and taxes are sources
of cash flowing out of a business.
</h5></div><h5 id='q41'>41. Assets a company already owns and can use to finance a new venture are called</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. return on capital.</option><option value="B">B. dividends.</option><option value="C">C. equity.</option><option value="D">D. accounts payable.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is C: equity.</h5><h5>Assets a company already owns and can use to finance a new venture are called equity.
Dividends are sums of money paid to investors or stockholders as earnings on investments. Return on
capital is a component of working capital management that refers to how well a business is generating
cash flow in relation to its invested capital. Accounts payable refers to money the business owes to
others.
</h5></div><h5 id='q42'>42. Businesses often ask a new employee's coworkers to help __________ the new employee.</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. question</option><option value="B">B. supervise</option><option value="C">C. test</option><option value="D">D. train</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: train</h5><h5>Businesses often assign new employees to work with experienced employees who will be able to
help train them. Current employees can help new employees learn their jobs and provide them with
information about company procedures. Coworkers would not be asked to supervise, question, or test
new employees.
</h5></div><h5 id='q43'>43. Tacit knowledge is often based on experiences and personal expertise, while explicit knowledge is</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. based on intuition.</option><option value="B">B. difficult to articulate and measure.</option><option value="C">C. based on opinions.</option><option value="D">D. easy to communicate and quantify.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: easy to communicate and quantify.</h5><h5>Explicit knowledge is knowledge or information consisting of words,
numbers, codes, processes, and formulas that are easily stored, shared, and quantified (measured).
Tacit knowledge is knowledge consisting of personal opinions, experiences, expertise, or understanding
that is not easily articulated, stored, or quantified. In some cases, tacit knowledge might evolve from a gut
feeling or intuition about something.
</h5></div><h5 id='q44'>44. What is a negative effect of employees who are unwilling to share tacit knowledge with one another?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Low efficiency</option><option value="B">B. More disclosure</option><option value="C">C. Less competition</option><option value="D">D. High cohesiveness</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Low efficiency</h5><h5>Tacit knowledge is knowledge consisting of personal opinions, experiences, expertise, or
understanding that is not easily articulated, stored, or quantified. Tacit knowledge is often acquired by
trial and error, which occurs by repeating tasks and activities over time. When an employee devises
effective shortcuts or techniques that increase personal productivity, the employee has tacit knowledge.
When employees are unwilling to share tacit knowledge that will improve efficiency levels, it takes longer
for the company to achieve its goals. Employees who share tacit knowledge may improve the business's
efficiency and create a more open and cohesive work environment, which will reduce the
competitiveness among employees.
</h5></div><h5 id='q45'>45. As part of its knowledge-management program, a business uses a special computer application to help
detect and record unexpected issues that occur during the production process. This program allows
many staff members to obtain and share information to resolve the problem quickly. This is an example
of a business effectively using</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. a public domain database.</option><option value="B">B. mind-mapping software.</option><option value="C">C. incident-management software.</option><option value="D">D. an accounting database.

</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is C: incident-management software.</h5><h5>Incident-management software helps the company to detect and record
production issues. As a result, it can help employees to identify problems, share information, and work
together to solve problems, such as bottlenecks in the production process, more quickly. Mind-mapping
software facilitates creative thinking and product innovation. Public domain technology, such as software
and databases, are not owned by any one entity and can be used by the general public for free or for a
fee. An accounting database stores financial data such as sales transactions.
</h5></div><h5 id='q46'>46. A business might ask its employees to sign a nondisclosure agreement to</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. prevent copyright infringement.</option><option value="B">B. avoid discrimination lawsuits.</option><option value="C">C. ensure its employees' privacy.</option><option value="D">D. protect its trade secrets.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: protect its trade secrets.</h5><h5>A nondisclosure agreement is a contract between an employer and an
employee that states that the employee will not reveal the employer's trade secrets (e.g., formula, recipe,
manufacturing technique) to future employers for whom the employee might work. Nondisclosure
agreements provide the business legal recourse if a competitor attempts to use the information for
financial gain or benefit. Businesses do not ask their employees to sign a nondisclosure agreement to
avoid discrimination lawsuits, ensure their employees' privacy, or prevent copyright infringement.
Copyright infringement involves the unauthorized use of written or artistic works.
</h5></div><h5 id='q47'>47. A business captures its employees' knowledge of certain tasks, processes, and events by developing a
chart that outlines the relationships among bits of information. This is an example of a business using
a(n) __________ technique to capture and transfer knowledge.</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. authority-based</option><option value="B">B. diagram</option><option value="C">C. statistical</option><option value="D">D. transcription</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: diagram</h5><h5>A business can use many different tools to capture and transfer knowledge in an organization.
By diagramming the information, the business can draw relationships and make connections among
different components of information. The business can analyze the diagram to determine efficiencies and
inefficiencies within the business, or it can share the acquired knowledge with employees within the
organization. The example is not using authority-based, statistical, or transcription techniques to capture
and transfer knowledge within an organization.
</h5></div><h5 id='q48'>48. The laddering technique is used to capture and change categories of</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. redundant knowledge.</option><option value="B">B. horizontal communication.</option><option value="C">C. meaningless data.</option><option value="D">D. hierarchical information.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: hierarchical information.</h5><h5>Business employees often read written material to obtain useful information
that they can use to apply to a specific task or problem. For the information to be useful, the sources
must provide relevant, valid written material. For example, employees might read industry publications to
identify trends so the business can take steps to remain competitive. Industry information is relevant and
valid and useful to businesses. It is not important to identify sources that provide relevant, valid written
material to compile a database, understand business communication, or prepare a routine message.
</h5></div><h5 id='q49'>49. The development of goods and services that best satisfy consumer needs and wants is a major goal of</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. purchasing.</option><option value="B">B. product/service management.</option><option value="C">C. financing.</option><option value="D">D. marketing-information management.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: product/service management.</h5><h5>(2006-2011). Manage your scheduling commitments—six effective
guidelines to get things done (Part 1). Retrieved November 10, 2011,
http://www.timemanagment.info/111/manage-your-time-scheduling-commitments-sixeffective-guidelines-to-get-things-done/
30. B
Irrational. Thoughts and feelings that are not based on fact are often irrational or unreasonable. While
such fears are very real to the people who have them, they must be overcome so that they do not
interfere with the individuals' lives. Such feelings may be overcome by sensible, reasonable, or logical
thought processes.
</h5></div><h5 id='q50'>50. Which of the following problems is connected to technology:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Lack of health care</option><option value="B">B. Inflation</option><option value="C">C. Oil shortages</option><option value="D">D. Air pollution</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: Air pollution</h5><h5>Pollution is a growing problem that affects many large cities as well as small
communities throughout the world. In an effort to control pollution, many countries have established
environmental regulations that require businesses to develop clean and fuel-efficient operating and
production systems. These systems protect the environment from industrial pollution and help to
preserve natural resources. Many of these regulations also require businesses to control the amount of
waste and dispose of it properly. Environmental regulations are intended to conserve resources. A
business's operating and production systems are not intended to collect samples.
</h5></div><h5 id='q51'>51. Thomas wants to change the word “develop” to the word “create” in several places throughout his
document. The quickest way to make these changes is by using the __________ function.</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. cut and paste</option><option value="B">B. find and replace</option><option value="C">C. header and footer</option><option value="D">D. styles and formatting</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: find and replace</h5><h5>The find and replace function allows computer users to make changes to their
documents quickly. This function is beneficial when working with large documents that contain multiple
words or phrases that need to be changed. The cut function allows a computer user to remove text or
graphics from the document. The paste function allows a computer user to place cut or copied text or
graphics in the document. Although the cut and paste functions allow users to change words, they are
not as quick as the find and replace function, which is one step. The header and footer function allows a
computer user to place document names and page numbers into a document. The style and formatting
function allows a computer user to organize the document's contents in a standard or consistent manner.
</h5></div><h5 id='q52'>52. Which component of project-management software helps project managers to determine the length of
time that a series of interdependent tasks will take to complete under various circumstances:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Linear</option><option value="B">B. Demonstration</option><option value="C">C. Presentation</option><option value="D">D. Critical path</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is D: Critical path</h5><h5>Many project-management software packages incorporate the critical path methodology into
their programs. The critical path methodology uses algorithms to determine timelines, develops
schedules for complex project activities, and proposes scheduling contingency plans, which reduce
project delays. Presentation software creates computer-generated visual aids that support oral
presentations. Demonstration and linear are not components of project management software.
</h5></div><h5 id='q53'>53. What do most businesses maintain to help them plan future sales and promotional activities?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Advertising proofs</option><option value="B">B. Customer records</option><option value="C">C. Inventory systems</option><option value="D">D. Operating procedures</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: Customer records</h5><h5>Most businesses maintain customer records that contain information about what
customers are buying, when they are buying, and how much they are buying. By analyzing this
information, businesses are able to plan future sales and promotional activities that will appeal to
customers and encourage them to buy. Without this type of information, businesses might have no idea
what customers will want to buy in the future. Businesses do not maintain advertising proofs, inventory
systems, or operating procedures to help them plan future sales and promotional activities.
</h5></div><h5 id='q54'>54. The growth of e-commerce is changing the way companies do business by allowing them to</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. reduce the services they provide customers. </option><option value="B">B. communicate with similar organizations.</option><option value="C">C. place high prices on their products.</option><option value="D">D. be accessible to customers at all times.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: be accessible to customers at all times.</h5><h5>E-commerce is a business trend that is expanding rapidly
because of the Internet and the World Wide Web. E-commerce is changing the way companies do
business because it allows them to be accessible to customers at all times. Customers who have access
to a computer and the Internet can visit a business's web site and obtain information or shop online at
any time of the day or night. As a result, more and more businesses are adding web sites to make their
services and products available to customers at all times. The benefit to a business is often increased
sales. The growth of e-commerce is increasing competition, which means that businesses often reduce
prices and offer additional services to attract customers. Businesses do not use e-commerce to
communicate with similar organizations.
</h5></div><h5 id='q55'>55. Businesses often conduct environmental scans to determine if they should</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. improve their computer systems.</option><option value="B">B. make staffing adjustments.</option><option value="C">C. follow government regulations.</option><option value="D">D. expand into other markets.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is D: expand into other markets.</h5><h5>An environmental scan is a study of the external forces that influence a
business's success. An environmental scan examines the business's competitors; social issues and
trends; and government, political, and economic factors. An environmental scan provides information that
helps the business make decisions, such as whether it should expand into other markets. Staffing
adjustments and computer improvements are internal factors that a business considers when it wants to
enhance its productivity. A business should always follow government regulations.
</h5></div><h5 id='q56'>56. A business report provides statistical data indicating that the demand for a specific type of product has
been increasing between three and six percent over the past several months. This information is useful to
companies to</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. reduce inventory.</option><option value="B">B. decrease costs.</option><option value="C">C. identify trends.</option><option value="D">D. achieve quotas.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: identify trends.</h5><h5>Statistics are information presented in numerical form. Statistics can be used to identify
trends. Trends indicate the general direction in which people or events are moving. If numerical data
show that the demand for a product has been steadily increasing for several months, then the trend
indicates that more people want or need the product. By analyzing this information, the business can
determine if it wants to enter a new market. Or, if the business already sells the product, it can use the
information to decide if the business should increase its production of or inventory levels for the product.
Although statistics are used to analyze costs, inventory, and quotas, the information provided cannot be
used to assess those situations.
</h5></div><h5 id='q57'>57. Which of the following is not a main factor in a business's site selection decision:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Community</option><option value="B">B. Media</option><option value="C">C. Costs</option><option value="D">D. Labor

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: Media</h5><h5>The main factors in a business's decision about site selection are costs, labor, and community. A
business wants to know how much money it will take to run its operations at a certain location, what kind
of work force will be available, and how the community will react to its presence. Usually, businesses do
not consider the media at a certain location, especially since technology has enabled people to access
the media almost anywhere at any time.
</h5></div><h5 id='q58'>58. A corporation is building a facility in the city's business district. The city requires that the facility meet
certain size, style, structural, and usage requirements. These requirements are outlined in the town's</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. health regulations.</option><option value="B">B. zoning ordinances.</option><option value="C">C. partnership agreement.</option><option value="D">D. tax code.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: zoning ordinances.</h5><h5>Zoning ordinances are regulations that govern the ways in which land and buildings
may be used in certain jurisdictions. In many towns and cities, land is designated for commercial
(business) or residential use. Although zoning ordinances vary by community, they may regulate the size
of the facility. In many situations, cities require that some buildings be designed to accommodate a
certain style (e.g., American colonial). A company that wants to build a facility in a certain location must
consider the city's zoning ordinances to make sure that the regulations are compatible with the
company's needs and goals. Health regulations are laws that are designed to protect the health and wellbeing of society. A partnership agreement is a written agreement (contract) signed by business partners
that specifies the terms of the partnership arrangement. The tax code outlines the tax obligations and
laws that individuals and businesses must follow.
</h5></div><h5 id='q59'>59. Most employees should not attempt to repair a business's</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. scratched desks.</option><option value="B">B. training manuals.</option><option value="C">C. printed signs.</option><option value="D">D. electrical equipment.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: electrical equipment.</h5><h5>An economic activity involves the exchange of something having
monetary value for something else that has monetary value. Conducting meetings and developing an
advertising budget are management activities. Complimenting a coworker may be good for the
coworker's morale, but it is not an economic activity.
</h5></div><h5 id='q60'>60. What do many businesses require their employees to do after an accident occurs?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Attend a safety training program</option><option value="B">B. Complete accident-report forms</option><option value="C">C. Help redesign the work areas</option><option value="D">D. Participate in counseling sessions</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is T: Participate in counseling sessions</h5><h5>in the report. The introduction appears at the beginning of the report and discusses the
purpose and significance of the research project.
</h5></div><h5 id='q61'>61. To establish weekly work priorities, employees should consider developing a list of</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. short-term accomplishments.</option><option value="B">B. routinely performed tasks.</option><option value="C">C. critical activities.</option><option value="D">D. long-term goals.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: critical activities.</h5><h5>Complimenting a coworker may be good for the
coworker's morale, but it is not an economic activity.
</h5></div><h5 id='q62'>62. Bill, Tara, and Lauren work for a small manufacturing firm that produces designer jeans. Bill is the fabric
buyer, Tara buys the small items needed to construct the jeans, and Lauren sews the jeans. What does
Lauren need from Bill and Tara to do her job?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Corduroy from Tara and zippers, snaps, and pins from Bill</option><option value="B">B. Buttons, thread, and denim from Bill and zippers from Tara</option><option value="C">C. Thread, buttons, and zippers from Tara and denim from Bill</option><option value="D">D. Zippers, buttons and snaps from Tara and corduroy from Bill</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Thread, buttons, and zippers from Tara and denim from Bill</h5><h5>Work efforts are often interdependent—
workers rely on each other to accomplish a task or goal. In many situations, specific people are
responsible for providing specific elements to complete a project or achieve a goal. In the example,
Lauren needs several items from Bill and Tara so that she can perform her job of sewing the jeans.
Because Bill is the fabric buyer, he is responsible for buying the denim so Lauren can make the jeans.
Tara buys the small items needed to make the jeans, so she is responsible for obtaining items such as
thread, buttons, zippers, snaps, and pins. Corduroy is a different type of fabric used to make various
types of apparel items.
</h5></div><h5 id='q63'>63. In which of the following situations is a project manager involved in a control activity:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Ben meets with the project's stakeholders to determine what they want the project to accomplish.</option><option value="B">B. Tim reviews an inventory-status report to determine if there are enough supplies on hand for the
next project phase.</option><option value="C">C. Adriana is coordinating and documenting the tasks that need to be completed for a construction
project.</option><option value="D">D. Samantha reviews the qualifications of several employees to determine whom she wants on the
project team.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: Tim reviews an inventory-status report to determine if there are enough supplies on hand for the
next project phase.</h5><h5>Explanation not available</h5></div><h5 id='q64'>64. What is an advantage to a company of building long-term relationships with a few vendors?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Less information sharing</option><option value="B">B. Wider product selection</option><option value="C">C. Fewer supply interruptions</option><option value="D">D. Easier to manage</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Easier to manage</h5><h5>It is easier to manage vendor relationships when a company works with a small group
of vendors. When the company works with fewer vendors, it has more time to cultivate long-term
relationships with each vendor. Long-term relationships benefit both the company and the vendor
because both businesses are willing to share information; are understanding of each other's needs,
expectations, and limitations; and are more willing to work together to resolve conflicts that might occur.
Working with a few vendors does not always provide the business with a wider product selection. A
disadvantage to working with a few vendors is that supply interruptions are more likely to affect the
company because it may not have easy access to another source that sells similar goods or services.
</h5></div><h5 id='q65'>65. Because the Frederick Company has space limitations in its warehouse, it needs to have a shelving unit
custom made. What type of order is the Frederick Company likely to place with the shelving
manufacturer?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Special</option><option value="B">B. Open</option><option value="C">C. Blanket</option><option value="D">D. Reorder</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: Special</h5><h5>A special order is a request for a custom product or a product that a vendor does not normally
carry in stock. Because the Frederick Company needs a shelving unit that has unusual measurements,
the vendor needs to custom make it for the company. An open order is an order for staple goods that is
placed with one of several available vendors who can meet the business's immediate requirements (e.g.,
time, price, quantity). A blanket order is an order that covers all or part of a retailer's seasonal
requirements. A reorder is an order for items that the business has previously purchased. There is not
enough information provided to determine if the Frederick Company has previously ordered the same
custom-made shelves.
</h5></div><h5 id='q66'>66. The PVX automotive manufacturer keeps office supplies such as copy paper, pens, and notepads on
hand at all times. These office supplies are part of the manufacturer's inventory of</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. MRO goods.</option><option value="B">B. raw materials.</option><option value="C">C. work-in-process.</option><option value="D">D. finished products.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: MRO goods.</h5><h5>MRO goods are maintenance, repair, and operating supplies such as office supplies,
janitorial supplies, employee uniforms, and work gloves. While none of these supplies will be part of the
company's finished products—automotives—PVX uses these supplies on a regular basis to ensure that
the manufacturing process runs smoothly. Raw materials are items in their natural state or condition,
such as glass or steel. Work-in-process consists of the car parts and components that are no longer raw
materials but are not completely finished yet. Finished products are completed goods that are ready to be
marketed to consumers.
</h5></div><h5 id='q67'>67. Which of the following are items that a manufacturing business is likely to keep as maintenance, repair,
and operating (MRO) inventory:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Cloth, shirts, and buttons</option><option value="B">B. Gloves, coolant, and packing material</option><option value="C">C. Fork lift, glassware, and petroleum</option><option value="D">D. Toner, photocopier, and pencils

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: Gloves, coolant, and packing material</h5><h5>Businesses maintain different inventories that are based on their
specific needs. Gloves, coolant, and packing material are examples of items that a manufacturing
business might use to maintain, repair, or use to facilitate the production process. Toner and pencils are
office supplies that are many businesses classify as MRO inventory. Manufacturing businesses need raw
materials or work-in-process goods to make finished goods. Examples of work-in-process goods are
petroleum, cloth, and buttons. Glassware and shirts are examples of finished goods. Photocopiers and
fork lifts are types of equipment.
</h5></div><h5 id='q68'>68. The dating terms that the SSL Company negotiated with a vendor are 3/10 net 30 on a purchase order
made August 18. Calculate the discounted amount SSL would owe for an order of $386.69 if it pays by
August 25th.</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. $379.03</option><option value="B">B. $375.09</option><option value="C">C. $366.06</option><option value="D">D. $369.09</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: $375.09</h5><h5>3/10 net 30 means that the buyer will receive a 3% discount if the buyer pays within ten days of
the invoice date and the entire invoice must be paid within 30 days. To calculate how much SSL will owe
if it pays within 10 days of the invoice date, first determine the discount amount in dollars. To obtain the
discount amount in dollars, multiply the order amount by the discount percentage ($386.69 X .03 or 3% =
$11.60). Then, subtract the discount amount in dollars from the original order amount ($386.69 - $11.60
= $375.09).
</h5></div><h5 id='q69'>69. Which of the following statements about continuous improvement is NOT true:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Every level of an organization should be involved in the continuous improvement process.</option><option value="B">B. The use of objective information and customer feedback is crucial in the continuous improvement
process.</option><option value="C">C. After making a change, further testing and evaluation should be done to determine if the change
was effective.</option><option value="D">D. Each organizational level and department should work independently in the continuous
improvement process.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: Each organizational level and department should work independently in the continuous
improvement process.</h5><h5>Explanation not available</h5></div><h5 id='q70'>70. Which of the following is a type of expense incurred by business other than an operating expense:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Cost of living</option><option value="B">B. Retained earnings</option><option value="C">C. Lost income</option><option value="D">D. Cost of goods</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: Cost of goods</h5><h5>Not all expenses incurred by a business are operating costs. The other type of business
expense is the cost of goods expense, which is the money that businesses must pay for the goods that
they sell or for the raw materials from which they make goods to sell. Retained earnings is the amount of
a business's income that is reinvested in the business. Cost of living is the average cost of an individual's
basic necessities of life. Lost income is the revenue lost by a business for various reasons such as poor
sales.
</h5></div><h5 id='q71'>71. Which of the following is an advantage to a business of maintaining its building(s) and equipment:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Business operations are smoother.</option><option value="B">B. Equipment can be replaced more often.</option><option value="C">C. Maintenance costs are deducted from taxes due.</option><option value="D">D. Regular maintenance interferes with operations.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: Business operations are smoother.</h5><h5>Businesses that do not practice good maintenance are more likely to
experience emergency repairs, injuries, and less customer satisfaction. Maintenance costs are part of the
operating expenses of a business and are not deducted from taxes. The business saves money by
maintaining its equipment because the equipment will need to be replaced less often. Maintenance can
be scheduled so that disruption of business operation is minimized. Operations are hampered by
equipment that is not working properly or has broken down.
</h5></div><h5 id='q72'>72. Ken is a manager for a local company. He has collected bids from several area trucking companies and
is currently comparing them with the invoices of the company's current trucking service to determine
which one is the best transportation vendor for the company to use. Ken is analyzing business data in
relation to</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. product management.</option><option value="B">B. distribution.</option><option value="C">C. financial resources.</option><option value="D">D. production.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: distribution.</h5><h5>The function of business that involves the moving, storing, locating, and/or transferring
ownership of goods and services is distribution. Companies should continuously analyze the areas of
distribution (i.e., ordering, receiving, storing, and shipping) to ensure that each area is performing in the
most efficient, cost efficient manner. Companies often analyze transportation services to compare rates
and services. If a company finds that one company provides equal or better transportation services for
less money, it might consider changing transportation vendors. Product management is a marketing
function. Financial resources are sources of money such as sales income, investments, and loans.
Production is the process of producing goods and services.
</h5></div><h5 id='q73'>73. Tim was able to keep track of how much advancement he was making towards his goal because a
benefit of goal setting is that it</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. gives you a way to measure your progress.</option><option value="B">B. raises your level of self-esteem.</option><option value="C">C. helps you to stay on task.</option><option value="D">D. helps you understand yourself.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: gives you a way to measure your progress.</h5><h5>Having specific goals and subgoals enables you to measure
your progress towards your goals. Goal setting helps you raise your level of self-esteem, helps you to
stay on task, and helps you to understand yourself; but these do not necessarily give you a way to
measure your progress in achieving your goals.
</h5></div><h5 id='q74'>74. What are people often relying on when they use the sleep-on-it technique to generate ideas?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Subconscious mind</option><option value="B">B. Personal intelligence</option><option value="C">C. Natural ability</option><option value="D">D. Internal curiosity</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is A: Subconscious mind</h5><h5>The sleep-on-it technique involves putting an idea aside for a day or two and
sleeping on it at night. The subconscious mind keeps working even after people are asleep and will give
them answers in any way it can. The dreams or nightmares that develop in the subconscious mind during
sleep often provide answers to problems or generate new ideas for dealing with difficult situations. An
individual's intelligence, natural ability, and curiosity are traits that often contribute to creativity during the
day rather than during sleep.
</h5></div><h5 id='q75'>75. Carrie is frequently upset because she tries to get her job done, spend time with her family, and have
some time for herself. Which of the following benefits of time management will be most meaningful to
Carrie:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Enhanced self-esteem</option><option value="B">B. Increased productivity</option><option value="C">C. Increased organization</option><option value="D">D. Reduced stress and frustration</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is D: Reduced stress and frustration</h5><h5>Carrie's immediate problem is that she feels frustrated by not being able
to balance her life. Time management can help her reduce the stress and frustration this causes by
helping her get more done in less time. Enhanced self-esteem, increased organization, and increased
productivity could also result from time management, but they are not currently the most meaningful
benefits to Carrie.
</h5></div><h5 id='q76'>76. During a job interview, job applicants can indicate their interest in the job by asking questions about the</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. company.</option><option value="B">B. vacation policy.</option><option value="C">C. interviewer.</option><option value="D">D. fringe benefits.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: company.</h5><h5>Asking questions about the company and the job tells the interviewer that the applicant is very
interested in the position. Oftentimes, the applicant will obtain advance information about the company in
order to be able to ask good questions. Questions about fringe benefits, such as the business's vacation
policy, may be appropriate, but they indicate the applicant's interest in what the job will provide, not the
applicant's interest in the job itself. Questions about the interviewer would be inappropriate.
</h5></div><h5 id='q77'>77. Which of the following do many businesses take into consideration when promoting employees:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Disability</option><option value="B">B. Personality</option><option value="C">C. Seniority</option><option value="D">D. Nationality

</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: Seniority</h5><h5>Seniority indicates an employee's length of time with a business or organization. Businesses
often take into consideration an employee's seniority when deciding who to promote. If all other criteria
are fairly equal, businesses often promote the employee who has the most seniority. Union contracts and
civil-service regulations usually specify that employees be promoted on the basis of seniority. Businesses
should not promote employees based on their personality, nationality, or disability. In fact, it is illegal for
businesses to base their hiring and promotion decisions on a person's nationality or disability.
</h5></div><h5 id='q78'>78. When Caroline explains the company's rules of conduct to a new employee, she should also explain</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. who developed the rules.</option><option value="B">B. the specific reasons for having all the rules. </option><option value="C">C. the consequences of breaking the rules.</option><option value="D">D. when the rules were implemented.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is C: the consequences of breaking the rules.</h5><h5>The rules of conduct outline a company's policies, procedures,
and expectations regarding employees' behavior in the workplace. By explaining the rules and the
consequences of not following them, employers are making sure that employees understand what is
expected of them and what will happen if they break the rules. Depending on the situation, the
consequences of breaking the rules might include a reprimand, suspension without pay, or dismissal.
Why, who, and when the rules were developed are not important facts to discuss with new employees.
</h5></div><h5 id='q79'>79. At Oh-So-Good Gourmet Cookie Company, Todd is the warehouse manager, Pamela is the lead
shipping clerk, David is a part-time shipping clerk, Carrie is the shipping supervisor, and Sharon is the
vice president of distribution. Following a vertical chain of command, who is Carrie's direct supervisor?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Sharon</option><option value="B">B. Todd</option><option value="C">C. David</option><option value="D">D. Pamela</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Todd</h5><h5>The chain of command defines the level of authority and the specific individual who supervises
particular employees. Having a chain of command helps provide structure for businesses. Because
Carrie is the shipping supervisor, she would report to Todd, who is the warehouse manager. Todd reports
to Sharon, who is the vice president of distribution and holds the highest ranking position listed. Pamela
is the lead shipping clerk, so she reports to the Carrie, who is the shipping supervisor. As a part-time
shipping clerk, David reports to the lead shipping clerk, Pamela.
</h5></div><h5 id='q80'>80. The primary purpose of developing organizational goals is to</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. ensure profitability.</option><option value="B">B. provide direction.</option><option value="C">C. assign authority.</option><option value="D">D. establish loyalty.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is B: provide direction.</h5><h5>Organizational goals are the overall objectives that a group wants to achieve.
Developing organizational goals provides the foundation for and direction to achieve the objectives or
desired outcomes. Depending on the nature of the group or organization, one goal might involve
achieving a profit, although profitability cannot be ensured. Groups develop organizational charts to
outline the chain of command or levels of authority. Organizational goals cannot establish loyalty.
</h5></div><h5 id='q81'>81. Which of the following provides the foundation for a business's overall planning and controlling activities:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Ordering procedures</option><option value="B">B. Profit margins</option><option value="C">C. Organizational goals</option><option value="D">D. Product objectives</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is C: Organizational goals</h5><h5>In the
example, establishing a school store is the common goal of the team that Jamie has been asked to join.
A boycott is a union strategy in which union members refuse to buy a company's products. A strike is a
union strategy in which employees stop working and leave their jobs. A media channel is an individual
medium that transmits a message to the public (e.g., radio, television, newspaper).
</h5></div><h5 id='q82'>82. A business should establish its employees' work goals so they</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. align with the organization's objectives.</option><option value="B">B. achieve the employees' personal objectives. </option><option value="C">C. guarantee the business's profitability.</option><option value="D">D. encourage the employees' creativity.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: align with the organization's objectives.</h5><h5>Employees perform tasks that help the business achieve its
overall objectives. These tasks are based on individual goals that management sets for each employee.
To be successful in achieving the business's overall objectives, the employees' individual goals must
align with the business's overall objectives. If the employees' goals align with the overall organizational
goals, the business is more likely to be profitable, although profitability cannot be guaranteed. The
employees' work goals are not designed to achieve the employees' personal goals, nor do they always
encourage creativity.
</h5></div><h5 id='q83'>83. When initiating a project, managers often develop SMART objectives, which are specific, ___________,
achievable, ___________, and timely.</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. measurable, relevant</option><option value="B">B. motivating, realistic</option><option value="C">C. mandatory, redundant</option><option value="D">D. memorable, reliable</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: measurable, relevant</h5><h5>To ensure that managers are setting effective project objectives, they often use the
acronym, SMART. SMART objectives are specific, measurable, achievable, relevant, and timely. The “M”
in SMART does not stand for motivating, mandatory, or memorable, and the “R” does not stand for
realistic, redundant, or reliable.
</h5></div><h5 id='q84'>84. Which of the following is the sequential order of a project's work breakdown structure:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Task, subtask, and work assignment</option><option value="B">B. Subtask, task, and work assignment</option><option value="C">C. Work assignment, task, and subtask</option><option value="D">D. Work assignment, subtask, and task</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Work assignment, task, and subtask</h5><h5>Work breakdown structure (WBS) is the process of dividing project
tasks into meaningful components to complete the project. Dividing the entire project into smaller
components helps the project manager effectively schedule, assign, and monitor complex project
activities. When dividing the work, the project manager first divides the entire project into work
assignments. Then, each work assignment is broken down by the tasks that the assignment requires for
completion. In some situations, each task has subtasks that need to be completed before moving on to
the next task.
</h5></div><h5 id='q85'>85. Which of the following is a true statement about the responsibilities associated with managing a project
team:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Project managers usually require team members to work out any conflicts they have on their
own.</option><option value="B">B. The most important aspect of managing a project team is developing an overall operating budget
for the organization.</option><option value="C">C. Project managers are often responsible for coordinating the activities of team members from
several departments.</option><option value="D">D. It is more important for effective project mangers to have financial-management expertise than
effective communication skills.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Project managers are often responsible for coordinating the activities of team members from
several departments.</h5><h5>Explanation not available</h5></div><h5 id='q86'>86. Which of the following is an example of a project manager delegating responsibility to a project team
member:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Nina advises Milton that he is responsible for preparing the team's weekly status report.</option><option value="B">B. Bill tells Peter that he needs to remember to include a cover sheet with his TPS report.</option><option value="C">C. Stan asks Joanna and Tom for suggestions to improve process efficiency.</option><option value="D">D. Anne determines that Bob has the desired organizational skills to be on the project team.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: Nina advises Milton that he is responsible for preparing the team's weekly status report.</h5><h5>Delegating is
assigning authority or responsibility to another person and is an important aspect of effectively managing
a project team. Delegation involves matching project tasks and activities with the team members who
have the skills and expertise to perform them. Because Nina gives Milton the authority to prepare the
team's weekly status report, she is delegating responsibility. Bill is providing Peter with critical feedback.
Stan is asking Joanna and Tom to help him brainstorm ideas to solve a problem. Anne is conducting a
staffing activity by determining that Bob possesses skills that she needs for her project team.
</h5></div><h5 id='q87'>87. Which of the following is an activity associated with the closing phase of a project:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Determining the appropriate computer technology needs</option><option value="B">B. Obtaining funds, equipment, and supplies for the project</option><option value="C">C. Developing a production schedule for team members</option><option value="D">D. Holding a team meeting to evaluate the project's successes and mistakes

</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: Holding a team meeting to evaluate the project's successes and mistakes

</h5><h5>Explanation not available</h5></div><h5 id='q88'>88. When evaluating the quality of its product, one factor that a business considers is the feedback that it
receives from the product's users, which indicates</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. the efficiency of the production process.</option><option value="B">B. the product's durability.</option><option value="C">C. customer-satisfaction levels.</option><option value="D">D. employee-performance ratings.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is C: customer-satisfaction levels.</h5><h5>A descriptive test key, including question sources
and answer rationale, has been provided the state DECA advisor.
Copyright © 2012 by Marketing & Business Administration Research and Curriculum Center®,
Columbus, Ohio
Each individual test item contained herein is the exclusive property of MBAResearch. Items are
licensed only for use as configured within this exam, in its entirety. Use of individual items for
any purpose other than as specifically authorized in writing by MBAResearch is prohibited.
Possession of this exam, without written authorization, under any other circumstances is
a copyright violation. Posting to inter- or intranet sites is specifically forbidden unless written
permission is obtained prior to posting. Report violations to MBAResearch at 800.448.0398.

Test 1065

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM—KEY

11

1. D
Express. An agent is a person or business that is authorized to conduct certain business activities with
third parties on the behalf of another person or business (principal). When the principal provides the
agent with express authority, the principal gives specific directions, often in writing, to the agent who is
handling certain business matters for the principal. Provisional, temporary, and unlimited are not widely
used terms to describe types of legal authority in agency relationships.
</h5></div><h5 id='q89'>89. Capability Maturity Model Integration (CMMI) software has the ability to conduct an audit that compares
the business's existing production and acquisition processes with the CMMI model. The audit provides
information that will allow the business to</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. determine the best way to comply with government regulations.</option><option value="B">B. develop long-term financial and operating plans.</option><option value="C">C. incorporate the best overall quality-improvement processes.</option><option value="D">D. manage its human and natural resources effectively.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: incorporate the best overall quality-improvement processes.</h5><h5>Capability Maturity Model Integration
(CMMI) software helps guide improvement for projects, for departments, or throughout the overall
organizational structure. It is designed to help businesses continuously improve their processes, outputs,
and performance levels. A feature of the CMMI software program is that it has an auditing function that
compares the business's existing processes with the CMMI model to evaluate efficiency levels. The audit
results guide the business's decision making by examining both the efficient processes and inefficient
processes. By using the CMMI model, the business can integrate its successful processes with those
suggested by the CMMI model, which can help the business's quality improve. The purpose of the CMMI
quality management framework is to facilitate quality improvement rather than develop long-term financial
and operating plans and comply with government regulations. CMMI can help the business improve the
efficiencies of all of its resources; however, not all businesses use natural resources in their production
processes.
</h5></div><h5 id='q90'>90. Which of the following is a business potential benefit of implementing continuous quality improvement
processes:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Lower productivity</option><option value="B">B. Increased revenue</option><option value="C">C. Decreased demand</option><option value="D">D. Higher costs</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: Increased revenue</h5><h5>Continuous improvement is an ongoing process that looks for ways to increase the
levels of excellence in relation to a process, good, or service. Potential benefits of improved processes
often increase productivity, which lowers costs and increases revenue. When quality improves, customer
satisfaction levels often increase, which often results in a higher demand for the business's goods and
services.
</h5></div><h5 id='q91'>91. How can management reduce the business's level of risk associated with ethics:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Assume employees know what constitutes ethical behavior.</option><option value="B">B. Allow employees to follow their own set of ethics.</option><option value="C">C. Train employees about expectations in relation to workplace ethics.</option><option value="D">D. Advise employees that following business ethics depends on the situation.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Train employees about expectations in relation to workplace ethics.</h5><h5>Employees must clearly understand
the business's ethical standards and expectations. Offering ethics training can help employees
understand the business's rules and ethical standards. Employees who do not have a clear
understanding of the business's expectations in relation to ethical behavior put the business at risk.
Employees who do not follow the business's ethics guidelines may cross a legal line without knowing
they have done so. Because employees' experiences and beliefs often vary and because there are many
gray areas in the business world, the business should not allow employees to follow their personal set of
ethics or assume that the employees know what the business considers ethical behavior. Ethics are a set
of principles that do not vary by situation.
</h5></div><h5 id='q92'>92. What risk is being avoided when financial institutions use cloud computing?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Pure risk</option><option value="B">B. Return on investment risk</option><option value="C">C. Loss of customers risk</option><option value="D">D. Speculative risk</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: Return on investment risk</h5><h5>Cloud computing keeps businesses from having to invest in computer
hardware, such as servers, and software, thereby avoiding return on investment risk. Instead, businesses
pay a provider only for the services that they use—much like paying an electric bill. The contract with the
provider can be ended at any time. Customers will probably receive better service since the business is
not having down time when its computers malfunction. Speculative risk is the chance of loss or gain.
Pure risk exists when, if something happens, it will result in a loss.
</h5></div><h5 id='q93'>93. To reduce the risk of future legal problems, a company might require its business partners to sign a
formal</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. contract.</option><option value="B">B. invoice.</option><option value="C">C. premium.</option><option value="D">D. warrant.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: contract.</h5><h5>A contract is an agreement between two or more parties stating that one party is to do
something in return for something provided by the other party. By putting the terms of an agreement or
business arrangement in a written contract that both parties sign, the business reduces the risk of
misunderstanding about what is expected and what will be provided. When agreements are not
documented and a problem occurs, legal action may be required, which can be costly to the business. An
invoice is a bill. A premium is a fee for an insurance policy. A warrant is a legal document issued by
authorities that requires an individual or business to take a certain action.
</h5></div><h5 id='q94'>94. A human resources manager sets up a computerized system for maintaining employee records. What
type of resource is the manager using?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Material</option><option value="B">B. Financial</option><option value="C">C. Human</option><option value="D">D. Natural</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: Material</h5><h5>Material resources are equipment and supplies used by businesses in their operation. Financial
resources are all the sources of money available to the business. Human resources are people who work
to produce goods or services. Natural resources are resources found in nature that are used to produce
goods and services.
</h5></div><h5 id='q95'>95. Which of the following questions should effective managerial planning answer:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. What do we want to do?</option><option value="B">B. Who will do the work?</option><option value="C">C. Did we accomplish our goals?</option><option value="D">D. How will we monitor the work effort? </option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: What do we want to do?</h5><h5>The management function of deciding what will be done and how it will be
accomplished is planning. A primary aspect of the planning function is determining the goals or desired
outcomes—determining what we want to do. All activities carried out in the other functions of
management—organizing, staffing, controlling, and directing—depend on the answer(s) to the question,
"What do we want to do?" Deciding who will do the work is a staffing activity. Measuring the success or
achievement of goals is a controlling activity. Determining how to monitor the work effort is a directing
activity.
</h5></div><h5 id='q96'>96. Jackie is a manager with the SDP Company and is establishing a systematic way for her department to
complete a long-term assignment. What function of management is Jackie carrying out?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Leading</option><option value="B">B. Organizing</option><option value="C">C. Staffing</option><option value="D">D. Controlling</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: Organizing</h5><h5>The management function of setting up the way the business's work will be done is
organizing. Organizing involves determining how to best use the available resources (i.e., financial,
material, human) in the most efficient manner to achieve the business's goals. Leading is guiding or
directing the actions of others in a desired manner. Staffing is the management function of finding
workers for a business. Controlling is the management function that monitors the work effort.
</h5></div><h5 id='q97'>97. An important aspect of the organizing function of management involves</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. promoting employees.</option><option value="B">B. conducting performance reviews.</option><option value="C">C. establishing levels of authority.</option><option value="D">D. motivating team members.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: establishing levels of authority.</h5><h5>Organizational goals cannot establish loyalty.
</h5></div><h5 id='q98'>98. Burkhart Manufacturing is implementing a new, company-wide computer system. Nadine is in the
process of identifying the skills that will be needed to manage the information and maintain the various
software applications. What function of management is Nadine focusing on?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Staffing</option><option value="B">B. Controlling</option><option value="C">C. Training</option><option value="D">D. Planning

</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is A: Staffing</h5><h5>activity by determining that Bob possesses skills that she needs for her project team.
</h5></div><h5 id='q99'>99. What is a manager doing, when s/he provides an employee with positive feedback and encouragement?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Coordinating</option><option value="B">B. Planning</option><option value="C">C. Motivating</option><option value="D">D. Compensating</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: Motivating</h5><h5>Directing is the management function of providing guidance to workers and work projects.
Directing often involves motivating employees, which is getting employees to strive to achieve
management's objectives because they want to achieve them. Managers motivate employees in a variety
of ways, including providing positive feedback and encouragement as well as offering attractive
compensation packages (salary and benefits). Planning is the management function of deciding what will
be done and how it will be accomplished. Coordinating work tasks is an activity in the organizing function
of management, which involves setting up the way the business's work will be done.
</h5></div><h5 id='q100'>100. German businesspeople value careful planning and attention to details. As a result, decision-making in
German business situations is often a ___________ process.</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. lengthy</option><option value="B">B. swift</option><option value="C">C. limited</option><option value="D">D. flexible</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: lengthy</h5><h5>Because German businesspeople are very detail oriented, it often takes them a long time to
make decisions. As a culture, Germans tend to take time to plan and consider many alternatives before
deciding on a course of action. By understanding that it may take time to get a response, foreigners can
adapt to German culture by being patient with German businesspeople. Careful planning and paying
attention to details take time, so decision making is not a swift, limited, or flexible process.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Business-Admin/Business-Admin_5_Split_Master.js"></script></html>