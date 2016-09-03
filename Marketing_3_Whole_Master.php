<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing Exam 3</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. An employer may be liable for an employee's tort when the employee's actions occur</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. within normal operating hours.</option><option value="B">B. under emotional stress.</option><option value="C">C. within the scope of his/her employment.</option><option value="D">D. without the employer's knowledge.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: within the scope of his/her employment.</h5><h5>Under the doctrine of respondeat superior, an employer may be
held responsible for an employee's tort if the employee's wrongful or harmful actions are related to
his/her job. For example, if an employee causes an accident while driving the company's truck to deliver
an order, the company can be held liable for damages and injuries resulting from the accident. Although
the employer may not know about the accident at the time that it occurred, the employer is likely to be
held liable for the accident because the employee was acting on the employer's behalf. Wrongful actions
related to work may occur during or after normal working hours. Although the employee's wrongful
actions may be related to his/her emotional stress, the employer can still be held liable for the tort as long
as the action is related to the employee's job responsibilities.
</h5></div><h5 id='q2'>2. Loggins Forestry and Mill Company sells wood to Henderson Wood Products. Henderson sells the wood
to Franklin Construction Company, who uses the wood to build homes and office buildings. What is the
channel of distribution for the wood products?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Agent to industrial user to retailer to consumer</option><option value="B">B. Producer to industrial user to consumer</option><option value="C">C. Agent to wholesaler to consumer</option><option value="D">D. Producer to industrial distributor to user</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is D: Producer to industrial distributor to user</h5><h5>In the example, Loggins is the producer because it grows the
trees and mills the timber into usable units. Henderson is the industrial distributor (wholesaler) because it
sells smaller amounts of the wood products to users such as the Franklin Construction Company.
Franklin uses the wood products to build homes and office buildings. Homes and buildings are sold to the
ultimate consumers. Agents are businesses or individuals who assist in the sale and/or promotion of
products but do not buy them from the producer. Retailers purchase finished goods to resell to the
consumer.
</h5></div><h5 id='q3'>3. One way to provide good customer service is to have sufficient inventory available when the customers</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. request product specifications.</option><option value="B">B. place their orders.</option><option value="C">C. return samples.</option><option value="D">D. submit a quotation request.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: place their orders.</h5><h5>Customers want to receive their orders as quickly as possible. Therefore, businesses
should take steps to have sufficient levels of items in stock to meet their customers' needs. By doing so,
they are providing good customer service. The businesses do not need to have inventory available to
answer customers' questions about product specifications, to accept the return of sample products, or to
process a quotation request.
</h5></div><h5 id='q4'>4. Computer networking and information sharing among channel members at all levels have increased the
levels of collaboration and</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. transparency.</option><option value="B">B. mediation.</option><option value="C">C. competitiveness.</option><option value="D">D. bureaucracy.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: transparency.</h5><h5>Technological advancements continue to improve communication among channel
members. E-mail, the Internet, and electronic data interchange applications have provided channel
members with ways to share information and ideas for better processes, which increases collaboration
and transparency. Increased collaboration and transparency has created a spirit of partnership and
lowered the competitiveness among channel members. With a willingness to collaborate, channel
members work together to streamline ordering and distribution activities, which include a reduction of
paperwork and bureaucracy.
</h5></div><h5 id='q5'>5. A manufacturer that has 65% of the market share is pressuring its wholesalers to sign an agreement
stating that they will not sell competing products. In this situation, the agreement is illegal because it</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. controls resale prices.</option><option value="B">B. prohibits monopolies.</option><option value="C">C. violates antitrust laws.</option><option value="D">D. limits producers' rights.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: violates antitrust laws.</h5><h5>In the situation, the manufacturer is engaging in exclusive dealing, which is a
distribution strategy that forbids dealers from carrying the competitors' products. This strategy is usually
considered illegal because it restricts competition. And because the manufacturer holds a majority of the
market share, it violates antitrust laws and has the potential to create a monopoly. Exclusive dealing
agreements are legal in certain situations such as a franchisor requiring a franchisee to sell only the
franchisor's products. There is not enough information to determine if the manufacturer is controlling
resale prices. The manufacturer's actions may limit other producers' ability to fairly compete in the market
place, but it is not limiting their rights to seek legal recourse.
</h5></div><h5 id='q6'>6. In relation to channel management, which of the following actions should the manufacturer take to
effectively introduce a new product to the marketplace:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Use appropriate promotional techniques to inform channel members</option><option value="B">B. Establish ethics policies</option><option value="C">C. Improve communication with distributors or wholesalers</option><option value="D">D. Apply for a line of credit</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: Use appropriate promotional techniques to inform channel members</h5><h5>Promotion is a critical consideration
when introducing a new product because this function lets channel members and customers know that
the good or service is available. The promotional efforts should be carefully planned and coordinated with
the product's release. For example, a manufacturer might provide catalogs, brochures, coop-advertising
funds, and product training to its intermediaries (e.g., dealers, wholesalers) before the product is released
so that the intermediaries can explain the products to their customers or end users. Some channel
members (e.g., retailers) might need to coordinate promotion so that newspaper and television
advertising or special events are appropriately timed with the product's arrival on the stores' shelves. If
the communication between a manufacturer and its intermediaries is already very good, the manufacturer
needs to continue using good communication rather than improve it. Applying for a line of credit is a
financial consideration. Ethics policies must not only be established, but they must communicated to the
appropriate people or organizations.
</h5></div><h5 id='q7'>7. One way that a manufacturer can foster positive relationships with its channel members is by</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. selling directly to end users.</option><option value="B">B. encouraging a competitive culture.</option><option value="C">C. providing training programs.</option><option value="D">D. using aggressive tactics.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: providing training programs.</h5><h5>Positive channel relationships require collaboration among channel
members. Collaboration involves sharing relevant information, setting mutually-beneficial goals, and
developing a team-oriented attitude. Channel leaders have the most power or leverage in the channel,
and can implement tactics to foster positive relationships. Providing channel members with product
training programs helps channel members be successful in selling the products. Encouraging a
competitive culture among channel members, using aggressive tactics, and selling directly to end users
are more likely to create conflict and have a negative impact on channel relationships.
</h5></div><h5 id='q8'>8. When you look for supporting evidence in published materials, you are evaluating the</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. margin of error.</option><option value="B">B. readability of the text.</option><option value="C">C. credibility of the sources.</option><option value="D">D. timeliness of the content.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is C: credibility of the sources.</h5><h5>When identifying sources that provide relevant, valid written material, the
researcher evaluates a variety of factors, including the credibility or believability of the source. If the writer
provides feasible supporting evidence to back up an opinion, outcome, or claim, the researcher may
determine that the source is credible. Other considerations are the timeliness of the data or article, the
relevance of the information to the topic at hand, and the expertise of the writer or publisher. Readability
of the text involves the reader's ability to understand the content. If the researcher is evaluating a
research study, s/he might analyze the margin of error of certain types of data as one factor in
determining a source's credibility.
</h5></div><h5 id='q9'>9. What is the most appropriate closing to include in a response to a customer's e-mail inquiry for product
information?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. The model 2CR is available in three colors—red, black, and white. Reply by e-mail with the color
that you want.</option><option value="B">B. On behalf of LVN Industries, thank you for your order. Your confirmation number is 243597.</option><option value="C">C. We apologize for the inconvenience and will send a corrected invoice to you within 24 hours.</option><option value="D">D. Thank you for your interest in XWQ products. Please let me know if you have any additional
questions.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: Thank you for your interest in XWQ products. Please let me know if you have any additional
questions.</h5><h5>Explanation not available</h5></div><h5 id='q10'>10. Your supervisor has asked you to prepare a marketing status report for each of the company's six
regional offices. The most appropriate way to organize the information is</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. by site location.</option><option value="B">B. by sales function.</option><option value="C">C. in chronological order.</option><option value="D">D. in reverse sequence.
</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: by site location.</h5><h5>When preparing reports, you should organize the content in the way that will make the
most sense to the reader. In the example, the supervisor is asking for a status report for different offices,
which indicates that the supervisor will likely want to scan the information by location to quickly review the
status of each office or site. Another way to organize the information might be by listing each activity
(e.g., advertising, sales) with each site's status included in each activity; however, this format may be
cumbersome and difficult to determine each site's status at a glance. Presenting facts in chronological
order involves describing the steps or historical events in the sequence in which they occur. Reverse
sequence involves describing the steps or historical events in the opposite order.
</h5></div><h5 id='q11'>11. In which of the following documents is it most appropriate to include an executive summary:</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Complex research report</option><option value="B">B. Six-page case study</option><option value="C">C. Employee handbook</option><option value="D">D. Manuscript outline</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: Complex research report</h5><h5>The executive summary provides an overview of the entire document and
contains the most important information included in the body of the report. Executive summaries are
often included in long, complex reports that contain a lot of information. By reading the executive
summary, the reader can determine which section of a long report that s/he wants to read in more detail.
A six-page case study, an employee handbook, and a manuscript outline do not require an executive
summary.
</h5></div><h5 id='q12'>12. Holding a telephone conference call is an efficient way for multiple employees to communicate at the
same time when they</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. work in different cities.</option><option value="B">B. require visual aids for discussion.</option><option value="C">C. perform different job functions.</option><option value="D">D. lack text messaging capabilities.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is A: work in different cities.</h5><h5>Telephone conferences are efficient ways to hold meetings for people who are in
different locations. Telephone conferences allow for immediate verbal communication. The job function of
telephone conference participants is not relevant. A video conference is an ideal way to have a meeting
that requires the use of visual aids for employees in remote locations. Text messaging is not as efficient
as telephone conferencing when multiple people are involved.
</h5></div><h5 id='q13'>13. Kate's coworker Jack is meeting with a very important German client tomorrow. Kate has been to
Germany several times, and tells Jack that German businesspeople tend to be very formal and serious in
business situations. After learning this information, Jack now knows that he should avoid</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. using humor.</option><option value="B">B. using titles.</option><option value="C">C. shaking hands.</option><option value="D">D. making eye contact.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: using humor.</h5><h5>Because Germans tend to be very formal and serious about their business, they do not find
it appropriate to use humor during business situations. It is appropriate to use titles, shake hands, and
make eye contact with Germans in business situations. These behaviors are respectful to Germans.
</h5></div><h5 id='q14'>14. Which of the following is an example of a brand promise:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Low credit terms are available for qualified customers until January, 2012.</option><option value="B">B. Leather sofas only $499 this weekend—buy now at Fred's Furniture Warehouse.</option><option value="C">C. Henderson Photography…uniquely capturing your special moments is our priority.</option><option value="D">D. For your convenience, four Cup O' Joe locations are open in the greater-metro area.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: Henderson Photography…uniquely capturing your special moments is our priority.</h5><h5>The brand promise is
a company's agreement (spoken or unspoken) with customers that it will consistently meet their
expectations and deliver on its brand characteristics and values. Henderson Photography tells you
exactly what you can expect every time you purchase its services—unique photos to capture special
moments. Fred's Furniture is offering sale prices for a limited time. The business offering credit terms to
qualified customers has also placed time restrictions on its offer and has limited the offer to some rather
than all customers. Rather than a brand promise, the businesses are using promotion. Cup O' Joe's is
communicating the convenience of having four locations.
</h5></div><h5 id='q15'>15. Which of the following is a characteristic of the machine bureaucracy organizational structure:</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Decentralized decision making</option><option value="B">B. Specialization by work task</option><option value="C">C. Project-team orientation</option><option value="D">D. Resource sharing</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: Specialization by work task</h5><h5>Most often associated with large businesses and government agencies,
bureaucracies tend to have formal rules and strictly adhere to a hierarchical management structure.
Decision making is usually made by top-level management. Machine bureaucracies provide simple,
stable work environments that involve standardized work processes or specialization by work task—such
as production-line workers who assemble goods in manufacturing plants. This organizational structure
works well for mass-production companies (manufacturers) and organizations (insurance) that provide
services to mass markets. An adhocracy organizational structure uses work-teams to create new
processes. Technology-based businesses, such as Google, often operate as an adhocracy. Matrix
organizational structures tend to share resources. Frequently, employees with certain skills will be
assigned different types of projects based on the organization's needs.
</h5></div><h5 id='q16'>16. What step can an organization take that will help it adapt quickly to changes in the marketplace?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Overlook employee input</option><option value="B">B. Update product information</option><option value="C">C. Encourage obsolescence</option><option value="D">D. Develop contingency plans</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is D: Develop contingency plans</h5><h5>When an organization actively considers "what-if" and "worst-case
scenarios," it is in a better position to quickly adapt to changes because it has anticipated how it will react
under different circumstances—the business contingency plans are in place. To develop effective
contingency plans, businesses often ask for and consider their employees' input. Obsolescence is a state
of being out-of-date or old-fashioned. Businesses that do not keep up to date with their target markets'
needs and wants are likely to fail. Updating product information is not a way to adapt quickly to changes
in the marketplace; rather, it is an activity that communicates current information about the company's
offerings.
</h5></div><h5 id='q17'>17. Items most likely to be subject to an excise tax include</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. apartment buildings and single-family homes. </option><option value="B">B. inherited items and luxury cars.</option><option value="C">C. gasoline and cigarettes.</option><option value="D">D. milk and cheese.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: gasoline and cigarettes.</h5><h5>An excise tax is often referred to as a "sin tax," and it is levied on nonessential
products such as gasoline, cigarettes, alcohol, and luxury cars. An estate tax is a tax on inherited items.
Jurisdictions levy property taxes on land and buildings, such as apartment buildings and single-family
homes. Milk and cheese are usually not taxed, but may incur a sales tax in some jurisdictions.
</h5></div><h5 id='q18'>18. Which of the following is a circumstance that is most likely to cause interest rates to increase:</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Economic recession</option><option value="B">B. Low inflation</option><option value="C">C. Tight money supply</option><option value="D">D. Consistent investment spending</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is C: Tight money supply</h5><h5>Many factors affect interest rates, including business cycles, consumer spending,
inflation, and the money supply. If the money supply is low or tight, there is less money available to lend.
This causes interest rates to increase. The government might implement policies to tighten the money
supply when the rate of inflation rapidly increases. When investment spending increases, the money
supply is usually loose, so interest rates are lower—it is cheaper for businesses and individuals to borrow
money. During a recession, businesses are not expanding, unemployment increases, and consumer
spending decreases. Because a recession negatively affects the economy, the government may
implement policies that lower interest rates to stimulate commercial growth and consumer spending.
</h5></div><h5 id='q19'>19. If one U.S. dollar is equal to $1.01018 Canadian dollar, how much would you pay for a 16-gigabyte
iPhone that costs $299 U.S. dollars in Canadian dollars?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. $306.05</option><option value="B">B. $304.05</option><option value="C">C. $300.05</option><option value="D">D. $302.05</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: $302.05</h5><h5>An exchange rate is the value of a country's currency in relation to other countries' currency
values. Exchange rates fluctuate on a regular basis. Businesses monitor these changes because
dramatic changes in currency values can affect their profits. To calculate the amount that you would pay
in Canadian dollars, multiply the iPhone price in U.S. dollars by the value of the Canadian dollar ($299 x
1.01018 = $302.04382 or $302.05).
</h5></div><h5 id='q20'>20. Sean was born and raised in Quebec, and his grandparents are from Ireland. Sean's Irish heritage is his</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. subculture.</option><option value="B">B. dominant culture.</option><option value="C">C. standard culture.</option><option value="D">D. culture.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: subculture.</h5><h5>A dominant culture is the culture with which a person most identifies. Because Sean was
born and raised in Quebec, he likely identifies with the Canadian culture. A subculture is a secondary
group within a dominant culture. Because Sean's grandparents are from Ireland, Sean has likely been
exposed to and identifies with many Irish traditions, making his Irish heritage his subculture. Standard is
a not type of culture.
</h5></div><h5 id='q21'>21. Which of the following is an example of a potentially unethical action associated with providing business
information:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Using passwords to limit employees' access to various types of business files</option><option value="B">B. Discussing specific product-development processes with external business sources</option><option value="C">C. Providing employees with information about business practices and expectations</option><option value="D">D. Implementing whistle-blowing procedures to report questionable workplace behavior

</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: Discussing specific product-development processes with external business sources</h5><h5>It is unethical to
knowingly discuss private information. Employees who have knowledge of their employers' special
processes or trade secrets should not discuss this confidential information with others. If a competitor
gets the confidential information, it could be very costly to the business. Using passwords to limit access
to confidential information, providing employees with guidelines for appropriate behavior, and
implementing whistle-blowing procedures are ethical business actions.
</h5></div><h5 id='q22'>22. Janet is a busy advertising executive trying to balance her job, family, and social responsibilities. Four
days a week, Janet runs on a treadmill for an hour. After her workouts, Janet feels relaxed and focused.
Janet's exercise program helps her manage</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. time.</option><option value="B">B. goals.</option><option value="C">C. stress.</option><option value="D">D. work.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: stress.</h5><h5>Stress is a mental, physical, or emotional feeling of pressure or tension. When individuals do not
effectively manage their stress levels, their work productivity tends to decrease, and they often
experience burnout and develop health problems. Individuals can combat stress by getting plenty of rest,
using relaxation techniques, and exercising on a regular basis. Running is one of many ways to achieve
the health-related benefits of exercise. Exercise can help individuals feel relaxed and focused, which
greatly reduces stress. When individuals manage their stress, they can better manage their time and
work activities and achieve their goals.
</h5></div><h5 id='q23'>23. During a staff meeting, the sales manager said, “I want to take a moment to thank Sophie for
coordinating the behind-the-scenes efforts that have helped us land the Grisham account. I really
appreciate her contribution to the company.” What type of motivation is the sales manager providing
Sophie?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Award-based incentive</option><option value="B">B. Performance recognition</option><option value="C">C. Improvement feedback</option><option value="D">D. Feed-forward input</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: Performance recognition</h5><h5>Recognizing an individual's contribution to the well-being of the business is an
effective motivational technique. Sometimes, all it takes is a simple “thank you” to motivate employees to
continue performing their jobs well. The example does not indicate that Sophie has received an award or
has improved her job performance. Feed-forward communication involves obtaining suggestions for
improving performance or achieving goals.
</h5></div><h5 id='q24'>24. When you have the ability to communicate appropriately with teachers, work supervisors, and family
members at different times, you are demonstrating adaptability in situations related to</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. resource availability.</option><option value="B">B. unfamiliar conditions.</option><option value="C">C. personal interactions.</option><option value="D">D. planned changes.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: personal interactions.</h5><h5>There are different types of situations that require adaptability. Because you tend
to communicate differently with your teachers, work supervisors, family, and friends, you are showing
your adaptability in relation to your personal interactions. People tend to exhibit more formal behavior
with their teachers and supervisors and are more relaxed and informal with family and friends.
Adaptability is also required when you encounter unfamiliar or unexpected conditions (e.g., encountering
hazardous driving conditions), resource availability issues (e.g., substituting one item with another item),
and planned changes (e.g., getting married).
</h5></div><h5 id='q25'>25. To build collaborative relationships in the workplace, employees should</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. agree with others' opinions.</option><option value="B">B. focus on personal goals.</option><option value="C">C. be open to new ideas.</option><option value="D">D. delegate responsibilities.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is C: be open to new ideas.</h5><h5>Building collaborative relationships among coworkers is essential to the success
of a business. When employees are willing to collaborate with one another, they are more likely to help
the business achieve its overall goals. Collaboration involves working together to solve problems,
showing respect and empathy, and being open to new ideas that may improve the business's processes.
Collaboration doesn't mean that employees must agree with every idea that is presented to them, but it
does involve flexible thinking, understanding, and an appreciation for others' contributions. Not all
employees have the authority to delegate responsibilities.
</h5></div><h5 id='q26'>26. What course of action can a lender take if a debtor's account is past due?</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. File a judicial lien</option><option value="B">B. Claim defamation</option><option value="C">C. Apply for bankruptcy</option><option value="D">D. Liquidate assets</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: File a judicial lien</h5><h5>A lien is a legal claim to an item of property that protects the seller if the buyer does
not complete his/her payments. If a debtor does not make payments as promised, the lender can take
legal action to obtain the debtor's assets or items of collateral, such as a home, car, etc. The debtor,
rather than the lender, may need to liquidate assets to fulfill her/his legal obligation to the lender. If the
debtor doesn't have any assets, s/he may need to file for bankruptcy. Defamation involves writing or
saying something that damages an individual's or an organization's reputation.
</h5></div><h5 id='q27'>27. Which of the following is an example of a payroll deduction:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Overtime hours</option><option value="B">B. Health insurance</option><option value="C">C. Net pay</option><option value="D">D. Pay rate</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: Health insurance</h5><h5>Payroll deductions are monies that an employer withholds from an employee's gross
earnings. A large portion of the deductions is the various income taxes, which the employer pays to the
government on behalf of the employee. Other deductions might include health insurance premiums,
voluntary savings, and child-support payments. Net pay is the amount the employee receives in his/her
paycheck after the deductions have been subtracted from the gross earnings. Gross earnings are income
before deductions. Overtime hours are the number of hours an employee works over his/her regular
schedule. Pay rate is the amount of pay a worker earns at a set interval (e.g., an hour).
</h5></div><h5 id='q28'>28. One of the best ways to protect yourself against identity theft is to</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. use the same password for all online financial accounts.</option><option value="B">B. pay your bills online.</option><option value="C">C. monitor your credit and bank accounts continuously.</option><option value="D">D. pay for your purchases with debit cards.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: monitor your credit and bank accounts continuously.</h5><h5>By reviewing your credit-card statements and your
bank accounts on a regular basis, you are more likely to detect credit purchases or bank withdrawals that
you did not make. If unauthorized transactions have occurred, you can quickly close accounts to stop
identity thieves from accessing your accounts. Other things you can do to protect yourself from identity
theft is to use different passwords for each of your online accounts, and use secure web sites when
paying bills and shopping online. Not all online sites are secure. You should use the same caution with
your debit card as you do with your credit accounts and other bank accounts.
</h5></div><h5 id='q29'>29. Which of the following financial services providers is most likely to provide a small, local coffee shop with
business loans, checking and savings accounts, and overdraft protection:</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Eastern Region Investment Bank</option><option value="B">B. Marley and Winston Commercial Bank</option><option value="C">C. Walker, Steinbrenner, and Houghton, CPA Firm</option><option value="D">D. Allen and Mellon Brokerage Firm</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: Marley and Winston Commercial Bank</h5><h5>Commercial banks provide a variety of financial services for
businesses and individuals, such as checking and savings accounts, loans, credit cards, and overdraft
protection. Investment banks primarily work with corporations by underwriting securities, aiding in
mergers and acquisitions, etc. CPA (Certified Public Accountant) firms provide accounting services. A
brokerage firm buys and sells securities on behalf of investors.
</h5></div><h5 id='q30'>30. What should accountants demonstrate when collecting accounting information and preparing financial
documents?</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Empathy and flexibility</option><option value="B">B. An innovative attitude</option><option value="C">C. A collaborative mindset</option><option value="D">D. Professional integrity</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: Professional integrity</h5><h5>Demonstrating integrity involves adhering to an established set of personal ethics
and sound moral principles. Ethics are the basic principles that govern an individual's behavior. The role
of ethics in accounting is to serve as a guide for professional conduct. This is important because
accounting involves keeping and interpreting financial records, which managers and stakeholders use to
make decisions about the business. Therefore, accounting professionals must demonstrate professional
integrity to ensure that the information they collect and present is accurate and objective. Although
innovation, collaboration, empathy, and flexibility are admirable traits, preparing accurate and objective
financial information does not require accounting professionals to demonstrate these characteristics.
</h5></div><h5 id='q31'>31. A financial planner advises a client to make a high-risk investment. This is an unethical action if the</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. client's objective is to avoid tax obligations.</option><option value="B">B. client asks the financial planner to make the investment.</option><option value="C">C. financial planner has reviewed the investment terms and conditions.</option><option value="D">D. financial planner's primary motive is to earn a large commission.

</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: financial planner's primary motive is to earn a large commission.

</h5><h5>Explanation not available</h5></div><h5 id='q32'>32. Why do human-resource managers often post job openings on web sites such as Monster.com and
CareerBuilder.com?</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. To interview applicants</option><option value="B">B. To recruit employees</option><option value="C">C. To identify needed skills</option><option value="D">D. To assess training methods</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: To recruit employees</h5><h5>Businesses often post job openings with online employment services such as
Monster.com and CareerBuilder.com. Employment seekers can review the job descriptions and apply for
the posted positions that are online. Then, the businesses review the applicants' résumés and set up
interviews with the qualified candidates. Training occurs after hiring a qualified candidate.
</h5></div><h5 id='q33'>33. By continuously monitoring internal marketing information, a business is often able to</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. investigate competitors.</option><option value="B">B. identify problems.</option><option value="C">C. evaluate market share.</option><option value="D">D. analyze economic changes.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: identify problems.</h5><h5>Individuals can combat stress by getting plenty of rest,
using relaxation techniques, and exercising on a regular basis. Running is one of many ways to achieve
the health-related benefits of exercise. Exercise can help individuals feel relaxed and focused, which
greatly reduces stress. When individuals manage their stress, they can better manage their time and
work activities and achieve their goals.
</h5></div><h5 id='q34'>34. Which of the following is an example of an unethical practice related to obtaining marketing information
about a competitor:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. An OQR business associate poses as a security guard at the PRW Corporation's headquarters
to obtain information about the corporation's business activities.</option><option value="B">B. A marketing-research firm conducts a focus group and fails to fully disclose important facts about
the way in which the firm will use the participants' feedback.</option><option value="C">C. BCT Technologies employs staff to search its competitors' web sites and government databases
to obtain information about its competitors.</option><option value="D">D. INV Company sells its mailing list to LMN Industries and the TQS Manufacturing Company
without the consent of its customers.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: An OQR business associate poses as a security guard at the PRW Corporation's headquarters
to obtain information about the corporation's business activities.</h5><h5>Explanation not available</h5></div><h5 id='q35'>35. A primary advantage of using internal databases to store marketing information is the ability to</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. prepare formal sales presentations for customers.</option><option value="B">B. write sales letters, proposals, and promotional copy.</option><option value="C">C. produce customized questionnaires to post online.</option><option value="D">D. sort and classify different types of customer information quickly.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: sort and classify different types of customer information quickly.</h5><h5>A database is a collection of information
that a business stores in its computer system. Many businesses store information about their customers
in databases, such as their purchasing histories and contact and shipping information. Businesses have
the ability to sort different types of information, which they can use to carry out a variety of functions. For
example, a business might want to send promotional literature to customers working or residing in a
certain zip code. By setting queries within the computer database, the business can quickly obtain the
names and addresses of customers who meet the criteria. Businesses often use online survey services
to produce and post questionnaires. Businesses use word-processing software to write sales letters,
proposals, and promotional copy. Businesses use presentation software to prepare visual aids for sales
presentations.
</h5></div><h5 id='q36'>36. For legal purposes, a business that collects marketing information from its online customers should</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. purchase surge-protection insurance.</option><option value="B">B. develop confidential selling strategies.</option><option value="C">C. post its privacy policies on its web site.</option><option value="D">D. store the information at an insecure site.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: post its privacy policies on its web site.</h5><h5>Privacy policies are a business's guidelines about how it
maintains and uses its customers' information such as credit, purchasing habits, and addresses. In order
to protect consumers' privacy, governments often legislate how businesses can obtain and use customer
information. Jurisdiction refers to the authority (e.g., location, subject matter) a court has to resolve a
legal issue. For example, one state, province, or country may require a business to disclose to customers
that it allows third parties access to certain customer information, while another state, province, or
country may not have the same law. Therefore, businesses should post their privacy polices on their web
sites to reduce the risk of lawsuits that may be initiated by customers in other jurisdictions. Storing
information at an unsafe site is a poor business practice and may be grounds for a lawsuit in some
jurisdictions. A surge protector is a device that individuals and businesses use to prevent excessive
bursts of electricity from damaging computers. Some insurance companies provide businesses with
insurance to cover losses associated with power surges. Selling strategies are the plans of action for the
selling function, which do not always affect consumers' privacy.
</h5></div><h5 id='q37'>37. Mara, a marketing researcher, watches customers as they shop for products and writes down her
impressions of the customers' behaviors. Mara is gathering _________ data by _________.</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. secondary, relating</option><option value="B">B. primary, interviewing</option><option value="C">C. primary, observing</option><option value="D">D. secondary, surveying</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is C: primary, observing</h5><h5>Primary data are facts that are collected specifically for a problem or project at hand.
The observation method is one way to obtain primary data, and it involves gathering data by watching
consumers. A business or marketing-research firm may use the observation method to gather data about
customers' shopping and buying habits. Interviewing and surveying are marketing-research methods that
involve asking consumers questions to learn their opinions and the reasons behind those opinions.
Interviews are usually conducted in person or on the telephone, and surveys are usually presented to
consumers in a written document or by e-mail. Secondary data are facts that have been collected for
purposes other than the project at hand. Relating is not a marketing-research method.
</h5></div><h5 id='q38'>38. A business conducts marketing research when it needs to solve a problem or when it wants to</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. analyze financing options.</option><option value="B">B. increase its sales staff.</option><option value="C">C. coordinate activities.</option><option value="D">D. identify a new market opportunity.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: identify a new market opportunity.</h5><h5>Marketing research is the systematic gathering, recording, and
analyzing of data about a specific issue, situation, or concern. To remain competitive in the marketplace,
businesses conduct marketing research. One way to remain competitive in the marketplace is to identify,
select, and distribute products to a new market segment, whose identification requires marketing
research. If the business finds that a new market opportunity is feasible, it might decide to increase its
sales staff, coordinate new marketing activities, or analyze financing options. Analyzing financing options
is a business activity rather than a marketing-research activity.
</h5></div><h5 id='q39'>39. What type of research would a business conduct if it wanted to identify potential issues or opportunities?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Exploratory</option><option value="B">B. Experimental</option><option value="C">C. Descriptive</option><option value="D">D. Causal</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: Exploratory</h5><h5>Businesses conduct exploratory research for discovery purposes. This type of research
helps the business define a marketing issue, situation, opportunity, or concern. Causal research is a type
of marketing research that focuses on cause and effect and tests "what if" theories. Causal research
involves conducting experiments, which involves manipulating one or more independent variables and
examining the outcome. Descriptive research involves gathering specific information related to a specific
issue, situation, or concern.
</h5></div><h5 id='q40'>40. The SBU Company developed a survey in which respondents are provided the same number of
favorable and unfavorable rating options. This is an example of survey using a ___________ scale.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. sequential</option><option value="B">B. continuous</option><option value="C">C. spliced</option><option value="D">D. balanced</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is D: balanced</h5><h5>Marketing researchers can use many types of itemized rating scales on a survey. An Itemized
scale provides respondents with a set of options from which they must choose an answer. A balanced
itemized scale provides an equal number of favorable responses (e.g., extremely satisfied, satisfied) as it
does unfavorable responses (e.g., dissatisfied, extremely dissatisfied). A continuous scale is a type of
non-comparative scale that allows respondents to place a slash mark on a line that is bounded by two
opposite variables (e.g., the worst; the best). Spliced and sequential are not types of survey rating scales.
</h5></div><h5 id='q41'>41. The purpose of asking the participants of a research study to maintain product diaries is to obtain
marketing research about consumers'</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. financial skills.</option><option value="B">B. viewing preferences.</option><option value="C">C. essential needs.</option><option value="D">D. purchasing habits.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: purchasing habits.</h5><h5>Interviewing and surveying are marketing-research methods that
involve asking consumers questions to learn their opinions and the reasons behind those opinions.
Interviews are usually conducted in person or on the telephone, and surveys are usually presented to
consumers in a written document or by e-mail. Secondary data are facts that have been collected for
purposes other than the project at hand. Relating is not a marketing-research method.
</h5></div><h5 id='q42'>42. What type of marketing data can a business obtain by reviewing its inventory reports and customers'
invoices?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Customers' credit limits</option><option value="B">B. Customers' product preferences</option><option value="C">C. Product quality</option><option value="D">D. Actual market share

</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: Customers' product preferences</h5><h5>Internal records provide businesses with information about their
customers' buying habits and product usage. By reviewing inventory reports, a business can determine
which products are selling well and which products are moving slowly. This information may prompt the
business to phase out the slow moving product and increase promotional efforts for the products that are
selling well. Customers' invoices provide information about an individual customer's buying preferences
and habits. For example, invoices might reveal that certain customers buy a certain quantity of a
particular product four times a month. By knowing this type of information, the business can customize
promotions for its customers and take steps to ensure that it has sufficient product on hand when it is
needed. Financial reports provide information about customers' credit status and limits. Customer
invoices do not provide information about a product's level of quality. Businesses need to analyze
industry and competitors' data and compare them with internal data to evaluate its market share.
</h5></div><h5 id='q43'>43. To obtain reliable, valid marketing-research data when conducting personal interviews, researchers must
make sure that the interviewers are</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. open, friendly, and nonjudgmental.</option><option value="B">B. approachable, opinionated, and organized.</option><option value="C">C. consistent, biased, and aggressive.</option><option value="D">D. courteous, passive, and distant.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: open, friendly, and nonjudgmental.</h5><h5>A personal interview is one way to collect a lot of detailed, qualitative
marketing-research data. When marketing researchers conduct interviews, it is important for them to
make the interviewees feel comfortable and willing to talk openly about the topic at hand. To do this, the
interviewers must be open, friendly, and nonjudgmental. They should also be approachable, organized,
courteous, and conduct the interviews in a consistent way. If an interviewer is opinionated, biased,
aggressive, passive, or distant, the interviewee may not feel comfortable enough to talk honestly.
</h5></div><h5 id='q44'>44. Survey respondents indicated that they buy potato chips at the supermarket between three and five times
per month. This is an example of</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. rank.</option><option value="B">B. mode.</option><option value="C">C. mean.</option><option value="D">D. range.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: range.</h5><h5>Range is the distance between the smallest and largest value in a set of responses. In the
example, three was the smallest number of potato-chip purchases per month and five was the largest
number potato-chip purchases per month. The mean or average is the sum of all of the responses
divided by the number of options provided. Mode is the most common value in a set of responses to a
question. Rank involves placing options in order of importance in relation to one another.
</h5></div><h5 id='q45'>45. The primary reason for developing a marketing-research brief is to</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. summarize the raw data.</option><option value="B">B. clarify the purpose of the research.</option><option value="C">C. identify changes in the marketplace.</option><option value="D">D. explain the survey's rating scale.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is B: clarify the purpose of the research.</h5><h5>A marketing-research brief is a proposed plan for approaching the
marketing-research study. The brief defines or clarifies the issue or problem, states the objectives of the
study, and suggests ways in which to approach the research process. Marketing researchers collect raw
data after developing the marketing-research brief. Identifying changes in the marketplace may be a
purpose for conducting the research. The research process may or may not involve conducting a survey.
</h5></div><h5 id='q46'>46. An individual returns a marketing-research survey that contains unanswered questions. This is an
example of a(n)</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. mathematical miscalculation.</option><option value="B">B. interviewer oversight.</option><option value="C">C. non-response error.</option><option value="D">D. rating mistake.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: non-response error.</h5><h5>Errors can occur during any phase of the marketing-research process and can affect
the validity of the results. A non-response error occurs when a member of the sample population does
not answer all of the questions in a survey. Respondents fail to answer questions for many reasons—
they may not understand the question, they may feel uncomfortable answering the question, or they may
not see the question on the survey. Unanswered questions on a survey are not examples of interviewer
oversight, mathematical miscalculation, or rating mistakes.
</h5></div><h5 id='q47'>47. Which of the following is the component of a questionnaire that guides respondents through the survey
process:</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Leading questions</option><option value="B">B. Instructions</option><option value="C">C. Flow chart</option><option value="D">D. Coding box</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: Instructions</h5><h5>Instructions are written directions that advise respondents on how to complete the
questionnaire; the instructions guide them through the survey process. Instructions are especially
important if the questionnaire is long and contains branching questions, which are questions that direct
respondents to another section of the questionnaire, if they provide a certain answer. Instructions help
ensure that all of the respondents complete the questionnaire in the same manner. Questionnaires
should avoid the use of leading questions because these tend to influence the respondents' answers,
which creates bias. Researchers do not place flow charts and coding boxes on questionnaires to guide
the respondents through the survey process.
</h5></div><h5 id='q48'>48. What are the characteristics of dissonance-reducing buying behavior?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Expensive, infrequent purchase with high buyer involvement and few perceived differences</option><option value="B">B. Inexpensive, frequent purchase with low buyer involvement and few perceived differences</option><option value="C">C. Expensive, infrequent purchase with high buyer involvement and strong brand recognition</option><option value="D">D. Inexpensive, frequent purchase with low buyer involvement and strong brand recognition</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: Expensive, infrequent purchase with high buyer involvement and few perceived differences</h5><h5>Some items,
such as carpeting for your home or office, are expensive items that are not purchased frequently. These
types of goods involve a lot of thought and consideration, but many buyers do not perceive great
differences among brands. Buyers may be more concerned with appearance, feel, and durability rather
than brand. This type of buying behavior is called dissonance-reducing buying behavior. Routine
(habitual) buying behavior involves buying inexpensive goods on a frequent basis (e.g., sugar, orange
juice). These types of purchases require little involvement or thought, and in most situations, there are
few differences among brands. Complex buying behavior involves high customer involvement because
the items are expensive and purchased infrequently. Because strong brand recognition or product
characteristics are extremely important, complex buying behavior is most often exhibited when an
individual is purchasing a car or a home. Characteristics of variety-seeking buyers include low
involvement, but a high recognition of brand differences. Many variety-seekers switch brands often, such
as buying Pepsi products rather than Coke products because Pepsi is on sale at the grocer.
</h5></div><h5 id='q49'>49. In its marketing plan, ROKE Athletic Shoes states that it wants to increase its market share for 25- to 40year-old professional females by six percent in the next eight months. ROKE's marketing objective is
related to</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. changes in market delivery.</option><option value="B">B. its target market.</option><option value="C">C. product.</option><option value="D">D. promotion.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: its target market.</h5><h5>A comprehensive marketing plan addresses many different types of marketing
objectives such as promotions, channels of distribution, product development, and target market. ROKE
set a specific, measureable, and time-bound goal to increase its market share for a specific target
market—25- to 40-year-old professional females. Objectives that address changes in market delivery
relate to the channels of distribution or place. Product objectives involve the business's goods and
services (e.g., product development). Promotion objectives are goals that address the ways in which the
business communicates information about its goods and services to its target market.
</h5></div><h5 id='q50'>50. To develop appealing promotional messages for a target audience, a marketer might build a profile of the
typical buyer by considering demographic factors such as</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. personalities, lifestyles, and location.</option><option value="B">B. lifestyles, attitudes, and income.</option><option value="C">C. age, gender, and income.</option><option value="D">D. location, attitudes, and age.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is C: age, gender, and income.</h5><h5>To attract the target market, marketers must create images that appeal to the
audience. One technique that marketers use to create a connection with their customers is to build a
customer profile of the typical buyer. Although the profile depicts a fictitious person, it provides a frame of
reference for the promotion. Developers consider many factors when creating a buyer profile, including
demographics. Demographics are the physical and social characteristics of the market and include
considerations such as age, gender, and income. The profile may also include information about the
typical buyer's location, which is a geographical factor. Psychographics, which include considerations
such as lifestyles, attitudes, and personalities, are also factors that influence the profile's make-up.
</h5></div><h5 id='q51'>51. What component of a marketing plan might a business use to summarize the results of its situation
analysis?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Business plan</option><option value="B">B. Executive summary</option><option value="C">C. Market share graph</option><option value="D">D. SWOT analysis chart</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is D: SWOT analysis chart</h5><h5>The marketing plan is a set of procedures or strategies for attracting the target
market to a business. A component of the marketing plan is the situation analysis—a determination of a
business's current marketing situation, which includes an analysis of its goals, finances, target market,
market share, etc. A situation analysis helps the business detect the things that it is doing well and things
that it needs to do better. Preparers of the marketing plan may summarize the results of the situation
analysis in a SWOT analysis chart, which provides a graphic depiction of the business's current
strengths, weaknesses, opportunities, threats. The marketing plan is often a component of a company's
overall business plan. The executive summary serves as an introduction to the marketing plan.
</h5></div><h5 id='q52'>52. When a situation analysis reveals that a competitor's market share has steadily increased over the past
year, the Franklin Electronics Company has identified an</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. internal change.</option><option value="B">B. internal weakness.</option><option value="C">C. external threat.</option><option value="D">D. external strength.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: external threat.</h5><h5>A situation analysis is a determination of a company's current business situation and the
direction in which the company is headed. The situation analysis is an important aspect of the marketing
plan and is often summarized in a SWOT analysis chart. By identifying its internal and external strengths,
weaknesses, opportunities, and threats, the company can implement strategies to improve a weakness
or threat, as well as act on an opportunity or strength. When a competitor is gaining market share, the
company has identified a threat from outside the company. This means that a competitor is reaching
more of the target market and may take customers from the company. The situation analysis has not
revealed an internal weakness, internal change, or external strength.
</h5></div><h5 id='q53'>53. To determine the types of information that the business needs to operate, it is often beneficial to</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. upgrade the computer network.</option><option value="B">B. obtain employees' input.</option><option value="C">C. develop a production schedule.</option><option value="D">D. revise business's goals.

</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: obtain employees' input.</h5><h5>Obsolescence is a state
of being out-of-date or old-fashioned. Businesses that do not keep up to date with their target markets'
needs and wants are likely to fail. Updating product information is not a way to adapt quickly to changes
in the marketplace; rather, it is an activity that communicates current information about the company's
offerings.
</h5></div><h5 id='q54'>54. By searching the company's computer records, an employee obtained confidential information about a
well-known client, which s/he discussed with a friend. Eventually, the information was leaked to the
media, which embarrassed the client and the business. What action could the company have taken to
prevent this unethical behavior?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Provide clients with information tracking capabilities</option><option value="B">B. Install anti-virus software to protect the computer network</option><option value="C">C. Use computer passwords to limit access to certain data</option><option value="D">D. Require the employee to submit his/her resignation</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: Use computer passwords to limit access to certain data</h5><h5>Businesses have the responsibility to protect
their customers' confidential information. One way to protect confidential information is to limit the access
to employees who need or use the information. Requiring qualified employees to use computer
passwords to access the confidential information can reduce the risk of unethical behavior—such as
snooping or spying. Anti-virus software, client-tracking capabilities, and a resignation request would not
prevent the employee from obtaining the information. The business would likely reprimand or fire the
employee for his/her unethical behavior after the incident occurred.
</h5></div><h5 id='q55'>55. What is the importance of the computer hard drive in a computer system?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. It facilitates the computer's audio transmissions.</option><option value="B">B. It permanently stores the computer program files and data.</option><option value="C">C. It allows the user to view the computer data.</option><option value="D">D. It transmits power to other computer devices.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: It permanently stores the computer program files and data.</h5><h5>The hard drive is the component of the
computer's central processing unit (CPU) that stores the computer's program files and inputted data. A
sound card is a device that transmits sound waves through the computer so the user can hear audio
elements. A computer monitor allows the user to view the computer data. The power supply transmits
power to other computer devices (e.g., printer) so they can operate.
</h5></div><h5 id='q56'>56. What presentation software function allows the user to move and change the order of existing slides?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Transition</option><option value="B">B. Slide sorter</option><option value="C">C. Promote paragraph</option><option value="D">D. Note master</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: Slide sorter</h5><h5>Presentation software programs allow users to present information by combining graphics,
text, animation, photographs, and sound. Presentation software is used in business to create slide
programs to support oral presentations. The slide sorter function allows you to view thumbnails of
existing slides and move them around to different sections of the presentation. The transition function
allows users to select different effects to move from one slide to the next slide. Promote paragraph is a
function that allows users to move sub points, and bullet points to higher positions (e.g., sub points to
bullet points or bullet points to titles) in the slide text. The note master function allows the user to create
speaking notes from the slide text.
</h5></div><h5 id='q57'>57. Which of the following is an example of a business that is most likely violating a safety regulation:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Porter Manufacturing inspects its production equipment several times a month.</option><option value="B">B. The Hoffman Supply Company blocks several of its doors with furniture and boxes.</option><option value="C">C. Ingram Industries stores its combustible products in well-marked storage containers.</option><option value="D">D. A manager monitors the restaurant to ensure that no more than 200 patrons are in the building.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: The Hoffman Supply Company blocks several of its doors with furniture and boxes.</h5><h5>Businesses are
required to follow various laws to ensure the safety of their employees, customers, and visitors. Most
jurisdictions have laws that prohibit businesses from placing items such as furniture, supplies, and other
items in front of exits. Blocked exits make it difficult for people to evacuate if an emergency (e.g., fire)
occurs. Inspecting production equipment, storing products in appropriate containers, and monitoring
building occupancy rates are legal activities.
</h5></div><h5 id='q58'>58. Which of the following is a safety procedure that businesses use to track employees who must evacuate
a building during an emergency:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Training an employee to perform CPR if others are injured</option><option value="B">B. Assigning an employee to change the smoke- alarm batteries</option><option value="C">C. Requiring employees to call managers when they arrive home</option><option value="D">D. Designating a central meeting place for all employees</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: Designating a central meeting place for all employees</h5><h5>Businesses must be prepared for unexpected
situations such as fires and bomb threats. Evacuation plans are procedures that help businesses handle
emergencies in ways to keep employees safe. Businesses designate a central meeting place to take a
“head count” to ensure that all employees are out of danger. As part of the evacuation plan, management
may assign certain employees to conduct the head count of department members. If someone does not
arrive at the meeting place, the coordinator can report the information to the appropriate person and take
steps to locate the missing person. Changing smoke-alarm batteries and CPR training are not activities
that will help businesses track the whereabouts of their employees during an emergency. Employees
may not be able to communicate by phone with their managers during emergencies; therefore,
employees should not go home until they report to their central meeting place and check in with their
designated emergency coordinator.
</h5></div><h5 id='q59'>59. Because Kevin worked late Tuesday evening to complete a report, he was the last employee to leave the
building. What procedure does Kevin need to perform to protect the building from unlawful entry?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Turn off the lights</option><option value="B">B. Log off the computer</option><option value="C">C. Lock the filing cabinet drawers</option><option value="D">D. Set the security alarm</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: Set the security alarm</h5><h5>To reduce the risk of theft, businesses develop procedures for their employees to
follow when closing a facility at the end of a work shift. The two most important actions that employees
must follow are setting the security alarm and locking the doors. Logging off the computer, locking filing
cabinet drawers, and turning off the lights will not protect the building from thieves and burglars.
</h5></div><h5 id='q60'>60. Which of the following is the first step in the bidding process:</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Identifying needs</option><option value="B">B. Developing a request for proposal</option><option value="C">C. Negotiating terms</option><option value="D">D. Assessing each bidder's strengths and weaknesses</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: Identifying needs</h5><h5>By doing so,
they are providing good customer service. The businesses do not need to have inventory available to
answer customers' questions about product specifications, to accept the return of sample products, or to
process a quotation request.
</h5></div><h5 id='q61'>61. Determine if the following statement is true or false: The primary purpose of quality-control measures is
to evaluate employee efficiency levels.</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. False—the primary purpose of quality-control measures is to evaluate the degree of excellence
of goods and services.</option><option value="B">B. False—businesses also use quality-control measures to evaluate products, processes, and other
business functions.</option><option value="C">C. True—businesses must evaluate their employees' performance to ensure that they are producing
high-quality goods and services.</option><option value="D">D. True—employees perform the work, so they are responsible for developing and implementing
product-quality measures.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: False—businesses also use quality-control measures to evaluate products, processes, and other
business functions.</h5><h5>Quality control is ensuring the degree of excellence of a good, service, process, or
activity. Efficiency levels are one measure that evaluates a variety of business processes and activities,
including employee efficiency levels. If employees are not performing as efficiently as they could, there
could be a problem with equipment, a process, or a procedure. Governments, industries, and
management develop product-quality standards.
</h5></div><h5 id='q62'>62. Which of the following is the primary benefit of keeping your personal workspace organized:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Improved leadership skills</option><option value="B">B. Better interpersonal skills</option><option value="C">C. Higher efficiency</option><option value="D">D. Enhanced collaboration

</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Higher efficiency</h5><h5>When your workspace is neat and organized, you are more likely to work efficiently
because you can quickly find the tools and information that you need to perform your job duties. If your
workspace is in disarray, it is often more difficult to find what you need when you need it, which can
reduce your efficiency. When your workspace is orderly and as you work more efficiently, you may have
more time to collaborate with others and improve other types of skills, if you desire to do so.
</h5></div><h5 id='q63'>63. Invention involves generating new ideas, and innovation involves</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. evaluating feasibility.</option><option value="B">B. submitting proposals.</option><option value="C">C. selecting options.</option><option value="D">D. acting on ideas.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: acting on ideas.</h5><h5>Invention occurs when the idea for the product or process first comes to mind.
Innovation occurs when the idea becomes reality by actually creating a product or implementing or
improving a process. Evaluating the feasibility of an idea, submitting proposals, and selecting an idea
(option) to carry out are steps that occur between invention and innovation.
</h5></div><h5 id='q64'>64. Which of the following is an example of an employee who is meeting his/her employer's expectations:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Rachel sends a text message to her roommate during a meeting.</option><option value="B">B. Tom spends the first half hour of the workday chatting with Kate.</option><option value="C">C. Allison focuses on her work tasks so she can meet her deadlines.</option><option value="D">D. Calvin tells a customer about his issues with a difficult coworker.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: Allison focuses on her work tasks so she can meet her deadlines.</h5><h5>Businesses have basic expectations
regarding their employees' behavior in the workplace. Employers expect employees to arrive at work on
time; perform their work accurately and efficiently; be honest; and exhibit respect for coworkers, and
customers, and company property. Because Allison is focused on her work and strives to meet her
deadlines, she is meeting her employer's expectations. Engaging in idle chitchat and texting during a
meeting are disrespectful actions that waste the company's time and money. Confiding in a customer
about problems with coworkers is inappropriate behavior.
</h5></div><h5 id='q65'>65. Because the company's president was impressed with Ed's willingness to accept additional tasks and
carry them out without a lot of direction, s/he promoted Ed to a management position. What personal trait
does Ed possess that helped him advance in his career?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Courage</option><option value="B">B. Initiative</option><option value="C">C. Self-confidence</option><option value="D">D. Self-control</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is B: Initiative</h5><h5>Workers who show initiative are willing to act without having to be told to do so. They are willing
to accept or seek additional duties, which often exceed their employers' expectations. Workers who are
competent and show initiative are often promoted to positions that give them more responsibility.
Although courage, self-confidence, and self-control are admirable qualities that often lead to career
advancement, these traits are not related to accepting additional work and working without a lot of
direction.
</h5></div><h5 id='q66'>66. If a pharmaceutical company sets an unnecessarily high price for a lifesaving drug, it is behaving in a(n)
__________ manner.</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. socially irresponsible</option><option value="B">B. economically justifiable</option><option value="C">C. conscientious</option><option value="D">D. charitable</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: socially irresponsible</h5><h5>It is socially irresponsible to price a lifesaving product so that the people who need
it cannot afford. In some jurisdictions, it is considered price gouging, which is illegal. This action is not
economically justifiable, charitable, or conscientious.
</h5></div><h5 id='q67'>67. The use of electronically bar-coded price tags on goods has increased the</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. transportation costs for customers.</option><option value="B">B. need for businesses to hire additional cashiers.</option><option value="C">C. number of customer self-checkout stations.</option><option value="D">D. efficiency levels of pricing software programs.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: number of customer self-checkout stations.</h5><h5>Electronic bar codes contain product price information. At the
point of sale, the item is scanned into the cash-register terminal where the price is read and recorded.
Today, more retailers are installing self-checkout stations. This allows customers to scan, bag, and pay
for the items without the assistance of a cashier. Supermarkets and some discount stores are using selfcheck-out processes. The advantage to customers is that they don't need to wait in long lines for a
cashier to process small purchases. Electronic bar codes do not increase transportation costs for
customers or increase efficiency levels of pricing software programs.
</h5></div><h5 id='q68'>68. Companies A, B, and C sell similar products. Together, they recently decided to sell their products for the
same price. In what unethical activity are the businesses engaging?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Bait-and-switch</option><option value="B">B. Price fixing</option><option value="C">C. Loss-leader pricing</option><option value="D">D. Gray markets</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: Price fixing</h5><h5>Price fixing is an unethical activity in which businesses agree on the prices of their goods
and services resulting in little choice for the consumer. In some countries, price fixing is illegal because it
restricts competition. Bait and switch refers to an advertising scheme in which a business promotes a
low-priced item to attract customers to whom the business then tries to sell a higher priced item. Loss
leader pricing involves pricing a product below cost to attract customers to the business. Gray markets
involve selling goods to unauthorized dealers for very low prices.
</h5></div><h5 id='q69'>69. A business might reduce a product's price during the growth phase of the product's life cycle because</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. the product tends to attract early adopters during this phase of the life cycle.</option><option value="B">B. the business wants to recover its research and development costs.</option><option value="C">C. it can lower advertising costs since the product has a loyal customer base.</option><option value="D">D. competitors have introduced similar products to the marketplace.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: competitors have introduced similar products to the marketplace.</h5><h5>During the growth stage of the
product's life cycle, competitors are introducing similar products. To remain competitive, the business
might lower prices and increase its promotional efforts to encourage brand loyalty. Businesses may set
prices high during the introduction stage when early adopters are likely to buy and there is minimal
competition. This will help the business to recover research and development costs.
</h5></div><h5 id='q70'>70. What form of technology helps businesses track their production supplies and resale products in real
time?</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Cyber-security applications</option><option value="B">B. Integrated project planning software</option><option value="C">C. Three-dimensional drum scanner</option><option value="D">D. Radio frequency identification</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: Radio frequency identification</h5><h5>Radio frequency identification (RFID) technology involves the use of a
wireless transmitter to store product information, such as the shipping history and the date the item was
sold. To track the product, the transmitter or tag attached is to a pallet, the item's packaging, or the item
itself. Electronic readers retrieve the tag information and feed it to a computer database where the
business can store all of its product information in a central location. RFID technology improves efficiency
levels of the product/service management function through all levels of the distribution channel.
Integrated project planning software, three-dimensional drum scanners, and cyber-security applications
are not used to track supplies and products.
</h5></div><h5 id='q71'>71. So that customers can make appropriate buying decisions, product labels should contain</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. promotional copy.</option><option value="B">B. testimonials.</option><option value="C">C. accurate information.</option><option value="D">D. allowances.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: accurate information.</h5><h5>Because businesses receive inquiries from customers,
vendors, and business associates on a regular basis, employees must be prepared to respond in an
accurate, prompt, and courteous manner. When closing an e-mail message, it is courteous to thank
customers for asking about the business and its products. And, by encouraging the customer to ask
additional questions, the employee is indicating his/her interest in the customer. There is not enough
information in the example to determine if the customer placed an order, had a problem with an invoice,
or requested product color information. The sentence, "Reply by e-mail with the color that you want,"
could be interpreted as rude and unprofessional.
</h5></div><h5 id='q72'>72. After a Korean auto manufacturer built a plant in Ames, Iowa, Kwan noticed a substantial growth of
Korean residents in the area, many of whom were relocated to Ames to work for the plant. Kwan decided
to import Korean goods and sell them in a small Korean specialty store near town. This is an example of
a product opportunity resulting from</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. advancements in technology.</option><option value="B">B. changes in travel habits.</option><option value="C">C. differences in priorities.</option><option value="D">D. shifts in population ethnicity.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is D: shifts in population ethnicity.</h5><h5>A product opportunity is a favorable circumstance that presents itself to
provide a good or service that customers are willing to buy. Kwan discovered a product opportunity to sell
Korean goods when a Korean plant built and relocated Korean workers in his community. Because the
number of Korean residents increased, the community experienced changes or shifts in population
ethnicity. Kwan's store is a way to meet the unfulfilled needs of a very specific market. The example is
not a product opportunity resulting from changes in travel habits, differences in priorities, or
advancements in technology.
</h5></div><h5 id='q73'>73. A primary role of the facilitator in a group brainstorming session that is generating product ideas is to</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. lead the debate.</option><option value="B">B. evaluate each idea.</option><option value="C">C. encourage participation.</option><option value="D">D. improve relationships.

</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: encourage participation.</h5><h5>Brainstorming is a creative-thinking technique that involves identifying as many
ideas as possible during a certain time frame. Businesses often use the brainstorming technique to
generate ideas for new or improved products. The facilitator helps keep the members of the group
brainstorming session on track. This person keeps order, encourages participation, fosters a creative
environment, and documents the ideas for further review. The facilitator should not evaluate the ideas or
initiate debate during a brainstorming session. These actions may hinder the creative-thinking process
and discourage group members from participating. The primary purpose of a facilitator is to lead the
discussion, not improve relationships.
</h5></div><h5 id='q74'>74. Which of the following is a factor used for grading products:</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Personal recommendations</option><option value="B">B. Inspection method</option><option value="C">C. Product contents</option><option value="D">D. Resource availability</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: Product contents</h5><h5>Grading is the process of rating products according to certain established standards or
characteristics. To receive a certain grade, a product must meet established criteria, which indicates the
uniformity or consistency among products. The contents of a product may affect how it is graded. For
example, cuts or types of meat contain different levels of fat, so each type of meat may be graded on the
percentage of fat per serving. Other products, such as gasoline, are graded on the basis of their chemical
make-up. The inspection method, personal recommendations, and resource availability are not factors
used to grade products.
</h5></div><h5 id='q75'>75. What can businesses do to reduce risks associated with personal injuries and product damage due to
improper product use?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Provide detailed written instructions</option><option value="B">B. Offer a service guarantee</option><option value="C">C. Implement a return policy</option><option value="D">D. Use recyclable packaging</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: Provide detailed written instructions</h5><h5>To protect customers, businesses must advise customers about
how to use their products safely. Complex products that require assembly or that have multiple functions
should provide detailed written instructions to help the customer assemble or use the product correctly.
When the product is assembled or used correctly, there is less risk of injury to the product user and less
risk associated with product damage. Offering a service guarantee, implementing a return policy, and
using recyclable packaging are not actions that will help reduce the risk of personal injuries and product
damage.
</h5></div><h5 id='q76'>76. Product bundling is an effective method to sell goods and services because it</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. provides new products with better exposure than advertising.</option><option value="B">B. allows businesses to sell unrelated items at the same time.</option><option value="C">C. creates a sense of value for the customer.</option><option value="D">D. encourages customers to comparison shop.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is C: creates a sense of value for the customer.</h5><h5>Product bundling is the practice of selling multiple, related
goods/services together as a one-price package. Bundled products are priced so that the customer pays
less for the bundled products than they would pay for the products if the customer purchased each
product individually. In some situations, the bundled product may not provide a great savings over
individually purchased items, but just enough for the customer to feel that s/he is getting a deal or a good
value. Product bundling is often used to get customers who happen to see the bundled package to try a
new product; however, the business may also need to promote (e.g., advertise) the new product to let the
masses know that the new product exists. Customers are less likely to comparison shop for less
expensive goods when the items are bundled.
</h5></div><h5 id='q77'>77. To gain a competitive advantage, a business carefully selects channel members and trains them to
provide customers with superior expertise and service. This business is positioning its products by
focusing on</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. customization.</option><option value="B">B. product attributes.</option><option value="C">C. channel differentiation.</option><option value="D">D. quality at an exceptional value.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: channel differentiation.</h5><h5>The positioning strategies that businesses use depend on many factors including
the type of product and the business's objectives. Businesses that use selective distribution channels
choose the dealers and distributors (channel members) who will best represent the brand, be willing to
learn about the product, and work hard to market the product for the business. By selecting the best
suited distributors, the business is differentiating itself through its channel members. Depending on the
business's objectives, the dealers or channel members will be responsible for communicating product
attributes, quality, and value to the end users. Customization involves creating unique or one-of-a-kind
products or activities for individuals or specific groups.
</h5></div><h5 id='q78'>78. What does a successful corporate brand communicate and how should it communicate them?</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Benefits, consistently</option><option value="B">B. Motives, vaguely</option><option value="C">C. Procedures, unusually</option><option value="D">D. Jargon, ordinarily</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Benefits, consistently</h5><h5>A corporate brand is a brand that represents a company or parent business entity.
An effective corporate brand uses a variety of tools that creates and reinforces certain impressions and
images of the business in the minds of the consumers, which involves communicating the company's
benefits. For example, an entertainment business's brand is likely to communicate the idea or image of
"fun" as a benefit to consumers. To encourage consumers to associate "fun" with the business over time,
the business should use consistent messages to reinforce the association between the business and
"fun." Successful brands do not communicate motives in a vague way. Not all members of the target
market may understand the business's jargon. Procedures are the processes that employees use to
perform certain tasks. A business can deliver messages in different ways—ordinary or unusual—but the
key is to deliver messages consistently, so the audience makes a connection with the brand.
</h5></div><h5 id='q79'>79. When positioning a corporate brand, what is a marketer trying to determine by comparing the company's
own product attributes with those of the competition?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Causes of risk</option><option value="B">B. Points of difference</option><option value="C">C. Areas of concern</option><option value="D">D. Frames of reference</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Points of difference</h5><h5>A corporate brand is the combined impressions, images, or experiences associated
with a company or parent entity. A successful corporate brand will create awareness in a way that it
separates itself from other brands. One factor the company should consider is the way in which its
product attributes differ from those of competitors' products. By defining the points of difference, the
company can use these differences as strengths to position itself against the competition and to provide
the target market with a positive frame of reference about the brand. The business would not be
successful if it positioned its corporate brand by concentrating on its areas of concern or factors involving
high risk.
</h5></div><h5 id='q80'>80. During which stage of the product life cycle should a business focus on the points of difference between
its product and its competitors' products?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Growth</option><option value="B">B. Maturity</option><option value="C">C. Declining</option><option value="D">D. Introductory</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Growth</h5><h5>The product life cycle is the stages through which goods and services move from the time they
are introduced on the market until they are taken off the market. The amount and type of promotion the
business uses for a product is affected by the stage of the product's life cycle. During the growth stage,
there are typically more competing products on the market. During this time, the business is likely to use
promotional activities to differentiate its product from those of its competitors. During the introductory
stage, promotion efforts are designed to inform the target market that the new product exists. Because
the product is well established on the market during its maturity stage, a business's promotional efforts
tend to focus on reminding customers of the product's benefits. During the product's declining stage,
sales drop because newer products are being introduced to the market. Less money is spent on
promoting the product, which may be phased out or taken off the market.
</h5></div><h5 id='q81'>81. A television commercial for Antonio's Pizza Shop makes the following statement: “Our pizza contains the
freshest ingredients around.” This is an example of</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. ambush marketing.</option><option value="B">B. collusion.</option><option value="C">C. stealth marketing.</option><option value="D">D. puffery.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: puffery.</h5><h5>Puffery is the practice of using exaggerated expressions or claims to describe a product or its
features. Examples include using words such as the best, finest, freshest, etc., to describe products.
These types of statements cannot be substantiated and do not contain facts. In many jurisdictions,
puffery is illegal and may require businesses to stop using the exaggerated claims in their promotional
materials. Collusion is price fixing or an illegal agreement in which businesses agree on prices of their
goods and services resulting in little choice for the consumer. Stealth marketing is a deceptive practice in
which a business tries to stimulate interest in a product without disclosing to the public that the business
is paying others to create the "buzz." Ambush marketing is a promotional technique whereby a nonsponsoring business tries to associate with an event in order to gain recognition as a sponsor.
</h5></div><h5 id='q82'>82. When a business sets up a Facebook account to communicate with its existing and potential customers,
what technological tool is it using?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Affiliate advertising</option><option value="B">B. Broadcast media</option><option value="C">C. Just-in-time marketing</option><option value="D">D. Social networking</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: Social networking</h5><h5>Many businesses are establishing a marketing presence on various social-networking
web sites. As the popularity of social networking (e.g., Facebook, Twitter, MySpace, Linkedin) continues
to grow, these types of web sites provide businesses with additional touch points in which to connect with
existing or new markets. For example, a business might inform its “friends” or “fans” about a special
event, provide product coupons, or post entertaining videos to generate interest. Businesses may also
solicit and receive feedback about their goods and services. Broadcast media uses radio waves (i.e.,
television, radio) to reach their audiences. Just-in-time is an inventory method that orders goods just in
time for them to be used or sold. Affiliate advertising is the process of promoting and selling another
business's products on a web site in exchange for a sales commission.
</h5></div><h5 id='q83'>83. What is the government likely to do, if it determines that a company has engaged in deceptive
advertising?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Increase the company's sales-tax rate</option><option value="B">B. Imprison the company's chief executive officer</option><option value="C">C. Require the company to place corrective advertising</option><option value="D">D. Rewrite the existing advertising copy

</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is C: Require the company to place corrective advertising</h5><h5>Corrective advertising involves placing messages in
various media to retract an inaccurate statement or to correct the public's false impression about a
product's features or abilities. Placing corrective advertising is often a major financial cost to a company,
and may also negatively affect the company's reputation. The government may also require a company
to cease running the deceptive ads and require the company to pay a fine. The government is not likely
to imprison the company's CEO, and it does not have the jurisdiction to increase the company's sales-tax
rate for the purpose of punishing the company's wrongdoing. It is not enough to rewrite the deceptive
advertising copy—the revised or corrected copy must be communicated to the appropriate audience.
</h5></div><h5 id='q84'>84. Alexandria has been using Look-So-Good cosmetics for several years and would not consider changing
brands. In fact, Alexandria likes the cosmetics so much that she has become an advocate for the
cosmetic company. She tells everyone about the features and benefits of Look-So-Good products, and
encourages them to try the cosmetics. What type of word-of-mouth marketing is Alexandria using?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Shill marketing</option><option value="B">B. Mobile marketing</option><option value="C">C. Organic marketing</option><option value="D">D. Virtual marketing</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Organic marketing</h5><h5>Word-of-mouth promotion occurs when customers tell others about their satisfaction
with the business. Organic word-of-mouth promotion occurs naturally. Because customers are satisfied
with the business and its products, they enthusiastically tell others about their satisfaction in the course of
normal conversation. In some situations, customers trust and like the product so much that they become
product advocates—putting in a good word whenever and wherever they can. Virtual marketing involves
communicating product information via the Internet. Mobile marketing involves communicating
information via mobile devices and networks (e.g., smartphones). Shill marketing involves employing
people to pose as customers who are satisfied with a business's product using word-of-mouth
techniques. Shill marketing is unethical behavior, and in some jurisdictions, it is an illegal practice.
</h5></div><h5 id='q85'>85. During one scene of a popular television show, an actor pours a box of brand-name cereal into a bowl
and begins to eat it. This is an example of</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. product programming.</option><option value="B">B. brand awareness.</option><option value="C">C. brand identification.</option><option value="D">D. product placement.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: product placement.</h5><h5>Product placement is a sales-promotion strategy in which a product or brand is
mentioned or used as a prop by types of media such as television, film, or the theater. For example, fans
of the television series Friday Night Lights will often see the television characters eat in an Applebee's
restaurant. The intent of product placement is to generate and reinforce brand awareness with a target
market. Brand identification is the process by which all of the branding elements work together to
generate instant consumer recognition of a company or product. The use of props in television shows
and movies is not called product programming.
</h5></div><h5 id='q86'>86. What interactive communication channel do businesses use to share company information with their
various publics?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Faxes</option><option value="B">B. Blogs</option><option value="C">C. Publications</option><option value="D">D. DVDs</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Blogs</h5><h5>A blog is an online diary or journal. Businesses use blogs as an informal way to share company
news, awards, research findings, trends, “how-to” information, product updates and uses with their
various publics. Blogs are interactive when they have applications that allow readers to post comments or
respond to blog postings. The ability to obtain feedback from blog readers is helpful to businesses in
gauging public opinion about their activities. Faxes, publications, and DVDs are communication methods
used to share public-relations information; however, these are not interactive communication methods.
</h5></div><h5 id='q87'>87. To maximize the impact of a print advertisement, the headline, copy, graphics, and signature should be
coordinated to</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. include humor.</option><option value="B">B. convey subliminal messages.</option><option value="C">C. communicate quality.</option><option value="D">D. create visual appeal.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: create visual appeal.</h5><h5>Because readers are bombarded with promotional messages, an advertiser must
coordinate the ad elements in ways that create visual appeal and attract the reader's attention. Visually
appealing ads support the ad's primary message and theme. A subliminal message contains hidden or
dual meanings that the message recipient may be conscious of. Although many ads contain subliminal
messages, the reader will not be exposed to the message unless the ad attracts his/her attention. The
nature of the product and the advertiser's promotional objectives determine whether the ad should
include humor or communicate quality.
</h5></div><h5 id='q88'>88. Which of the following is an activity that is performed by a business's public-relations department:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Developing job descriptions for employees</option><option value="B">B. Researching and developing product prototypes</option><option value="C">C. Coordinating speaking engagements for employees</option><option value="D">D. Selecting media for print and broadcast advertisements</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is C: Coordinating speaking engagements for employees</h5><h5>The public-relations department is a division of a
business that is responsible for establishing good relations between the business and its publics. The
various publics include the business's target market, its stakeholders, the local business community, its
employees, and local residents. One activity that a public-relations department coordinates is speaking
engagements for the business's employees. For example, a local civic group might ask the publicrelations department if a member of the business's executive-management staff could speak to the group
about a particular issue that is affecting the community. The public-relations department would work with
the appropriate employee to schedule the speaking engagement. The research and development
department conducts product research and develops product prototypes. Developing job descriptions is a
human-resources activity. The advertising department selects media for the business's advertising.
</h5></div><h5 id='q89'>89. A business that wants to obtain a lot of publicity about a new product should send a formal
announcement to an external audience, such as the</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. managers.</option><option value="B">B. media.</option><option value="C">C. employees.</option><option value="D">D. board of directors.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: media.</h5><h5>A business's public-relations department is responsible for establishing and maintaining good
relations between the business and the public. The public often consists of external audiences such as
customers, local businesses, the media, and local residents. The public also consists of internal
audiences such as employees, shareholders, and boards of directors. An important aspect of the publicrelations function is communicating information about the business to the public. An effective way of
communicating to many of the business's audiences and obtaining publicity is through the media—
television, radio, newspapers, etc. By sending press releases or holding press conferences, the business
can obtain publicity about its new products, community service projects, expansion plans, etc.
</h5></div><h5 id='q90'>90. What can a business do to attract trade-show attendees to the business's display or booth?</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Hold a prize drawing or raffle</option><option value="B">B. Send product coupons to attendees</option><option value="C">C. Place business cards on the display table</option><option value="D">D. Have plenty of seating available</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is A: Hold a prize drawing or raffle</h5><h5>During trade shows, exhibitors are competing for the attention of the tradeshow attendees. Therefore, exhibitors need to plan activities that will increase their visibility and provide
incentives that encourage attendees to remember their goods and services. Some exhibitors hold a
drawing (raffle) for a prize. Prizes might include gift certificates for goods or services or large items, such
as cars or boats. Because attendees must provide some basic information to put their names into the
drawing, exhibitors can hold onto the information and send follow-up materials (e.g., sales letters,
coupons) after the trade show. Providing business cards is important, but does not attract attention. The
type of the trade show and the size of the booth determines the need for seating.
</h5></div><h5 id='q91'>91. A business might choose to participate in a regional trade show instead of a national trade show because
regional trade shows</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. attract more attendees than national trade shows.</option><option value="B">B. are usually less expensive than national trade shows.</option><option value="C">C. are usually held at desirable destinations.</option><option value="D">D. generate a large portion of the business's annual sales income.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is B: are usually less expensive than national trade shows.</h5><h5>Trade shows are events where businesses display
and/or demonstrate their products to build sales leads and interest. A business considers many factors
when deciding to participate in a particular trade show. Some factors that businesses consider are the
trade-show location, travel and hotel expenses, booth costs, target audience, and the number of
expected visitors. Regional trade shows involve exhibiting to an audience located in a particular
geographical area, whereas national trade shows involve exhibiting to a national audience. There are
advantages and disadvantages in exhibiting at both types of trade shows. Regional trade shows tend to
be less expensive because the travel and exhibition costs are generally lower than the larger national
trade shows. And because regional trade shows attract a small audience, they provide more time for
exhibitors and attendees to interact. Not all regional shows are held at desirable destinations such as
Disneyworld. Trade shows can provide a business with an opportunity to gain exposure and contacts;
however, most businesses do not generate a substantial portion of their sales during the trade show.
</h5></div><h5 id='q92'>92. A business plans to launch a new product in the next year. When developing its promotional plan, the
business should</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. wait to promote the new product until the research and development costs are recovered.</option><option value="B">B. redirect most of its promotional activities to the new product.</option><option value="C">C. delay setting an advertising budget until it determines how well the new product performs.</option><option value="D">D. allocate a portion of its budget to promote the new product.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: allocate a portion of its budget to promote the new product.</h5><h5>If the business does not communicate
information about its new product, the target market will not know that the item is available for purchase.
This, in turn, will hinder new-product sales. Therefore, it is not in the business's best interest to delay
setting a budget or to hold off promoting the new product. Depending on the stage of the existing
products' life cycles, it may not be wise for the business to focus most of its promotion on the new
product.
</h5></div><h5 id='q93'>93. One way that a salesperson can provide customer service after a sale has been made is by</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. using suggestion selling techniques to increase the order size.</option><option value="B">B. acquiring knowledge about competitors' products.</option><option value="C">C. ensuring that the order is processed correctly.</option><option value="D">D. providing samples so the customer can try the product.

</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: ensuring that the order is processed correctly.</h5><h5>Customers are not going to be satisfied if they receive the
wrong size, color, quantity, or type of item. Therefore, salespeople should take steps to ensure that the
order is processed correctly. The salesperson can do this by checking the status of the order after it is
keyed into the computer to make sure that the order is exactly what the customer wants. The
salesperson may need to work with vendors, coworkers, and departments, such as inventory control and
the shipping department, to ensure that there aren't any bottlenecks or problems with the order.
Salespeople should know about competitors' products, provide samples, and use suggestion selling
before the customer decides to buy. Suggestion selling during the follow-up phase of the sale would
involve placing another order.
</h5></div><h5 id='q94'>94. When a customer brought back a coffee maker without a sales receipt, Tallman's department store
applied the current selling price of the item to a gift card for the customer to use in the store. This is an
example of a(n) ___________ policy.</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. discount</option><option value="B">B. return</option><option value="C">C. terms-of-sale</option><option value="D">D. guarantee</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: return</h5><h5>Selling policies are the general rules established by management to guide the personal-selling
effort and outline how things must be done. Selling policies ensure that all customers are treated fairly
and consistently. Return policies are types of service policies. Return policies guide the conditions under
which customers may return goods to the business for cash or credit. Factors that affect return policies
include proof of sale (receipt), time limits, and the condition of the item, such as if it has been used.
Terms-of-sale policies focus on the aspects of a sale with which customers are most concerned—price,
discounts, delivery, guarantee, and credit. Discount policies are types of terms-of-sale policies and
involve providing customers with discounts for early payment, trade-ins, or high-quantity purchases. A
guarantee is a promise made to the consumer that a product's purchase price will be refunded if the
product is not satisfactory.
</h5></div><h5 id='q95'>95. Which of the following is an example of unethical selling behavior that directly affects employee-toemployee relationships:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. The sales staff's commissions are lower after a manager restructures the company's sales
territories and sets high quotas.</option><option value="B">B. A buyer awards a major contract to a construction company after the company's vice president
gave the buyer Super Bowl tickets.</option><option value="C">C. To win a departmental sales contest, a salesperson claims to have processed a sales transaction
before it has been formalized.</option><option value="D">D. A salesperson does not want to lose a sale, so s/he withholds information from a prospect after
being questioned about the product's performance.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: To win a departmental sales contest, a salesperson claims to have processed a sales transaction
before it has been formalized.</h5><h5>Explanation not available</h5></div><h5 id='q96'>96. What form of technology are salespeople using that eliminates the need to carry a laptop and personal
data assistant while making sales calls?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Pager</option><option value="B">B. Smartphone</option><option value="C">C. Micro kiosk</option><option value="D">D. Router</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: Smartphone</h5><h5>Smartphones, such as Blackberries and iPhones, are mobile devices that salespeople can
use to make telephone calls, access the Internet, manage contacts, schedule appointments, and send
wireless faxes while calling on customers. Smartphones also contain digital cameras, which are often
useful when salespeople must take photographs of goods or spaces that require customized products.
Because smartphones have many applications and are small enough to fit into a coat pocket,
salespeople no longer need to carry around laptops, personal data assistants, etc. Pagers have
capabilities such as telephone message notification and e-mail, but do not have the same capabilities as
smartphones. A kiosk is a stand-alone structure placed in public places that is designed to provide
information and sell products. Micro kiosks are smaller and more compact than traditional kiosks. A
router is a device that intercepts and forwards signals on a computer network, allowing users to obtain
wireless Internet access.
</h5></div><h5 id='q97'>97. A salesperson says to a customer, “Mr. Michaels, I wouldn't buy from Davenport Electronics. That
company buys parts for its products from sweatshops, and the items don't meet safety codes. Its
products usually break within six months.” In many jurisdictions, the salesperson is violating selling
regulations related to</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. foreign corruption.</option><option value="B">B. price discrimination.</option><option value="C">C. business defamation.</option><option value="D">D. product infringement.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: business defamation.</h5><h5>Governments regulate selling practices to protect buyers and sellers. Many
jurisdictions have business-defamation laws that prohibit untrue or unsubstantiated statements that
intend to damage the reputation of another business. Therefore, businesses must take steps to train their
salespeople so they know what they can and cannot say to customers. Price discrimination is an illegal
activity in which a business charges different customers different prices for similar amounts and types of
products. Offering or accepting bribes in a selling situation is a common practice among some foreign
countries, but is illegal behavior in other countries that view it as corruption. The example does not
involve product infringement.
</h5></div><h5 id='q98'>98. A salesperson tells a customer, “Mrs. Wentworth, not only does this e-reader provide you the ability to
read and store written literature, but its WiFi capabilities allow you to download and listen to audio books
and surf the Internet.” What feature-benefit is the salesperson communicating to the customer?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Construction and materials</option><option value="B">B. Product uses</option><option value="C">C. Durability</option><option value="D">D. Appearance and style</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is B: Product uses</h5><h5>Because customers want to know the benefits of a product's features before making the
decision to buy, salespeople must be prepared to communicate this information. Some products perform
multiple functions, which is a benefit to customers because they do not need to buy individual items to
perform each function. In the example, the e-reader has multiple uses—reading functions, audio
functions, library storage, and Internet access. The example does not communicate information about the
e-reader's construction and materials, durability, appearance, or style.
</h5></div><h5 id='q99'>99. Which of the following is a question that a salesperson is most likely to ask during the reaching closure
phase of a sale:</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. How can I help you today, Mrs. Watson?</option><option value="B">B. Will you be using the printer to fax and copy documents?</option><option value="C">C. Would you like to use your credit card to pay for the camera?</option><option value="D">D. Would you like me to show you the features of the boat, Mr. Conrad?</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: Would you like to use your credit card to pay for the camera?</h5><h5>During the reaching closure phase of the
selling process, the salesperson asks the customer to buy. One technique salespeople use to close the
sale is a direct approach—asking for the order. One way is to ask the customer how s/he would like to
pay for the item. The question about how the customer plans to use the printer is asked during the
discovering customer needs of the selling process. During the prescribing solutions phase, the
salesperson will present the features and benefits of the item. During the approach phase of the selling
process, salespeople often ask how they can help the customer.
</h5></div><h5 id='q100'>100. Sean was born and raised in Quebec, and his grandparents are from Ireland. Sean's Irish heritage is his</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. subculture.</option><option value="B">B. dominant culture.</option><option value="C">C. standard culture.</option><option value="D">D. culture.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: subculture.</h5><h5>A dominant culture is the culture with which a person most identifies. Because Sean was
born and raised in Quebec, he likely identifies with the Canadian culture. A subculture is a secondary
group within a dominant culture. Because Sean's grandparents are from Ireland, Sean has likely been
exposed to and identifies with many Irish traditions, making his Irish heritage his subculture. Standard is
a not type of culture.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Marketing/Marketing_3_Whole_Master.js"></script></html>