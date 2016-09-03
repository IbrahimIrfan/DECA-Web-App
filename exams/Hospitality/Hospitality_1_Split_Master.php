<?phpob_start();session_start();require_once 'dbconnect.php'if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=1></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Hospitality_Exam_1</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. What type of debtor-creditor relationship involves the acquisition and use of credit cards?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Customary</option><option value="B">B. Unintentional</option><option value="C">C. Voluntary</option><option value="D">D. Implied</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: Voluntary</h5><h5>The debtor is the individual or business that owes money to another individual or business
(creditor). An individual or business that obtains a credit card from a financial institution or retailer is
entering into a voluntary debtor-creditor relationship, which means that both the debtor and the creditor
enter the relationship willingly and understand the risks and expectations regarding the extension and
use of credit. Unintentional, customary, and implied are not types of debtor-creditor relationships.
</h5></div><h5 id='q2'>2. One of the characteristics of the form of business ownership known as an LLC is that</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. this kind of business can last indefinitely.</option><option value="B">B. it is required to have at least three owners (members).</option><option value="C">C. the IRS collects taxes based on the LLC's gross income.</option><option value="D">D. the owners' personal property cannot be taken to pay the business's debts.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is D: the owners' personal property cannot be taken to pay the business's debts.</h5><h5>An LLC (limited liability
company) form of business ownership is growing in popularity because of some of the ways it benefits its
owners. One of these is that the owners' personal property cannot be taken by creditors to satisfy the
debts of the LLC. Other characteristics of the LLC include its limited life and taxation of the owners'
income rather than the LLC's income. LLCs may need to have at least one or two members but does not
necessarily set a minimum of three members.
</h5></div><h5 id='q3'>3. A community experiences an increase in food and beverage taxes. How might the tax increase impact
the hospitality industry in the community?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. The tax increase forces hotels to increase their room rates on a seasonal basis.</option><option value="B">B. Hotel restaurants and banquet facilities generally increase the prices of their products.</option><option value="C">C. Hotels have more unoccupied rooms because consumers have less discretionary income.</option><option value="D">D. Most hospitality businesses are not affected by changes in taxation rates.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: Hotel restaurants and banquet facilities generally increase the prices of their products.</h5><h5>When a
community's leaders create legislation to increase taxes for food and beverage products, the businesses
that supply the products pass the tax increase to the consumer by raising prices on the products. The
types of businesses that provide food and beverage products include hotel restaurants and banquet
facilities. A tax increase in a certain community does not necessarily lead to less discretionary income for
all consumers of the hospitality product. If the hospitality segment in the community is comprised of more
restaurants than lodging facilities, then most of the hospitality businesses in the community are affected
by the tax increase. Food and beverage tax increases do not necessarily affect the price of the lodging
product since some lodging facilities (e.g., economy) do not offer food and beverage products. Because
some lodging facilities do not offer food and beverage product, tax increases do not necessarily force
lodging facilities to increase room rates on a seasonal basis.
</h5></div><h5 id='q4'>4. A business that makes sure that a line of seasonal goods is in stock and on display when the first
advertisement appears in the newspaper is coordinating channel management with</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. pricing.</option><option value="B">B. visual merchandising.</option><option value="C">C. promotion.</option><option value="D">D. public relations.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: promotion.</h5><h5>Coordinating channel management with other marketing activities such as promotion is
important to businesses because they need to have the goods in stock when they are advertised.
Businesses that promote goods they do not have in stock or on display run the risk of irritating customers
who want to buy the items. Businesses usually make sure that seasonal items will be delivered in
sufficient quantities and in time to be on display when the first advertisement appears. Visual
merchandising is display of merchandise in a store or department but does not involve having the goods
in stock. Pricing involves determining and adjusting prices to maximize return and meet customers'
perceptions of value. Public relations is a function of business that aims to establish good relations
between the business and the public.
</h5></div><h5 id='q5'>5. Which of the following actions are foreign hotel chains taking that most encourages bookings by travel
agents in a different country:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Providing a website with secure online booking capabilities</option><option value="B">B. Listing a toll-free number to call to book reservations</option><option value="C">C. Paying commissions in the travel agents' currency</option><option value="D">D. Renovating the hotel chain to provide the comforts and conveniences found in the home country</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: Paying commissions in the travel agents' currency</h5><h5>This makes it convenient for travel agents and saves
having to pay bank fees for converting the money. In this way, travel agents receive the full amount of
their commissions. The other alternatives will encourage individual as well as travel agent bookings but
not to the extent of paying commissions in the travel agent's currency.
</h5></div><h5 id='q6'>6. Which of the following business resources provides information about the company's dress codes and
vacation policies, and general rules for appropriate behavior:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Personnel record</option><option value="B">B. Productivity manual</option><option value="C">C. Customer newsletter</option><option value="D">D. Employee handbook</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: Employee handbook</h5><h5>Businesses often develop employee handbooks that provide information about
their general policies and procedures. For example, a business might outline overtime and vacation
policies, disciplinary and grievance procedures, pay schedules, dress codes, and behavioral expectations
in its employee handbook. Employee handbooks are usually given to new employees when they first start
their jobs. Productivity manuals, customer newsletters, and personnel records are not sources that
workers use to obtain information about a company's general policies and procedures for employees.
</h5></div><h5 id='q7'>7. What should employees be willing to accept when defending their ideas objectively?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Additional responsibility</option><option value="B">B. Critical feedback</option><option value="C">C. Nonverbal support</option><option value="D">D. Personal attack</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: Critical feedback</h5><h5>When employees present their ideas to management or coworkers, they should be
prepared to defend those ideas and provide supporting information. They also should be willing to accept
critical feedback because others might not agree with the ideas or have different opinions. Being
prepared will help employees remain objective and be able to offer logical evidence to back up their
ideas. Critical feedback is often useful because it allows employees to view their ideas from a different
perspective. Defending ideas usually does not involve accepting additional responsibility or nonverbal
support. It is not acceptable to attack employees on a personal level because of their ideas.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this
policy up to and including disqualification of competitors and chapters from further participation.

Test 1104

HOSPITALITY AND TOURISM CLUSTER EXAM

1

1. What type of debtor-creditor relationship involves the acquisition and use of credit cards?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Make sure group members understand the group's purpose.</option><option value="B">B. Find out what group members know about the subject.</option><option value="C">C. Summarize what the group has said during the discussion.</option><option value="D">D. Build on another group member's comment.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: Build on another group member's comment.</h5><h5>portable computers without being directly connected to cable service. An affiliate partner is a business
that agrees to promote and sell another business's products on the Web in exchange for a sales
commission.
</h5></div><h5 id='q9'>9. Why is it important for speakers to rehearse an oral presentation?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Rehearsing allows the speaker to analyze the accuracy of the message content.</option><option value="B">B. Rehearsing encourages the speaker to develop the notes for the presentation.</option><option value="C">C. Rehearsing helps the speaker improve the delivery of the message.</option><option value="D">D. Rehearsing provides the speaker with verbal feedback from the intended audience.
®
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: Rehearsing helps the speaker improve the delivery of the message.</h5><h5>Rehearsing the presentation
provides the speaker with an opportunity to make sure that s/he is speaking at the appropriate pitch. It is
also a chance to monitor nonverbal behavior such as distractive gestures or mannerisms (e.g., swaying).
Presentation rehearsal allows the speaker to time the presentation and decide what revisions are needed
before the final event. Presentation notes are developed before rehearsal. The accuracy of the message
content should be verified at the time the presentation is developed. Verbal feedback from the intended
audience is provided at the final event, not at the rehearsal.
</h5></div><h5 id='q10'>10. An employee is preparing a formal report and must present important facts in the sequence in which they
occurred. The employee should prepare the report by presenting the information in ___________ order.</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. concurrent</option><option value="B">B. inverted</option><option value="C">C. chronological</option><option value="D">D. reverse</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: chronological</h5><h5>When describing a process or historical information, the writer may need to present the
facts in chronological order. By describing the steps or events in the sequence in which they occur, the
writer is presenting the information in a logical manner, which helps the readers understand the content.
When presenting information in an inverted order, the writer is describing the steps or processes in
reverse order. Concurrent means that activities are being performed at the same time.
</h5></div><h5 id='q11'>11. Businesspeople need to use the correct words in written communication in order to make sure that the
receiver __________ the message.</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. understands</option><option value="B">B. agrees with</option><option value="C">C. accepts</option><option value="D">D. approves of</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: understands</h5><h5>Using the correct words in written communication is one way for businesspeople to make
sure that the receiver understands the message. Correct and accurate language usage generally
conveys the intended message and makes it easier for people to understand. Using the correct words will
not necessarily ensure that the receiver accepts, agrees with, or approves of the message.
</h5></div><h5 id='q12'>12. A memorandum is typically used for communication that takes place</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. between friends.</option><option value="B">B. among competitors.</option><option value="C">C. infrequently.</option><option value="D">D. within a business.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: within a business.</h5><h5>Memorandums are a frequently used form of brief, written communication exchanged
by people within an organization. Memorandums are rarely used among competitors or between friends.
</h5></div><h5 id='q13'>13. Every Friday, Odessa is supposed to remind employees to complete and sign their time sheets before
going home for the weekend. What is the most appropriate channel for Odessa's reminder to
employees?</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Fax</option><option value="B">B. Email</option><option value="C">C. Phone</option><option value="D">D. Letter</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is B: Email</h5><h5>The most appropriate communication channel for routine workplace messages such as Odessa's
reminder to employees is email. Since her message is likely to be the same each week, she can write the
reminder once and then set up her email program to automatically send the message to each employee
at the end of each week. Phoning each employee to remind him/her would be very time-consuming.
Every employee probably does not have her/his own fax machine. Sending a letter to each employee
every week via the postal service would be expensive.
</h5></div><h5 id='q14'>14. What trait is being demonstrated when employees treat customers with respect and without prejudice?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Honesty</option><option value="B">B. Integrity</option><option value="C">C. Consideration</option><option value="D">D. Empathy</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: Consideration</h5><h5>Employees should treat others, whether they are customers, coworkers, or supervisors,
with consideration. This means being helpful and respectful and not being prejudiced. Business image,
work environment, and employees' personal images are all reflected in the manner in which people are
addressed. Empathy is the ability to put oneself in another's place. Honesty and integrity refer to a
person's truthfulness and ethics.
</h5></div><h5 id='q15'>15. What is the first step in handling customer complaints?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Let the customer explain the problem.</option><option value="B">B. Call the manager for assistance.</option><option value="C">C. Ask the customer to be brief.</option><option value="D">D. Make a record of all the facts.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: Let the customer explain the problem.</h5><h5>Until it is determined otherwise, one should assume that the
complaint is legitimate. After the customer's explanation, ask whatever questions may be necessary to
obtain facts needed in solving the problem. Asking the customer to be brief may anger the customer. The
manager should not be called unless you cannot handle the situation to the customer's satisfaction.
</h5></div><h5 id='q16'>16. The ABC corporation's privacy policy states that the company will maintain the confidentiality of its
customers' information at all times. Which of the following would be a violation of that policy?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Allowing customers the ability to opt-out of the email updates that the business provides</option><option value="B">B. Implementing a frequent-buyers program for the business's customers</option><option value="C">C. Collecting customer information with authorization to develop a customer profile</option><option value="D">D. Selling customer lists without the customers' consent to third parties</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is D: Selling customer lists without the customers' consent to third parties</h5><h5>It is unethical for a business to sell
its customers' information to third parties without the customers' permission because it is a breach of
privacy. When privacy is breached, trust is broken, and customers may defect to the business's
competitors. Implementing a frequent-buyers program, collecting information with authorization, and
allowing customers to opt-out of email updates are ethical actions.
</h5></div><h5 id='q17'>17. The Abbey Hotel uses multiple channels of distribution so that</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. housekeeping has multiple opportunities to clean guest rooms.</option><option value="B">B. there are multiple ways for guests to reserve their rooms.</option><option value="C">C. the hotel manager has multiple chances to speak with staff.</option><option value="D">D. the hotel restaurant offers a multitude of menu choices.

</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: there are multiple ways for guests to reserve their rooms.</h5><h5>Many hotels and resorts have multiple
channels of distribution so that they reach more guests and provide guests with more ways to reserve
their rooms. Guests may reserve their rooms by telephone, in person, through the mail, over the Internet,
and through a myriad of central reservation systems. However, multiple channels of distribution for
reservations do not provide housekeeping with multiple opportunities to clean guest rooms, hotel
managers with multiple chances to speak with staff, or the hotel restaurant with a multitude of menu
choices.
</h5></div><h5 id='q18'>18. Form utility applies only to tangible goods such as</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. doctor's advice.</option><option value="B">B. sweatshirts.</option><option value="C">C. movie tickets.</option><option value="D">D. dry cleaning.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: sweatshirts.</h5><h5>Form utility is usefulness created by altering or changing the form or shape of a good to
make it more useful to the consumer. Tangible items are goods that can be seen or touched. Sweatshirts
are tangible and acquire form utility when the producer makes them from fabrics. Movie tickets, a doctor's
advice, and dry cleaning are all intangible services.
</h5></div><h5 id='q19'>19. Producers are willing to manufacture more of a product when</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. its selling price is increased.</option><option value="B">B. its selling price is decreased.</option><option value="C">C. production costs are increased.</option><option value="D">D. demand for the product is decreased.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: its selling price is increased.</h5><h5>The law of supply states that the quantity of a good or service that will be
offered for sale varies in direct relation to its selling price. Producers are willing to manufacture more of a
product when its selling price is increased because it is more profitable to do so, if costs remain the
same. Price decreases, demand decreases, and production cost increases influence producers to
manufacture less of a product.
</h5></div><h5 id='q20'>20. Businesses that contribute money to local educational, cultural, and training programs are showing social
responsibility to their</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. stockholders.</option><option value="B">B. employees.</option><option value="C">C. customers.</option><option value="D">D. communities.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: communities.</h5><h5>Social responsibility is the duty of business to contribute to the well-being of society. Many
of the decisions that business owners make affect not only the business but the community in which the
business exists. One way that businesses demonstrate social responsibility to their communities is by
contributing money to local educational, cultural, and training programs. Businesses use other methods
to demonstrate social responsibility toward their employees, customers, and stockholders.
</h5></div><h5 id='q21'>21. The owner of a small company decides to stock a new product. Which business activity should the owner
use to inform potential customers about the new product?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Management</option><option value="B">B. Finance</option><option value="C">C. Marketing</option><option value="D">D. Production</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: Marketing</h5><h5>Marketing is the process of creating, communicating, and delivering value to customers and
managing customer relationships in ways that benefit the organization and its stakeholders. The
marketing process provides consumers with a variety of goods and services from which to choose.
Finance involves obtaining and using funds. The management process includes coordinating necessary
resources to meet the day-to-day and long-term business operations. Production includes combining the
human, natural, and capital resources to produce the desired goods or services.
</h5></div><h5 id='q22'>22. How has the spread of capitalism in the world since the early 1990s affected business?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. It has led to improvements in technology.</option><option value="B">B. It has encouraged the growth of a global economy.</option><option value="C">C. It has provided increased protection for domestic businesses.</option><option value="D">D. It has reduced labor costs.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: It has encouraged the growth of a global economy.</h5><h5>The spread of capitalism throughout the world has
given businesses opportunities to expand and reach new markets, thereby encouraging the growth of a
global economy. Improvements in technology may have hastened the growth of capitalism, but not vice
versa. The spread of capitalism has increased competition worldwide, not protecting domestic
businesses. When companies move facilities to other countries with lower labor costs, they are able to
reduce their labor expense. However, the spread of capitalism in the world has not decreased labor
costs.
</h5></div><h5 id='q23'>23. Which phase of the business cycle would most likely have an unfavorable effect on the business
environment:</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Contraction</option><option value="B">B. Expansion</option><option value="C">C. Maturity</option><option value="D">D. Remission</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: Contraction</h5><h5>Businesses are affected by external factors, which include changes in the business cycle.
The business cycle refers to the periods of expansion and contraction in economic conditions. When the
economy is strong and growing (expansion), businesses tend to make profits, expand operations, and
hire more employees. When the economy is on a downswing (contraction), businesses often experience
lower sales and profits, which has an unfavorable effect on the business. If a business's sales and profits
continue to decrease over time, it may lay off workers to cut costs, so it can continue to operate. Maturity
is a stage in a product's life cycle. Remission is not a phase in the business life cycle.
</h5></div><h5 id='q24'>24. The formula that is generally used to measure productivity is</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. labor divided by resources.</option><option value="B">B. outputs divided by inputs.</option><option value="C">C. goods divided by time.</option><option value="D">D. inputs divided by labor.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: outputs divided by inputs.</h5><h5>The formula for calculating productivity is goods and services produced
(outputs) divided by the resources utilized to produce the goods (inputs). Labor is one of several
resources available for use. Goods are only one type of output, and time is only one of several resources.
</h5></div><h5 id='q25'>25. One way that businesses can encourage economic growth without increasing their investment in labor
and capital is by</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. applying for business loans.</option><option value="B">B. asking the government to freeze wages.</option><option value="C">C. increasing their productivity.</option><option value="D">D. buying larger amounts of capital goods.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is C: increasing their productivity.</h5><h5>A productivity increase is an increase in production brought about by more
efficient use of the same amounts of labor and capital. The business does not hire more workers, buy
more capital goods, or borrow more funds but increases the output from the resources at hand, which
usually results in economic growth. Government would not freeze wages at the request of businesses but
only under conditions of national emergency.
</h5></div><h5 id='q26'>26. Which of the following is not a benefit of maintaining a positive attitude:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Learning new skills more easily</option><option value="B">B. Earning fame and money</option><option value="C">C. Achieving your goals</option><option value="D">D. Enjoying better personal relationships

</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: Earning fame and money</h5><h5>Having a positive attitude can help you be more successful in life, but it does
not guarantee fame or money. Benefits of having a positive attitude do include learning new skills more
easily, achieving your goals, and enjoying better personal relationships.
</h5></div><h5 id='q27'>27. Brianna knows that traffic jams cause her stress, so she drives to work before the rush hour whenever
possible. Brianna is using</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. the reward technique.</option><option value="B">B. stimulus control.</option><option value="C">C. the punishment technique.</option><option value="D">D. extinction.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: stimulus control.</h5><h5>Stimulus control occurs when a person attempts to avoid situations that cause him/her
stress. The reward technique involves positive reinforcement given for showing self-control. The
punishment technique is used when negative reinforcement is given for losing self-control. Extinction is
the act of withholding reinforcement in order to change a behavior.
</h5></div><h5 id='q28'>28. Gestures are classified as part of __________ communication.</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. audiovisual</option><option value="B">B. written</option><option value="C">C. verbal</option><option value="D">D. nonverbal</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: nonverbal</h5><h5>Gestures such as pointing, arm-waving, or use of the hands to make a point are part of body
language. This kind of communication is nonverbal because it occurs without words. Written
communication is any form of communication in writing, such as a letter or magazine article. Verbal
communication involves the use of words. Audiovisual communication includes any type of message
transmitted through the use of media such as films.
</h5></div><h5 id='q29'>29. Negotiators decide how to get what they want by</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. making demands.</option><option value="B">B. developing strategies.</option><option value="C">C. establishing rules.</option><option value="D">D. being aggressive.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: developing strategies.</h5><h5>When people are developing strategies (strategizing), they are coming up with a
plan of action to accomplish something. Strategizing for a negotiation involves anticipating the other
person's negotiating styles and strategies, and then planning appropriate responses. This helps the
negotiator prepare for different situations, which often lets him/her identify the most-likely-to-succeed
approach for getting what s/he wants. Establishing ground rules with the other party can facilitate a fair
negotiating environment, but having ground rules may not result in a favorable outcome for one or both
parties. Aggressive behavior is conduct based on a willingness to ignore the rights of others and to take
advantage of them to achieve personal goals. Negotiators do not decide how to get what they want by
making demands, sympathizing, or being aggressive.
</h5></div><h5 id='q30'>30. The first step in resolving a conflict occurs when one of the two people</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. asks for a third party's opinion.</option><option value="B">B. discusses resolution options.</option><option value="C">C. remains calm and objective.</option><option value="D">D. acknowledges the conflict.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: acknowledges the conflict.</h5><h5>You need to recognize, or admit, that a disagreement exists before you can
take action to resolve it. Therefore, acknowledging the conflict is the first step in resolving a
disagreement. Options cannot be discussed until the conflict is recognized. The people should remain
calm and fair during the conflict confrontation. Conflict resolution does not always require a third party's
opinion.
</h5></div><h5 id='q31'>31. Which of the following is not a behavior of an achievement-oriented person:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Not being satisfied with current performance</option><option value="B">B. Taking responsibility</option><option value="C">C. Taking big risks</option><option value="D">D. Producing high-quality work</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: Taking big risks</h5><h5>Taking big risks is not a behavior of an achievement-oriented person. Achievementoriented people assess risk carefully and assume moderate risks, so as not to jeopardize their potential
accomplishments. They do take responsibility and produce high-quality work. They are not satisfied with
current performance and always strive for improvement.
</h5></div><h5 id='q32'>32. Which of the following is a true statement about change:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Everyone reacts differently to change.</option><option value="B">B. Change can be avoided.</option><option value="C">C. Change comes in only one form.</option><option value="D">D. All changes are good.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: Everyone reacts differently to change.</h5><h5>Life is all about changes. Nothing ever stays the same. Some
changes are good, and some changes are bad. And sometimes, it just depends on who you are and how
you look at it. Change comes in various forms, and people react to it in many different ways, but one
aspect of change is constant—it is unavoidable!
</h5></div><h5 id='q33'>33. Effective coaches are patient, dependable, and</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. critical.</option><option value="B">B. approachable.</option><option value="C">C. distracted.</option><option value="D">D. entertaining.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: approachable.</h5><h5>Coaching is enabling other people to reach their true potential by helping them overcome
barriers that are keeping them from doing so. To help others reach their true potential, effective coaches
show their concern for and support of others by being patient, dependable, and approachable.
Approachable coaches have the attitude and demeanor that says, "You can always talk to me. I am here
for you." A person who is distracted or overly critical of others is being insensitive to others' feelings, and
is not exhibiting characteristics of an effective coach. Although an effective coach should have a pleasant
personality, s/he does not need to be amusing or entertaining.
</h5></div><h5 id='q34'>34. Which of the following is a tip that you should follow about office politics:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Work hard.</option><option value="B">B. Voice your opinions readily.</option><option value="C">C. Keep to yourself.</option><option value="D">D. Listen and observe others.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: Listen and observe others.</h5><h5>Office politics exist in every business. People are trying to do their best to look
good to the higher ups so that they can get a promotion, a raise, etc. By listening and observing others,
you can learn how to maneuver the political environment in your company. If you readily voice your
opinions, you may make enemies. Keeping to yourself will not necessarily help you to advance since
people will not have an opportunity to get to know you. In business, working hard is often not enough to
get you noticed by your superiors.
</h5></div><h5 id='q35'>35. When Brandon lost his job due to downsizing, the government sent him an unemployment check to help
him cover his living expenses until he found another job. What is Brandon's source of income?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Transfer payment</option><option value="B">B. Rebate</option><option value="C">C. Refund</option><option value="D">D. Wage garnishment

</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: Transfer payment</h5><h5>Income is money received from outside sources. Sources of income include salaries,
interest earned, dividends, rent, and transfer payments. Transfer payments are monies paid by the
government in which no goods or services are received in exchange, such as welfare benefits, veterans'
benefits, disaster aid, and unemployment. To receive transfer payments, individuals, businesses, or
jurisdictions must meet certain criteria. A rebate is a return of part of the price a customer pays for a
product, usually from the product's manufacturer. A refund is a sum of money given back to individuals or
businesses. Refunds are issued when an excessive amount has been paid (e.g., tax refund) or when
items have been returned to a business. Wage garnishments are court-ordered initiatives that involve
taking income taken from an employee's salary and submitting it to another person or organization.
Examples of garnishments include child support and alimony.
</h5></div><h5 id='q36'>36. Which of the following is a reason that businesses extend credit to customers?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. To take advantage of the convenience</option><option value="B">B. To purchase stock as needed</option><option value="C">C. To save money</option><option value="D">D. To be competitive</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: To be competitive</h5><h5>Businesses must compete with each other for customers. The convenience of being
able to buy now and pay later is often the deciding factor for customers when they are selecting a
company with which to do business. Extending credit to customers does not help the business to
purchase stock as needed. It may, in fact, make it more difficult since the business may not have as
much cash on hand to pay for stock as it would if its customers paid in cash. Extending credit is an
expense to the business, not a saving.
</h5></div><h5 id='q37'>37. Developing a personal budget is an effective way to</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. manage money.</option><option value="B">B. pay bills.</option><option value="C">C. calculate assets.</option><option value="D">D. increase debt.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: manage money.</h5><h5>In this way, travel agents receive the full amount of
their commissions. The other alternatives will encourage individual as well as travel agent bookings but
not to the extent of paying commissions in the travel agent's currency.
</h5></div><h5 id='q38'>38. On January 3, Anna mailed her credit card payment, which was due on January 5. The credit card issuer
received the payment on January 7. What most likely appeared on Anna's credit card statement the
following month?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Late fee</option><option value="B">B. Application charge</option><option value="C">C. Processing charge</option><option value="D">D. Over-limit fee</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is A: Late fee</h5><h5>Credit card issuers often charge late fees for payments that do not arrive on time. Some credit
card issuers charge application fees, which involves billing a customer for applying for credit. Processing
fees are charges to complete certain activities. Over-limit fees are charges applied for credit transactions
that go over or exceed the credit card holder's credit limit.
</h5></div><h5 id='q39'>39. Which of the following is the type of organization that a person can contact to verify that his/her credithistory report is accurate:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Debt collection agency</option><option value="B">B. Credit compliance office</option><option value="C">C. Judicial bankruptcy court</option><option value="D">D. Authorized credit bureau</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: Authorized credit bureau</h5><h5>It is a good idea for people to verify that their credit is accurate by reviewing
their credit-history reports. By reviewing their credit-history reports, people can determine if there are any
problems (e.g., identity theft) or discrepancies on the report and work to get them resolved. These reports
are available by contacting an authorized credit bureau. People do not routinely obtain credit-history
reports from a credit compliance office, a judicial bankruptcy court, or debt collection agency.
</h5></div><h5 id='q40'>40. Electrical storms, floods, and earthquakes are examples of __________ risk.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. human</option><option value="B">B. marketing</option><option value="C">C. natural</option><option value="D">D. economic</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is C: natural</h5><h5>Natural risks are chances of loss which result from natural causes. These are natural
phenomena occurring outside anyone's control. Economic risks are chances of loss due to changes in
the market that force a lowering of prices, change of products, or even failure of businesses. Human risks
are chances of loss caused by human weakness and unpredictability. Marketing is not a classification of
risk.
</h5></div><h5 id='q41'>41. When a business buys buildings, vehicles, and equipment, money is flowing out of the business to
acquire</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. assets.</option><option value="B">B. products.</option><option value="C">C. staples.</option><option value="D">D. supplies.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: assets.</h5><h5>Business owners must spend money to obtain assets, which are anything of value that the
business owns. This results in money flowing out of a business. Some examples of business assets
include land, buildings, vehicles, and equipment. Supplies are industrial goods that are constantly being
purchased and used up in the operation of a business. Products are goods and services. Staples are
goods for which there is constant demand.
</h5></div><h5 id='q42'>42. Balancing the business's objective to make a profit with the interests of all the business's stakeholders is
a primary consideration related to the business's</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. maintenance activities.</option><option value="B">B. creative processes.</option><option value="C">C. financial ethics.</option><option value="D">D. forecasting methods.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: financial ethics.</h5><h5>An important aspect of financial ethics is making sure the business makes a profit and
serves the best interests of its stakeholders (e.g., employees, customers, investors). This would include
honest communication, transparent financial reporting, and fair pricing practices. Creative processes,
maintenance activities, and forecasting methods are important business considerations; however, these
activities are not directly related the business's profitability and the stakeholders' best interests.
</h5></div><h5 id='q43'>43. Which of the following procedures is usually a part of the new-employee orientation process:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Tour of the facilities</option><option value="B">B. On-the-job training</option><option value="C">C. Meeting with a counselor</option><option value="D">D. Evaluation of performance

</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: Tour of the facilities</h5><h5>An important part of most employee-orientation programs is a tour of the facilities.
New employees are taken on a tour of the business and shown the location of various personnel offices,
lunchroom, supply room, and parking facility. The purpose of touring the facilities is to make new
employees feel comfortable in their work environment. Some businesses offer counseling services to
current employees. Employees are not evaluated until they have been on the job for a period of time. Onthe-job training takes place after orientation.
</h5></div><h5 id='q44'>44. Which of the following is a situation that illustrates a hospitality/tourism business collecting primary
marketing information:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. A corporate conference planner reads a trade publication to obtain information about trends in
the event-planning industry.</option><option value="B">B. A car-rental company obtains a research report about travelers' automobile preferences from a
professional association's website.</option><option value="C">C. A motel housekeeping employee delivers extra towels to a guest's room and asks the guest if
s/he needs anything else.</option><option value="D">D. A hotel sales representative follows up with clients to get feedback about their experiences with
the facility's banquet services.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: A hotel sales representative follows up with clients to get feedback about their experiences with
the facility's banquet services.</h5><h5>undefined</h5></div><h5 id='q45'>45. Melissa wants to determine the market size of the bed-and-breakfast lodging market in Mariopolis
County. There are 3,500 customers in the market. An average customer in the market stays at a bedand-breakfast approximately four nights per year. The price of an average bed-and-breakfast room is
$175. What is the estimated size of the Mariopolis County bed-and-breakfast lodging market?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. $2,450,000</option><option value="B">B. $153,125</option><option value="C">C. $1,225,000</option><option value="D">D. $628,250</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: $2,450,000</h5><h5>Market size is a measure of the total dollar amount of potential sales to all customers within
a given market. In this case, Melissa wants to calculate the total dollar amount of potential sales to all
customers within the Mariopolis County bed-and-breakfast lodging market in a year's time. To determine
the market size, first multiply the total number of customers by the number of nights per year that an
average customer stays at a bed-and-breakfast (3,500 X 4 = 14,000). This product represents the total
number of nights that customers stay at bed-and-breakfasts in a year's time. Then, multiply this answer
by the price of an average bed-and-breakfast room (14,000 X $175 = $2,450,000).
</h5></div><h5 id='q46'>46. If 12 people buy a certain product once a month, 18 people buy the product twice a month, 15 people
buy the product three times a month, 14 people buy the product four times a month, and 11 people buy
the product five times a month, what is the mode?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. 18</option><option value="B">B. 2</option><option value="C">C. 5</option><option value="D">D. 14</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: 2</h5><h5>Mode is the value or number that appears the most often. It is the response given by the most people.
In this example, the most people (18) said that they bought a certain product twice, or two times, a week.
Therefore, 2 is the number or value that appears the most often.
</h5></div><h5 id='q47'>47. To make sure the purpose of the content is clear, the data that are placed in a table should be</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. properly labeled.</option><option value="B">B. included in the appendices.</option><option value="C">C. attractively presented.</option><option value="D">D. placed in the report's margins.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: properly labeled.</h5><h5>To make the data more interesting and easier to understand, businesses often present
data in a table. The graphic presentation of data supports and reinforces the oral or written information. It
is important that the data in the table be labeled so the audience understands what the data represent.
To provide clarification for the audience, labeling involves placing headings at the tops of the
corresponding columns or at the sides of the corresponding rows of the table. Although tables can
present data in a visually attractive way, the data will be meaningless without proper labeling. Tables
should be placed in the most appropriate or applicable section of a written report, which might include the
appendices. Large tables usually are not placed in the margins of a written report because of space
limitations.
</h5></div><h5 id='q48'>48. What can business professionals do during oral presentations to ensure their audiences' understanding
of marketing-research findings?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Speak very slowly</option><option value="B">B. Repeat minor points</option><option value="C">C. Include humor whenever possible</option><option value="D">D. Use clear, concise language</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: Use clear, concise language</h5><h5>When making an oral presentation that includes complex research findings,
the speaker should use words that help the audience understand the subject matter. The speaker may
want to repeat key or major points to reinforce important information. The use of humor depends on the
nature of the audience and the topic at hand. Using too much humor or speaking too slowly may irritate
some audience members, which in turn may affect their comprehension of the information.
</h5></div><h5 id='q49'>49. A buying decision begins with a(n)</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. choice.</option><option value="B">B. need.</option><option value="C">C. information search.</option><option value="D">D. assessment of options.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: need.</h5><h5>A buying decision begins with a need. After that, the consumer searches for information, assesses
her/his options, and then makes the buying choice.
</h5></div><h5 id='q50'>50. One of the characteristics of travel and tourism marketing is that it has a significant impact on</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. world climates.</option><option value="B">B. social sciences.</option><option value="C">C. historical facts.</option><option value="D">D. local economies.

</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: local economies.

</h5><h5>undefined</h5></div><h5 id='q51'>51. What is the first factor that should be considered when developing a travel and tourism package for a
specific market segment?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Age, gender, and income of the market</option><option value="B">B. Identity, accessibility, and durability of the market</option><option value="C">C. Economic conditions of the destination</option><option value="D">D. Most appropriate advertising medium</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: Identity, accessibility, and durability of the market</h5><h5>Before a marketing plan can be conceived and
ultimately executed, an organization must be able to name, or identify, the target market and must be
able to communicate information to the group with the ability to buy. A durable market refers to the life
span, or longevity, of the market segment. Some target markets are short term while others are long
term. For example, a vacation package targeted to college students for a beach community that is
building retirement homes has a short-term market. Once the retirement homes are complete, the appeal
to college students decreases. While age, gender, and income may be factors in identifying a target
market, they are not always the first to be considered. The appropriate advertising medium cannot be
determined until the identity, accessibility, and durability of the target market are first assessed.
Economic conditions of the destination are subject to change; this is not always the first factor to
consider.
</h5></div><h5 id='q52'>52. Which of the following is an example of a business applying information to accomplish a task:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Reviewing data on trends to develop new products</option><option value="B">B. Conducting research on consumer preferences</option><option value="C">C. Developing questionnaires for local surveys</option><option value="D">D. Examining promotional activities of competitors</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: Reviewing data on trends to develop new products</h5><h5>Simply obtaining information is not useful unless the
business applies the information to accomplish a task. Reviewing data on trends for the purpose of
developing new products is an example of applying information. The data give the business an idea of
what type of new product customers might want and need. Then, the business develops a product based
on the information. Conducting research, developing questionnaires, and examining promotional
activities are methods of obtaining information. However, they do not involve applying the information to
accomplish a task.
</h5></div><h5 id='q53'>53. Which of the following is a trend in information management:</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Increased compliance laws and regulations</option><option value="B">B. Decreased competition</option><option value="C">C. Decreased number of electronic documents</option><option value="D">D. Increased number of workers in the office</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: Increased compliance laws and regulations</h5><h5>Now, more than ever, the government is cracking down on
corporate dishonesty. Companies must adhere to an increased number of compliance laws and
regulations, and an appropriate information management program is a big part of that. Other trends in
information management include increased competition, an increased number of electronic documents,
and a decreased number of workers in the office.
</h5></div><h5 id='q54'>54. When using a word-processing computer program, which of the following functions allows a user to
remove text from one part of the document and place in another part of the document:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Copy, paste</option><option value="B">B. Cut, paste</option><option value="C">C. Find, replace</option><option value="D">D. Delete, replace</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: Cut, paste</h5><h5>Business employees use word-processing software programs to create text documents, such
as letters, memos, and reports. Most word-processing programs have options that allow the user to move
text from one part of the document to another. To move text, the user highlights the text, touches the
"cut" button, which removes the text from its current position. The user moves the curser to the new
location and touches the "paste" button, which places the text in the new location. This simple process
saves time for business employees because they do not need to delete and retype the information. The
"copy" button duplicates the text but does not remove it from its current location. A "find and replace"
function helps the user to electronically locate and change words within the document.
</h5></div><h5 id='q55'>55. The primary purpose of collaborative software applications in the business environment is to</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. interpret data.</option><option value="B">B. share information.</option><option value="C">C. archive old documents.</option><option value="D">D. maintain authority.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: share information.</h5><h5>They also should be willing to accept
critical feedback because others might not agree with the ideas or have different opinions. Being
prepared will help employees remain objective and be able to offer logical evidence to back up their
ideas. Critical feedback is often useful because it allows employees to view their ideas from a different
perspective. Defending ideas usually does not involve accepting additional responsibility or nonverbal
support. It is not acceptable to attack employees on a personal level because of their ideas.
</h5></div><h5 id='q56'>56. What is needed to post a web page to a website?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. PDF reader</option><option value="B">B. Web server</option><option value="C">C. Wireless router</option><option value="D">D. Affiliate partner</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: Web server</h5><h5>Web servers are computer programs that deliver website content. Some businesses install
and maintain their own web servers. Because installing and maintaining web servers can be expensive,
businesses often decide to pay a fee to a web host, which provides the server space to meet their needs.
A PDF (portable document format) is a widely used document file format that was developed by Adobe.
The format allows users to view content, but users cannot alter the content. The PDF reader is a software
program that allows computer users to view PDF files. Many web pages are saved as PDFs; however,
businesses often use other formats. A wireless router is a device that provides Internet access to laptop
or portable computers without being directly connected to cable service. An affiliate partner is a business
that agrees to promote and sell another business's products on the Web in exchange for a sales
commission.
</h5></div><h5 id='q57'>57. One of the reasons why a chain of hotels might analyze and interpret the marketing information
contained in databases is to</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. survey guests.</option><option value="B">B. compare variables.</option><option value="C">C. tabulate findings.</option><option value="D">D. organize products.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: compare variables.</h5><h5>A chain of hotels might analyze and interpret the marketing information contained in
databases in order to compare several variables that change from property to property. For example, one
hotel might be located in an affluent suburb while another one is located in an urban area. The chain
might analyze the information in its database concerning both communities in order to make appropriate
marketing decisions such as the type of services to offer in each location. Although the chain provides
the same type of goods and services to both communities, it needs to analyze data in order to know if the
consumers in each community have different wants and needs. Before analyzing databases to compare
variables, a chain of hotels might survey guests and tabulate the findings. A chain would not analyze
databases in order to organize products.
</h5></div><h5 id='q58'>58. What is one reason that a business might make its financial records available to a bank?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. To obtain credit</option><option value="B">B. To pay a mortgage</option><option value="C">C. To deposit funds</option><option value="D">D. To open an account</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: To obtain credit</h5><h5>Businesses keep records to verify information for others. For example, if a business
wishes to obtain a loan from a bank, it must provide the bank with financial records to prove that it is
creditworthy. The financial records provide information about the business's income and expenses and
verify that the business will be able to repay the loan. Businesses only need to deposit funds in order to
open an account with a bank. A business that is paying a mortgage already has received a loan.
</h5></div><h5 id='q59'>59. Which of the following is not an example of demographic data:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Education</option><option value="B">B. Employment status</option><option value="C">C. Need for convenience</option><option value="D">D. Religious affiliation

7

</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is C: Need for convenience</h5><h5>Need for convenience is a social/cultural trend, not a demographic statistic.
Demographics are the physical and social characteristics of the population, including such data as
employment status, education, and religious affiliation.
</h5></div><h5 id='q60'>60. One way that businesses maintain the security of data that they send over the Internet to clients is by
using a software program that prevents a(n)</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. search engine from being used.</option><option value="B">B. virus from being downloaded.</option><option value="C">C. attachment from being included.</option><option value="D">D. document from being forwarded.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: document from being forwarded.</h5><h5>Some businesses use software programs that help maintain the
security of data they send over the Internet to clients. These programs prevent documents from being
forwarded to others so the information does not end up in the hands of competitors. Also, these programs
prevent others from copying, editing, or printing the documents which helps maintain the information in its
original form. These software programs do not prevent a virus from being downloaded, an attachment
from being included, or a search engine from being used.
</h5></div><h5 id='q61'>61. What type of safety hazard might be created by plugging too many machines or appliances into one wall
outlet?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Material</option><option value="B">B. Production</option><option value="C">C. Electrical</option><option value="D">D. Operational</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: Electrical</h5><h5>Plugging too many machines, computers, radios, or appliances into one wall outlet can create
a hazard by overloading the electrical circuit. This can cause too much heat to build up at a particular
place on the cord which may create sparks. Plugging in too many machines may create production,
operational, or material problems as well, but the basic cause is electrical.
</h5></div><h5 id='q62'>62. The project manager controls what the project will and will not do, known as the project's</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. scope.</option><option value="B">B. budget.</option><option value="C">C. plan.</option><option value="D">D. schedule.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: scope.</h5><h5>The project manager controls what the project will and will not do, known as the project's scope.
The project's budget refers to how much it will cost to complete. A project's plan will include more than
just a definition of what it will and will not do. A project's schedule is its timeline for completion.
</h5></div><h5 id='q63'>63. To help project managers identify the resources needed for a project, they often develop</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. schedules.</option><option value="B">B. checklists.</option><option value="C">C. timelines.</option><option value="D">D. summaries.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: checklists.</h5><h5>Developing a checklist involves writing down all of the possible resources that might be
needed for a project. Categorizing the resources (e.g., supplies, equipment, people) is a good way for
project managers to organize their resource information and review and update their lists as needed.
Schedules and timelines are usually developed after the resources have been identified. Summaries
provide an overview of larger documents or complex content.
</h5></div><h5 id='q64'>64. Project managers think through the flow of information needed for project success while creating the</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. quality-management plan.</option><option value="B">B. change-management plan.</option><option value="C">C. communications plan.</option><option value="D">D. risk-management plan.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: communications plan.</h5><h5>Retrieved July 31,
2014, from http://www.ehow.com/how_5827868_determine-market-size-business-plan.html
46. B
2. Mode is the value or number that appears the most often. It is the response given by the most people.
In this example, the most people (18) said that they bought a certain product twice, or two times, a week.
Therefore, 2 is the number or value that appears the most often.
</h5></div><h5 id='q65'>65. The production activity that obtains all the resources needed for production to take place is</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. dispatching.</option><option value="B">B. scheduling.</option><option value="C">C. routing.</option><option value="D">D. purchasing.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is D: purchasing.</h5><h5>Purchasing is the buying of resources needed for production. These may include raw
materials, parts, equipment, supplies, machinery, and labor. Scheduling establishes the timetable to be
followed in production. Routing determines the sequence for the steps in the production process.
Dispatching is issuing orders for production to start.
</h5></div><h5 id='q66'>66. Supervising business and manufacturing processes to ensure quality and efficiency is a quality-control
method known as</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. statistical process control.</option><option value="B">B. concurrent engineering.</option><option value="C">C. process performance management.</option><option value="D">D. the Taguchi method.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: process performance management.</h5><h5>Process performance management is a quality-control method that
involves supervising business and manufacturing processes to ensure their quality and efficiency.
Concurrent engineering is performing the various stages of product design and development
simultaneously, instead of one after another. Statistical process control is a quality-control tool that uses
statistics to determine if a process is working properly or not. The Taguchi method focuses on product
design and development over manufacturing.
</h5></div><h5 id='q67'>67. Which of the following is a reason why hospitality and tourism businesses try to decrease their operating
expenses:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. To improve service</option><option value="B">B. To promote efficiency</option><option value="C">C. To expand sales</option><option value="D">D. To increase profit

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: To increase profit

</h5><h5>undefined</h5></div><h5 id='q68'>68. Which of the following is a procedure that a tour operator might use when handling emergency situations
such as natural disasters:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Provide medical advice</option><option value="B">B. Assist with evacuation</option><option value="C">C. Protect private property</option><option value="D">D. Activate alarm system</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: Assist with evacuation</h5><h5>On occasion, tour operators and their tour groups might be involved in emergency
situations such as natural disasters. If this happens, tour operators should be prepared to assist local
authorities with the evacuation of the group. Tour operators need to know where all group members are
in order to quickly and safely evacuate them from dangerous situations such as hurricanes. Tour
operators are not expected to provide medical advice, protect private property, or activate alarm systems.
</h5></div><h5 id='q69'>69. Using an orderly and systematic approach to jobs should make a worker more</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. productive.</option><option value="B">B. open-minded.</option><option value="C">C. careless.</option><option value="D">D. tense.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: productive.</h5><h5>Organized workers tend to be more productive because they plan ahead and can do their
work at a relaxed pace. Being organized does not necessarily make an individual open-minded. Orderly
and systematic workers are more likely to be careful than careless, and they are less likely to be tense
because they have reduced stress.
</h5></div><h5 id='q70'>70. Ron has developed the habit of evaluating his goals on a monthly basis. During this time, he checks off
goals that he has achieved and modifies others as necessary. Ron is very good at choosing goals that
are realistic, attainable, and challenging. He can set up steps to achieve them. Unfortunately, Ron only
achieves 25% of his goals. Ron could improve his rate of goal attainment by</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. avoiding writing down goals.</option><option value="B">B. describing the benefits of setting goals.</option><option value="C">C. telling others about his goal.</option><option value="D">D. lowering his standards and setting unrealistic goals.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: telling others about his goal.</h5><h5>Ron will greatly improve his ability to achieve his goals if he involves
supportive people in the process. People who will encourage Ron to achieve his goals will benefit him
greatly. Describing the benefits of setting goals won't help Ron achieve them. Writing goals down greatly
increases the chance of attainment. Lowering standards and setting unrealistic goals will not improve
goal attainment.
</h5></div><h5 id='q71'>71. An effective time-management approach for the manager of a large staff of employees would be to</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. build flexibility into his/her schedule.</option><option value="B">B. fill each day's work schedule completely.</option><option value="C">C. block off six hours of uninterrupted work time daily.</option><option value="D">D. delegate most managerial responsibilities to an assistant.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: build flexibility into his/her schedule.</h5><h5>The manager's schedule should not be filled completely. The more
people you work with, the more flexible you need to be. Blocking off six hours of uninterrupted work time
would not be possible. Delegating some activities to others will free the manager to do other tasks, but
not all activities could or should be delegated.
</h5></div><h5 id='q72'>72. Lauren was filling out an employment application and encountered a question for which she was unsure
of the answer. What should she do?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Leave a blank space</option><option value="B">B. Write in "unknown"</option><option value="C">C. Make up an answer</option><option value="D">D. Mark down "personal"</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: Write in "unknown"</h5><h5>or "NA" than to leave a blank space
that might make an employer think that an applicant forgot to answer the question. Applicants should
never make up answers. Employment applications are not allowed to contain the types of questions that
would obtain strictly personal information from applicants, such as age or religious preference.
</h5></div><h5 id='q73'>73. What information should appear in the first paragraph of a letter of application?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Telephone number</option><option value="B">B. Salary requirements</option><option value="C">C. Job applying for</option><option value="D">D. Name of applicant</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: Job applying for</h5><h5>The first paragraph of a letter of application should include the name of the job for which
you are applying. A letter of application should come right to the point and immediately let the business
know why you are writing. Stating the exact name of the job is important because there may be several
similar jobs available within the business. Salary requirements generally are not included but, if they are,
they should be mentioned towards the end of the letter of application. A telephone number where the
applicant may be reached is often listed in the last paragraph. The name of the applicant may appear in a
letterhead or in the signature of the letter.
</h5></div><h5 id='q74'>74. The American Marketing Association and the Canadian Marketing Association are examples of</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. focus groups.</option><option value="B">B. trade associations.</option><option value="C">C. support groups.</option><option value="D">D. professional organizations.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: professional organizations.</h5><h5>A professional organization, such as AMA, is a group of persons in the same
profession who form a society to further their common interests—primary focus is generally the
expansion of professional knowledge and the maintenance of high professional standards. A trade
association is formed by a group of persons in the same industry or geographic area to solve their
common problems—increased profit for association members is usually the primary goal of the group. A
focus group is a group interview, often used as a marketing-research technique. A support group is a
group of individuals who share a common problem and are seeking strength and support.
</h5></div><h5 id='q75'>75. What is the estimated size of the Mariopolis County bed-and-breakfast lodging market?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. college degrees.</option><option value="B">B. firsthand experience.</option><option value="C">C. certification.</option><option value="D">D. online instruction.

</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: certification.</h5><h5>Some professional organizations in the travel and tourism industry provide training that
results in conferring a certificate of completion. This certification indicates that an individual has
completed an approved training course and is qualified to perform certain functions. For example, the
National Tour Association awards a certificate to tour professionals who take specific courses and have
at least five years of experience in the tour industry. Not all training programs provide firsthand
experience. Professional organizations do not award college degrees. Some courses are offered online
as a way for participants to obtain certification.
</h5></div><h5 id='q76'>76. The Gray Line bus company offers bus tours in various cities throughout the United States. Gray Line is
included in which of the following components of the travel and tourism industry:</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Wholesale distribution</option><option value="B">B. Hospitality</option><option value="C">C. Travel mart</option><option value="D">D. Ground transportation</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: Ground transportation</h5><h5>This component includes bus companies, car rental companies, railroads, taxis,
and limousines. The hospitality industry includes accommodations, resorts, restaurants, and convention
centers. The travel mart includes retail travel agencies, business travel departments, and travel clubs.
The wholesale distribution component buys products from the other components and sells them through
retail travel agencies.
</h5></div><h5 id='q77'>77. Renaissance is a prestigious cruise line that offers luxury accommodations and charges premium prices.
What factor affecting price of travel products does this illustrate?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Discriminatory pricing</option><option value="B">B. Corporate image and positioning</option><option value="C">C. Competitive pricing</option><option value="D">D. Corporate objectives</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: Corporate image and positioning</h5><h5>This factor involves setting prices that are consistent with overall
company image and position. The cruise line chooses to communicate a deluxe image and set prices
well above average. Discriminatory pricing involves setting two or more prices to appeal to select target
markets. The corporate objectives factor strives to set prices to meet objectives of profit levels, market
share, or sales volume. Competitive pricing involves setting prices based on the goods/services of
competition.
</h5></div><h5 id='q78'>78. Which of the following would be the best option for restaurant managers to do to encourage the
identification of new product ideas:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Encourage their trade association to regularly submit new product ideas to local restaurants</option><option value="B">B. Encourage competitors to recommend new product ideas</option><option value="C">C. Encourage family members to generate new product suggestions and ideas</option><option value="D">D. Encourage employees to report new product ideas from other restaurants they visit</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is D: Encourage employees to report new product ideas from other restaurants they visit</h5><h5>New product ideas
come from a variety of internal and external sources. Some examples of internal sources include
personal observation; formal research and development activities; recommendations from corporate,
employees, family members, and people who provide professional assistance to the restaurant such as
bankers, attorneys, etc. The problem with asking family members for recommendations is that managers
might feel that they can't reject bad ideas. Competitors won't recommend new products because they
don't want to lose business to others. Although trade associations might suggest ideas for new products,
the fact that they're recommending the products to local restaurants would fail to give any one restaurant
a competitive advantage.
</h5></div><h5 id='q79'>79. Which of the following is not a guide that a business should use in determining what to purchase:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Product catalogs</option><option value="B">B. Sales records</option><option value="C">C. Owner interest</option><option value="D">D. Trade associations</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is C: Owner interest</h5><h5>The tastes of the business owner may vary greatly from customer's preferences.
Company records, trade associations, and product catalogs are all valuable tools in determining what to
buy.
</h5></div><h5 id='q80'>80. What is the core product that cruise lines provide passengers?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Luggage handling</option><option value="B">B. Entertainment</option><option value="C">C. Food service</option><option value="D">D. Transportation</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: Transportation</h5><h5>In the hospitality and tourism industry, the core product is the primary service that is
provided. In the case of cruise lines, the core product is transportation because that is what the cruise
lines are selling. Cruise lines are offering the service of transporting passengers from one location to
another. In conjunction with transportation, some cruise lines offer food service. Some cruise lines offer
movies and music to entertain passengers, but entertainment is not the core product. Luggage handling
is available to passengers who check their luggage. However, luggage handling is not the core product.
Customers pay for transportation, not for food service, entertainment, or luggage handling.
</h5></div><h5 id='q81'>81. Tony owns a charter fishing boat business on the Outer Banks of North Carolina. Which of the following
websites would you recommend for Tony to place a pay-per-click advertisement:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. www.surfboardsusa.net</option><option value="B">B. www.obxbaitandtackle.com</option><option value="C">C. www.redlobster.com</option><option value="D">D. www.whitewaterrafting.net</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: www.obxbaitandtackle.com</h5><h5>Pay-per-click ads involve paying a website vendor a set fee each time a
visitor clicks on the sponsor's ad, directing visitors to the ad sponsor's website. In the presented situation,
Tony is the ad sponsor and he wants to place an ad on the website that his target market is most likely to
visit. Because tourists who visit the Outer Banks and like to fish are most likely to access a local bait and
tackle shop's website, Tony should place his ad on www.obxbaitandtackle.com. Surfboarders are most
likely to visit a surfboard website, whitewater rafters are most likely to visit a whitewater rafting website,
and people who like to eat seafood are most likely to access the Red Lobster restaurant's website.
</h5></div><h5 id='q82'>82. Which of the following is an action that is most likely to improve a hospitality business's Internet searchengine rankings:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Including cascading style sheets</option><option value="B">B. Including unrelated jargon in anchor text</option><option value="C">C. Using underscores to separate key words</option><option value="D">D. Using key words in URLs</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: Using key words in URLs</h5><h5>Search engine optimization is the process of designing and submitting web
pages so that they can be found easily by spiders to obtain a good position in the search results. URL is
an acronym for uniform resource locator, which is the website's address. Placing key words related to the
content in the website's URL may improve the website's rank or placement in the search results. Anchor
text is the text that is used in a hyperlink. Anchor text should also include content-related key words
(rather than unrelated jargon) to improve position or rank in search-engine results. The use of
underscores between key words may hinder a good position in the search-engine results. Cascading
style sheets refer to the formats and elements (e.g., font size, color, layout) used to develop a web page.
</h5></div><h5 id='q83'>83. One week prior to its official grand opening, Wacky Wild Fun Park invited 200 teenagers to a
complimentary "sneak preview Saturday" of all that the amusement park has to offer—its rides, food, and
entertainment. At the end of the day, as each teen passed through the exit gate, park employees gave
each guest five Wacky Wild Key chains to pass on to her/his friends. Park employees also reminded the
departing guests to tell their friends about all the fun they had at the amusement park. This is an example
of</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. merchandising.</option><option value="B">B. personal selling.</option><option value="C">C. print advertising.</option><option value="D">D. buzz marketing.

</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: buzz marketing.

</h5><h5>undefined</h5></div><h5 id='q84'>84. Which of the following target markets is most likely to respond favorably to a viral marketing campaign
that includes an interactive game:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Male professionals aged 22 to 29</option><option value="B">B. Female professionals aged 22 to 29</option><option value="C">C. Male professionals aged 30 to 36</option><option value="D">D. Female professionals aged 30 to 36</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is A: Male professionals aged 22 to 29</h5><h5>Viral marketing typically involves creating an entertaining or
informative image, video, or interactive game that can be shared electronically. Research indicates that
students and young professionals are most receptive to viral marketing. While both young males and
females respond well to viral ads in the form of images or video, young men tend to be more responsive
to interactive games than young women are.
</h5></div><h5 id='q85'>85. An important consideration in selecting a customer evangelist for a restaurant is</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. the size of the person's social circles.</option><option value="B">B. the person's educational background.</option><option value="C">C. the person's work schedule.</option><option value="D">D. the person's political affiliation.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: the size of the person's social circles.</h5><h5>Customer evangelists are individuals who are asked to sponsor a
particular business or product. They usually are already acquainted with and devoted to the business or
product. When selecting or developing a customer evangelist for a restaurant, marketers need to
consider the size of the person's social circles. If the person knows a lot of people in a lot of different
places, s/he will have much more opportunity to tell people about the restaurant. The person's
educational background, work schedule, and political affiliation are much less likely to be important when
selecting or developing customer evangelists.
</h5></div><h5 id='q86'>86. Every year, a well-known female talk-show host discusses a variety of products that she likes on the
“favorite things” episode of her syndicated television show. This is an example of a celebrity engaging in</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. word-of-mouth marketing.</option><option value="B">B. sponsorship activities.</option><option value="C">C. online-advertising strategies.</option><option value="D">D. customized communication.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: word-of-mouth marketing.</h5><h5>Buzz marketing involves generating excitement and “buzz” among early adopters of a
product so that they pass along information about the product to others. The amusement park invited 200
teens to be the first to visit the park and asked them to tell their friends about how much they enjoyed it.
Personal selling is a form of promotion that determines client needs and wants and responds through
planned, personalized communication that influences purchase decisions and enhances future business
opportunities. Print advertising is a paid form of nonpersonal presentation of ideas, images, goods, or
services in a newspaper, magazine, etc. Merchandising is the process of having the right goods in the
right place at the right time in order to make a profit.
</h5></div><h5 id='q87'>87. The primary goal of effective Internet advertising copy is to</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. include as much text as possible.</option><option value="B">B. provide personal opinions.</option><option value="C">C. create a sense of urgency.</option><option value="D">D. use humor to convey the message.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: create a sense of urgency.</h5><h5>Internet advertising copy should encourage the reader to take action—to buy
the product. To encourage the reader to buy the product now, the advertising copy should create a sense
of urgency. For example, the copy might include an ending date for a sales promotion. The business's
promotional goals determine if the advertising copy should contain personal opinions or humor. Because
Web surfers tend to scan Internet content quickly, they are likely to ignore an ad that contains too much
text.
</h5></div><h5 id='q88'>88. An important purpose of checking a business's advertising proofs is to</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. compare the ad with competitors' ads.</option><option value="B">B. determine how long the ad should be run.</option><option value="C">C. make sure the firm's name is correct.</option><option value="D">D. select the media that will present the ad.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is C: make sure the firm's name is correct.</h5><h5>All kinds of mistakes are possible in print ads. The firm paying for
the ad should make sure that its name and, in some cases, its address appear correctly in the ad so that
consumers who read the ad will be able to identify the business. The business might also include a
telephone number and hours of business operation with the business identification, and this information
should be checked for accuracy. Questions as to how long an ad will run, what media will present it, and
how it compares with competitors' ads would be answered before a final proof of the ad is prepared.
</h5></div><h5 id='q89'>89. Which of the following is a community issue that a business might decide to become involved with and
support:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Truth in lending</option><option value="B">B. Consumer rights</option><option value="C">C. Food for the needy</option><option value="D">D. Personal ethics</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: Food for the needy</h5><h5>Community issues are those issues that affect the community as a whole such as
homelessness or food for the needy. To be socially responsible, businesses often become involved with
and support certain community issues. This involvement benefits the community because businesses are
able to provide support which often includes money as well as time. The involvement also benefits the
businesses because they receive positive publicity which helps to create a good public image. Consumer
rights, truth in lending, and personal ethics are not community issues.
</h5></div><h5 id='q90'>90. Which of the following activities occurs during the planning phase of the website development process:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Designing the page layout</option><option value="B">B. Writing easy-to-understand copy</option><option value="C">C. Determining how to take orders</option><option value="D">D. Ensuring compatibility of website with browsers</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: Determining how to take orders</h5><h5>During the planning phase of the website development process, the
developer is making decisions that will impact the website's design. Deciding whether and how to take
orders is one of those initial decisions that needs to occur. Writing copy, designing page layout, and
ensuring compatibility of the website with browsers occur during the design phase of the process.
</h5></div><h5 id='q91'>91. When a business negotiates a contract that requires the vendor to arrange for transportation, the
business is negotiating the</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. logistics.</option><option value="B">B. premiums.</option><option value="C">C. payments.</option><option value="D">D. allowances.

</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: logistics.</h5><h5>Logistics involves all aspects of handling and transporting goods. It is an important part of
negotiating a contract because transportation charges are often costly. As a result, most businesses
negotiate who will pay those charges. In some cases, a business might prefer to arrange and pay for
transportation, while other times, a business might want the vendor to be responsible for transportation.
Both parties try to negotiate the best deal. For example, a business might agree to pay for transportation
if the vendor agrees to give a larger discount. The business is not negotiating payments, premiums, or
allowances when requiring the vendor to arrange for transportation.
</h5></div><h5 id='q92'>92. Which of the following should be included in a news release:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Trite expressions</option><option value="B">B. White space and logo</option><option value="C">C. Who, what, when, why, and where</option><option value="D">D. Copy, illustration, and headline</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Who, what, when, why, and where</h5><h5>News releases should contain information about who is involved,
what is happening, when it will occur, why it has been planned, and where it will take place. In some
cases, how something will happen may also be included. Copy, illustration, headline, white space, and
logo are elements of print advertisements. Trite expressions are words and phrases that have lost their
effectiveness because they are overused and should not be used in news releases.
</h5></div><h5 id='q93'>93. Which of the following is part of maintaining an interior display:</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Putting up a new backdrop</option><option value="B">B. Replacing merchandise as it is sold</option><option value="C">C. Changing the color scheme</option><option value="D">D. Putting up new fixtures and lighting</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is B: Replacing merchandise as it is sold</h5><h5>Replacement of merchandise keeps the display looking fresh and
complete. This is particularly true of self-selection displays. Changing the backdrop, colors, fixtures, and
lighting are not display maintenance but ways of giving the display a different look.
</h5></div><h5 id='q94'>94. If a hotel chain wants to track the number of times that Internet users access its website through an ad
placed on another website, what marketing metric should be used?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Click-through rate</option><option value="B">B. Gross page impressions</option><option value="C">C. Cost per click</option><option value="D">D. Transactions per hour</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: Click-through rate</h5><h5>The click-through rate measures the number of times that website visitors click on an
online advertisement that automatically transports the visitors to the advertiser's website. Evaluating
click-through rates of online ads helps businesses determine the effectiveness of the ad. If the clickthrough rate for an ad on a particular website is poor, the hotel chain may decide to stop advertising on
the website and place an advertisement elsewhere. The gross page impressions metric measures the
website's total traffic volume. If the hotel chain wants to determine the advertisement's price on a per
click-through basis, it would use the cost per click metric. The transactions-per-hour metric measures the
number of sales transactions that occur in a 60-minute timeframe.
</h5></div><h5 id='q95'>95. The Ramada Inn is a sponsor of the annual "Festival of Trees," which raises money for a local women's
shelter. This is an example of</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. product mix.</option><option value="B">B. endorsement.</option><option value="C">C. promotion.</option><option value="D">D. marketing mix.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: promotion.</h5><h5>Coordinating channel management with other marketing activities such as promotion is
important to businesses because they need to have the goods in stock when they are advertised.
Businesses that promote goods they do not have in stock or on display run the risk of irritating customers
who want to buy the items. Businesses usually make sure that seasonal items will be delivered in
sufficient quantities and in time to be on display when the first advertisement appears. Visual
merchandising is display of merchandise in a store or department but does not involve having the goods
in stock. Pricing involves determining and adjusting prices to maximize return and meet customers'
perceptions of value. Public relations is a function of business that aims to establish good relations
between the business and the public.
</h5></div><h5 id='q96'>96. The Premier Hotel inserts a coupon offering a midweek special in the local newspaper. What type of
promotional activity is the hotel using?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Advertising</option><option value="B">B. Public relations</option><option value="C">C. Selling</option><option value="D">D. Sales promotion</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sales promotion</h5><h5>The business's
promotional goals determine if the advertising copy should contain personal opinions or humor. Because
Web surfers tend to scan Internet content quickly, they are likely to ignore an ad that contains too much
text.
</h5></div><h5 id='q97'>97. When customers appear to be browsing, the best approach for the salesperson to use would be to</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. let the customer browse at his/her leisure.</option><option value="B">B. greet promptly and close the sale quickly.</option><option value="C">C. greet and be available for service/information.</option><option value="D">D. wait for the customer to initiate contact.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: greet and be available for service/information.</h5><h5>Customers who are browsing are often undecided and
want to look around before making a buying decision. These undecided customers often need prompting
or educating and really should not be left to browse indefinitely because they may leave. Always greet
your customers; do not make the customer initiate the contact. The decided customer wants a quick
transaction and should be given prompt service.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this
policy up to and including disqualification of competitors and chapters from further participation.

Test 1104

HOSPITALITY AND TOURISM CLUSTER EXAM

1

1. What type of debtor-creditor relationship involves the acquisition and use of credit cards?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. benefits</option><option value="B">B. assets</option><option value="C">C. goals</option><option value="D">D. traits</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: traits</h5><h5>portable computers without being directly connected to cable service. An affiliate partner is a business
that agrees to promote and sell another business's products on the Web in exchange for a sales
commission.
</h5></div><h5 id='q99'>99. Car rental agents usually suggest that customers rent a larger car than the one requested online. This
technique is known as</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. substitute selling.</option><option value="B">B. upselling.</option><option value="C">C. suggestion selling.</option><option value="D">D. outsourcing.

</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is B: upselling.</h5><h5>When car rental agents suggest that customers rent more expensive vehicles than the ones
they signed up for online, the agents are using a sales technique known as upselling. This helps to
increase the amount of the sale. Substitute selling occurs when the requested item is not in stock or does
not meet the customer's needs. Suggestion selling involves recommending an additional item to
accompany the original purchase. Outsourcing involves the use of a third party to handle tasks that the
company used to handle internally.
</h5></div><h5 id='q100'>100. Businesses that contribute money to local educational, cultural, and training programs are showing social
responsibility to their</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. stockholders.</option><option value="B">B. employees.</option><option value="C">C. customers.</option><option value="D">D. communities.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: communities.</h5><h5>Social responsibility is the duty of business to contribute to the well-being of society. Many
of the decisions that business owners make affect not only the business but the community in which the
business exists. One way that businesses demonstrate social responsibility to their communities is by
contributing money to local educational, cultural, and training programs. Businesses use other methods
to demonstrate social responsibility toward their employees, customers, and stockholders.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Hospitality/Hospitality_1_Split_Master.js"></script></html>