<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Business-Admin Exam 7</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Pedro Sanchez works as a loan processor for the MON Company, which is located in Smithsville. Pedro
has recently approved an application to extend a $10,000 line of credit to Mrs. Jones. Who is the creditor
in this situation?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Mrs. Jones</option><option value="B">B. Pedro Sanchez</option><option value="C">C. MON Company</option><option value="D">D. City of Smithsville</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: MON Company</h5><h5>The debtor is the individual or business that owes money to another individual or
business, which is the creditor. In the situation presented, MON Company is the creditor because the
company has the finances to extend credit to Mrs. Jones (the debtor), allowing her to pay later. Pedro
Sanchez is an employee of the creditor. The location of the company is not a factor in determining the
debtor-creditor relationship.
</h5></div><h5 id='q2'>2. A type of business ownership in which one or more of the owners does not have full liability is called a</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. sole proprietorship.</option><option value="B">B. general partnership.</option><option value="C">C. limited partnership.</option><option value="D">D. service organization.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: limited partnership.</h5><h5>In a limited partnership, one or more partners has limited liability in terms of the
amount of financial responsibility or the amount of involvement in the business. A sole proprietorship is
owned by one person, and the owner has unlimited liability. A service organization is a provider of
intangible products, not a type of business ownership. In a general partnership, all partners are liable for
the debts or losses of the business.
</h5></div><h5 id='q3'>3. Which of the following is not a barrier to effective verbal communication:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Asking for clarification</option><option value="B">B. Thinking of what to say next</option><option value="C">C. Interrupting the speaker</option><option value="D">D. Judging the speaker's appearance</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: Asking for clarification</h5><h5>Effective listeners give full attention to what is being said and ask questions to
make sure that they understand the message. Listeners who interrupt are focusing on themselves rather
than the speaker. Judging the speaker's appearance distracts the listener from what is being said.
Thinking of what to say next instead of listening to what is being said is a common barrier to effective
communication.
</h5></div><h5 id='q4'>4. If an employee needs to do some research to answer a customer's telephone inquiry, the best action for
the employee to take is to obtain the customer's telephone number and then</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. put the customer on hold until the research has been completed.</option><option value="B">B. ask the sales manager to call the customer back.</option><option value="C">C. send the customer literature about the business and its products.</option><option value="D">D. follow-up with the customer after obtaining the requested information.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: follow-up with the customer after obtaining the requested information.</h5><h5>When employees do not know the
answer to their customers' questions, they should take steps to get the answers. This often involves
researching the problem or issue. When extensive research is required, an employee should obtain the
customer's contact information and call him/her back with the requested information after the research
has been completed. The nature of the inquiry determines if literature should be sent to the customer or if
another employee or manager should answer the customer's inquiry. For example, a question about a bill
may be better answered by an accounts-receivable employee than a purchasing agent. And, in this
situation, it would be inappropriate to send product information.
</h5></div><h5 id='q5'>5. In which of the following situations might it be difficult to give effective verbal directions:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Information is complex.</option><option value="B">B. Time is important.</option><option value="C">C. Managers are organized.</option><option value="D">D. Employees are focused.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: Information is complex.</h5><h5>In some situations, it is difficult to give effective verbal directions. One situation is
if the information is complex. Managers sometimes make the mistake of believing that all directions can
be given verbally. However, if the information is complex and requires an extensive explanation, it may
be better to provide verbal directions as well as written instructions or diagrams. If the complex
information is difficult to understand, employees will be better able to follow the directions if they are
presented in several ways. It is not difficult to give effective verbal directions if time is important,
managers are organized, or employees are focused.
</h5></div><h5 id='q6'>6. When preparing to deliver an oral presentation, the most important step is</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. practicing the delivery.</option><option value="B">B. conducting research.</option><option value="C">C. writing useful note cards.</option><option value="D">D. choosing the best visual aid.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: practicing the delivery.</h5><h5>When preparing to deliver an oral presentation, practicing the delivery is most
important because it uncovers any problems with timing, transitions, note cards, visual aids, and even
language. Conducting research, writing useful note cards, and choosing the best visual aid are all
important steps, but they do not affect other areas as much as practice does.
</h5></div><h5 id='q7'>7. The business manager tried to write a promotional letter that was simple, clear, and interesting so that
customers who received it would</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. easily understand it.</option><option value="B">B. need to read it many times.</option><option value="C">C. find it entertaining.</option><option value="D">D. ask what it really meant.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: easily understand it.</h5><h5>Effective written communications are those that are presented clearly, in simple
language, and in an interesting style so that readers will easily understand the message. Written
business messages do not need to be entertaining. When written communications are unclear,
complicated, or difficult to understand, readers tend to lose interest and ignore them. Readers should not
have to read written communications many times to find out what they really mean.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1072

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

1

1. Pedro Sanchez works as a loan processor for the MON Company, which is located in Smithsville. Pedro
has recently approved an application to extend a $10,000 line of credit to Mrs. Jones. Who is the creditor
in this situation?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Indented first paragraph</option><option value="B">B. Double-spacing within the paragraph</option><option value="C">C. No paragraph indents</option><option value="D">D. All paragraphs use right justification.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: All paragraphs use right justification.</h5><h5>plans and strategic plans.
</h5></div><h5 id='q9'>9. What component is important to include in all types of inquiry letters?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Contact information</option><option value="B">B. Personal qualifications</option><option value="C">C. Project specifications</option><option value="D">D. Attention-getting title</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is A: Contact information</h5><h5>When employees do not know the
answer to their customers' questions, they should take steps to get the answers. This often involves
researching the problem or issue. When extensive research is required, an employee should obtain the
customer's contact information and call him/her back with the requested information after the research
has been completed. The nature of the inquiry determines if literature should be sent to the customer or if
another employee or manager should answer the customer's inquiry. For example, a question about a bill
may be better answered by an accounts-receivable employee than a purchasing agent. And, in this
situation, it would be inappropriate to send product information.
</h5></div><h5 id='q10'>10. Which of the following might a manager send to corporate management on a regular basis to briefly
summarize the work accomplished:</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Business plan</option><option value="B">B. Project proposal</option><option value="C">C. Strategic plan</option><option value="D">D. Weekly activity report</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: Weekly activity report</h5><h5>This is a brief summary of work accomplished that is submitted periodically for
management's review. Periodic reports usually are short and informal. A project proposal is usually a
longer and more formal report. Business owners and/or the business's executive management develop
business plans and strategic plans.
</h5></div><h5 id='q11'>11. Jacob is determining the writing style to use for an analytical report. If most of readers are likely to
support the report's content, Jacob should format the report for a(n) __________audience.</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. intellectual</option><option value="B">B. indecisive</option><option value="C">C. argumentative</option><option value="D">D. receptive

®
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: receptive

®
</h5><h5>Explanation not available</h5></div><h5 id='q12'>12. In which component of a research report should the writer place the following statement:
"Based on our findings, we believe that it is imperative that PNJ Corporation make the necessary
adjustments."</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Methodology</option><option value="B">B. Analyses
</option><option value="C">C. Assumptions</option><option value="D">D. Recommendations
</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: Recommendations
</h5><h5>Explanation not available</h5></div><h5 id='q13'>13. Which of the following is an example of an employee using nonverbal communication effectively to
reinforce his/her service orientation:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Molly nodded and maintained eye contact as Ms. West explained the problem with her computer.</option><option value="B">B. When Mrs. Jones complained that her steak was not cooked the way she wanted it, Leah rolled
her eyes.</option><option value="C">C. Tristan answered his office telephone and said, “Blanton Industries. How can I help you?”</option><option value="D">D. Paul crossed his arms and tapped his foot impatiently as Mr. Cook asked about a charge on his
bank statement.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: Molly nodded and maintained eye contact as Ms. West explained the problem with her computer.</h5><h5>Having
a service orientation involves expressing a positive, helpful attitude with the business's customers.
Employees' gestures and facial expressions convey their attitudes, which customers often believe is a
reflection of the business's attitudes. Because Molly nodded and maintained eye contact with Ms. West
while she was explaining a computer problem, Molly was indicating that she was listening and willing to
help her customer. Employees are not exhibiting a service orientation by behaving rudely, which may
include rolling their eyes, crossing their arms, and being impatient with customers. Tristan was
demonstrating a service orientation through his verbal rather than his nonverbal communication.
</h5></div><h5 id='q14'>14. In order for a business's handling of complaints to be satisfactory to customers, the business's rules
should be</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. rigid.</option><option value="B">B. strict.</option><option value="C">C. flexible.</option><option value="D">D. firm.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: flexible.</h5><h5>While policies should be consistent, they should also be flexible or subject to interpretation. In
some businesses, management interprets policies, while in other businesses, employees are allowed to
bend the rules in certain situations. Rules that are strict, firm, or rigid would not be subject to
interpretation, which might not be fair to all customers.
</h5></div><h5 id='q15'>15. Having clear customer relationship management goals before putting a program into place helps
businesses to avoid</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. having unsatisfied customers.</option><option value="B">B. purchasing irrelevant technology.</option><option value="C">C. having to lay off employees.</option><option value="D">D. spending any money.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: purchasing irrelevant technology.</h5><h5>Having clear customer relationship management goals before putting a
program into place helps businesses to avoid purchasing irrelevant technology or enacting inappropriate
procedures. It will not necessarily keep businesses from having unsatisfied customers or having to lay off
employees. Businesses will most likely need to spend money on CRM programs, but having clear goals
will keep them from spending money unnecessarily.
</h5></div><h5 id='q16'>16. People are considered to be __________ resources.</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. capital</option><option value="B">B. natural</option><option value="C">C. human</option><option value="D">D. physical</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: human</h5><h5>In economics, people are valued for the work that they do to produce goods and services. This
includes both mental and physical work. Natural resources are found in nature and are used to produce
goods. Capital resources, also called capital goods, include all of the manufactured or constructed items
that are used to produce goods and services.
</h5></div><h5 id='q17'>17. One of the factors that would help a business provide place utility to customers is its</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. low prices.</option><option value="B">B. location.</option><option value="C">C. helpful salespeople.</option><option value="D">D. merchandise selection.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: location.</h5><h5>Place utility is usefulness created by making sure that goods or services are available at the
place where they are needed or wanted by consumers. Many businesses are located in places that make
them easily accessible to consumers. Many types of businesses (e.g., small stores, service businesses)
do not carry a wide selection of goods or have many salespeople. Their prices are often high.
</h5></div><h5 id='q18'>18. Which of the following is a true statement about trade industries:</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Trade industries have very little flexibility because of their size.</option><option value="B">B. Most trade industries are large and employ many people.</option><option value="C">C. Trade industries modify or change the form of products.</option><option value="D">D. The main types of trade industries are retailers and wholesalers.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is D: The main types of trade industries are retailers and wholesalers.</h5><h5>Retailers sell to ultimate consumers,
while wholesalers sell to other businesses. Trade industries do not modify or change the form of
products. Instead, they are responsible for moving goods from producers to consumers or to industrial
users. More than 80% of trade businesses are small, employing fewer than 20 people. These privately
owned trade businesses have a great deal of flexibility.
</h5></div><h5 id='q19'>19. The technology that has had the most influence on globalization has been</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. the Internet.</option><option value="B">B. television.</option><option value="C">C. inexpensive telephone service.</option><option value="D">D. wireless connections.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: the Internet.</h5><h5>The technology that has had the most influence on globalization has been the Internet. It is
literally the "world wide web," connecting people and businesses across the globe. Television,
inexpensive telephone service, and wireless connections have all contributed to globalization, but none
so much as the Internet.
</h5></div><h5 id='q20'>20. John's business has been very successful the past year, and profits increased 15% over the previous
year. John has decided to expand and to hire additional employees. This is an example of how profits</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. provide necessary training for new employees.</option><option value="B">B. guarantee longevity of the business.</option><option value="C">C. increase the sales in a business.</option><option value="D">D. benefit society as well as business.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: benefit society as well as business.</h5><h5>Profits benefit society and business by making it possible for
businesses to grow and hire more employees. Earning profits does not guarantee the life of a business.
Profits make it possible for employers to provide training, but training was not mentioned in this situation.
Profits do not increase sales; increasing sales increases profits.
</h5></div><h5 id='q21'>21. Every pay period, Sarah's employer withholds a certain percentage of her earnings, which her employer
forwards to various government agencies. What type of tax is Sarah's employer withholding?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Excise</option><option value="B">B. Estate</option><option value="C">C. Property</option><option value="D">D. Income

</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: Income

</h5><h5>Explanation not available</h5></div><h5 id='q22'>22. Which of the following terms are related to the concept of productivity:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Profit and loss</option><option value="B">B. Supply and demand</option><option value="C">C. Inputs and outputs</option><option value="D">D. Competition and monopoly</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: Inputs and outputs</h5><h5>Productivity is the amount and the value of goods and services produced (outputs)
from set amounts of resources (inputs). The other terms are not related to the concept of productivity.
The law of supply and demand states that the supply of a good or service will increase when demand is
great and decrease when demand is low. Competition is the rivalry between two or more businesses to
attract scarce customer dollars. In a monopoly, a single business influences the entire production of a
particular good or service. Profit is the income left once all expenses are paid, and loss is the income that
is lost due to poor sales, added expenses, etc.
</h5></div><h5 id='q23'>23. In calculating gross domestic product, the goods and services that schools and churches purchase for
their own use are considered to be part of</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. foreign trade deficits.</option><option value="B">B. private domestic investment.</option><option value="C">C. government transfer payments.</option><option value="D">D. personal consumption expenditures.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is D: personal consumption expenditures.</h5><h5>Personal consumption expenditures include the final market value
of all sales of goods and services purchased for direct consumption by an individual, by families, and by
nonprofit organizations such as schools and churches. Personal consumption expenditures are one of
the factors used to calculate gross domestic product (GDP). Private domestic investment, government
transfer payments, and foreign trade deficits are other factors that are taken into consideration when
calculating GDP.
</h5></div><h5 id='q24'>24. Native New Yorker, Carolyn Hendricks is in London to finalize a business contract with British
entrepreneur, Nigel Westwood. After their meeting, Nigel said, "Say, Carolyn. I'm feeling a tad peckish.
Would yeh fancy to go out for a starter, or perhaps a sarnie and crisps?" An astonished Carolyn had no
idea how to respond. What does this example illustrate?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Because minimal vocabulary differences exist between American and Queen's English, few
misunderstandings occur.</option><option value="B">B. Although Americans and British people speak English, the variations of the language can create
barriers.</option><option value="C">C. Americans use proper grammar, while the British tend to use more slang.</option><option value="D">D. Americans tend to speak more slowly and pronounce words more clearly than the British.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: Although Americans and British people speak English, the variations of the language can create
barriers.</h5><h5>In "American" English, Nigel said, "Hey Carolyn, I'm hungry. Would you like to go out for an
appetizer, or perhaps a sandwich and fries?" The example indicates that vocabulary differences and
word usage can create barriers and cause misunderstandings in the same general language. Both the
British and Americans use slang. Because the example is written rather than spoken, it is not possible to
determine if Carolyn was speaking slower and clearer than Nigel.
</h5></div><h5 id='q25'>25. While in Rio de Janeiro, Brazil, German businessperson Hans Dieseldorf wanted to greet an important
Brazilian businessperson in Portuguese. Instead of saying, “Hello, Brazil is a beautiful country,” Hans
said, “Hello, Brazil smells like onions.” This is an example of a(n)</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. translation problem.</option><option value="B">B. inappropriate use of humor.</option><option value="C">C. ethnocentrism issue.</option><option value="D">D. offensive gesture.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: translation problem.</h5><h5>Before using a greeting or phrase in a foreign language, businesspeople need to
make sure that they have the correct translation and pronunciation. Incorrect translations are
embarrassing, and may offend the foreigners rather than impress them. The example may seem like a
humorous situation to some people, but Hans did not intend to be humorous. The situation is a verbal
blunder rather than a physical action or gesture. Ethnocentrism is the belief that your own culture is
naturally better than other cultures. There is no evidence that Hans has this belief.
</h5></div><h5 id='q26'>26. Irish businessperson Nicole McMurray wanted to give Mrs. Fukushima, the wife of a well-known
Japanese business executive, a small token of appreciation for inviting her to dinner. Nicole carefully
selected a gift, wrapped it in white paper, and placed a red bow on top of the package. When Nicole
presented the gift, Mr. and Mrs. Fukushima responded with looks of confusion and frowns. Later, Nicole
learned that the color white signifies death to the Japanese, while red signifies luck. This situation
illustrates that</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. the Japanese culture prefers dark colors, such as gray.</option><option value="B">B. the concept of color is similar throughout the world.</option><option value="C">C. color is not an important concept in most cultures.</option><option value="D">D. different cultures associate different meanings with color.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is D: different cultures associate different meanings with color.</h5><h5>Different cultures attach different associations
to different colors. Therefore, it is important for businesspeople to know and understand these differences
when conducting business in other countries. Nicole likely has positive associations with the color white,
such as pure, clean, angels, brides, etc. However, Japanese people have negative associations with
white because it symbolizes death and dying. After adding a red ribbon to the package, it's no wonder
that Mr. and Mrs. Fukushima were confused, as red signifies luck to the Japanese people. Loosely
interpreted, the gift wrapping indicates that Nicole is wishing them luck when they die. Because red is a
bright color that has positive associations with it, one cannot assume that Japanese people prefer dark
colors. In fact, the Japanese associate cheapness or low quality with the color gray.
</h5></div><h5 id='q27'>27. What issue is associated with product names that businesses often encounter when they start to sell their
products internationally?</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Readability</option><option value="B">B. Length of the product names</option><option value="C">C. Pronunciation issues</option><option value="D">D. Translation issues</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: Translation issues</h5><h5>Because some words are not easily translated into other languages, businesses must
be careful when using an existing or selecting a new name for a product. By using an inappropriate
name, a business might offend an international market segment. The meaning of the name is not an
issue associated with pronunciation, readability, or the length of the product name.
</h5></div><h5 id='q28'>28. Paige is a Canadian businessperson who is attending a meeting in India. What should Paige wear to the
meeting to make a positive, professional impression?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Conservative pantsuit</option><option value="B">B. Ornate jewelry</option><option value="C">C. Leather belt</option><option value="D">D. Sleeveless dress</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: Conservative pantsuit</h5><h5>Appropriate attire is an important consideration when doing business in another
country. The Indian culture dresses modestly, so a conservative pantsuit is appropriate attire. In India, it
is inappropriate for a person to show bare shoulders or legs, so a sleeveless dress is inappropriate
clothing. Ornate jewelry does not project a conservative appearance. Cows are sacred to the Indian
Hindus, so it would be offensive to wear a leather belt.
</h5></div><h5 id='q29'>29. Determine whether the following statement is true or false: Humor is a desirable personality trait for a
businessperson.</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. False, humor makes being an effective leader more difficult.</option><option value="B">B. False, humor detracts from your professional image.</option><option value="C">C. True, humor can make you appear more dependable.</option><option value="D">D. True, humor can make people around you more comfortable.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: True, humor can make people around you more comfortable.</h5><h5>It also helps individuals to handle stress
and maintain self-control, especially during trying situations. Humor is not an indication of dependability.
Humor may make you a better leader by improving your attitude and your ability to show patience and
tolerance.
</h5></div><h5 id='q30'>30. Individuals with initiative usually do __________ they are asked to do.</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. less than</option><option value="B">B. more than</option><option value="C">C. exactly what</option><option value="D">D. little of what

</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: more than</h5><h5>Initiative is the willingness to act without having to be told to do so. Employees with initiative
usually do more than they are asked to do. This is why they are valued by businesses.
</h5></div><h5 id='q31'>31. Which of the following is an example of an employee who is behaving in an unethical manner:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Taking credit for others' work</option><option value="B">B. Using benefits appropriately</option><option value="C">C. Telling the truth to managers</option><option value="D">D. Admitting to all mistakes</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is A: Taking credit for others' work</h5><h5>Ethical employees give credit where credit is due rather than taking all the
credit for accomplishments themselves. Sometimes it is difficult for employees to share the credit with
others, but management often rewards employees who are honest. Admitting to all mistakes, using
benefits appropriately, and telling the truth to managers are examples of ethical behavior.
</h5></div><h5 id='q32'>32. Jack, a manager, said to his staff, "I know that many of you think that this is a risky course of action. But,
I've decided that we should proceed. If this is successful, it could greatly benefit the company. If it fails, I'll
accept the consequences and work to find a new solution." What is Jack doing?</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Accepting responsibility for his decision</option><option value="B">B. Indicating that he doesn't think he's made a good decision</option><option value="C">C. Asking his staff to share the blame, if the action fails</option><option value="D">D. Requesting that his staff support his decision</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: Accepting responsibility for his decision</h5><h5>Because Jack is willing to accept the risks associated with his
decision, he is accepting responsibility for the future outcome of a certain course of action. A person who
takes responsibility for his/her actions often accepts a certain level of risk, and is willing to admit, learn
from, and rectify mistakes. Jack acknowledges risks, but he is not indicating that he believes that he is
making a bad decision. Jack is not asking others to accept blame, nor is he requesting that his staff
support his decision.
</h5></div><h5 id='q33'>33. Jana has a meeting with her boss for two hours at 10:00 Monday morning and is leading a
videoconference at 4:30 that afternoon. Susan, a potential investor, calls Jana early Monday morning and
says that she will be flying in from Portland Monday morning at 11:30. After she picks up her rental car,
Susan wants to meet with Jana early Monday afternoon. Jana knows that meetings with her boss tend to
last longer than expected, and that Susan will have a 45-minute drive from the airport to her office. The
investor could really help the company, so Jana feels that it is important to meet with Susan. What should
Jana tell this important potential investor about meeting on Monday afternoon?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Ask Susan to meet her at her office at noon for a lunch meeting</option><option value="B">B. Tell Susan that Monday is a very bad day and suggest that they schedule a meeting the following
week</option><option value="C">C. Suggest that they meet for lunch at 1:15 p.m. at a restaurant located between the airport and her
office</option><option value="D">D. Advise Susan that she can meet her at the airport lounge at 3:15</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is C: Suggest that they meet for lunch at 1:15 p.m. at a restaurant located between the airport and her
office</h5><h5>Explanation not available</h5></div><h5 id='q34'>34. An employee who has good feelings about the company, always looks on the bright side of things, and
who is optimistic that the business will succeed is said to have a(n) __________ attitude.</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. positive</option><option value="B">B. neutral</option><option value="C">C. negative</option><option value="D">D. indifferent</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: positive</h5><h5>Employees with positive attitudes help to create a positive work atmosphere. Employees with
negative attitudes expect the worst and may actually do the company harm by lowering the morale of
fellow employees or criticizing the company. Employees who are neutral or indifferent would have little to
contribute because of their lack of interest.
</h5></div><h5 id='q35'>35. Which of the following demonstrates a salesperson's empathy for customers:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Showing an understanding of customers' feelings</option><option value="B">B. Creating a favorable impression with customers</option><option value="C">C. Giving customers reasons to purchase a good or service</option><option value="D">D. Selling customers an item to go with what they already bought</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: Showing an understanding of customers' feelings</h5><h5>Empathy is the ability to put yourself in another
person's situation. Salespersons can demonstrate their empathy by showing customers they understand
how the customers feel. Giving customers reasons to buy is feature/benefit selling. Creating a favorable
impression with the customer may be a result of showing empathy. Selling items to go with what
customers have already purchased is selling related items through suggestion selling.
</h5></div><h5 id='q36'>36. Ali wants to negotiate with her boss to take on more job responsibilities. Before approaching her boss, Ali
needs to determine her boss's position and</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. procedures.</option><option value="B">B. abilities.</option><option value="C">C. standards.</option><option value="D">D. interests.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: interests.</h5><h5>The key to successful negotiation is to focus on interests. Interests are the things that you and
the other party want or need. You must consider the other party's interests as well as your own. Ability is
a skill someone uses to perform a task through knowledge, training, and practice. When negotiating, one
party may not necessarily know the other party's skills. Standards are specifications or statements that
are used as a basis for comparing or judging goods or services. Procedure refers to the step-by-step
process someone follows when performing a specific task.
</h5></div><h5 id='q37'>37. A leader who imagines a better way of doing things is exhibiting the trait of</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. empathy.</option><option value="B">B. awareness.</option><option value="C">C. discipline.</option><option value="D">D. creativity.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: creativity.</h5><h5>Creativity is the ability to generate unique ideas, approaches, and solutions. An effective
leader must have the ability to be creative and be able to imagine a better way of doing things.
Leadership demands imagination, enthusiasm, and openness to new ideas. A leader knows that out of a
hundred off-the-wall ideas, there may be one that works. Discipline involves acting in a controlled
manner. Empathy is the ability to put yourself in another person's place.
</h5></div><h5 id='q38'>38. One way that team leaders can show enthusiasm while enlisting others to work toward a shared vision is
by</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. applying for promotions within the organization.</option><option value="B">B. recognizing and rewarding progress toward the vision.</option><option value="C">C. sharing the vision with only certain team members.</option><option value="D">D. avoiding contact with vendors and suppliers.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: recognizing and rewarding progress toward the vision.</h5><h5>One way that team leaders can show enthusiasm
while enlisting others to work toward a shared vision is by recognizing and rewarding progress toward the
vision. This will pass the enthusiasm on to other team members. Applying for promotions within the
organization does not show enthusiasm toward the team vision. Team leaders should share the vision
with all team members and make an effort to get to know suppliers and vendors as well.
</h5></div><h5 id='q39'>39. Because the United States is made up of people from all parts of the world, it has many different</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. sanctions.</option><option value="B">B. governments.</option><option value="C">C. courts.</option><option value="D">D. cultures.

</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: cultures.

</h5><h5>Explanation not available</h5></div><h5 id='q40'>40. Which of the following is NOT a name for a medium of exchange accepted and backed by the
government as payment for goods and services:</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Credit cards</option><option value="B">B. Legal tender</option><option value="C">C. Currency</option><option value="D">D. Bonds</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: Credit cards</h5><h5>They do not qualify as a medium of exchange because they only delay payment; they are
not the payment itself. Legal tender and currency are two names for the same thing: government issued
specimen that are accepted as payment for goods and services. Bonds are an example of legal tender.
</h5></div><h5 id='q41'>41. Which of the following statements about understanding your spending habits is true:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. A key aspect of opening a bank account</option><option value="B">B. A key aspect in exceeding financial goals</option><option value="C">C. The first step in creating a financial plan</option><option value="D">D. The last step in creating a financial plan</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is C: The first step in creating a financial plan</h5><h5>Knowing how you spend your money—understanding your
spending habits—is the first step in creating a financial plan. Knowing your spending habits does not
guarantee that you will exceed your financial goals. Although it's helpful to know how many checks you
expect to write in a month, you don't need to understand your spending habits to open a bank account.
</h5></div><h5 id='q42'>42. Matt is balancing his checkbook for the first time. He compares the checks he has written over the last
month with those listed on his statement and finds that all of his checks have cleared. Next, he verifies
that his latest paycheck, which he deposited the previous day, is on the list. It is not, so he adds it to his
statement balance. After this, he should</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. subtract any interest.</option><option value="B">B. subtract fees and charges.</option><option value="C">C. call the bank for a new statement.</option><option value="D">D. consider everything done.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: subtract fees and charges.</h5><h5>To complete checkbook balancing, Matt needs to subtract fees and charges.
Some financial institutions charge a monthly fee on bank accounts, especially those with less than a
certain balance. They also have charges for new checks, bounced checks, etc. All of these charges
must be subtracted from the balance in the check register to obtain an accurate monthly balance.
Interest is added to, not subtracted from, the check register balance. Matt does not need to call the bank
for a new statement just because the latest deposit is not on his current statement. He does need to
subtract fees and charges and add any interest before he can consider everything done.
</h5></div><h5 id='q43'>43. When Stefanie receives her credit-card statement at the end of the month, she sees that she was
charged for a down-payment on a new car that she hadn't purchased. Which of the following is NOT
something she should do:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. File a police report</option><option value="B">B. Call the car dealership</option><option value="C">C. Contact her credit-card company</option><option value="D">D. Check her credit report</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is B: Call the car dealership</h5><h5>It is more important for her to contact the credit agency and have them contact
the dealership. She should file a police report immediately, because doing so will allow her to take legal
action against the identity thief. Checking her credit report to make sure that it has not been affected is
also something she should immediately do.
</h5></div><h5 id='q44'>44. If a business chooses not to do something that it considers risky, it is __________ the risk.</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. transferring</option><option value="B">B. avoiding</option><option value="C">C. mitigating</option><option value="D">D. accepting</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is B: avoiding</h5><h5>Avoidance is a risk-response strategy that involves choosing not to do something that is
considered risky. Transference is a risk-response strategy that involves moving the impact of a risk to
someone or something else. Mitigation involves reducing or controlling the impact of a risk if it occurs.
Acceptance, also known as risk retention or assumption, involves accepting a risk's consequences
because the potential payoff is higher than the losses.
</h5></div><h5 id='q45'>45. Which of the following is one way that small businesses use technology to perform accounting tasks:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Establishing tax codes</option><option value="B">B. Requesting quotes by e-mail</option><option value="C">C. Filing tax returns online</option><option value="D">D. Developing institutional policies</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is C: Filing tax returns online</h5><h5>Filing tax returns online (via the Internet) is a quick, easy way to transmit tax
information to government tax agencies. By electronically transmitting tax returns, businesses reduce the
lead time that is needed to send the documents by postal mail. Electronic transmission also eliminates
the risk of loss by the postal service. The purchasing department usually obtains quotes for the business.
Tax codes are established by the government. Small businesses do not use accounting software
programs to develop institutional policies.
</h5></div><h5 id='q46'>46. Which of the following is one of the components of a business's cash payments:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Total credit sales</option><option value="B">B. Previous month's balance</option><option value="C">C. Cost of goods</option><option value="D">D. Interest from loans</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: Cost of goods</h5><h5>Cash payments are the specific sources of money flowing out of a business. Cash
payments include cost of goods, variable expenses, and fixed expenses. Cost of goods is the amount of
money a business pays for the products it will sell and often is a sizeable expense. Previous month's
balance is the amount of cash a business has left at the end of the previous month. Total credit sales
equal the amount of purchases that customers make on credit and will pay later. Interest from loans is
income, often from credit sales.
</h5></div><h5 id='q47'>47. Balancing the business's objective to make a profit with the interests of all the business's stakeholders is
a primary consideration related to the business's</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. maintenance activities.</option><option value="B">B. creative processes.</option><option value="C">C. financial ethics.</option><option value="D">D. forecasting methods.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is C: financial ethics.</h5><h5>An important aspect of financial ethics is making sure the business makes a profit and
serves the best interests of its stakeholders (e.g., employees, customers, investors). This would include
honest communication, transparent financial reporting, and fair pricing practices. Creative processes,
maintenance activities, and forecasting methods are important business considerations; however, these
activities are not directly related the business's profitability and the stakeholders' best interests.
</h5></div><h5 id='q48'>48. Which of the following is a benefit to businesses of orienting new employees:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Increases profit</option><option value="B">B. Reduces turnover</option><option value="C">C. Provides information</option><option value="D">D. Eliminates training</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is B: Reduces turnover</h5><h5>The purpose of orienting new employees is to introduce them to the business and
their new work environment, which includes supervisors and coworkers. When new employees are
oriented properly, the turnover rate decreases because the new employees feel comfortable in their new
surroundings and understand their role. One cause of high turnover among new employees is a lack of
proper orientation because they do not know what is expected of them. Orienting new employees does
not necessarily increase profit or eliminate training. The purpose of orientation is to provide information.
</h5></div><h5 id='q49'>49. What is the foundation of knowledge management?</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. An unresolved conflict or problem</option><option value="B">B. An intangible product to market
</option><option value="C">C. A place to store unrelated data</option><option value="D">D. A willingness to share expertise
</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: A willingness to share expertise
</h5><h5>Explanation not available</h5></div><h5 id='q50'>50. Camilla is being promoted and is training Cecily to take over her current position. To help Cecily
acclimate to her new job, Camilla gives Cecily some tips that might help her process her work more
efficiently. What does this example illustrate?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Camilla is providing too much information and is likely to confuse and frustrate Cecily.</option><option value="B">B. Cecily should be cautious about the information that Camilla is giving her because it is probably
incorrect.</option><option value="C">C. Camilla is exhibiting ethical behavior by passing along personal knowledge to help Cecily learn
how to do her job.</option><option value="D">D. Cecily should develop her own way of doing things because it is likely to be better than Camilla's
way.

</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is C: Camilla is exhibiting ethical behavior by passing along personal knowledge to help Cecily learn
how to do her job.</h5><h5>Explanation not available</h5></div><h5 id='q51'>51. How does the fragmentation of processes help to protect a company's trade secret?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. The company will not need to monitor any part of the process.</option><option value="B">B. It replaces the need to obtain a copyright for intellectual property.</option><option value="C">C. Employees' knowledge is limited to a specific part of the process.</option><option value="D">D. The need for non-compete agreements is eliminated.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: Employees' knowledge is limited to a specific part of the process.</h5><h5>By limiting the amount of information
employees have about an entire process, there is less risk that the company's trade secret will be
revealed. For example, to protect Kentucky Fried Chicken's secret breading recipe (11 herbs and spices),
the company mixes small increments of the breading in different locations. Then, the company collects
and mixes the smaller increments to create the famous recipe. By fragmenting the mixing process, no
single employee knows all of the ingredients. Fragmentation of processes does not replace the need to
copyright written or artistic works, eliminate the need for non-compete agreements, or reduce the need to
monitor all aspects of the production process.
</h5></div><h5 id='q52'>52. The use of sorting techniques to capture knowledge involves</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. comparing and ordering concepts.</option><option value="B">B. obtaining and storing confidential information.</option><option value="C">C. documenting relevant facts.</option><option value="D">D. setting long-term objectives.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: comparing and ordering concepts.</h5><h5>Knowledge management involves leveraging the expertise, insight,
and information of internal and external resources to help an organization achieve its goals. An important
aspect of knowledge management involves capturing the expertise, insight and information, so the
business can use it in meaningful ways. A business can use many different tools to capture knowledge in
an organization. Sorting techniques allow the business to compare all of the data and information that it
has collected, categorize it, and place it in a meaningful order or sequence. This process allows the
business to look at all of the knowledge that it has gathered in different ways. This often helps the
business determine efficiencies and inefficiencies within the business. Sorting techniques often help a
business determine if any of the information that it has collected is confidential or relevant. After sorting
and analyzing the information, the business may decide to take corrective action by changing some of its
objectives.
</h5></div><h5 id='q53'>53. Which of the following situations is an example of an employee taking action to increase sales:</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Nigel increases the markup of the company's primary product from 25 percent to 35 percent.</option><option value="B">B. Kevin advises a customer that shipping charges will increase five percent for orders over $1,000.</option><option value="C">C. Nancy orders additional inventory from a vendor who was offering deep discounts for a limited
time.</option><option value="D">D. Annabelle calls on her customers to determine if they need additional products.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is D: Annabelle calls on her customers to determine if they need additional products.</h5><h5>A company should
communicate its business goals to its employees, so the employees understand how their work
contributes to the company's growth and well-being. A sales goal is just one of many types of company
goals. Sales are critical to the company's financial well-being because they generate income and profit
for the company. Annabelle is taking action to increase sales because she is calling on her customers
with the goal of making sales that meet their needs. Kevin is advising a customer about a policy change.
Although Nancy is taking advantage of lower prices by ordering additional inventory, there is no
guarantee that the inventory will sell. Increasing prices may increase the profit margin, but it doesn't
result in higher sales. In fact, if the prices are too high, customers may not purchase the product, and
sales may decrease.
</h5></div><h5 id='q54'>54. The following statement appeared in an online journal article written by Dr. Lydia Garrett:
“Dr. Sanderson has limited expertise in the area of biophysics, and I do not believe that he has
conducted enough research to support his theory.”
This is an example of</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. supporting evidence.</option><option value="B">B. an opinion.
</option><option value="C">C. hearsay.</option><option value="D">D. a fact.
</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: an opinion.
</h5><h5>Explanation not available</h5></div><h5 id='q55'>55. Which of the following is a natural risk that businesses should consider when establishing their
information-management procedures:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Tax audit</option><option value="B">B. Fire</option><option value="C">C. Technology</option><option value="D">D. Privacy</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: Fire</h5><h5>Businesses should manage their information in ways that minimize risk. A natural risk is the
possibility of loss resulting from natural causes such as floods, tornadoes, earthquakes, fire, etc. To
minimize losses due to natural causes, businesses should keep hard copies or digital backups of crucial
business records in a different location. A tax audit is an example of a financial risk. Failing to upgrade or
keep up with new technical products is a technological risk. Businesses often have confidential
information (e.g., customer credit-card information, business trade secrets), which should be secured to
prevent risks associated with the invasion of privacy.
</h5></div><h5 id='q56'>56. Business people often use the calendar applications on their cellular telephones to</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. obtain driving directions.</option><option value="B">B. track their appointments.</option><option value="C">C. send text messages to clients.</option><option value="D">D. check their e-mail.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: track their appointments.</h5><h5>Cellular telephones are available with many options. Many cell phones have
calendar and scheduling applications that allow users to set and track their tasks and appointments. Cell
phones may also include Internet access to check e-mail, text-messaging functions to send text
messages to clients, and global positioning systems (GPS), which are navigational tools that help users
to obtain driving directions.
</h5></div><h5 id='q57'>57. Jamal wants to purchase software for his small business that allows him to create text documents,
prepare presentations, maintain a customer database, and develop numerical charts. What type of
software would best meet Jamal's needs?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Word processing</option><option value="B">B. Integrated</option><option value="C">C. Spreadsheet</option><option value="D">D. Trajectory</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: Integrated</h5><h5>Integrated software applications consist of two or more related computer programs that work
together to record information or perform specific business tasks or functions. An example of integrated
software is Microsoft Office—it consists of several related programs, such as word-processing (Word),
spreadsheet (Excel), presentation (PowerPoint), and database (Access). Trajectory software is used to
measure velocity, wind drift, momentum, etc.
</h5></div><h5 id='q58'>58. Which of the following forms of communication is the most efficient way to bring four coworkers who are
located in different cities together to simultaneously discuss a common business issue:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Switchboard</option><option value="B">B. Audio conferencing</option><option value="C">C. Video camera</option><option value="D">D. Teleprompter</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: Audio conferencing</h5><h5>Audio conferencing is a communication method that allows several individuals to
simultaneously hold a discussion by telephone. Although each person is in a different location, each
person can speak and hear all of the conference participants. Switchboards and teleprompters are not
business tools that allow several people to communicate simultaneously. Video cameras record data in a
digital format.
</h5></div><h5 id='q59'>59. Project-management software can help businesspeople allocate necessary resources and</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. hire contractors.</option><option value="B">B. schedule tasks.</option><option value="C">C. establish credit.</option><option value="D">D. authorize payments.

</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: schedule tasks.</h5><h5>An important aspect of allowing yourself enough time to complete tasks is making sure
that you "pad" your time in case unexpected situations occur that require immediate attention. In Jana's
case, she has several important commitments in one day. It is important for Jana to meet with the Susan
because she could provide the business with needed financial support. The best way for Jana to handle
the situation is to suggest they meet for lunch between the airport and Jana's office at 1:15. This way, if
Jana's meeting with her boss goes a few minutes longer than expected, she still has time to arrive for her
meeting with Susan on time. Susan will have a rental car, so transportation is not an issue for her. It may
not be convenient for Susan to meet with Jana the following week. Because Susan arrives at 11:30 a.m.
and has a 45-minute drive from the airport, she could not meet at Jana's office at noon. A late meeting at
the airport will not allow Jana enough time to get back to the office to lead her videoconference at 4:30.
</h5></div><h5 id='q60'>60. A customer sent the Webster Company a check in the amount of $1,725 as partial payment for a
$2,456.29 purchase. During the current billing cycle, the customer made several purchases, totaling
$466.23. Now, Webster must generate a new account statement to send to the customer. How much
money does the customer owe Webster?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. $731.29</option><option value="B">B. $1,197.52</option><option value="C">C. $466.23</option><option value="D">D. $1,719.51</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: $1,197.52</h5><h5>Many businesses generate account statements to summarize their customers' purchasing
activities and amounts due for a specific time frame. Because the customer sent a partial payment for a
purchase, the balance due should be added to the next statement. To calculate the balance due, first
subtract the amount paid from the original purchase amount ($2,456.29 - $1,725 = $731.29). Then, add
this figure to the total of the most recent purchases ($731.29 + $466.23 = $1,197.52). The customer
owes Webster $1,197.52.
</h5></div><h5 id='q61'>61. Businesses often maintain records about vendors' pricing, delivery terms, and credit policies and use the
information in the records to</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. monitor inventory levels.</option><option value="B">B. negotiate higher discounts.</option><option value="C">C. award purchasing contracts.</option><option value="D">D. follow safe shipping procedures.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: award purchasing contracts.</h5><h5>Businesses maintain records about their vendors and use the information in
the records to award contracts to the most appropriate vendor. When selecting a vendor, a business
usually wants to buy from the vendor that offers the best price for the value, has reasonable delivery
terms, and favorable credit policies. By comparing the information about each vendor, a business can
make an informed decision about the best vendor. This type of information does not help a business to
negotiate higher discounts, monitor inventory levels, or follow safe shipping procedures.
</h5></div><h5 id='q62'>62. Which of the following facility components are inspected by authorized officials to ensure that safety
ordinances are met:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Computer networks</option><option value="B">B. Photocopiers</option><option value="C">C. Elevators</option><option value="D">D. Portable cameras</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Elevators</h5><h5>Governments develop regulations to ensure the public's safety. Government regulations
require businesses to have their elevators inspected on a regular basis by a government agent or
independent entity to ensure that elevators are running correctly. During the inspection, the inspector
might identify problems with the elevators that compromise the employees' and visitors' safety. By
identifying the problems, the business can repair the elevators, so they operate correctly and are in
compliance. Photocopiers, computer networks, and portable cameras are equipment rather than a
component of the facility.
</h5></div><h5 id='q63'>63. A common cause of back injuries on the job is</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. poor posture.</option><option value="B">B. improper lifting.
</option><option value="C">C. hard physical labor.</option><option value="D">D. sitting in one position.
</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: improper lifting.
</h5><h5>Explanation not available</h5></div><h5 id='q64'>64. Why might a business obtain a trademark for its intellectual property?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. To prevent the publication of the business's written work</option><option value="B">B. To protect the integrity of the business's logo</option><option value="C">C. To keep competitors from using the business's manufacturing processes</option><option value="D">D. To stop the unauthorized use of the business's inventions</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is B: To protect the integrity of the business's logo</h5><h5>Trademarks protect unique symbols, designs (e.g., logo),
or words that businesses use to identify their brands. A business can legally protect its logo from
unauthorized use by registering the logo with the appropriate government agency. If an unauthorized
entity compromises or uses the logo in harmful, embarrassing, or negative ways, trademark protection
provides the business with legal recourse. Copyrights provide legal protection for written, musical, and
artistic works. Patents are obtained to legally protect inventions and certain types of processes (e.g.,
unique manufacturing processes) for a limited amount of time.
</h5></div><h5 id='q65'>65. Luke is a purchasing-department employee who must complete his inventory report by 4:00 p.m. on
Tuesday. He must also collect bids and place orders for staple items by Wednesday at noon. Because
Luke knows that it will take a while to obtain the bids, he decides to start contacting vendors before he
begins working on his inventory report. Luke is __________ his workload.</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. prioritizing</option><option value="B">B. delegating</option><option value="C">C. communicating</option><option value="D">D. simplifying</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: prioritizing</h5><h5>Prioritizing involves ranking things in the order of their relative importance. When employees
prioritize their work, they evaluate several factors, including due dates and the time it will take to
complete a task. In Luke's situation, he determined that he needed to start acquiring bids before working
on the inventory report, even though the report was due before the bids. Because Luke realized that he
had to allow vendors time to provide the bids, he needed to give them the order specifications promptly.
Delegating is assigning authority or responsibility to others. Luke is not delegating, simplifying, or
communicating information about his workload to others.
</h5></div><h5 id='q66'>66. Tom needs Allison to provide a status report, so he can review inventory levels. After Tom has reviewed
the inventory report, he must tell Kayla which items the business needs, so she can contact the
appropriate vendors to order stock. To achieve the business's goal of maintaining adequate inventory
levels, each employee must perform his/her tasks in a(n) __________ order.</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. sequential</option><option value="B">B. reverse</option><option value="C">C. informal</option><option value="D">D. flexible</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: sequential</h5><h5>When one task needs to be completed before another task can be started, then the work
must be done in sequential order. As the example illustrates, each employee depends on another
employee to perform a task before s/he can perform his/her assigned task. The work is not being done in
a reverse, informal, or flexible order.
</h5></div><h5 id='q67'>67. What can you do if you will be unable to obtain the amount of financial support that you need to complete
the project?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Decrease time</option><option value="B">B. Eliminate the project</option><option value="C">C. Lower expectations</option><option value="D">D. Cut costs</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: Cut costs</h5><h5>In some cases, the amount of money you think you will need will not be possible to obtain.
When this happens, the most realistic approach is to look for ways to cut costs. If your ideal budget is
based on getting everything you want or would like to have, consider substituting inexpensive materials
for costly ones, or making do without some supplies. By cutting costs, you will be able to proceed with the
project. It is not necessary to lower your expectations because, in most cases, you will be able to
complete the project by making some substitutions. Decreasing the amount of time that is allotted for the
project will not necessarily make up for a lack of funding. Eliminating the project is not a good choice,
either.
</h5></div><h5 id='q68'>68. Purchasing can help manufacturing businesses to sharpen their competitive edge by</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. promoting products to customers.</option><option value="B">B. maximizing inventory investment.</option><option value="C">C. limiting shipment of goods.</option><option value="D">D. keeping their prices down.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: keeping their prices down.</h5><h5>Purchased items, such as supplies, services, or raw materials, add to the final
cost of a manufactured product. Purchasing can help to keep prices down by keeping costs down.
Purchasing is not responsible for product promotion. Limiting shipment of goods would cause customer
complaints. Maximizing inventory investment would increase expenses and make the company less
competitive.
</h5></div><h5 id='q69'>69. If the delivery date is an important factor when placing an order, a buyer must consider the vendor's</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. quantity discounts.</option><option value="B">B. lead time.</option><option value="C">C. unit pricing.</option><option value="D">D. billing process.

</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is B: lead time.</h5><h5>Susan will have a rental car, so transportation is not an issue for her. It may
not be convenient for Susan to meet with Jana the following week. Because Susan arrives at 11:30 a.m.
and has a 45-minute drive from the airport, she could not meet at Jana's office at noon. A late meeting at
the airport will not allow Jana enough time to get back to the office to lead her videoconference at 4:30.
</h5></div><h5 id='q70'>70. Which of the following actions will help a business maintain positive, long-term relationships with its
vendors:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Negotiating aggressively</option><option value="B">B. Limiting communication</option><option value="C">C. Solving problems together</option><option value="D">D. Withholding information</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: Solving problems together</h5><h5>Trust, honesty, and collaboration help a business build positive, long-term
relationships with its vendors. When the business and a vendor collaborate, they work together to solve
problems and implement strategies that will help both of them achieve their business goals. Limiting
communication, negotiating too aggressively, and withholding information may hurt a business's
relationships with its vendors.
</h5></div><h5 id='q71'>71. The Colbert Company ships 19 cases of model number 328 bolts to SOA Manufacturing Company every
other week. This is an example of a(n) ___________ purchase order.</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. advance</option><option value="B">B. standing</option><option value="C">C. seasonal</option><option value="D">D. open</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: standing</h5><h5>Standing orders involve sending products at set intervals. This type of purchase order is ideal
for businesses that need the same amount of an item on a regular basis. In the example, SOA
Manufacturing may need the bolts to produce its products. Because SOA knows that it generates a set
amount of outputs in a certain amount of time, it advises its vendor (Colbert Company) to ship a certain
amount of bolts at intervals—every other week. An advance order is a regular order that is placed now
with delivery requested at a future time (e.g., weeks, months). A seasonal order is an order that is placed
for seasonal merchandise, such as snow shovels or beach umbrellas. An open order is an order for
staple goods that is placed with one of several available vendors who can meet the business's immediate
requirements (e.g., time, price, quantity).
</h5></div><h5 id='q72'>72. Which of the following items would a clothing manufacturer classify as raw-materials inventory:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Zippers, sewing machines, and cloth</option><option value="B">B. Buttons, cloth, and thread</option><option value="C">C. Thread, zippers, and sewing machines</option><option value="D">D. Cloth, zippers, and shirts</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: Buttons, cloth, and thread</h5><h5>Raw-materials inventory are goods (inputs) that are used to make a finished
good (output). Buttons, cloth, thread, and zippers are examples of goods used to make clothing (finished
goods), such as shirts. Sewing machines are equipment used to combine the inputs to create the outputs
or finished goods.
</h5></div><h5 id='q73'>73. What should businesses do before negotiating with vendors?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Make minor concessions</option><option value="B">B. Implement aggressive tactics</option><option value="C">C. Assess vendors' strengths and weaknesses</option><option value="D">D. Adopt a win-lose attitude</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: Assess vendors' strengths and weaknesses</h5><h5>By assessing a vendor's strengths and weaknesses before
entering a negotiation, a business can plan strategies to use that will strengthen its own position during
the negotiating process. Planning and developing effective strategies can help the business obtain
desired discounts, favorable service options, or cooperative advertising support. And, the business may
make fewer concessions during the negotiation because it analyzed the vendor's capabilities before
beginning negotiations. To obtain a favorable agreement, the business should strive for a win-win
attitude. Adopting a win-lose attitude and using overly aggressive tactics may backfire, and prevent both
parties from getting what they want from the negotiation.
</h5></div><h5 id='q74'>74. The Six Sigma model involves continuously implementing activities that</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. influence regulation and decrease outputs.</option><option value="B">B. promote consistency and eliminate resources.</option><option value="C">C. stimulate revenue and lessen decision making.</option><option value="D">D. improve quality and reduce inefficiencies.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: improve quality and reduce inefficiencies.</h5><h5>Six Sigma is a quality-management framework that involves
continuously setting higher goals of perfection. Six Sigma builds upon previous goals to set higher goals
in order to continuously improve the quality of the business's goods, services, or processes. The ultimate
goal is to maximize outputs, reduce inefficiencies and waste, have no process or product defects, and
minimize production costs. If these actions are successful, the business's profits may increase. As a
quality-control framework, the primary purpose of Six Sigma is not to eliminate resources, lessen
decision making, influence regulation, or decrease outputs.
</h5></div><h5 id='q75'>75. Determine whether the following statement is true or false: Employees can help the business to control
expenses by being as productive as possible.</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. False, employee productivity does not help the business.</option><option value="B">B. True, when an employee wastes time, the company is losing money.</option><option value="C">C. True, employees should be productive even when they are ill.</option><option value="D">D. False, employee productivity does not affect expenses.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: True, when an employee wastes time, the company is losing money.</h5><h5>When employees waste time, they
do not produce as much for the company as they could. This means the company is losing money
because of the drop in productivity—the amount and value of products produced from set amounts of
resources. Employees can and should try to be as productive as possible, but this does not mean they
should try to work when they are ill.
</h5></div><h5 id='q76'>76. A businessperson conducted an analysis which indicated that the company's productivity increased15%
last quarter after implementing a new production process. The purpose of the analysis was to</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. reduce organizational waste.</option><option value="B">B. solve a problem.</option><option value="C">C. validate an action.</option><option value="D">D. formulate a plan.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is C: validate an action.</h5><h5>Business analysis is the process of investigating and evaluating a business issue,
problem, process, or approach. Conducting an analysis helps the company determine if it is
accomplishing goals or if it needs to take corrective action, so it can accomplish its goals. Companies
analyze many types of situations. In the situation provided, the company had implemented a new process
and wanted to verify that the process was generating favorable results. The purpose of the business
analysis was not to formulate a plan or to solve a problem. Organizational waste may be reduced as a
result of the new process, which may or may not be a consideration used to validate the success of the
new process.
</h5></div><h5 id='q77'>77. A worker must remove jewelry while working with dangerous equipment. This is an example of a dress
code that is influenced by</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. the nature of the job.</option><option value="B">B. business-image considerations.</option><option value="C">C. personal preferences.</option><option value="D">D. corporate-casual policies.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: the nature of the job.</h5><h5>The nature of the job often dictates how one dresses for work. For example, a
person who routinely works around a lot of heavy, dangerous equipment might need to remove jewelry or
wear specific types of clothing for protection from serious injury. Personal preferences, business-image
considerations, and corporate-casual dress policies are factors that affect how a person dresses for work
but are not necessarily related to the nature of the work.
</h5></div><h5 id='q78'>78. Which of the following would not be scheduled on a daily "To Do" list:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Activities that must be done next month</option><option value="B">B. Required activities from the master list</option><option value="C">C. New activities that must be completed the next day</option><option value="D">D. Activities that were previously scheduled for the day</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Activities that must be done next month</h5><h5>A daily "To Do" list contains the activities that a person plans to
accomplish the next day rather than in the next month. This list should be prepared at the end of one day
for the next day and should be based on the activities that appear on a weekly master list, activities that
were previously scheduled for the upcoming day, and new activities that have surfaced during the day
and must be completed the next day.
</h5></div><h5 id='q79'>79. Which of the following is a career search tool for determining what you are capable of doing now and
might be good at doing with additional training or education:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Intelligence test</option><option value="B">B. Aptitude test</option><option value="C">C. Interest survey</option><option value="D">D. Personality test</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Aptitude test</h5><h5>An aptitude test measures what a person is capable of doing and what s/he might be
capable of doing with additional training or education. Interest surveys measure interest in various
occupations. Intelligence tests measure current knowledge. Personality tests measure personality traits.
</h5></div><h5 id='q80'>80. Employees who work in certain professions are required to pass an examination and obtain a</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. license.</option><option value="B">B. sponsor.</option><option value="C">C. charter.</option><option value="D">D. patent.

</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: license.</h5><h5>Employees in certain professions must be licensed, which means that they must pass an
examination to prove that they are qualified. The license verifies that the individual has completed the
necessary training and met specific state, local, or professional requirements. Some careers that require
licensing include nursing, medicine, teaching, engineering, finance, accounting, cosmetology, and child
care. A sponsor is a business, individual, or organization that pays the costs of promotion. A charter, or
certificate of incorporation, is a permit issued to operate as a corporation. A patent is legal protection of
an invention or a process granted by government to its owners for a certain number of years.
</h5></div><h5 id='q81'>81. Identify the weakness of the following opening paragraph used in a letter of application: Your recent
advertisment in the Gazette for a customer service representative is of interest to me. I would like to aply
for the position.</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Spelling</option><option value="B">B. Format</option><option value="C">C. Grammar</option><option value="D">D. Punctuation</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: Spelling</h5><h5>The words "advertisement" and "apply" were misspelled in the opening paragraph. These errors
will create a negative impression on the employer. Before submitting a letter of application, you should
check for correct spelling, grammar, and punctuation. The opening paragraph does explain the reason
that you are writing the letter—the purpose of the opening paragraph.
</h5></div><h5 id='q82'>82. Membership in a professional association can contribute to your professional growth by helping you to</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. develop leadership skills.</option><option value="B">B. prepare for rejection.</option><option value="C">C. fund personal projects.</option><option value="D">D. eliminate stress.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: develop leadership skills.</h5><h5>Participation in professional associations provides many opportunities for both
personal and professional development. Many organizations plan seminars to help their members
develop leadership and communication skills. An association might schedule a seminar to help their
members understand stress, but the seminar will not eliminate stress. Organizations do not help their
members prepare for rejection or fund personal projects.
</h5></div><h5 id='q83'>83. Employees who are unsure about workplace protocol and procedures should</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. obtain suggestions from coworkers.</option><option value="B">B. follow their instincts.</option><option value="C">C. conduct a formal investigation.</option><option value="D">D. ask their managers to clarify the policies.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: ask their managers to clarify the policies.</h5><h5>Employees need to follow their employers' rules of conduct.
The rules of conduct outline a company's policies, procedures, and expectations regarding employees'
behavior in the workplace. If an employee is unsure about a workplace rule or procedure, then the
employee should ask his/her manager to clarify the business's policies. If the employee violates the
company's rules of conduct, the employee may be reprimanded. Employees should verify the rules of
conduct with their immediate or human-resources managers. Coworkers may not know about certain
workplace policies, or they may communicate incorrect information. If an employee follows his/her own
instincts, s/he may not be following the company's rules of conduct. Employees can simply ask their
managers about workplace rules—it isn't necessary to conduct a formal investigation.
</h5></div><h5 id='q84'>84. Tiffany Evans is the purchasing manager of a janitorial supply company. Which of the following
employees reports directly to Tiffany:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Elizabeth Curtis, assistant buyer</option><option value="B">B. Quinn Montgomery, accounts-receivable coordinator</option><option value="C">C. Christopher Franklin, senior buyer</option><option value="D">D. Logan Grear, shipping clerk</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Christopher Franklin, senior buyer</h5><h5>As the senior buyer, Christopher Franklin reports to Tiffany Evans,
who is the manager of the purchasing department. Elizabeth Curtis reports directly to Christopher
Franklin. Logan Grear most likely reports to the warehouse or distribution manager. Quinn Montgomery
reports to the accounting-department manager.
</h5></div><h5 id='q85'>85. What type of goal is designed to prevent or control internal organizational behavior?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Profit</option><option value="B">B. Product</option><option value="C">C. Order</option><option value="D">D. Short-term</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Order</h5><h5>Organizational goals are the overall objectives or desired outcomes that the business wants to
achieve. Order goals are those that are designed to control or prevent behavior that may have a negative
effect on the business. For example, order goals address ethics and legal issues and expectations in the
workplace. Product goals relate to the goods and services the business produces. Profit goals are related
to pricing goals. Short-term goals are goals that take less than a year to achieve.
</h5></div><h5 id='q86'>86. How can all workers help their employers achieve their organizational goals?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Implement liberal spending habits</option><option value="B">B. Perform their jobs in efficient ways</option><option value="C">C. Develop a mission statement</option><option value="D">D. Delegate their workloads</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Perform their jobs in efficient ways</h5><h5>To achieve its organizational goals, a business relies on its
employees to perform their jobs in the most efficient, accurate, safe, and cost-effective ways. The
organization's mission statement is developed by the organization's owners or management team. The
mission statement acts as a guide for owners and managers, when they are establishing organizational
goals. Managers, rather than workers, delegate the workload.
</h5></div><h5 id='q87'>87. When Deidra was developing the statement of work (SOW) for a complex construction project, she
included a statement that describes the things that the project will and won't include. This statement is
defining the project</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. constraints.</option><option value="B">B. outcome.</option><option value="C">C. risks.</option><option value="D">D. scope.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: scope.</h5><h5>The statement of work (SOW) is a document that outlines the terms, commitments, and
conditions of the project. It includes information about the project's activities, timelines, and deliverables.
The scope statement is a component of the SOW that clearly defines the things that the project will do,
as well as the things it won't do. The scope statement clarifies the boundaries of the project. The
outcomes, risks, and constraints are issues discussed in other components of the SOW.
</h5></div><h5 id='q88'>88. Which of the following is the first step in developing a work breakdown structure (WBS) for a project:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Determine how long it will take to complete each work task</option><option value="B">B. Ensure that work tasks are being completed in the proper order</option><option value="C">C. Evaluate the quality of completed activities in relation to the project goals</option><option value="D">D. Divide the workload into independent work packages</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: Divide the workload into independent work packages</h5><h5>A work breakdown structure (WBS) is the process
of dividing project tasks into meaningful components to complete the project. The related activities in
each component make up the work package. Work packages help the project manager effectively
schedule, assign, and monitor project activities. After dividing the entire workload into independent work
packages, the project manager can determine timeframes, monitor the work, and evaluate the quality of
the work after the activities have been performed.
</h5></div><h5 id='q89'>89. So project-team members understand the project objectives and what is expected of them, project
managers need to</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. develop grievance procedures.</option><option value="B">B. communicate clearly.</option><option value="C">C. eliminate conflict.</option><option value="D">D. make decisions.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: communicate clearly.</h5><h5>An important aspect of effectively managing project teams is communicating
objectives, directions, and expectations clearly, so the team members understand what they are
supposed to do. Conflict can be managed, but not eliminated. Grievance procedures are the formal
method of settling disagreements between workers and employers. Making decisions will not help
project-team members understand objectives and expectations.
</h5></div><h5 id='q90'>90. Which of the following is a question that should be answered when developing the “lessons learned”
document:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. What are the risks?</option><option value="B">B. What equipment should we use?</option><option value="C">C. Who are our stakeholders?</option><option value="D">D. How can we improve?</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is D: How can we improve?</h5><h5>During the closing phase of the project, the project team develops the "lessonslearned" document, which summarizes the project's successes and failures. The document also includes
suggestions for improvement for similar projects in the future, such as process changes or additional staff
support. To include the suggestions for improvement, the project team needs to answer the question,
“How can we improve?” Questions regarding needed equipment, stakeholders, and risks are addressed
during the initiation phase of the project.
</h5></div><h5 id='q91'>91. A water-filtering company made some changes to its processes that resulted in better tasting water. This
is an example of</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. market development.</option><option value="B">B. quality control.</option><option value="C">C. opportunity cost.</option><option value="D">D. quality improvement.

</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: quality improvement.

</h5><h5>Explanation not available</h5></div><h5 id='q92'>92. The overall purpose of the Six Sigma quality-management framework is to satisfy customers and</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. lower costs.</option><option value="B">B. simplify activities.</option><option value="C">C. improve technology.</option><option value="D">D. identify needs.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is A: lower costs.</h5><h5>In some cases, the amount of money you think you will need will not be possible to obtain.
When this happens, the most realistic approach is to look for ways to cut costs. If your ideal budget is
based on getting everything you want or would like to have, consider substituting inexpensive materials
for costly ones, or making do without some supplies. By cutting costs, you will be able to proceed with the
project. It is not necessary to lower your expectations because, in most cases, you will be able to
complete the project by making some substitutions. Decreasing the amount of time that is allotted for the
project will not necessarily make up for a lack of funding. Eliminating the project is not a good choice,
either.
</h5></div><h5 id='q93'>93. What activity helps businesses identify the various opportunities for continuous quality improvement?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Monitoring data</option><option value="B">B. Setting goals</option><option value="C">C. Establishing budgets</option><option value="D">D. Rationing resources</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: Monitoring data</h5><h5>Continuous improvement is an ongoing process that looks for ways to increase the
levels of excellence in relation to a process, good, or service. By monitoring various data, the business
can detect problems, which can help the business identify ways or opportunities for improvement. After
the business identifies opportunities for improvement, it can set goals to improve quality. The
improvement goals may or may not include budget and resource issues.
</h5></div><h5 id='q94'>94. Which of the following is a true statement about the role of ethics and business risk:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Businesses that follow ethical guidelines often damage their reputations in the marketplace.</option><option value="B">B. The unethical behaviors of a business's managers do not affect the business's employees.</option><option value="C">C. Businesses that provide ethics-training programs can reduce the business's level of risk.</option><option value="D">D. Businesses are not at risk when they assume that their employees understand the importance of
ethics.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: Businesses that provide ethics-training programs can reduce the business's level of risk.</h5><h5>By providing an
ethics-training program, the business can advise its employees about its expectations in relation to
workplace behavior. Because an employee's personal ethics may differ from the organization's ethics, it
is important for the employees to have a clear understanding of the business's expectations. When
employees don't have a clear understanding of the business's expectations, they put the business at risk.
Businesses cannot assume that employees know their expectations. Employees who do not follow the
business's ethics guidelines may cross a legal line without knowing they have done so. If employees
cross ethical lines and break the law, the business may experience fines and obtain unfavorable publicity.
Management sets the tone for ethical behavior, so it is important that managers set a good example for
employees by exhibiting a high standard of ethics. By behaving ethically, the business can protect its
reputation with customers, vendors, and the community.
</h5></div><h5 id='q95'>95. Which of the following is a form of technology that businesses use to reduce the risk of robbery and theft
within their facilities:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Kiosks</option><option value="B">B. Deadbolt locks</option><option value="C">C. Electronic cash registers</option><option value="D">D. Surveillance cameras</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: Surveillance cameras</h5><h5>By placing surveillance cameras throughout the facility, the business can monitor
activities. Visible surveillance cameras tend to discourage robbery and theft. If an individual robs or steals
from the business, the surveillance camera will provide a videotape of the activities, which increases the
chances of catching the assailant. Electronic cash registers are used to process sales transactions.
Kiosks are structures located in public places that are designed to provide information and sell products.
Deadbolt locks are manual rather than electronic security devices.
</h5></div><h5 id='q96'>96. When RWQ Corporation could not obtain insurance coverage to cover a specific type risk from
commercial insurance companies, it formed an insurance company to provide coverage for the risk. This
is an example of a company managing its risk through a(n)</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. organic entity.</option><option value="B">B. captive insurer.</option><option value="C">C. generic provider.</option><option value="D">D. lending institution.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: captive insurer.</h5><h5>When businesses cannot obtain commercial insurance to cover a risk, they may legally
form insurance companies as subsidiaries or sister companies to cover the losses associated with the
risk. These insurance companies are called captive insurers because they exist only to serve a specific
purpose—they are held "captive" by their parent companies. Lending institutions loan money to
individuals and businesses. Generic provider and organic entity are not types of insurance providers.
</h5></div><h5 id='q97'>97. Which of the following is an activity associated with the organizing function of management:</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Inspecting the quality of outputs</option><option value="B">B. Developing a mission statement</option><option value="C">C. Determining the division of labor</option><option value="D">D. Providing employees with feedback</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: Determining the division of labor</h5><h5>Organizing is the management function of setting up the way the
business's work will be done. Determining how to divide the work is an organizing activity. A mission
statement, the firm's statement of purpose, is considered when conducting planning activities. Inspecting
outputs and providing employees with feedback are controlling activities.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1072

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

1

1. Pedro Sanchez works as a loan processor for the MON Company, which is located in Smithsville. Pedro
has recently approved an application to extend a $10,000 line of credit to Mrs. Jones. Who is the creditor
in this situation?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. What are the company's product quality standards?</option><option value="B">B. What is the company's vision?</option><option value="C">C. How should the workload be distributed?</option><option value="D">D. How will the company compensate this worker?</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: How will the company compensate this worker?</h5><h5>plans and strategic plans.
</h5></div><h5 id='q99'>99. A primary activity of the directing function of management is</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. evaluating performance.</option><option value="B">B. identifying skills.</option><option value="C">C. initiating action.</option><option value="D">D. establishing authority.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: initiating action.</h5><h5>A person who
takes responsibility for his/her actions often accepts a certain level of risk, and is willing to admit, learn
from, and rectify mistakes. Jack acknowledges risks, but he is not indicating that he believes that he is
making a bad decision. Jack is not asking others to accept blame, nor is he requesting that his staff
support his decision.
</h5></div><h5 id='q100'>100. John's business has been very successful the past year, and profits increased 15% over the previous
year. John has decided to expand and to hire additional employees. This is an example of how profits</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. provide necessary training for new employees.</option><option value="B">B. guarantee longevity of the business.</option><option value="C">C. increase the sales in a business.</option><option value="D">D. benefit society as well as business.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: benefit society as well as business.</h5><h5>Profits benefit society and business by making it possible for
businesses to grow and hire more employees. Earning profits does not guarantee the life of a business.
Profits make it possible for employers to provide training, but training was not mentioned in this situation.
Profits do not increase sales; increasing sales increases profits.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Business-Admin_3_Split_Homework.js"></script></html>