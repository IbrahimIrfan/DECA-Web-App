<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Business-Admin Exam 11</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Aviation, taxation, and commerce are categories of ____________ law.</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. judicial</option><option value="B">B. legislative</option><option value="C">C. administrative</option><option value="D">D. executive</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: administrative</h5><h5>Administrative law deals with the rules and regulations that have been established by
governmental agencies. The legislative branch of the government (i.e., U.S. Congress and Canadian
Parliament at the Federal level) establishes these agencies, which have the authority to enact and
enforce regulations for various administrative functions, including aviation, taxation, and commerce. For
example, in the United States, the Federal Aviation Administration (FAA) regulates air-transportation
functions (i.e., airspace, aircraft safety); the Internal Revenue Service (IRS) handles issues related to
personal and business taxes; and the Federal Commerce Commission (FCC) handles issues related to
business and commerce. The legislative branch of government introduces and passes statutes. The
judicial branch of government (court systems) interprets the law. The executive branch of the government
guides government policy, and in some countries, has the power to veto legislation.
</h5></div><h5 id='q2'>2. Before you can perform new tasks, you should first read the instruction manual so you can</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. apply the directions in reverse order.</option><option value="B">B. follow the written directions in the proper sequence.</option><option value="C">C. perform the tasks in the order that you think works best.</option><option value="D">D. use shortcuts to complete the tasks quickly.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: follow the written directions in the proper sequence.</h5><h5>The first step in applying written directions to
perform tasks usually involves reading the directions. Employees need to understand the written
directions before they can apply them. If employees do not read the directions and apply them in the
proper sequence, they may perform the tasks incorrectly. Therefore, reading the directions for
understanding and meaning is an important step. The use of shortcuts to complete a task may or may not
be included in the manual’s written directions.
</h5></div><h5 id='q3'>3. One way for an audience to show that it supports a speaker's opinion is by ____________ the speaker.</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. heckling</option><option value="B">B. applauding</option><option value="C">C. ignoring</option><option value="D">D. tolerating</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: applauding</h5><h5>When the audience applauds or claps, it is showing that it supports what the speaker is
saying. Applause encourages the speaker to continue expressing his/her thoughts. Heckling or making
fun of someone is an action that indicates disapproval. When people ignore the speaker, they are not
actively listening to the speaker and not indicating their support. If a person tolerates another individual's
opinion, s/he does not necessarily agree with an opinion, but supports the individual's right to express
that opinion.
</h5></div><h5 id='q4'>4. What communication style is most appropriate to use when you are providing a friend with personal
advice?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Judgmental</option><option value="B">B. Formal</option><option value="C">C. Empathic</option><option value="D">D. Businesslike</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: Empathic</h5><h5>Explanation not available</h5></div><h5 id='q5'>5. Using a table to present or summarize data in a written document is most appropriate when</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. the report does not require a bibliography.</option><option value="B">B. it is important to build credibility and impress the audience.</option><option value="C">C. the data are too complex to describe in the body of the text.</option><option value="D">D. it is placed in the appendices of a complex report.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: the data are too complex to describe in the body of the text.</h5><h5>Tables present text or numbers in a grid
format. The table allows readers to see groups of data together for comparison. Tables are also useful
because they summarize data in an easy to read format. Tables present data (e.g., statistics) that may be
too wordy or complex to describe in a paragraph format. Tables should appear in a document where they
are most appropriate, which may be the body, conclusions, recommendations, or appendices. The
inclusion of a bibliography is not a factor when determining if a table should be included in the document.
The primary purpose of tables is to provide information, which may or may not build credibility and
impress the audience.
</h5></div><h5 id='q6'>6. After Lana finishes writing the promotional copy for a direct-mail letter, she plans to proofread and edit
her work on her computer. What technique will help Lana determine if the text is clear and logical?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Reading the text aloud</option><option value="B">B. Reading the text backwards</option><option value="C">C. Correcting grammatical mistakes</option><option value="D">D. Correcting punctuation errors</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: Reading the text aloud</h5><h5>By reading the text aloud, Lana will not only see the text, she will hear it. By
hearing the words, Lana can detect missing words and assess the clarity and sequence of the
information. Reading text backwards helps detect misspelled words, punctuation errors, and some
grammatical errors, but this activity does not help the editor clarify that content is logical and meaningful.
</h5></div><h5 id='q7'>7. When the audience wants to know which course of action to take, the writer of an analytical report should
focus on</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. recommendations.</option><option value="B">B. logical arguments.</option><option value="C">C. progress.</option><option value="D">D. external factors.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: recommendations.</h5><h5>An analytical report is a document that explains and evaluates an issue, opportunity,
or problem. A component of the analytical report is the recommendations section, which provides the
reader with advice for resolving a problem or acting on an opportunity. The recommendations appear at
the end of the report after background information, research, results, and facts have been presented.
Writers should include logical arguments for analytical reports in which the topic is controversial, and the
audience may disagree with some of the report's information. By providing logical arguments, the writer is
more likely to persuade the audience to accept the conclusions. An analytical report may address
external factors or the progress of an action, but including this type of information depends on the nature
of the report's topic.
</h5></div><h5 id='q8'>8. As an employee of the TMX Company, you have been asked to investigate the financial aspects of a
proposed merger with LAU International. What type of analytical report are you being asked to develop?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Justification</option><option value="B">B. Market analysis</option><option value="C">C. Due diligence</option><option value="D">D. Troubleshooting</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is C: Due diligence</h5><h5>An analytical report provides evaluative information about a problem, opportunity, or
previous action. Merging with another company is a major change for a business; therefore, it is
important to analyze the advantages, disadvantages, strengths, and weaknesses associated with the
potential merger by summarizing information in an analytical report. Reports that address financial issues
associated with a certain course of action, such as a merger, are called due diligence reports. A market
analysis summarizes information about a segment of the population. Troubleshooting analyses provide
guidance for solving problems with a product or process. A justification report provides information that
supports or justifies a previous course of action.
</h5></div><h5 id='q9'>9. What section of a research report outlines the research plan?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Introduction</option><option value="B">B. Recommendations</option><option value="C">C. Results</option><option value="D">D. Methodology</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: Methodology</h5><h5>A research report is a written document that summarizes an investigation related to a
particular issue or problem. The methodology section of the report outlines the research plan. It appears
in the middle of the report and discusses the types of research tools used and why they were selected.
The results section reports the research findings. The recommendations section is the proposed course
of action, which is considered the research results. The recommendations section is the last component
presented in the report. The introduction appears at the beginning of the report and discusses the
purpose and significance of the research project.
</h5></div><h5 id='q10'>10. To help businesspeople adapt their communication styles to appeal to clients from other cultures, they
should strive to be</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. respectful, indifferent, and honest.</option><option value="B">B. confident, biased, and manipulative.</option><option value="C">C. sensitive, transparent, and demanding.</option><option value="D">D. patient, flexible, and empathetic.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: patient, flexible, and empathetic.</h5><h5>Explanation not available</h5></div><h5 id='q11'>11. Which of the following situations is an unethical action associated with customer relationship
management:</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Allowing customers the ability to opt-out of the e-mail updates that the business provides</option><option value="B">B. Implementing a frequent-buyers program for the business's customers</option><option value="C">C. Collecting customer information with authorization to develop a customer profile</option><option value="D">D. Selling customer lists without the customers' consent to third parties
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: Selling customer lists without the customers' consent to third parties
</h5><h5>Explanation not available</h5></div><h5 id='q12'>12. A production-line conveyer belt is an example of a(n)</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. service.</option><option value="B">B. part.</option><option value="C">C. staple good.</option><option value="D">D. installation.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: installation.</h5><h5>An installation is a high-cost, long-lasting industrial good that is used to produce other goods
and services. Installations affect the amount of goods and services that a producer can make. A
production-line conveyer belt is a high cost, long-lasting item that manufacturers use in the production of
goods and services. Parts are industrial goods that become part of a finished good without additional
processing (e.g., bolt). Staple goods are frequently purchased goods that businesses keep on hand
continuously because the demand for them is constant. As an intangible product, a service is an activity
that is performed by others for money.
</h5></div><h5 id='q13'>13. Managers who have a ___________ span of control generally have __________ control over the
workers they supervise.</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. large, a lot of</option><option value="B">B. broad, balanced</option><option value="C">C. small, close</option><option value="D">D. limited, little</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: small, close</h5><h5>Control is an aspect of the management function that involves monitoring the work effort.
The manager's span of control is the range of employees who report to the manager. If a manager has
few employees to supervise, then s/he has a small span of control, which allows more time to closely
monitor the employees. If the span of control is large or broad, then the manager has several employees
to supervise, which limits the amount of time that the manager has to monitor the employees' activities. A
large span of control works best when the employees are familiar with their jobs, and they work well
independently.
</h5></div><h5 id='q14'>14. Which of the following is an ethical issue that businesses often encounter:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Responsible behavior</option><option value="B">B. Conflict of interest</option><option value="C">C. Concern for consumers</option><option value="D">D. Zero tolerance</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: Conflict of interest</h5><h5>A conflict of interest exists when a situation presents an opportunity for personal gain,
but compromises the best interests of the overall business. For example, if a buyer accepts an expensive
gift from a prospective vendor, and then provides the vendor with a sizable order or a long-term contract,
a conflict of interest may exist. Many businesses implement policies that address potential conflicts of
interest. For example, a business may implement a zero-tolerance gift policy, which involves
reprimanding employees who accept or receive gifts. Exhibiting responsible behavior and showing
concern for customers are ethical actions.
</h5></div><h5 id='q15'>15. When the inflation rate __________, the interest rates tend to __________.</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. increases, stabilize</option><option value="B">B. increases, increase</option><option value="C">C. decreases, increase</option><option value="D">D. stabilizes, increase</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: increases, increase</h5><h5>Interest is the reward or cost of lending or borrowing money, and this amount is
usually figured as a percentage of the amount of money borrowed. The interest rate is the percentage
figure used to calculate interest. Many factors affect interest rates, including government policies and the
business cycle. The nation's rate of inflation, which is how quickly prices are rising in the marketplace,
can affect interest rates. When the inflation rate increases rapidly, the interest rates also increase. This
occurs because there is less money available for financial institutions to loan to individuals and
businesses. When the inflation rate levels off, prices tend to stabilize, and in some situations, prices may
decrease.
</h5></div><h5 id='q16'>16. If one U.S. dollar is equal to $1.04460 Canadian dollar, how much would you pay for a computer that
costs $265 U.S. dollars in Canadian dollars?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. $264.74</option><option value="B">B. $288.96</option><option value="C">C. $297.60</option><option value="D">D. $276.82</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is D: $276.82</h5><h5>Most countries have their own currency. A country's currency value changes in relation to other
countries' currency values. Businesses monitor these changes because dramatic changes in currency
values can affect their profits. To calculate the amount that you would pay in Canadian dollars, multiply
the printer price in U.S. dollars by the value of the Canadian dollar ($265.00 x 1.04460 = $276.819 or
$276.82).
</h5></div><h5 id='q17'>17. When Canadian and Mexican businesspeople conduct business in the United States, it is important to
remember that</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. flowers and plants are considered to be distasteful and inappropriate gifts.</option><option value="B">B. gifts, such as gourmet food items and vintage wines, are expected.</option><option value="C">C. gifts should be presented only to the president or CEO of the company.</option><option value="D">D. gift-giving is often discouraged because it may be viewed as bribery.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: gift-giving is often discouraged because it may be viewed as bribery.</h5><h5>Gift-giving practices vary greatly
among countries. In some countries, it is customary, or expected to give gifts in business situations. In
the United States, many businesses limit or prohibit gift giving/receiving because it may be viewed as
bribery, which is an illegal activity under certain circumstances. American businesspeople do not expect
gifts. Flowers and plants are appropriate gifts, if the company allows employees to accept gifts. It is not
an American custom to give gifts only to the president or CEO of a company.
</h5></div><h5 id='q18'>18. Ted Jenkins, a business executive from Seattle, has an important business meeting with Sir Henry
James Winchester, the president of BritCom Technologies. Ted's coworker, Lydia Guilford is originally
from London, and she provided Ted with advice about acceptable nonverbal behavior in England. Which
of the following would Lydia tell Ted about the British:</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Usually greet one another with a warm embrace and a kiss on both cheeks</option><option value="B">B. Rarely maintain eye contact when conversing with others</option><option value="C">C. Often cross their arms when they agree with a comment or position</option><option value="D">D. Seldom shake hands because they prefer a wide range of personal space</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: Rarely maintain eye contact when conversing with others</h5><h5>Acceptable nonverbal behavior varies by
country. For example, British people don't usually maintain ongoing eye contact while speaking. They
consider it rude to look at people for long periods of time. However, in the United States, maintaining eye
contact is a positive behavior because it indicates self-confidence and interest in the conversation. The
British tend to be more formal in business situations, and they like a wide range of space. They tend to
shake hands as a greeting rather than embrace and kiss. Crossing arms often indicates discomfort or
disagreement with a statement.
</h5></div><h5 id='q19'>19. Gina Hoskins is a textbook executive with ABC International Publishers. She is meeting with several
influential instructors in San José, Costa Rica to discuss a potential contract. When Gina is introduced to
Alberto Cabrera, a teacher from Costa Rica, how should she greet him?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. I'm glad to make your acquaintance, Alberto Cabrera.</option><option value="B">B. It's a pleasure to meet you, Don Alberto.</option><option value="C">C. Hello, Professor.</option><option value="D">D. Good afternoon, Senora Cabrera.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: Hello, Professor.</h5><h5>Titles are very important in Latin American culture, and foreign businesspeople should
acknowledge those titles and positions within their society. For example, when greeting a teacher, it is
courteous to call him/her professor without the person's surname. An architect is greeted as "Arquitecto,"
and an engineer is greeted as "Ingeniero." Men without professional titles are addressed as "Don"
followed by their first names, and women without professional titles are addressed as "Dona" followed by
their first names. It is not customary to greet Costa Ricans by using their full names. Senora is the
Spanish title for a married woman.
</h5></div><h5 id='q20'>20. Which of the following statements is true about the business communications in Guatemala:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. It is an acceptable practice to discuss political and environmental issues with Guatemalans.</option><option value="B">B. Guatemalans prefer to get right to business rather than engaging in personal conversation.</option><option value="C">C. Guatemalans tend to talk at the same time, so foreigners should speak loudly.</option><option value="D">D. It is customary for Guatemalans to begin with social talk before addressing business issues.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3
</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: It is customary for Guatemalans to begin with social talk before addressing business issues.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3
</h5><h5>Explanation not available</h5></div><h5 id='q21'>21. Irish businessperson Nicole McMurray wanted to give Mrs. Fukushima, the wife of a well-known
Japanese business executive, a small token of appreciation for inviting her to dinner. Nicole carefully
selected a gift, wrapped it in white paper, and placed a red bow on top of the package. When Nicole
presented the gift, Mr. and Mrs. Fukushima responded with looks of confusion and frowns. Later, Nicole
learned that the color white signifies death to the Japanese, while red signifies luck. This situation
illustrates that</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. the Japanese culture prefers dark colors, such as gray.</option><option value="B">B. the concept of color is similar throughout the world.</option><option value="C">C. color is not an important concept in most cultures.</option><option value="D">D. different cultures associate different meanings with color.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: different cultures associate different meanings with color.</h5><h5>Different cultures attach different associations
to different colors. Therefore, it is important for businesspeople to know and understand these differences
when conducting business in other countries. Nicole likely has positive associations with the color white,
such as pure, clean, angels, brides, etc. However, Japanese people have negative associations with
white because it symbolizes death and dying. After adding a red ribbon to the package, it's no wonder
that Mr. and Mrs. Fukushima were confused, as red signifies luck to the Japanese people. Loosely
interpreted, the gift wrapping indicates that Nicole is wishing them luck when they die. Because red is a
bright color that has positive associations with it, one cannot assume that Japanese people prefer dark
colors. In fact, the Japanese associate cheapness or low quality with the color gray.
</h5></div><h5 id='q22'>22. Because punctuality is important in the Taiwanese culture, foreign businesspeople should</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. avoid standing too close to Taiwanese people.</option><option value="B">B. arrive at meetings on time.</option><option value="C">C. bow when greeting a Taiwanese businessperson.</option><option value="D">D. expect to wait for service.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: arrive at meetings on time.</h5><h5>Punctuality relates to timeliness. People who arrive at a specific destination
when they are supposed to be there are punctual. In many cultures, it is considered rude to arrive too
early or arrive late. It indicates a lack of consideration or importance to the other party and may make or
break a business deal. On the other hand, some cultures view the concept of time differently. A
businessperson might keep a client waiting because s/he wants to finish a task so that the client has
his/her undivided attention. Therefore, it is important to understand how foreign businesspeople view the
concept of time. Because punctuality is important to Taiwanese people, visitors should strive to arrive on
time to avoid offending them. Standing proximity is a spatial issue that varies among cultures. Bowing is
a greeting that is used in some cultures.
</h5></div><h5 id='q23'>23. Which of the following is a personal appearance factor that foreigners should consider when conducting
business in Saudi Arabia:</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. A handshake is a common greeting.</option><option value="B">B. Wives and daughters are not proper conversational topics.</option><option value="C">C. Silence is common during business meetings.</option><option value="D">D. Visitors should dress conservatively.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is D: Visitors should dress conservatively.</h5><h5>Standards for appropriate dress vary by culture. In Saudi Arabia, it
is offensive to display bare shoulders, the stomach, calves, and thighs. Therefore, to project the proper
image and not offend Saudi Arabians, foreign businesspeople should wear conservative clothing that
covers most of the body. Silence during meetings and handshakes are communication and behavioral
considerations. Discussing wives and daughters is a communication issue related to gender.
</h5></div><h5 id='q24'>24. Hilda Vanderspiel is a German businesswoman who is hosting a dinner for business executives from
Delphi, India. When planning the menu for her guests, Hilda should consider their</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. table manners.</option><option value="B">B. physical differences.</option><option value="C">C. dietary habits.</option><option value="D">D. seating preferences.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: dietary habits.</h5><h5>When planning a meal for foreign businesspeople, it is important to consider their dietary
habits. In India, religious customs prohibit Hindus from eating beef and Muslims from eating pork. Some
religious customs prohibit followers from eating dairy products and certain types of vegetables. To
respect the religious practices of other cultures, it is important for Hilda to develop a menu that
accommodates her Indian guests. Seating preferences, table manners, and physical differences are not
relevant factors when planning an appropriate menu.
</h5></div><h5 id='q25'>25. Which of the following is an example of an employee who is accepting responsibility for his/her actions:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Pete informed the team leader that Brenda's carelessness, rather than his own, was the reason
for the inconsistencies in the group's project report.</option><option value="B">B. Cynthia admitted to her supervisor about the billing mistake that she made on the Andrew's
account.</option><option value="C">C. Emily realized that she forgot to lock the warehouse door on the night that the equipment was
stolen, and she didn't tell anyone.</option><option value="D">D. Larry decided that he would require Bob to make the decision, so Bob would be blamed if
something went wrong.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: Cynthia admitted to her supervisor about the billing mistake that she made on the Andrew's
account.</h5><h5>Explanation not available</h5></div><h5 id='q26'>26. Joe has a two-hour sales meeting with a new customer at 10 a.m. today. Early this morning, a vendor
telephoned Joe to schedule a one-hour luncheon meeting to discuss a coop-advertising program. The
vendor would like to meet at a restaurant that is 30 minutes from Joe's office at 1:00 p.m. today. Joe
must be back at his office by 2:00 p.m. for an important computer training session. Should Joe meet with
the vendor today?</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. No. Joe would have only 30 minutes to meet with the vendor before he needs to return to the
office.</option><option value="B">B. No. It is rude for the vendor to assume that Joe has time to meet today.</option><option value="C">C. Yes. Joe can meet with the vendor after he reschedules his training session.</option><option value="D">D. Yes. Joe can meet with the vendor after the vendor changes the lunch reservation to 12:45 p.m.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: No. Joe would have only 30 minutes to meet with the vendor before he needs to return to the
office.</h5><h5>Explanation not available</h5></div><h5 id='q27'>27. Planning ahead and estimating the time it will take to complete your tasks will help you to</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. manage your work commitments effectively. </option><option value="B">B. learn how to procrastinate.</option><option value="C">C. improve your technical skills.</option><option value="D">D. reduce your workload.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

4
</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: manage your work commitments effectively. </h5><h5>Explanation not available</h5></div><h5 id='q28'>28. While negotiating a contract, Angela gives up one thing she wants, so she has leverage to obtain
something else that she wants more. What is Angela doing?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Being passive</option><option value="B">B. Avoiding conflict</option><option value="C">C. Making concessions</option><option value="D">D. Issuing ultimatums</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: Making concessions</h5><h5>Negotiation is the process of reaching an agreement with another party. In any
negotiation, one person attempts to get another person to agree to a certain course of action to meet one
person's needs or wants. Compromise occurs when an agreement is reached by giving up something in
order to obtain something else. This process is making concessions. Angela is not avoiding conflict,
being passive, or issuing ultimatums.
</h5></div><h5 id='q29'>29. One way to reduce stress on the job is to</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. take time to complete personal tasks.</option><option value="B">B. complete tasks at the last possible moment.
</option><option value="C">C. take breaks every hour.</option><option value="D">D. plan your work in advance.
</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: plan your work in advance.
</h5><h5>Explanation not available</h5></div><h5 id='q30'>30. Team leaders often use positive reinforcement techniques to</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. evaluate events.</option><option value="B">B. develop team schedules.</option><option value="C">C. motivate team members.</option><option value="D">D. encourage competition.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is C: motivate team members.</h5><h5>To motivate is to prompt another person to take some kind of action. There are
many ways to motivate team members, one of which is by providing positive reinforcement. Simply
saying, “Keep up the good work,” is often enough motivation to keep team members on track and to let
them know they are doing well. Team leaders do not use positive reinforcement techniques to develop
schedules or to evaluate events. Team leaders should encourage teamwork and collaboration among
team members rather than creating a competitive environment, which may result in conflict.
</h5></div><h5 id='q31'>31. A realistic vision involves attaining __________ results.</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. conditional</option><option value="B">B. complex</option><option value="C">C. noble</option><option value="D">D. permanent</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: permanent</h5><h5>A vision is the future you wish to create. Though visions often develop from abstract dreams,
they must be achievable at some point in the future—they must be realistic. Realistic visions yield
permanent (rather than conditional) results. The results achieved may impact individuals throughout their
lives, as well as generations of people in the distant future. A realistic vision does not need to yield
complex or noble results.
</h5></div><h5 id='q32'>32. When employees from different departments need to interact to accomplish a compatible goal, they
should exhibit a(n) _________ mindset.</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. independent</option><option value="B">B. competitive</option><option value="C">C. collaborative</option><option value="D">D. skeptical</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: collaborative</h5><h5>Collaboration involves working together in a cooperative manner. It relies on drawing from
one another's knowledge and experience. A collaborative mindset requires the employees to work
interdependently—to rely on each other to accomplish their mutual goals. Interdependence involves the
employees' willingness to share ideas and do what is best for the company, rather than trying to achieve
their personal agendas. Competitive, independent, and skeptical (distrustful) attitudes may hinder a
group's ability to accomplish business goals.
</h5></div><h5 id='q33'>33. The RTF Company's management team is working on next year's budget, and rumor has it that some
departments' budgets will be cut. The production manager, Allison, has been speaking with other
managers and influential staff members about the budgeting issues, and discussing why the production
department should not be subject to a budget cut. The primary reason that Allison is engaging in
organizational political behavior is due to</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. the desire for career advancement.</option><option value="B">B. technological needs.</option><option value="C">C. unrealistic goals.</option><option value="D">D. scarce resources.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: scarce resources.</h5><h5>In organizations, political behavior or "politicking" is the process of gaining others'
support of an idea or action for the purpose of professional gain. People exhibit political behavior in the
workplace for a variety of reasons, such as advancing their careers, changing company policies, or
obtaining scarce resources. In the example, Allison does not want to have her department's budget cut. A
budget cut would mean less money flowing into the department, and money is a scarce resource. There
is not enough information provided to determine if the department has technological needs, if Allison has
unrealistic goals, or if Allison is trying to leverage the situation to advance her career.
</h5></div><h5 id='q34'>34. What is the co-signer of a bank loan legally responsible to pay if the borrower defaults on the loan?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. The balance of the loan owed</option><option value="B">B. The principle amount owed only</option><option value="C">C. The interest amount owed only</option><option value="D">D. The original amount of the loan</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: The balance of the loan owed</h5><h5>When the borrower does not have the collateral or credit history to obtain
the loan, the lender often requests that another person co-sign for the loan. A co-signer is responsible for
paying back the loan if the borrower does not. The co-signer is legally responsible for paying the balance
of the loan owed, including interest and principle. If the original loan was $5,000 plus interest, and the
borrower defaulted after paying half of the loan, the co-signer would be responsible for paying the
remaining half of the loan.
</h5></div><h5 id='q35'>35. Governments pay for public services such as police protection, road repairs, and public education by</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. regulating the business cycle.</option><option value="B">B. mandating donations.</option><option value="C">C. establishing embargoes.</option><option value="D">D. collecting taxes.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: collecting taxes.</h5><h5>All levels of government collect taxes from individuals and businesses. The taxes are
used to pay for different types of public services such as police protection, road repairs, and public
education. Donations are given rather than mandated. Embargoes are actions that suspend trade with
another country and are used for political reasons or during hostilities. Government policies are one of
many factors that influence the ebb and flow of the business cycle; however, there are aspects of the
business cycle that cannot be regulated.
</h5></div><h5 id='q36'>36. Individuals can verify the accuracy of their credit histories by reviewing a ____________ that is obtained
from a ___________.</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. bank statement, financial institution</option><option value="B">B. credit report, credit bureau</option><option value="C">C. lending statement, tax agency</option><option value="D">D. credit certificate, credit union</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: credit report, credit bureau</h5><h5>Because businesses often base their decisions about extending credit or
providing a loan on credit history, it is important for individuals and businesses to periodically check and
ensure that their credit information is accurate. Credit history is provided in the form of a credit report. By
reviewing the credit report, individuals and businesses can determine if there are any problems (e.g.,
identity theft) or discrepancies on the report that need resolved. Credit reports are available through
recognized credit bureaus or agencies, which maintain files of credit information on individuals and
businesses. Credit histories are not documented on bank statements, lending statements, or credit
certificates. The primary purpose of financial institutions, tax agencies, and credit unions is not to
maintain comprehensive credit histories for individuals and businesses.
</h5></div><h5 id='q37'>37. A primary reason that governments regulate the ways in which businesses must report financial data is to</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. stimulate market growth.</option><option value="B">B. eliminate mistakes.</option><option value="C">C. reduce taxes.</option><option value="D">D. ensure transparency.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: ensure transparency.</h5><h5>Governments require businesses to provide certain types of financial information to
regulatory agencies and shareholders. The accounting function collects and records the financial
information in the appropriate format. Transparency involves fully disclosing the required information so it
is understandable to the intended audience. Governments do not regulate the ways in which businesses
report financial data to reduce taxes or stimulate market growth. The consequences of incorrect
information (e.g., fines) may reduce the risk of mistakes on the report, but the risk of mistakes cannot be
eliminated.
</h5></div><h5 id='q38'>38. Which of the following is a characteristic of groupthink that may hinder ethical decision making in relation
to financial issues:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Independence</option><option value="B">B. Objectivity</option><option value="C">C. Censorship</option><option value="D">D. Empathy</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: Censorship</h5><h5>Although collaboration and cooperation among individuals can be used to achieve a
common goal, groupthink conditions can be detrimental to ethical decision making. Groupthink is an
extreme form of cohesiveness in which all members of the group strive for unanimity (harmony) at any
cost. This condition stifles independent thinking and objectivity. Group members who question another
member's idea or action may be censored or cut off by the group majority. In addition, individuals begin
to self-censor, which means they quiet their own conflicting thoughts for the "good of the group."
Groupthink can erode personal ethics and lead group members to do things they normally wouldn't do. In
today's competitive business environment, the pressure to earn high profits has often resulted in
fraudulent behavior, embezzlement, money laundering, etc. Such actions are often a result of groupthink
conditions. Empathy is the ability to place oneself in another person's place or circumstances. Empathy is
not a characteristic of groupthink, which embraces harmonious or like-minded thinking.
</h5></div><h5 id='q39'>39. To help new employees become familiar with the business environment and company culture, companies
often conduct</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. orientation sessions.</option><option value="B">B. performance evaluations.</option><option value="C">C. application screenings.</option><option value="D">D. financial seminars.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

5
</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: orientation sessions.</h5><h5>An orientation program makes new employees feel welcome, gives them a general
overview of the business, and helps to motivate them to do their best. Orientation sessions often include
activities such as reviewing general company policies and compensation, describing training programs,
providing a tour of the facilities, and introducing the new employees to their coworkers. Performance
evaluations, application screenings, and financial seminars are not activities that help new employees
become familiar with their new business environment.
</h5></div><h5 id='q40'>40. During an executive staff meeting, the company's president stated, “Samari Enterprises experienced a
three percent increase during the first quarter and a five percent increase during the second quarter of
this fiscal year.” The company's president is providing the group with</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. tacit knowledge.</option><option value="B">B. explicit knowledge.</option><option value="C">C. personal opinion.</option><option value="D">D. speculation.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: explicit knowledge.</h5><h5>Explicit knowledge is knowledge or information consisting of words, numbers, codes,
processes, and formulas that are easily stored, shared, and quantified (measured). The president of the
company was communicating specific, measurable, numerical data. Tacit knowledge is knowledge
consisting of personal opinions, experiences, expertise, or understanding that is not easily articulated,
stored, or quantified. Speculation is hearsay or rumor.
</h5></div><h5 id='q41'>41. What is a negative effect of employees who are unwilling to share tacit knowledge with one another?</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. More disclosure</option><option value="B">B. Low efficiency</option><option value="C">C. Less competition</option><option value="D">D. High cohesiveness</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: Low efficiency</h5><h5>Tacit knowledge is knowledge consisting of personal opinions, experiences, expertise, or
understanding that is not easily articulated, stored, or quantified. Tacit knowledge is often acquired by
trial and error, which occurs by repeating tasks and activities over time. When an employee devises
effective shortcuts or techniques that increase personal productivity, the employee has tacit knowledge.
When employees are unwilling to share tacit knowledge that will improve efficiency levels, it takes longer
for the company to achieve its goals. Employees who share tacit knowledge may improve the business's
efficiency and create a more open and cohesive work environment, which will reduce the
competitiveness among employees.
</h5></div><h5 id='q42'>42. Shannon has worked at the XBO Company for two years in the production department. During a weekly
meeting, the staff was brainstorming ideas to resolve a problem the department has been experiencing
on the production line. During the meeting, Shannon told the staff about some changes that her previous
company made to its production process, which increased its efficiency and outputs. Shannon's manager
liked the idea, and thought that it might work at XBO. This situation illustrates the concept of</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. limited confidentiality.</option><option value="B">B. inevitable disclosure.</option><option value="C">C. competitive obstruction.</option><option value="D">D. trade-character infringement.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: inevitable disclosure.</h5><h5>The concept of inevitable disclosure suggests that workers are likely to intentionally
or unintentionally share their current employers' trade secrets with future employers. Although most
jurisdictions have regulations that acknowledge and protect trade secrets, the treatment of inevitable
disclosure cases varies. Some jurisdictions do not support non-compete clauses as a way to limit tradesecret disclosure because these types of agreements inhibit a worker's right to seek employment. These
jurisdictions view the sharing of knowledge as an inevitable occurrence, which may occur unintentionally.
The situation does not illustrate limited confidentially, competitive obstruction, or trade-character
infringement.
</h5></div><h5 id='q43'>43. One tool that businesses can use to allow employees and customers to share knowledge through their
web sites is by posting</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. message boards.</option><option value="B">B. meta tags.</option><option value="C">C. bots.</option><option value="D">D. interesting content.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: message boards.</h5><h5>A message board is a page on a web site that allows computer users to ask questions
and post responses to the questions. Message boards allow customers and employees to share
information to solve problems, which may or may not contain interesting content. Meta tags are Hypertext
Markup Language (HTML) codes that display information about web pages. Bots are computer programs
that scan the WWW to find computer-program updates.
</h5></div><h5 id='q44'>44. Which of the following is a technological tool that a business uses to store, update, and access various
types of information:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Microfilm</option><option value="B">B. Newsletter</option><option value="C">C. Instruction manual</option><option value="D">D. Relational database</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: Relational database</h5><h5>A relational database contains various types of data that are organized in tables. By
setting a query, the categories of information can be linked together in a variety of combinations to obtain
the desired output. The categories might contain data such as the customers' names, addresses, phone
numbers, order dates, payment dates, etc. For example, a business might want to know which customers
have overdue accounts within a certain time frame, such as 60 days. By setting a query, the business
can retrieve the data in a report, which it can use to follow up with the customers. The same database
may also contain sales information. The sales manager can set a query to obtain the names of the
customers who have ordered a certain dollar-volume range (e.g., $5,000 - $10,000) within a certain
period (e.g., September 1, 2009 - December 31, 2009). The sales manager can use the data to prepare
forecasts, analyze customer buying habits, etc. Newsletters, instruction manuals, and microfilm are not
technological tools that a business can use to store, update, and access various types of information
</h5></div><h5 id='q45'>45. A business might ask its employees to sign a nondisclosure agreement to</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. avoid discrimination lawsuits.</option><option value="B">B. protect its trade secrets.</option><option value="C">C. ensure its employees' privacy.</option><option value="D">D. prevent copyright infringement.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is B: protect its trade secrets.</h5><h5>A nondisclosure agreement is a contract between an employer and an
employee that states that the employee will not reveal the employer's trade secrets (e.g., formula, recipe,
manufacturing technique) to future employers for whom the employee might work. Nondisclosure
agreements provide the business legal recourse if a competitor attempts to use the information for
financial gain or benefit. Businesses do not ask their employees to sign a nondisclosure agreement to
avoid discrimination lawsuits, ensure their employees' privacy, or prevent copyright infringement.
Copyright infringement involves the unauthorized use of written or artistic works.
</h5></div><h5 id='q46'>46. The laddering technique is used to capture and change categories of</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. redundant knowledge.</option><option value="B">B. horizontal communication.</option><option value="C">C. meaningless data.</option><option value="D">D. hierarchical information.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: hierarchical information.</h5><h5>By providing logical arguments, the writer is
more likely to persuade the audience to accept the conclusions. An analytical report may address
external factors or the progress of an action, but including this type of information depends on the nature
of the report's topic.
</h5></div><h5 id='q47'>47. Determine which function of marketing addresses the following question: Is the product packaged
appropriately?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Pricing</option><option value="B">B. Selling</option><option value="C">C. Marketing-information management</option><option value="D">D. Product/service management</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: Product/service management</h5><h5>(n.d.). Manage your scheduling commitments—six effective guidelines to
get things done (part 1). Retrieved March 12, 2010
http://www.timemanagment.info/111/manage-your-time-scheduling-commitments-sixeffective-guidelines-to-get-things-done/

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM—KEY

18

27. A
Manage your work commitments effectively. By planning ahead and determining how long it will take you
to complete your tasks, you can better manage your commitments. Planning your work helps you to
avoid scheduling too many activities that are close together, which may cause you problems in
maintaining commitments. Planning your workload also reduces procrastination, which is putting tasks off
until the last minute. Training and practice, rather than planning ahead, will help you to improve your
technical skills. Planning ahead and estimating the time it will take to complete various tasks will not
reduce your workload, but will help you work more efficiently.
</h5></div><h5 id='q48'>48. ChemTech International plans to build a new research facility, which is to be completed in two years. As
an employee with ChemTech, your supervisor has requested that you produce a detailed document to
send to potential vendors and contractors that outlines how they should submit bids to perform work for
the new facility. The document is to contain instructions about the type of information the potential
vendors should provide in their bids, and the format in which the information should be presented. What
type of document are you preparing?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Request for proposal</option><option value="B">B. Summary of qualifications</option><option value="C">C. Executive summary</option><option value="D">D. Business plan

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

6
</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: Request for proposal</h5><h5>Complex projects often require the expertise of external resources. Building a new
facility requires skills from architects, construction companies, electricians, etc. And because these types
of projects are expensive, companies want to obtain bids from the potential vendors or contractors to
determine which one is best suited to perform the work. A request for proposal (RFP) is an invitation for
potential vendors to present bids to obtain a contract and perform the work. Because the work is
complex, the RFP must include specific information and provide detailed instructions about the way the
proposal should be written. Often, an RFP will require potential vendors to provide a summary of
qualifications as a section of the proposal. A business plan is a company's blueprint for success—its
business model. An executive summary is an element of a business plan and provides and overview of
the most important information.
</h5></div><h5 id='q49'>49. Determine if the following statement is true or false: It is acceptable for a business to distribute its
customers' personal information without their consent to third parties.</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. True. Most international trade agreements include provisions that allow businesses to sell their
customers' personal information to other businesses.</option><option value="B">B. False. A business that distributes its customers' personal information is breaking antitrust laws.</option><option value="C">C. True. After collecting customers' information, the business owns the information and can do
whatever it wants with the information.</option><option value="D">D. False. It is unethical to distribute customers' personal information without their permission to third
parties.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: False. It is unethical to distribute customers' personal information without their permission to third
parties.</h5><h5>Explanation not available</h5></div><h5 id='q50'>50. Mr. Edwards saved some confidential customer information from his employer's computer network onto a
flash drive, so that he could work on a project from a different location. Without realizing it, Mr. Edwards
dropped the flash drive in a parking lot on his way to a meeting. This situation is an example of a risk
related to</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. data entry.</option><option value="B">B. patent protection.</option><option value="C">C. employee privacy.</option><option value="D">D. information security.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: information security.</h5><h5>Businesses often maintain personal information about their customers, such as
credit-card numbers, bank-account numbers, and account passwords. Businesses must take reasonable
care to protect and secure their customers' personal information to reduce the risk of fraudulent behavior,
such as computer hacking and identity theft. Businesses should develop policies about removing digital
information from their facilities. A patent provides legal protection to the owners of inventions. The
customers' privacy, rather than employees' privacy, has been compromised in the presented situation.
There is no indication that data entry problems exist with the information provided.
</h5></div><h5 id='q51'>51. Which of the following is the medium that is most appropriate to use for communicating and obtaining indepth information:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Internet</option><option value="B">B. High definition television</option><option value="C">C. Satellite radio</option><option value="D">D. Scanner</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is A: Internet</h5><h5>The Internet is a worldwide network of computers that enables users to access information and
communicate with others. The Internet provides businesses with the ability to post a lot of information
(e.g., product information) in a cost effective way. The Internet also provides consumers with the ability
to obtain a lot of product information from a central location at their convenience. Many web sites have
employees who answer customers' questions in real time through chat-room and text-messaging
capabilities. High definition television (HDTV) and satellite radio are forms of media that communicate
information; however, they are expensive forms of media, and are limited in scope, depth of information,
and interactivity. Scanners are electronic tools that transmit paper copies of text and graphics into a
computer.
</h5></div><h5 id='q52'>52. The ONT Company is a very large firm that handles many types of projects. What type of projectmanagement software program would be the best choice for ONT to use?</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Costing</option><option value="B">B. Scheduling</option><option value="C">C. Corporate-level</option><option value="D">D. Individual-level</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: Corporate-level</h5><h5>Large businesses often have many projects occurring at the same time. In some
situations, different projects need to access the same data. Corporate-level project-management
software is a powerful tool because it provides the ability to track hundreds of tasks and several projects
at one time. Corporate-level project-management software typically provides cost accounting, resource
leveling, "what-if" analyses, charting, and reporting capabilities. Some corporate-level software programs
allow businesses to select other software options to accommodate their specific needs. Single-project
programs are used for individual (single) projects. Scheduling software has fewer options than corporatelevel programs, and contains primarily scheduling, Gnatt charts, and presentation capabilities. Costing is
a software capability rather than a type of project-management software program.
</h5></div><h5 id='q53'>53. What is the advantage to using project-management computer software that allows several team
members to access project information at the same time?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Ensures data accuracy</option><option value="B">B. Reduces the need to secure data</option><option value="C">C. Enhances collaboration efforts</option><option value="D">D. Eliminates the need to analyze variances</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: Enhances collaboration efforts</h5><h5>Project-management software allows businesses to plan, track, and
evaluate all aspects of a project. Project-management software is available to accommodate different
types of projects, from simple, individual projects to multiple, complex projects. Complex projects often
involve several hundred tasks being performed by dozens of people. Often, team members need to
access the same information to perform their project tasks. Programs that are designed to allow multiple
users to access project data enhance the team's ability to collaborate and share project information from
a variety of locations. Allowing several team members to access project-management data does not
reduce the need to secure the data, ensure data accuracy, or eliminate the need to analyze variances.
</h5></div><h5 id='q54'>54. Which of the following is the result of a new technology's impact on operations management?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. A video game company airs a commercial that can be viewed in 3-D.</option><option value="B">B. A manufacturer can produce custom orders without decreasing efficiency.</option><option value="C">C. A software upgrade allows the accounting department to transfer data between reports without
re-entering it.</option><option value="D">D. Computers scan resumes of potential job applicants instead of humans checking for
qualifications.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: A manufacturer can produce custom orders without decreasing efficiency.</h5><h5>Operations management
refers to the systematic design, direction, and control of processes that transform inputs into services and
products for internal and external customers. Manufacturing a custom product efficiently is an example of
new technology transforming inputs into a product. A 3-D commercial is an example of a marketing
benefit created by using new technology. The software upgrade has an impact on the accounting
function, not operations management. Scanning resumes is an advantage for human resources, not
operations management.
</h5></div><h5 id='q55'>55. Which of the following facility components are inspected by authorized officials to ensure that safety
ordinances are met:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Computer networks</option><option value="B">B. Photocopiers</option><option value="C">C. Elevators</option><option value="D">D. Portable cameras</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: Elevators</h5><h5>Governments develop regulations to ensure the public's safety. Government regulations
require businesses to have their elevators inspected on a regular basis by a government agent or
independent entity to ensure that elevators are running correctly. During the inspection, the inspector
might identify problems with the elevators that compromise the employees' and visitors' safety. By
identifying the problems, the business can repair the elevators, so they operate correctly and are in
compliance. Photocopiers, computer networks, and portable cameras are equipment rather than a
component of the facility.
</h5></div><h5 id='q56'>56. The operations manager schedules quarterly reviews of office equipment whether there have been
recent problems or not. This is an example of</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. preventive maintenance.</option><option value="B">B. installation.</option><option value="C">C. safety precautions.</option><option value="D">D. corrective maintenance.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

7
</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: preventive maintenance.</h5><h5>Preventive maintenance keeps equipment working and potentially expands the
life of the equipment. It “prevents” breakdowns. Installation puts equipment into use. Safety precautions
are methods of using equipment to ensure the safety of workers. Corrective maintenance is done to
repair a specific problem.
</h5></div><h5 id='q57'>57. Randy has three tasks that he must complete in the next two days. One task that he must do is to
develop the production schedule for next week, which is due by 12:30 p.m. tomorrow and will take him
approximately three hours to complete. Randy must also finish a PowerPoint presentation for a meeting
at 4:00 today, which will take him approximately two hours to complete. And, he must prepare and place
an order for parts by 1 p.m. today, so the order arrives by next Monday. It is currently 12:15 p.m. In what
order should Randy prioritize his work load?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Prepare and place the order; complete the PowerPoint presentation; develop the production
schedule</option><option value="B">B. Develop the production schedule, prepare and place the order; complete the PowerPoint
presentation</option><option value="C">C. Complete the PowerPoint presentation, prepare and place the order; develop the production
schedule</option><option value="D">D. Prepare and place the order, develop the production schedule; complete the PowerPoint
presentation</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: Prepare and place the order; complete the PowerPoint presentation; develop the production
schedule</h5><h5>Explanation not available</h5></div><h5 id='q58'>58. An effective way to prioritize work is to categorize tasks in</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. order of their importance.</option><option value="B">B. alphabetical order.</option><option value="C">C. numerical sequence.</option><option value="D">D. relation to enjoyment level.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: order of their importance.</h5><h5>Prioritizing involves ranking things in the order of their relative importance.
Individuals evaluate many factors when prioritizing their work, including due dates and the time that it will
take to complete a task. Categorizing tasks in alphabetical or numerical order are not effective ways to
prioritize tasks. Sometimes, the most difficult or unpleasant tasks are the most important to complete;
therefore, prioritizing work in relation to the level of enjoyment you have while performing the task is not
an effective method to use to set priorities.
</h5></div><h5 id='q59'>59. Dexter must receive information from Isabelle before he can complete a job task. After completing his
task, Dexter prepares a form to send to Amy, so she can perform her job. The activities are coordinated
in a way that the work must be completed</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. simultaneously.</option><option value="B">B. sequentially.</option><option value="C">C. quickly.</option><option value="D">D. randomly.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: sequentially.</h5><h5>Sequential order involves performing tasks in a logical order to achieve a desired outcome.
In the workplace, it is important to coordinate tasks, especially when one employee must complete a task
so another employee can perform the next task in the process that is needed to complete a required
activity. In the example, each employee requires a coworker to complete a task so the next person can
do his/her job; therefore, the work must be coordinated so it is performed in a certain sequence. If the
employees are performing tasks simultaneously, they are doing the tasks at the same time. There is not
enough information provided to determine if the tasks must be performed quickly. If the tasks are done in
no particular order, they are being performed randomly.
</h5></div><h5 id='q60'>60. When a project manager discovers an inefficient process while team members are executing a project
activity, s/he should</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. organize a committee to evaluate the project's status.</option><option value="B">B. hire a consultant to resolve the problem.</option><option value="C">C. make the necessary changes to get the project back on track.</option><option value="D">D. monitor the team members to encourage teamwork.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is C: make the necessary changes to get the project back on track.</h5><h5>An important aspect of controlling a project
is monitoring tasks and processes. If something is causing a slowdown or problem, the project manager
must take steps to resolve the issue and get the project back on track, so deadlines can be met. For
complex projects, this may involve hiring a consultant or organizing an internal committee of team
members to review the process and generate ideas and solutions for the problem. Getting the project
back on track usually involves monitoring the team members on an ongoing basis; however, it is not
always related to encouraging teamwork.
</h5></div><h5 id='q61'>61. Which supplier should Turbo Unlimited select according to the following chart?

Weight
SUPPLIER
Company A
Company B
Company C
Company D</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Company D</option><option value="B">B. Company B

Cost
structure
0.4

4
5
3
5

On-time
delivery
0.2

4
3
2
5

Product
quality
0.3

3
3
4
2

Management
capability
0.2

5
4
4
4
</option><option value="C">C. Company C</option><option value="D">D. Company A
</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: Company D</h5><h5>(2005). Elements of a research proposal and report. Retrieved March 9, 2010,
from http://www.statpac.com/research-papers/research-proposal.htm
10. D
Patient, flexible and empathetic. So that businesspeople don't do something that will offend their clients,
they should adapt their communication styles with clients from different cultures. To develop positive
relationships with international clients, businesspeople should try to learn as much as they can about
their clients' cultures, customs, and social values. Adapting communication styles requires
businesspeople to be patient, flexible, empathetic, respectful, confident (but not overly so), honest
(transparent), and sensitive to their clients' cultures and customs. Projecting biased, demanding,
manipulative, or indifferent attitudes may offend the clients.
</h5></div><h5 id='q62'>62. What is an advantage to a company of building long-term relationships with a few vendors?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Less information sharing</option><option value="B">B. Wider product selection</option><option value="C">C. Fewer supply interruptions</option><option value="D">D. Easier to manage</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is D: Easier to manage</h5><h5>It is easier to manage vendor relationships when a company works with a small group
of vendors. When the company works with fewer vendors, it has more time to cultivate long-term
relationships with each vendor. Long-term relationships benefit both the company and the vendor
because both businesses are willing to share information; are understanding of each other's needs,
expectations, and limitations; and are more willing to work together to resolve conflicts that might occur.
Working with a few vendors does not always provide the business with a wider product selection. A
disadvantage to working with a few vendors is that supply interruptions are more likely to affect the
company because it may not have easy access to another source that sells similar goods or services.
</h5></div><h5 id='q63'>63. A business with a cooperative orientation tends to view its relationships with vendors as</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. obligations.</option><option value="B">B. partnerships.</option><option value="C">C. long-term rivalries.</option><option value="D">D. short-term transactions.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

8
</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: partnerships.</h5><h5>A business that has a cooperative orientation is willing to work with its vendors to achieve
their mutual goals. Having a cooperative orientation involves a willingness to share relevant information
and being fair, trustworthy, and reliable. When these circumstances exist, the buyer-seller relationship is
similar to a long-term partnership. Viewing vendors as obligations or rivals may create conflict rather
than build positive working relationships.
</h5></div><h5 id='q64'>64. Which of the following is an example of a buyer placing an advance order:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Fred ordered a 2' X 4' sign imprinted with the company's logo, which he wants to pick up on
Monday.</option><option value="B">B. On Tuesday, Katherine placed an order for 22 cases of paper towels to replenish depleted stock.</option><option value="C">C. Alan placed a large order on March 10 for a new video game that is to be released on June 1.</option><option value="D">D. In January, Lindsey ordered outdoor seasonal goods from a vendor without providing specific
styles, sizes, or colors.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: Alan placed a large order on March 10 for a new video game that is to be released on June 1.</h5><h5>An
advance order is a regular order that is placed now with delivery requested at a future time (e.g., weeks,
months). Because the item is new, Alan wants to make sure that he orders enough games to meet the
anticipated demand upon its release date. Katherine placed a reorder, which is ordering items that have
been previously ordered. Fred placed a special order, which is a request for a custom item that a vendor
does not normally carry in stock. Lindsey placed a blanket order. A blanket order is an order that covers
all or part of a retailer's seasonal requirements. Blanket orders typically are placed several months before
the season, and do not contain detailed specifications or shipping dates.
</h5></div><h5 id='q65'>65. Which of the following are examples of raw materials that a business might keep on hand for production:</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Minerals, tables, leather, and paper</option><option value="B">B. Leather, bolts, stapler, and ore</option><option value="C">C. Grain, minerals, leather, and oil</option><option value="D">D. Oil, grain, shoes, and household cleanser</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: Grain, minerals, leather, and oil</h5><h5>Businesses (e.g., manufacturers) usually maintain an inventory of items
that they use to produce their goods. Grain, minerals, leather and petroleum are examples of products
that a business might use to make cereal, jewelry, coats, and gasoline, respectively. Paper, bolts and
leather may be classified as raw materials, if they are being used to produce finished goods. Ore is a
mineral. Staplers, tables, and household cleansers are finished goods.
</h5></div><h5 id='q66'>66. The dating terms that the MRL Restaurant Supply Company negotiated with its glassware vendor are
5/10 net 30 for a purchase order generated on May 20. Calculate the discounted amount that MRL would
owe for an order of $1,580.50 if it pays by May 27th.</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. $1,510.07</option><option value="B">B. $1,547.47</option><option value="C">C. $1,541.07</option><option value="D">D. $1,501.47</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: $1,501.47</h5><h5>5/10 net 30 means that the buyer will receive a 5% discount if the buyer pays within 10 days
of the invoice date, and the entire invoice must be paid within 30 days. To calculate how much the
restaurant supply company will owe if it pays within 10 days of the invoice date, first determine the
discount amount in dollars. To obtain the discount amount in dollars, multiply the order amount by the
discount percentage ($1,580.50 X .05 or 5% = $79.025 or $79.03). Then, subtract the discount amount in
dollars from the original order amount ($1,580 - $79.03 = $1,501.47).
</h5></div><h5 id='q67'>67. The practices of not relying on inspection to achieve quality and lowering costs by working with just one
supplier are part of which quality control technique?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Total quality management</option><option value="B">B. Six Sigma</option><option value="C">C. Lean operations</option><option value="D">D. Continuous improvement</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: Total quality management</h5><h5>TQM, the quality control technique created by W.E. Deming, consists of 14
points, two of which are listed in the question. Six Sigma is a system for reducing variation in processes
using advanced statistical techniques. It seeks to reduce defect levels to 3.4 per million units produced or
transactions processed. Lean operations is a series of mathematical and visual tools to streamline
material and information flow. Continuous improvement is any ongoing effort to improve products,
services or processes.
</h5></div><h5 id='q68'>68. My Favorite Things is a manufacturer. Recently, the management at My Favorite Things has noticed an
increase in the number of customer returns due to defects. In response, management wants to motivate
employees to focus on quality control by involving them in the process. Which of the following should
NOT be used to encourage employees to take responsibility for manufacturing high-quality products:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Form teams that work together to improve quality</option><option value="B">B. Help employees identify their internal customers who rely on their work</option><option value="C">C. Give employees the power to correct a defect immediately</option><option value="D">D. Have employees compete for the position of quality inspector</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: Have employees compete for the position of quality inspector</h5><h5>Creating a culture of quality involves
asking all employees to be responsible for quality. Using quality inspectors moves the responsibility for
quality away from each employee and onto the inspector. The remaining answers could be used to
involve employees in improving quality. When employees identify internal customers, they recognize that
these customers need to receive good quality work from them in order to do their job. Empowering
employees to “stop the line” to fix a defect stops defective parts from continuing through the
manufacturing process. Quality-focused teams encourage employees to work together to improve quality.
</h5></div><h5 id='q69'>69. Which of the following is an example of an employee analyzing human-resources information:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Sally evaluates the responses to a survey that the business distributed online to customers who
spent over $5,000 with the firm last year.</option><option value="B">B. Pedro uses a complex software program to calculate the various break-even points for a new
product.</option><option value="C">C. Stewart gathers quotes from a variety of vendors to determine which vendor provides the best
quantity discount for parts.</option><option value="D">D. Polly reviews several companies' pay scales to determine if the pay range for the firm's
marketing director is appropriate.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: Polly reviews several companies' pay scales to determine if the pay range for the firm's
marketing director is appropriate.</h5><h5>Explanation not available</h5></div><h5 id='q70'>70. A business often compares its similar financial information from different time periods to</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. detect trends.</option><option value="B">B. control markets.</option><option value="C">C. evaluate competitors.</option><option value="D">D. influence buying behavior.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is A: detect trends.</h5><h5>Business analysis is the process of investigating and evaluating a business issue,
problem, process, or approach. Businesses analyze financial data to evaluate the financial well-being of
their operations at any given time. By comparing the same type of financial information from different
consecutive time periods, a business can detect trends. By detecting trends, the business can determine
if it needs to make changes. For example, if the business notices a substantial increase in sales-dollar
volume over a three-month period, trends indicate an increase in spending. The business may decide to
conduct further analysis to determine what customers are purchasing, and decide if it needs to increase
the production or inventory-levels of certain products. Businesses analyze markets for many reasons, but
they cannot control market activity. To analyze its competitors, a business needs to obtain and review
external data. Comparing internal financial data cannot influence buying behavior.
</h5></div><h5 id='q71'>71. Which of the following is an example of paradigm innovation:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Windows computer operating system</option><option value="B">B. Energy-saving light bulbs</option><option value="C">C. The latest model of the Honda Civic</option><option value="D">D. Rechargeable batteries

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

9
</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: Windows computer operating system</h5><h5>Paradigm innovation takes place when the entire perception of a
product, company, or industry takes place. The Windows computer operating system revolutionized the
way people input, transfer, share, and export information through personal and networked computers.
Businesses worldwide use the Windows operating system. Energy-saving light bulbs, the latest model of
the Honda Civic, and rechargeable batteries are examples of product innovation. Product innovation
takes place when a company creates a new product or redesigns an existing product.
</h5></div><h5 id='q72'>72. Tonia was just hired as an assistant brand manager at Drake Goodwin. She is amazed at the fast-pace
of the office. Everyone looks very busy, especially her supervisor. This morning when she arrived, there
was a note from her supervisor on her desk explaining what she should do today. After reading it several
times, she thinks she understands her assignment, but isn't positive. She can see her supervisor is busy
on a phone call. What should she do?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. After her supervisor ends the call, ask her to clarify the instructions</option><option value="B">B. Ask a coworker to read the note and help her understand it</option><option value="C">C. Work on the task to the best of her ability</option><option value="D">D. Work on a different task that she is comfortable doing</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: After her supervisor ends the call, ask her to clarify the instructions</h5><h5>It is always best to get clarification
straight from the source of the information. Most supervisors will appreciate an employee who knows how
to collect facts and then do a job well instead of an employee who guesses and then wastes time
completing the wrong thing. Asking a coworker may lead to an incorrect guess as well. Proceeding
without clarification may lead to time and effort wasted. Working on something else means that Tonia
ignored her supervisor's wishes for the tasks to be done today.
</h5></div><h5 id='q73'>73. The best way for people to obtain information about a variety of career fields and options is by</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. accessing online employment services.</option><option value="B">B. joining social organizations.</option><option value="C">C. completing job applications.</option><option value="D">D. reading virtual textbooks.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: accessing online employment services.</h5><h5>Online employment services such as Careerbuilder.com and
Monster.com provide information about a variety of careers and industries. Employment-services web
sites provide information about the skills and education needed to perform certain jobs as well as the pay
ranges for those jobs. Many of these sites offer career planning quizzes that help individuals determine
the types of careers that they may be best suited for. Joining social organizations, completing job
applications, and reading virtual textbooks are not the best ways in which people obtain information about
a variety of career fields and options.
</h5></div><h5 id='q74'>74. Laney is a very good singer. Since age four, she has sung in community musicals, at church, and in
school productions. She's 15 now and knows she wants a career as a singer. Her teacher announces a
special career exploration program. Should Laney join?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Yes, because career exploration will prove her plans to be a singer are unrealistic.</option><option value="B">B. No, it is important that Laney remain focused on her dream to be a singer.</option><option value="C">C. Yes, it is important to learn about many careers before selecting one.</option><option value="D">D. No, because a career as a singer does not follow a specific career path.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: Yes, it is important to learn about many careers before selecting one.</h5><h5>Even if Laney thinks she knows
what she wants to do, she may find she has interests in careers she didn't even know existed. Career
exploration will allow Laney to make an informed decision that may or may not result in becoming a
singer. Learning about careers and pursuing her dreams are not necessarily mutually exclusive. Career
exploration is simply research into careers, interests, and aptitudes. What she does with the research is
up to her. Everyone needs to plan for their career. This doesn't mean things will go as planned, but
putting together a plan will increase the odds of being successful.
</h5></div><h5 id='q75'>75. Over lunch, Louise tells her new friend that she loves to write. Over the past 20 years, she has been a
newspaper reporter, written a magazine column, taught writing at a local college, volunteered as a writing
tutor at an elementary school, studied journalism in New York, and even had a novel published. Louise is
describing her</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. career.</option><option value="B">B. job.</option><option value="C">C. occupation.</option><option value="D">D. work environment.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: career.</h5><h5>A career describes a lifetime work history or long-term participation in a particular field of
expertise. Louise has had a career in writing. A job is one specific paid position with tasks set by an
employer, such as writing an advice column for a newspaper. Though Louise has held many jobs over
her life, she is discussing a pattern of jobs and experience that have formed her career. An occupation is
a group of related tasks that requires special training, education, or experience to learn a specific set of
skills. Louise's occupation is writer, but the things she describes combine to form her career. If Louise
were discussing her work environment, she would be discussing the surroundings and conditions of her
workplace, such as a small home office.
</h5></div><h5 id='q76'>76. In what type of business document would the following statement appear:
Employees shall not distribute written materials about religious, political, or social issues on company
property.</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Rules of conduct</option><option value="B">B. Employment application
</option><option value="C">C. Certificate of authority</option><option value="D">D. Statement of intent
</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: Rules of conduct</h5><h5>The rules of conduct outline a company's policies, procedures, and expectations
regarding employees' behavior in the workplace. Employees must understand and follow the rules of
conduct as outlined in the company's policies. Policies often address personal and professional courtesy
expectations, confidential information, gift-giving/receiving, etc. These policies are often included in the
employee handbook. Often, employers require employees to sign a document acknowledging that they
have read and understand the rules of conduct. This document provides employers with legal recourse
and protection if employees break company rules, behave unethically, or violate the law. Employment
applications, certificate of authority, and statement of intent do not outline the employers' expectations of
the employees.
</h5></div><h5 id='q77'>77. At Oh-So-Good Gourmet Cookie Company, Todd is the warehouse manager, Pamela is the lead
shipping clerk, David is a part-time shipping clerk, Carrie is the shipping supervisor, and Sharon is the
vice president of distribution. Following a vertical chain of command, who is Carrie's direct supervisor?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Todd</option><option value="B">B. Sharon</option><option value="C">C. David</option><option value="D">D. Pamela</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: Todd</h5><h5>The chain of command defines the level of authority and the specific individual who supervises
particular employees. Having a chain of command helps provide structure for businesses. Because
Carrie is the shipping supervisor, she would report to Todd, who is the warehouse manager. Todd reports
to Sharon, who is the vice president of distribution and holds the highest ranking position listed. Pamela
is the lead shipping clerk, so she reports to the Carrie, who is the shipping supervisor. As a part-time
shipping clerk, David reports to the lead shipping clerk, Pamela.
</h5></div><h5 id='q78'>78. The chief executive officer (CEO) of a public corporation reports to the</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. board of directors.</option><option value="B">B. executive staff.</option><option value="C">C. chief financial officer.</option><option value="D">D. regulatory agency.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: board of directors.</h5><h5>A corporation is a form of business ownership that is owned by stockholders who
have purchased units or shares of the company. Corporations are governed by a board of directors,
which consists of people, sometimes shareholders, who make decisions about the business's activities.
The corporation's CEO directs the executive staff (e.g., chief financial officer, vice president of
operations) to execute these decisions. Therefore, the CEO reports to the board of directors. The CEO is
expected to follow government regulations, but does not report to regulatory agencies.
</h5></div><h5 id='q79'>79. What type of goal is designed to prevent or control internal organizational behavior?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Product</option><option value="B">B. Order</option><option value="C">C. Profit</option><option value="D">D. Short-term</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Order</h5><h5>Organizational goals are the overall objectives or desired outcomes that the business wants to
achieve. Order goals are those that are designed to control or prevent behavior that may have a negative
effect on the business. For example, order goals address ethics and legal issues and expectations in the
workplace. Product goals relate to the goods and services the business produces. Profit goals are related
to pricing goals. Short-term goals are goals that take less than a year to achieve.
</h5></div><h5 id='q80'>80. A business must ensure that it hires employees who possess the appropriate skills to</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. determine if the business needs to seek additional funding.</option><option value="B">B. help the business achieve its organizational goals.</option><option value="C">C. analyze the business's profit margins.</option><option value="D">D. set the appropriate standards.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

10
</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is B: help the business achieve its organizational goals.</h5><h5>A business must hire employees who have the skills
to carry out the tasks that are needed to achieve its organizational goals. Without the appropriate skills,
the business will not run efficiently and compete effectively in the marketplace, which is likely to result in
financial losses. Hiring skilled employees will not help a business determine funding needs or analyze
profit margins. Mangers, rather than employees, set the business's organizational standards.
</h5></div><h5 id='q81'>81. What section of the statement of work (SOW) defines what the project will produce?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Schedule estimates</option><option value="B">B. Purpose statement</option><option value="C">C. Benefits and risks</option><option value="D">D. Project deliverables</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: Project deliverables</h5><h5>The statement of work (SOW) is a document that outlines the terms, commitments,
and conditions of the project. It includes information about the project's activities, timelines, and
deliverables. Deliverables are the goods, services, or documentation that will be provided to the
stakeholder upon completion of the project—what the project will produce. The purpose statement
defines the reason for the project. Schedule estimates approximate the timeliness of the workload
throughout the project.
</h5></div><h5 id='q82'>82. Kara is preparing the work breakdown structure (WBS) for a new project. She has prepared five work
packages. She has estimated the time to complete each package as follows: Package A-26 hours;
Package B-50 hours; Package C-38 hours; Package D- 6 hours; and Package E-15 hours. If Kara's
estimates are accurate, has she followed the 8/80 rule?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. No. Kara has scheduled more than 80 hours of work for the entire project.</option><option value="B">B. No. Package D does not meet the minimum requirement of taking eight hours to complete.</option><option value="C">C. Yes. The average time to complete each package is 27 hours, which meets the 8/80 criteria.</option><option value="D">D. Yes. Kara has scheduled the packages so that each one does not exceed 80 hours.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: No. Package D does not meet the minimum requirement of taking eight hours to complete.</h5><h5>A work
breakdown structure (WBS) is the process of dividing project tasks into meaningful components to
complete the project. Dividing the project into small work packages helps the project manager effectively
schedule, assign, and monitor project activities. The 8/80 rule for dividing project work packages states
that no package should take less than eight hours or more than 80 hours to complete. This rule intends to
keep work packages in manageable units—not too small or too large. Because Kara allocated six hours
to complete package D, she did not follow the 8/80 rule.
</h5></div><h5 id='q83'>83. To understand how team members perform their project tasks, project managers should possess
__________ skills.</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. interpersonal</option><option value="B">B. technical</option><option value="C">C. persuasive</option><option value="D">D. negotiation</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: technical</h5><h5>Effective project managers possess basic technical skills. Although many project managers
don't perform the technical tasks that the team members do, they still need to understand the technical
aspects of the project to answer questions, give directions, and solve problems. Interpersonal skills
involve the ability to communicate, interact, and build relationships with team members. Persuasion is the
ability to influence others' opinions or actions. Negotiation is the ability to reach an agreement with
another party. Interpersonal, persuasive, and negotiation skills are very important skills for project
managers to possess; however, these skills do not directly relate to understanding how team members
actually perform their work.
</h5></div><h5 id='q84'>84. Which of the following is an example of a project manager delegating responsibility to a project team
member:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Nina advises Milton that he is responsible for preparing the team's weekly status report.</option><option value="B">B. Bill tells Peter that he needs to remember to include a cover sheet with his TPS report.</option><option value="C">C. Stan asks Joanna and Tom for suggestions to improve process efficiency.</option><option value="D">D. Anne determines that Bob has the desired organizational skills to be on the project team.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is A: Nina advises Milton that he is responsible for preparing the team's weekly status report.</h5><h5>Delegating is
assigning authority or responsibility to another person and is an important aspect of effectively managing
a project team. Delegation involves matching project tasks and activities with the team members who
have the skills and expertise to perform them. Because Nina gives Milton the authority to prepare the
team's weekly status report, she is delegating responsibility. Bill is providing Peter with critical feedback.
Stan is asking Joanna and Tom to help him brainstorm ideas to solve a problem. Anne is conducting a
staffing activity by determining that Bob possesses skills that she needs for her project team.
</h5></div><h5 id='q85'>85. Determine the type of project-closing report that would most likely contain the following statement:
“In review, group members agreed that additional training before the project began and ongoing technical
support during the course of the project would have increased overall efficiency.”</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Executive summary</option><option value="B">B. Lessons learned document
</option><option value="C">C. Termination checklist</option><option value="D">D. Stakeholder's expense audit
</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: Lessons learned document
</h5><h5>Explanation not available</h5></div><h5 id='q86'>86. Which of the following is a situation indicating a problem with product durability:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. A customer returns a software package because it does not work with her/his computer.</option><option value="B">B. A customer returns a recently-purchased sweater because it is the wrong size.</option><option value="C">C. A customer complains to a restaurant server that his/her steak is too rare.</option><option value="D">D. A customer complains that her/his new cell-phone battery quit working after one week.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: A customer complains that her/his new cell-phone battery quit working after one week.</h5><h5>Quality
management is the coordination of resources to ensure the degree of excellence of a process, good, or
service. If customers complain that goods are breaking or not working after a short period of time (e.g.,
cell phone batteries), there may be a product-durability problem. After a problem is detected, the
business can determine why the problem is occurring and then take steps to fix the problem, which will
restore or improve the quality of the product. Returning a sweater that is a wrong size, complaining about
the way a steak has been prepared, and returning a software package because it does not work with a
computer are examples of compatibility issues.
</h5></div><h5 id='q87'>87. A water-filtering company made some changes to it processes that resulted in better tasting water. This
is an example of</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. quality improvement.</option><option value="B">B. quality control.</option><option value="C">C. opportunity cost.</option><option value="D">D. market development.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is A: quality improvement.</h5><h5>Quality improvement involves using a systematic approach to increase the levels of
excellence in relation to a process, good, or service. Taking action to create better-tasting water is
improving the quality of the end product—water. Quality control is ensuring the degree of excellence of a
good or service. After making the improvements, the company will need to ensure that its products meet
the new standards of excellence by implementing different quality-control activities. Opportunity cost is
the benefit that is lost when you decide to use scarce resources for one purpose rather than another.
Market development is the activities that a business implements to increase its target market.
</h5></div><h5 id='q88'>88. The overall purpose of the Six Sigma quality-management framework is to satisfy customers and</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. simplify activities.</option><option value="B">B. lower costs.</option><option value="C">C. improve technology.</option><option value="D">D. identify needs.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: lower costs.</h5><h5>Quality management involves the coordination of resources to ensure the degree of
excellence of a process, good, or service. Six Sigma is a quality-management framework that involves
continuously setting higher goals of perfection. The Six Sigma framework builds upon previous goals to
set higher goals in order to continuously improve the quality of the business's goods, services, or
processes. The ultimate goal is to maximize outputs, have no process or product defects, and minimize
production costs. Therefore, an important aspect of the Six Sigma philosophy is to continuously lower
costs while improving quality. When quality improves, customer satisfaction tends to improve. To
continuously improve, the business may determine that it needs to simplify activities, obtain better
technology, or reevaluate its needs.
</h5></div><h5 id='q89'>89. What is the potential benefit to a business that continuously takes action to improve the quality of its
goods and services?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Higher demand</option><option value="B">B. Increased product options</option><option value="C">C. Increased premiums</option><option value="D">D. Higher costs

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

11
</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: Higher demand</h5><h5>Continuous improvement is an ongoing process that looks for ways to increase the
levels of excellence in relation to a process, good, or service. Potential benefits of improved processes
often increase the business's productivity levels. Increased productivity levels result in increased outputs,
lower costs, and increased revenue. When quality improves, customer satisfaction levels often increase,
which often results in a higher demand for the business's goods and services. A premium is an item that
a business offers to the purchasers of a particular product. Offering premiums to customers and
increasing product options do not impact the continuous quality improvement efforts of a business's
products.
</h5></div><h5 id='q90'>90. Which of the following is a true statement about the role of ethics and business risk:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. The unethical behaviors of a business's managers do not affect the business's employees.</option><option value="B">B. Businesses that provide ethics-training programs can reduce the business's level of risk.</option><option value="C">C. Businesses that follow ethical guidelines often damage their reputations in the marketplace.</option><option value="D">D. Businesses are not at risk when they assume that their employees understand the importance of
ethics.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: Businesses that provide ethics-training programs can reduce the business's level of risk.</h5><h5>By providing an
ethics training program, the business can advise its employees about its expectations in relation to
workplace behavior. Because an employee's personal ethics may differ from the organization's ethics, it
is important for the employees to have a clear understanding of the business's expectations. When
employees don't have a clear understanding of the business's expectations, they put the business at risk.
Businesses cannot assume that employees know their expectations. Employees who do not follow the
business's ethics guidelines may cross a legal line without knowing they have done so. If employees
cross ethical lines and break the law, the business may experience fines and obtain unfavorable publicity.
Management sets the tone for ethical behavior, so it is important that managers set a good example for
employees by exhibiting a high standard of ethics. By behaving ethically, the business can protect its
reputation with customers, vendors, and the community.
</h5></div><h5 id='q91'>91. Which of the following is a method that businesses use to reduce the risk of unauthorized access to
confidential computer data:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Groupware applications</option><option value="B">B. Decryption software</option><option value="C">C. Passwords</option><option value="D">D. Spooling</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Passwords</h5><h5>Businesses must take precautions to secure their confidential information. To reduce the
risk of unauthorized access to confidential information, businesses often assign computer passwords to
allow authorized employees to view secured information. This reduces the risk of confidential information
getting into the wrong hands. Encryption, rather than decryption is a way to protect information.
Encryption is the process of transforming information into a secret code so that unauthorized users are
not able to read it. Groupware applications are software programs that allow several computer users to
access the same information from different locations. Spooling is the process of transferring computer
data to a temporary location so the data can be retrieved and processed through a different computer
program.
</h5></div><h5 id='q92'>92. Which of the following is a business risk associated with a failure to follow laws:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Increased inventory</option><option value="B">B. Government fines</option><option value="C">C. Decreased quotas</option><option value="D">D. Goal achievement</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: Government fines</h5><h5>Risk management is a business activity that involves the planning, controlling,
preventing, and procedures to limit business losses. Compliance with the law is an important aspect of
risk management. If a business does not comply with laws, the government may fine the business, which
could result in substantial financial losses. A substantial financial loss can hinder the business's ability to
achieve its goals. Increased inventory and decreased quotas are not risks that are directly associated
with failure to comply with laws.
</h5></div><h5 id='q93'>93. What can businesses do to reduce risks associated with noncompliance?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Monitor regulations</option><option value="B">B. Evaluate competitors</option><option value="C">C. Obtain customer feedback</option><option value="D">D. Allocate operating funds</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: Monitor regulations</h5><h5>Risk management is a business activity that involves the planning, controlling,
preventing, and procedures to limit business losses. If a business does not comply with laws, the
government may fine the business, which could result in substantial financial losses. Therefore, it is
important for a business to continuously monitor government regulations to ensure that it is in
compliance, and make changes, if necessary, to become compliant. Evaluating competitors, obtaining
customer feedback and allocating operating funds are not actions that will reduce risks associated with
noncompliance.
</h5></div><h5 id='q94'>94. What must occur before any management functions can be carried out?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Brainstorming</option><option value="B">B. Analyzing</option><option value="C">C. Processing</option><option value="D">D. Planning</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: Planning</h5><h5>Planning is the management function of deciding what will be done and how it will be
accomplished. Brainstorming is a creative-thinking technique that is often used during the planning
process. Deciding what will be done involves establishing objectives. After establishing objectives, the
business can implement processes to achieve those objectives. The business analyzes its performance
to determine if it achieved its objectives.
</h5></div><h5 id='q95'>95. What is the primary purpose of managerial planning?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. To evaluate forecasts</option><option value="B">B. To implement activities</option><option value="C">C. To prepare for the future</option><option value="D">D. To change processes</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: To prepare for the future</h5><h5>Planning is the management function of deciding what will be done and how it
will be accomplished, which is preparing for the future. Preparing forecasts are activities that are often
performed during the planning process. Implementing activities and changing processes are part of the
managerial controlling function.
</h5></div><h5 id='q96'>96. Which of the following is an activity associated with the organizing function of management:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Determining the division of labor</option><option value="B">B. Developing a mission statement</option><option value="C">C. Inspecting the quality of outputs</option><option value="D">D. Providing employees with feedback</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: Determining the division of labor</h5><h5>Organizing is the management function of setting up the way the
business's work will be done. Determining how to divide the work is an organizing activity. A mission
statement, the firm's statement of purpose, is considered when conducting planning activities. Inspecting
outputs and providing employees with feedback are controlling activities.
</h5></div><h5 id='q97'>97. An important aspect of the organizing function of management involves</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. conducting performance reviews.</option><option value="B">B. establishing levels of authority.</option><option value="C">C. promoting employees.</option><option value="D">D. motivating team members.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: establishing levels of authority.</h5><h5>Organizing is the management function of setting up the way the
business's work will be done. Establishing levels of authority is an organizing activity. Motivating
techniques are directing activities. Promoting employees is a staffing activity. Conducting performance
reviews is a controlling activity.
</h5></div><h5 id='q98'>98. Burkhart Manufacturing is implementing a new, company-wide computer system. Nadine is in the
process of identifying the skills that will be needed to manage the information and maintain the various
software applications. What function of management is Nadine focusing on?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Planning</option><option value="B">B. Controlling</option><option value="C">C. Training</option><option value="D">D. Staffing</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is D: Staffing</h5><h5>Staffing is the management function of finding workers for a business. The staffing function
identifies qualified candidates to perform the work. To identify qualified candidates, the manager must
know what skills are needed to perform the work. Because Nadine is determining what skills are needed
to operate the new computer system, she is focusing her efforts on the staffing function of management.
Controlling is the management function of monitoring the work effort. Training involves teaching or
developing a new skill. Planning is the management function of deciding what will be done and how it will
be accomplished.
</h5></div><h5 id='q99'>99. A primary activity of the directing function of management is</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. initiating action.</option><option value="B">B. identifying skills.</option><option value="C">C. evaluating performance.</option><option value="D">D. establishing authority.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: initiating action.</h5><h5>Merging with another company is a major change for a business; therefore, it is
important to analyze the advantages, disadvantages, strengths, and weaknesses associated with the
potential merger by summarizing information in an analytical report. Reports that address financial issues
associated with a certain course of action, such as a merger, are called due diligence reports. A market
analysis summarizes information about a segment of the population. Troubleshooting analyses provide
guidance for solving problems with a product or process. A justification report provides information that
supports or justifies a previous course of action.
</h5></div><h5 id='q100'>100. Which of the following statements is true about the business communications in Guatemala:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. It is an acceptable practice to discuss political and environmental issues with Guatemalans.</option><option value="B">B. Guatemalans prefer to get right to business rather than engaging in personal conversation.</option><option value="C">C. Guatemalans tend to talk at the same time, so foreigners should speak loudly.</option><option value="D">D. It is customary for Guatemalans to begin with social talk before addressing business issues.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3
</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: It is customary for Guatemalans to begin with social talk before addressing business issues.

2010 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3
</h5><h5>Explanation not available</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Business-Admin_11_Whole_Homework.js"></script></html>