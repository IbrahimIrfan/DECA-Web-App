<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing Exam 2</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. What type of debtor-creditor relationship involves the acquisition and use of credit cards?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Customary</option><option value="B">B. Unintentional</option><option value="C">C. Voluntary</option><option value="D">D. Implied</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: Voluntary</h5><h5>The debtor is the individual or business that owes money to another individual or business
(creditor). An individual or business that obtains a credit card from a financial institution or retailer is
entering into a voluntary debtor-creditor relationship, which means that both the debtor and the creditor
enter the relationship willingly and understand the risks and expectations regarding the extension and
use of credit. Unintentional, customary, and implied are not types of debtor-creditor relationships.
</h5></div><h5 id='q2'>2. A manufacturer advises its distributors that they must achieve an extremely high level of sales next year
to continue as channel members. This action is most likely to create</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. vertical conflict.</option><option value="B">B. channel enlargement.</option><option value="C">C. complex distribution patterns.</option><option value="D">D. a comparative advantage.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: vertical conflict.</h5><h5>Vertical conflict occurs between channel members at different levels within the same
channel. In the example, the distributors might feel that the manufacturer has set unreasonable sales
goals, which may cause vertical conflict. If the distributors do not reach their sales goals, the
manufacturer will drop the less productive channel members, thereby reducing the size of the distribution
channel. Distribution patterns are the strategies (intensive, selective, or exclusive) that businesses use to
move products through the distribution channel. There is not enough information provided about the
manufacturer's distribution patterns to determine their impact on changes within the distribution channel.
Comparative advantage is the advantage achieved by a nation when it specializes in producing goods
and services at which it is relatively most efficient.
</h5></div><h5 id='q3'>3. When the salesperson did not return Mr. Adkins' calls about the status of his backordered stove, he
cancelled his order. The salesperson lost the order because s/he</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. ordered the wrong stove.</option><option value="B">B. failed to provide customer service.</option><option value="C">C. couldn't get a hold of the vendor.</option><option value="D">D. had incorrect customer contact information.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: failed to provide customer service.</h5><h5>Back orders are requests (orders) for goods that are out of stock and
will ship when the items are available. The salesperson failed to provide customer service because s/he
did not follow-up with Mr. Adkins to let him know about the status of his order. As a result, the customer
became frustrated, cancelled the order, and likely took his business elsewhere. There is not enough
information available to determine if the salesperson ordered the wrong stove, couldn't get hold of the
vendor, or had incorrect customer contact information.
</h5></div><h5 id='q4'>4. To build and repair bridges, Campbell Construction Company buys steel beams from Horton
Manufacturing. In this situation, Campbell Construction Company is the</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. indirect agent.</option><option value="B">B. wholesaler.</option><option value="C">C. producer.</option><option value="D">D. industrial user.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: industrial user.</h5><h5>A business that buys materials, services, or goods which it will use to make other goods
is an industrial user. Because Campbell Construction Company buys steel beams to carry out its
business activities (building and repairing bridges), it is an industrial user. If Horton Manufacturing makes
the steel beams, it is the producer. A wholesaler is an intermediary who helps to move goods between
producers and retailers by buying goods from producers and selling them to retailers. Agents are
intermediaries who assist in the sale and/or promotion of goods and services but do not take title to them.
</h5></div><h5 id='q5'>5. Tying agreements are illegal under which of the following conditions:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. When they limit liability</option><option value="B">B. When they prohibit monopolies</option><option value="C">C. When they regulate promotion</option><option value="D">D. When they reduce competition</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: When they reduce competition</h5><h5>Tying agreements are considered illegal if they substantially limit
competition by preventing other distributors from obtaining and selling the same product to customers. A
monopoly is a type of market structure in which a market is controlled by one supplier and there are no
substitute goods or services readily available. In many countries, monopolies are illegal. The government
regulates promotion. Tying agreements do not limit liability.
</h5></div><h5 id='q6'>6. What information should a business provide its suppliers to ensure that products will be available to meet
demand?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Cash-flow analysis</option><option value="B">B. Annual report</option><option value="C">C. Sales forecast</option><option value="D">D. Media schedule</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is C: Sales forecast</h5><h5>A sales forecast is a prediction of future sales over a specific period of time. When a
business shares its sales forecast with its vendors, they have time to plan and make sure that they have
the products available when and where the products are needed. An annual report, a cash-flow analysis,
and a media schedule do not provide the information that vendors need to plan their inventory and
delivery strategies.
</h5></div><h5 id='q7'>7. Which of the following is a common reason for horizontal conflict among distribution channel members:</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Transportation issues</option><option value="B">B. Territorial boundaries</option><option value="C">C. Direct distribution</option><option value="D">D. Shipping errors</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: Territorial boundaries</h5><h5>Horizontal conflicts are disagreements between channel members at the same
level of distribution. Unclear territorial boundaries or violations of those boundaries are often sources of
horizontal conflict. For example, suppose two retailers are located on the same block, and one store
begins to sell the same line of specialty goods that the other store sells. Because both stores are
competing for the same customers, conflict is likely to occur. Vertical conflicts are disagreements
between channel members at different levels of the distribution channel. If a producer decides to use a
direct distribution strategy (bypass its distributors and sell directly to end users), vertical conflict is likely
to occur. Transportation issues and shipping errors may cause occasional vertical conflict.
</h5></div><h5 id='q8'>8. Which of the following is an example of a company procedure:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. To order supplies, employees must complete the R-3 form and then give it to their immediate
supervisor.</option><option value="B">B. Employees are permitted to wear open-toed shoes to work, but they may not wear flip-flops.</option><option value="C">C. After five years of service, staff members receive four weeks of paid vacation.</option><option value="D">D. Triton Manufacturing pays employees the standard gas mileage reimbursement rate of $.55 per
mile.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is A: To order supplies, employees must complete the R-3 form and then give it to their immediate
supervisor.</h5><h5>Explanation not available</h5></div><h5 id='q9'>9. Which of the following gestures would indicate a speaker's nervousness during an oral presentation:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Standing up straight</option><option value="B">B. Maintaining eye contact</option><option value="C">C. Speaking very quickly</option><option value="D">D. Fidgeting with accessories</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: Fidgeting with accessories</h5><h5>Shaking hands, swaying, and fidgeting with things such as jewelry or a pen
are gestures that often indicate to the audience that the speaker is nervous. A speaker should be aware
of and monitor these types of gesture when giving an oral presentation because they can be distracting
to the audience. Practicing the presentation in front of a trusted friend or colleague may help an individual
feel more comfortable speaking in front of others. Maintaining eye contact and standing up straight are
ways in which a speaker can convey confidence during an oral presentation. Speaking too fast or too low
are verbal cues that the speaker may be nervous.
</h5></div><h5 id='q10'>10. Which of the following is an example of organizing business information by location:</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Corinne prepares a real-estate guide that lists homes for sale in ascending order by selling price.</option><option value="B">B. Ben's history assignment is to create a timeline to illustrate his family's immigration from Ireland.</option><option value="C">C. Elizabeth structures a national insurance company's financial reports by branch.</option><option value="D">D. Jacob structures a research report by providing the most important information in the first section
of the document.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: Elizabeth structures a national insurance company's financial reports by branch.</h5><h5>Geographical order puts
information in order based on the geographic location, such as business region or branch. When a
business wants to evaluate or compare the financial performance of each business location, the
geographic organizational approach is appropriate to use. Ben is organizing information for school rather
than business and is using a chronological format for his timeline. The chronological format involves
placing information in sequence according to time. Corrine is organizing information by value because
she is listing homes by selling price. Jacob is using the deductive approach to organize his research
report. The deductive approach involves presenting the main ideas, recommendations, and most
important information in the first part of the report.
</h5></div><h5 id='q11'>11. Using the APA writing style, Ella compiles a list of the books, web sites, and journals that she used when
developing a complex research report. What is Ella developing?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. The executive summary</option><option value="B">B. An index</option><option value="C">C. The bibliography</option><option value="D">D. A glossary</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is C: The bibliography</h5><h5>A bibliography is a list of resources containing the information that the writer used to
prepare a written document. When developing formal research reports, the writer should use the
appropriate writing style for all components of the report to build credibility with the audience. The writing
style that the writer uses depends on the business's preferences or the type of report. For example, the
American Psychological Association (APA) style is often used when writing about topics related to social
sciences. An index is typically placed in the back of a publication and lists the subjects, names, and
companies that are referenced in a book along with the page numbers in which they appear. A glossary
is a list of terms with their definitions. An executive summary, which is usually placed at the beginning of
a long report, provides an overview of the entire document.
</h5></div><h5 id='q12'>12. When the meeting leader asked the group participants if they had any suggestions for the new product
catalog, Lily pulled out a list of notes that she had compiled and talked for the remaining 20 minutes of an
hour-long meeting. In this situation, Lily</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. followed parliamentary procedure.</option><option value="B">B. provided positive feedback.</option><option value="C">C. monopolized the discussion.</option><option value="D">D. expressed her opinions clearly.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: monopolized the discussion.</h5><h5>When participating in a staff meeting, it is important to provide information or
make suggestions when appropriate. When one person dominates the discussion, others do not have an
opportunity to provide their input. Because Lily spoke for a long time during the meeting, she
monopolized the discussion. There isn't enough information provided to determine if Lily provided
positive feedback, followed parliamentary procedure, or expressed her opinions clearly.
</h5></div><h5 id='q13'>13. Mr. Martin said, “I want to return this software and get my money back. Before I bought it, your
salesperson told me that it was compatible with my computer, but it isn't.” What is the reason for Mr.
Martin's complaint?</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. The product was labeled incorrectly.</option><option value="B">B. The product was defective.</option><option value="C">C. The salesperson used high-pressure sales tactics.</option><option value="D">D. The salesperson provided inaccurate information.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: The salesperson provided inaccurate information.</h5><h5>Product returns are costly to a business, but
businesses can take steps to lower product-return rates. Because salespeople are in contact with
customers, they can lower return rates by learning about the business's products and applying that
knowledge to provide customers with accurate information. Businesses can help salespeople gain
product knowledge by providing product training. By training salespeople about products, businesses can
reduce the risks associated with salespeople giving incorrect product information, as described in the
example provided. There is not enough information provided to determine if the product was defective or
labeled incorrectly or if the salesperson used high-pressure sales tactics.
</h5></div><h5 id='q14'>14. The Upper Crust Bread Shop bakes its bread on site so that customers can smell the bread when they
enter the shop, and it sets baskets of bread samples throughout the shop. The shop uses these touch
points to carry out its</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. operations-management processes.</option><option value="B">B. product-development tactics.</option><option value="C">C. customer-experience management strategies.</option><option value="D">D. brand-insistence advertising techniques.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: customer-experience management strategies.</h5><h5>Customer-experience management consists of the
strategies, processes, and policies that a business uses to meet or exceed customer expectations and
provide customers with outstanding experiences at every touch point. Touch points are the opportunities
that businesses have to connect with customers and reinforce their brand value. In the example, the
customers' experiences are enhanced by the smell of fresh bread and the opportunity to taste samples of
different breads throughout the store. Product development is the stage in the creation of a new product
in which a working model may be tested, modified, and retested. Operations management is the process
of planning, controlling, and monitoring the day-to-day activities required for continued business
functioning. Brand insistence is the stage of brand loyalty in which consumers insist upon buying a
specific brand. Advertising is a paid form of nonpersonal promotion.
</h5></div><h5 id='q15'>15. Molly works in operations. Her job is to make sure that the business has all the supplies it needs to keep
production going smoothly. Molly works in the area of</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. human-resources management.</option><option value="B">B. financial analysis.</option><option value="C">C. marketing.</option><option value="D">D. purchasing.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is D: purchasing.</h5><h5>Molly works in purchasing, the part of operations that ensures the business will have the
goods and services needed to keep production going and business running smoothly. Financial analysis
refers to obtaining necessary funds and keeping accurate and complete financial records. Marketing
involves everything related to fulfilling customers' product needs. Human-resources management
involves all the tasks and issues related to keeping the business staffed.
</h5></div><h5 id='q16'>16. Milford Glassworks encourages all of its employees to provide input for system improvements and
suggestions for product ideas. What strategy is Milford using to adapt to changes in the marketplace?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Innovation management</option><option value="B">B. Competitive aggression</option><option value="C">C. Reactive control</option><option value="D">D. Cultural intelligence</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is A: Innovation management</h5><h5>Innovative management is a management style that embraces active
participation throughout all levels of the organization. Company leaders tend to take roles that are more
helpful and nurturing than controlling under this management style, which supports a creative work
culture and encourages idea sharing. Because employees are carrying out the work, they often have
ideas that will help them perform more efficiently or serve customers more effectively. Competitive
aggression is a drive to win scarce customer dollars in the marketplace. Cultural intelligence means
being sensitive to the customs and traditions of people from different cultural backgrounds. Proactive
management, which involves anticipating and advanced planning for change, helps businesses adapt
more quickly than a reactive approach.
</h5></div><h5 id='q17'>17. Which of the following is an oligopoly:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Oil industry</option><option value="B">B. Apparel industry
</option><option value="C">C. Food-service industry</option><option value="D">D. Computer industry
</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is A: Oil industry</h5><h5>An oligopoly is a market structure in which there are relatively few sellers, and industry
leaders usually determine prices. Because oil is a scarce, natural resource and is complex to process
into usable products, there are fewer businesses in the oil industry than other types of industries such as
the apparel, food-service, and computer businesses.
</h5></div><h5 id='q18'>18. Last year, Ryan earned a salary of $32,500, and paid 15% in federal income taxes. This year, Ryan
received a promotion, and his salary is now $36,750. Due to his salary increase, Ryan must pay 25% in
federal income taxes. This is an example of a __________ tax.</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. regressive</option><option value="B">B. progressive</option><option value="C">C. proportional</option><option value="D">D. corporate</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: progressive</h5><h5>A progressive tax structure is one in which those who earn more are required to pay a
higher percentage of their income in taxes. In other words, as a person's income bracket increases,
his/her tax rate also increases. The U.S. income tax is a progressive tax. If using a regressive tax
structure, people who earn more income pay a lower percentage of income in taxes. As income
increases, the tax rate decreases. Sales and excise taxes are regressive taxes because people with
lower incomes ultimately pay a larger percentage of their income in sales and excise taxes. A
proportional tax structure is one in which everyone pays the same percentage of income in taxes,
regardless of income level. Businesses that are structured as corporations pay corporate taxes.
</h5></div><h5 id='q19'>19. What happens when inflation increases?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Consumers can buy more for less.</option><option value="B">B. Supply exceeds demand.
</option><option value="C">C. Purchasing power decreases.</option><option value="D">D. Production efficiency increases.
</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: Purchasing power decreases.</h5><h5>Inflation, which is a rise in prices, decreases purchasing power because it
takes more money to buy the same item. This means that consumers and businesses buy less with the
same amount of money. Demand that exceeds supply typically correlates with a rise in inflation. The level
of production efficiency does not always increase when inflation increases.
</h5></div><h5 id='q20'>20. Joe realized that if he had taken more time to proofread his work carefully and correct his grammatical
mistakes, he would have received a better grade on his report. In this situation, Joe is</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. assessing a weakness to improve performance.</option><option value="B">B. identifying a way to enhance his creativity.</option><option value="C">C. making a false generalization about himself.</option><option value="D">D. comparing his talents with those of his classmates.

2013 HS ICDC

MARKETING CLUSTER EXAM

3
</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: assessing a weakness to improve performance.</h5><h5>Self assessment involves objectively looking at your own
strengths and weaknesses, so you can make the best of your strengths and take steps to improve your
weaknesses. In the situation provided, Joe's weakness was the grammatical errors that he failed to find
and correct in his research report. He determined that he could improve his performance by taking more
time to proofread his work in the future before submitting it to his teacher. A false generalization is
making a broad assumption with very little supporting evidence. A false generalization that Joe might
make is that he is a terrible writer because he received a low grade on one paper. Joe is not making a
false generalization, identifying a way to enhance his creativity, or comparing his talents with those of his
classmates.
</h5></div><h5 id='q21'>21. The supervisor said, "Amber, I know that this is a busy time for you right now, but I really need for you to
give me the weekly expense report on Tuesday morning. Because you submitted last week's report on
Wednesday, reimbursement checks were delayed, and several employees did not receive payment when
they expected it." The supervisor is providing Amber with</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. constructive criticism.</option><option value="B">B. an unsolicited opinion.</option><option value="C">C. internal feedback.</option><option value="D">D. a defensive response.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: constructive criticism.</h5><h5>Constructive criticism is evaluative information designed to help someone improve.
It is especially useful when it is offered to workers improve their performance or behavior on the job. In
the situation provided, the supervisor points out a problem with Amber's work priorities and explains why
it is important to submit the weekly expense report on a certain day. Though the supervisor's comments
may be unsolicited, they are based on facts rather than opinion. Because the supervisor understands that
Amber has a lot of work to do, s/he is delivering the message (rather than a response) in an empathic
(rather than defensive) way. Internal feedback comes from within yourself.
</h5></div><h5 id='q22'>22. Which of the following is a true statement about secondary dimensions of diversity:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. They are mental aptitudes.</option><option value="B">B. They are physical traits.</option><option value="C">C. They are determined by a person's subculture.</option><option value="D">D. They can change over time.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is D: They can change over time.</h5><h5>Secondary dimensions of diversity are differences that may change at
various points throughout one's lifetime and include characteristics such as language, religion, income,
geographic location, family status, work experience, communication style, and education level. Physical
traits and mental aptitudes are primary dimensions of diversity, which are inborn differences that cannot
be changed. These differences include gender, age, race/ethnicity, etc. Subculture is a secondary group
within a dominant culture. For example, suppose that a U.S. citizen has parents of Chinese decent; the
Western culture is most likely the person's dominant culture, while his/her Chinese heritage represents a
subculture. A person's subculture may influence some of a person's secondary dimensions of diversity,
but it does not determine these dimensions.
</h5></div><h5 id='q23'>23. You are more likely to persuade others to take action if you</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. overstate the benefits.</option><option value="B">B. use illogical reasoning.</option><option value="C">C. provide supporting facts.</option><option value="D">D. conceal your credibility.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: provide supporting facts.</h5><h5>Providing supporting facts builds your credibility. And if others view you as a
credible person, you are more likely to persuade them to take action. Overstating the benefits and
providing illogical reasons are not likely to enhance your credibility and persuade others to take the
desired action.
</h5></div><h5 id='q24'>24. What is the benefit of shared vision to an organization?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. It ensures that the team's goals are achievable.</option><option value="B">B. It serves as a guide for decision making.</option><option value="C">C. It creates an ethnocentric environment.</option><option value="D">D. It supports a groupthink attitude.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: It serves as a guide for decision making.</h5><h5>When a shared vision exists, all members of the organization
understand and support the organization's purpose. Successful organizations set goals and make
decisions to fulfill the organization's purpose, which is based on the vision. A shared vision does not
ensure that goals are achievable. Groupthink is a form of extreme cohesiveness that occurs when
individuality and independent thinking within the group is discouraged. Ethnocentrism is the belief that
your own culture is naturally better than other cultures. Unattainable goals, ethnocentrism, and
groupthink tend to create circumstances that hinder an organization's ability to achieve its purpose.
</h5></div><h5 id='q25'>25. Which of the following situations involves the use of negative tactics to build political relationships within
the organization:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Jason accepts credit for Tori's advertising campaign idea during a meeting with management.</option><option value="B">B. Lydia wants to increase her internal contacts and network, so she volunteers to help with a
project.</option><option value="C">C. Patrick compliments his manager on her/his chip shot out of a sand trap during a corporate golf
outing.</option><option value="D">D. Miranda makes sure that she dresses professionally during important business meetings.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: Jason accepts credit for Tori's advertising campaign idea during a meeting with management.</h5><h5>Political
relationships in the work environment involve building alliances with managers and colleagues to
maximize leverage within the organization. While political relationships (often called office politics)
facilitate beneficial results for the business, some individuals use negative tactics to obtain leverage for
their own purposes. One of these tactics involves taking credit for another person's idea or work. By
taking credit for another person's work, the individual is trying to make himself/herself look competent at
the expense of others. This type of behavior typically creates a negative, distrustful work environment.
Volunteering to work on a project, giving sincere compliments, and dressing professionally are good
ways to build positive business relationships.
</h5></div><h5 id='q26'>26. Because Elise paid her monthly credit-card bill on April 16 instead of April 4, the credit-card issuer added
a $25 charge to her May billing statement. This is an example of a(n) ___________ fee.</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. cash-advance</option><option value="B">B. annual</option><option value="C">C. balance-transfer</option><option value="D">D. late</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is D: late</h5><h5>Credit-card issuers often charge late fees for payments that do not arrive on time. In the example,
the card-card issuer received Elise's payment several days after the due date. Some credit-card issuers
require credit-card holders to pay an annual fee for the privilege of using the credit card. A cash-advance
fee is a charge for using the credit card to obtain cash. A balance-transfer fee is a charge for moving a
balance owed from one credit card to another credit card. Credit-card holders often transfer their
balances to cards that have lower interest rates.
</h5></div><h5 id='q27'>27. What is a benefit of investing in mutual funds?</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Investors' fees are waived because it is an ownership investment.</option><option value="B">B. Investors are guaranteed a minimal amount of return.</option><option value="C">C. Investors earn interest because it is a lending investment.</option><option value="D">D. Investors have access to a fund manager's expertise.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: Investors have access to a fund manager's expertise.</h5><h5>A mutual fund is a type of ownership investment
that involves collecting money from many people and then investing it in an assortment of different
securities such as stocks or bonds. The benefit to shareholders of placing money in mutual funds is that
a well-trained fund manager has the expertise to make smart investment decisions on their behalf.
Shareholders are not guaranteed a minimal amount of return on their mutual-fund investments, but
because the funds are spread out among different securities, the risk of a total financial loss is reduced.
Disadvantages to investing in mutual funds are that shareholders pay fees for someone to manage their
investments, and the mutual-fund earnings are taxable.
</h5></div><h5 id='q28'>28. When identifying risks that a business faces, management should focus on the</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. probability of risk occurrence.</option><option value="B">B. impact of the risks.</option><option value="C">C. sources of the risks.</option><option value="D">D. ability to transfer the risks.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: sources of the risks.</h5><h5>Risk management involves carrying out activities to limit the business's losses. The
first step in risk management is identifying the various risks the businesses face. By understanding the
circumstances that increase risk, the business can determine how to measure, respond, and manage it.
Probability and impact are two dimensions of measuring risk. Transferring risk is a risk-response
strategy. Purchasing an insurance policy is a common way to transfer risk.
</h5></div><h5 id='q29'>29. When Samantha reviewed her company's financial information, she noticed that the sales for the Java6
coffee maker decreased for three consecutive months. In this situation, the financial information helped
Samantha</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. make a pricing decision.</option><option value="B">B. calculate liquidity ratios.</option><option value="C">C. identify a trend.</option><option value="D">D. negotiate a contract.

2013 HS ICDC

MARKETING CLUSTER EXAM

4
</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: identify a trend.</h5><h5>One reason that businesses analyze financial information is to identify trends. In the
example, the company's sales for a certain product have decreased over time, which indicates a
problem. With this information, the company can take steps to determine the reason for the sales decline
so it can take corrective action. For example, the business might survey customers and ask them about
their experiences with the product. If the customers say that the product is inferior or defective, the
business might decide to drop the item from its product line. The financial information did not help
Samantha calculate liquidity ratios, make a pricing decision, or negotiate a contract.
</h5></div><h5 id='q30'>30. Which of the following are listed as long-term assets on a balance sheet:</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Land, cash, and mortgage</option><option value="B">B. Buildings, vehicles, and capital equipment</option><option value="C">C. Vehicles, insurance, and accounts payable</option><option value="D">D. Capital equipment, mortgage, and inventory</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: Buildings, vehicles, and capital equipment</h5><h5>A balance sheet is a financial statement that captures the
financial condition of the business at that particular moment. The balance sheet shows a business's
assets, liabilities, and owner's equity. Long-term assets are items of value—buildings, vehicles, and
capital equipment—that businesses use to generate revenue for more than a year. Inventory and cash
are listed as current or short-term assets, which involve levels that tend to fluctuate. The mortgage is a
long-term liability, and accounts payable (e.g., insurance premiums) are current liabilities.
</h5></div><h5 id='q31'>31. The primary reason for analyzing budget variances is to</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. determine where the business is on target and where it is not.</option><option value="B">B. ensure that the business generates a sizable profit.</option><option value="C">C. understand the generally accepted accounting principles.</option><option value="D">D. make adjustments to the business's operating procedures.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is A: determine where the business is on target and where it is not.</h5><h5>The budget lets the business know if it is
achieving its goals. If the actual performance is lower than expected, the business can take steps to
correct the problem. Such actions might include finding ways to lower expenses or using strategies to
increase sales to achieve the desired profit levels. Depending on the situation, the business might be
able to change its operating procedures to improve performance. Analyzing budget variances will not
help the business understand the generally accepted accounting principles, which are guidelines for
recording and reporting financial data.
</h5></div><h5 id='q32'>32. As a member of the company's employee selection committee, Logan is urging the other committee
members to choose his best friend Markus for an executive-management position. What ethical issue
does this situation illustrate?</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Cultural bias</option><option value="B">B. Conflict of interest</option><option value="C">C. Lack of transparency</option><option value="D">D. Bribery</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: Conflict of interest</h5><h5>A conflict of interest involves a situation in which an individual has a personal stake in
the outcome of an action or decision that affects others. In the example, Logan is in a position to
influence a hiring decision that involves his best friend. Markus may be a qualified candidate, but if he is
hired, it may appear that he got the job because of his friendship with Logan. There is not enough
information provided to determine if Logan is withholding the fact (lack of transparency) that he and
Markus are friends or if Logan is engaging in bribery. Cultural bias involves favoring one culture over
another.
</h5></div><h5 id='q33'>33. During a board of directors meeting, the company's CEO said, “Based on last year's sales data and
changes in economic conditions, I believe that sales will increase next year.” In this situation, the CEO
has provided the board members with a(n)</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. fact.</option><option value="B">B. prediction.</option><option value="C">C. estimate.</option><option value="D">D. recommendation.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: prediction.</h5><h5>A prediction is a forecast that people make about the future. Predictions are not always
supported by data. In the example, the CEO did not provide numerical sales data or specific economic
indicators to support his/her statement. An estimate is an educated guess that may consider data that are
not verified. Facts are verified data. A recommendation is a suggestion to take a certain course of action.
</h5></div><h5 id='q34'>34. What activity involves transforming facts and figures into a useful format?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Information reporting</option><option value="B">B. Data mining</option><option value="C">C. Data processing</option><option value="D">D. Information gathering</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: Data processing</h5><h5>Data processing is an important activity in the marketing-information management
function because data are typically not useful in their original form. Data processing takes the raw data
and transforms them into organized, meaningful marketing information. After transforming the data into
useable information, marketers gather the information and prepare reports to facilitate decision making.
Data mining is the process of searching computer databases to look for patterns and relationships among
information.
</h5></div><h5 id='q35'>35. Which of the following is an example of ethical behavior in marketing-information management:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Using complex processes for customers to opt-out of e-mail correspondence</option><option value="B">B. Changing survey feedback to reflect a positive research outcome</option><option value="C">C. Distributing the telephone numbers of customers without their permission</option><option value="D">D. Implementing procedures to protect the privacy of survey respondents</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: Implementing procedures to protect the privacy of survey respondents</h5><h5>Taking steps to protect the
privacy of survey respondents is an ethical action. Manipulating feedback, distributing personal
information without permission, and using complex e-mail opt-out processes are unethical behaviors.
</h5></div><h5 id='q36'>36. The primary reason that the government regulates the ways in which healthcare organizations handle
medical records is to</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. improve employees' performance.</option><option value="B">B. prevent personal-injury lawsuits.</option><option value="C">C. keep tax information confidential.</option><option value="D">D. protect the patients' privacy rights.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: protect the patients' privacy rights.</h5><h5>By law, healthcare organizations must take steps to ensure that
patients' medical records are secure and that patients know how the healthcare organization uses and
discloses medical information. The government does not regulate healthcare information-management
activities to prevent personal-injury lawsuits, keep tax information confidential, or improve employees'
performance.
</h5></div><h5 id='q37'>37. A business's expense reports and cash-register receipts are sources of __________ research data.</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. internal, quantitative</option><option value="B">B. external, quantitative</option><option value="C">C. elementary, qualitative</option><option value="D">D. organic, qualitative</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: internal, quantitative</h5><h5>Internal data, such as expense reports and cash-register receipts, are generated
within the business. Because expense reports and cash-register receipts contain specific, numerical,
measurable data, they are quantitative data. Businesses collect external data from outside sources such
as competitors' web sites and government publications. Qualitative data are based on emotions, feeling,
thoughts, and experiences. Elementary and organic are not types of data.
</h5></div><h5 id='q38'>38. “How can we alter our existing product so it will appeal to another market?” is an example of a</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. strategy-oriented decision problem.</option><option value="B">B. discovery-oriented decision problem.</option><option value="C">C. market-research analysis.</option><option value="D">D. market-situation analysis.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is A: strategy-oriented decision problem.</h5><h5>A decision problem states the purpose of or need for the marketing
research. Strategy-oriented decision problems involve answering the questions “how?” or “which?”.
Discovery-oriented decision problems involve answering the questions “what? or “why?”. Researchers
often clarify the decision problem by conducting a situation analysis, which involves analyzing current
conditions that affect the business. After researchers pinpoint the decision problem, they can decide how
to design and carry out the marketing research.
</h5></div><h5 id='q39'>39. Which of the following is an example of causal research:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. A pet-supply company reviews invoices and receipts to determine which line of dog food is
generating the most sales.</option><option value="B">B. A large publisher holds a series of focus groups with teachers to gather opinions about the
mathematics textbooks.</option><option value="C">C. A hotel chain places suggestion cards in its sleeping rooms to solicit feedback about its guests'
level of satisfaction with its services.</option><option value="D">D. A quick-serve restaurant introduces a breakfast burrito to a limited segment of the market to
determine product acceptability.

2013 HS ICDC

MARKETING CLUSTER EXAM

5
</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: A quick-serve restaurant introduces a breakfast burrito to a limited segment of the market to
determine product acceptability.

2013 HS ICDC

MARKETING CLUSTER EXAM

5
</h5><h5>Explanation not available</h5></div><h5 id='q40'>40. When using the systematic random sampling method, marketers must determine the</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. skip interval.</option><option value="B">B. stratum.</option><option value="C">C. cluster.</option><option value="D">D. quota gap.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: skip interval.</h5><h5>Systematic random sampling is a probability sampling method that involves placing
sampling units into a random list and drawing a sample using a skip interval. Skip interval is the number
of spaces between each sampling unit drawn in systematic random sampling. Stratum and cluster are
types of probability sampling methods that involve dividing the target population into non-overlapping
groups or subpopulations. Quota sampling is a non-probability sampling method, which ensures that
specific groups within a population are represented within the sample. Quota gap is not a consideration
when using the systematic random sampling method.
</h5></div><h5 id='q41'>41. While filling out a customer-satisfaction survey, Ashley is asked to rank her level of agreement with the
statement, “The sales representative was friendly and courteous.” Out of the five options presented,
Ashley's response is “strongly agree.” This is an example of a _________ rating scale.</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Likert</option><option value="B">B. Semantic differential</option><option value="C">C. Paired comparison</option><option value="D">D. Retention</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: Likert</h5><h5>The Likert scale measures the respondents' level of agreement with a statement. The response
options might include phrases such as strongly agree, agree, no opinion, disagree, and strongly
disagree. The semantic differential scale provides seven spaces that are bound by descriptive antonyms
at each end of the scale, such as durable and fragile. The respondent places an "X" at the point or space
on the continuum that best describes his/her feelings about the object or idea that s/he is rating. A paired
comparison scale asks respondents to make comparisons based on specific circumstances or criterion.
Retention is not a type of rating scale.
</h5></div><h5 id='q42'>42. To understand consumers' buying habits over time, marketing researchers might ask a sample of the
population to</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. develop a media blog.</option><option value="B">B. maintain a product diary.</option><option value="C">C. keep track of their ideas.</option><option value="D">D. prepare an opinion statement.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: maintain a product diary.</h5><h5>A product diary is a type of survey that requires participants to log various types
of data in a central location (e.g., printed booklet or online application) for a specific period of time. For
example, marketing researchers may ask the participants to note where they purchase certain items and
brands and why they select specific items. After the marketing researchers collect the diaries, they can
analyze the data and gain insight about the participants' buying habits. A blog is an online diary in which
individuals or groups (e.g., businesses and media outlets) post information and typically provide readers
with opportunities to comment about the content. In the situation provided, marketing researchers are
asking participants to record information about specific activities—not their ideas or opinions.
</h5></div><h5 id='q43'>43. An interviewer should carefully monitor his/her tone of voice, facial expressions, and gestures when
collecting marketing data from respondents to</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. avoid appearing biased.</option><option value="B">B. limit the length of the interview.</option><option value="C">C. discourage inappropriate responses.</option><option value="D">D. dominate the conversation.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: avoid appearing biased.</h5><h5>A personal interview is one way to collect detailed, qualitative marketingresearch data. When marketing researchers conduct interviews, it is important for them to make the
interviewees feel comfortable and willing to talk openly about the topic at hand. Interviewers should
monitor their verbal and nonverbal behavior to ensure that they appear neutral and unbiased. If an
interviewer says or does something to indicate a biased attitude, tries to influence responses, or
dominates the conversation, the interviewee may not feel comfortable answering questions honestly. If
the interviewee provides dishonest answers, the research is inaccurate or unreliable. A time limit on an
interview is not a reason for an interviewer to monitor his/her verbal and nonverbal behavior during the
interview.
</h5></div><h5 id='q44'>44. What activity is a marketing researcher performing when s/he counts the responses to a survey?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Assigning values</option><option value="B">B. Tabulating data</option><option value="C">C. Interpreting primary research</option><option value="D">D. Developing a sample plan</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is B: Tabulating data</h5><h5>Retrieved
September 7, 2012, from http://www.marin.edu/buscom/index_files/Page1347.htm
11. C
The bibliography. A bibliography is a list of resources containing the information that the writer used to
prepare a written document. When developing formal research reports, the writer should use the
appropriate writing style for all components of the report to build credibility with the audience. The writing
style that the writer uses depends on the business's preferences or the type of report. For example, the
American Psychological Association (APA) style is often used when writing about topics related to social
sciences. An index is typically placed in the back of a publication and lists the subjects, names, and
companies that are referenced in a book along with the page numbers in which they appear. A glossary
is a list of terms with their definitions. An executive summary, which is usually placed at the beginning of
a long report, provides an overview of the entire document.
</h5></div><h5 id='q45'>45. A marketing survey revealed that four out of seven residents in the greater metro area prefer Lupi's Pizza
to Morelli's Pizza and Renaldo's Pizza. What measure of central tendency does this example represent?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Mode</option><option value="B">B. Mean</option><option value="C">C. Range</option><option value="D">D. Scope</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Mode</h5><h5>Mode is one measure of central tendency. The mode is the answer to a question that is given
most often by respondents. Mean refers to the mathematical average of all responses. A median is the
middle value of the established sample criteria; half of the data or responses are below the median value,
and half are above the median value. Scope is not a measure of central tendency.
</h5></div><h5 id='q46'>46. Which of the following is an example of a response error:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Jack pauses for a moment before he answers the interviewer's question.</option><option value="B">B. Jack does not provide his telephone number when he fills out an online survey.</option><option value="C">C. Lydia provides her opinion about a new soft drink during a focus group.</option><option value="D">D. Rosanna checks two response options for one question on a paper questionnaire.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: Rosanna checks two response options for one question on a paper questionnaire.</h5><h5>A response error
occurs when a respondent provides an incorrect answer or response. Response errors often occur when
respondents do not understand the question or when they hurry to complete the survey and do not read
instructions or questions carefully. Because Rosanna provides two responses or answers for one
question, the questionnaire contains a response error. A non-response error occurs when a respondent
does not answer all of the questions in a survey. Because Jack does not provide his telephone number,
the survey contains a non-response error. Providing an opinion during a focus group and pausing before
answering a question are not examples of errors.
</h5></div><h5 id='q47'>47. The following appeared on a recent survey:
"Do you agree that the government wastes taxpayers' money by supporting unnecessary programs?"
This is an example of a(n)</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. indifferent statement.</option><option value="B">B. leading question.
</option><option value="C">C. open-ended inquiry.</option><option value="D">D. unstated alternative.
</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: leading question.
</h5><h5>Explanation not available</h5></div><h5 id='q48'>48. In the past month, Anna has purchased Lay's mesquite-barbeque chips, Shearer's kettle-cooked potato
chips, and Utz's wavy potato chips. What type of buying behavior is Anna exhibiting?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Price-oriented</option><option value="B">B. Brand-preference</option><option value="C">C. Quality-based</option><option value="D">D. Variety-seeking</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: Variety-seeking</h5><h5>This type of buying behavior usually involves the purchase of routine items such as
crackers, shampoo, and potato chips. The buyer might be very aware of the differences among brands
but feels a desire to try something different. Because the items are relatively inexpensive, there is no
great risk in trying something new. When a buyer prefers to purchase a certain brand but will accept
substitutes if the brand is not available, the buyer has a brand preference. People who are motivated by
a desire to have the best quality, most expensive, or trendiest goods and services tend to purchase
status-oriented items. Price-oriented buyers are concerned with the product's price and value. There is
not enough information provided to determine if Anna considered price when she purchased the potato
chips, or if she prefers a particular brand of potato chip.
</h5></div><h5 id='q49'>49. What element of the marketing mix is most concerned about creating convenience for customers in
relation to the product's accessibility to the market?</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Price</option><option value="B">B. Product</option><option value="C">C. Place</option><option value="D">D. Promotion

2013 HS ICDC

MARKETING CLUSTER EXAM

6
</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: Place</h5><h5>The marketing mix is the combination of the four elements of marketing-product, place, promotion,
and price. Place is the marketing element that focuses on getting a product in the right place at the right
time. A primary consideration of place is the customers' accessibility to the product. If the product is
accessible through as many outlets as possible, there is a high level of convenience for customers. Think
about all the places that you can buy a Hershey's candy bar—grocery stores, convenience stores, drug
stores, etc. On the other hand, products that are distributed through a few channels limit customers'
accessibility to them. Luxury items such as Bentley cars are available through a limited number of
dealerships, which makes the product less accessible to customers. Product is the marketing element
that involves determining the goods, services, or ideas that the business will offer its customers. Price is
the marketing element in which marketers determine the amount of money they will charge in exchange
for their products. Promotion is the marketing element that considers the various types of
communications that marketers use to inform, persuade, or remind customers of their products.
</h5></div><h5 id='q50'>50. Due to his salary increase, Ryan must pay 25% in
federal income taxes. This is an example of a __________ tax.</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. geographic</option><option value="B">B. psychographic</option><option value="C">C. demographic</option><option value="D">D. rate of usage</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is B: psychographic</h5><h5>Market segmentation is dividing the market into groups that have similar characteristics.
Segmenting markets helps businesses identify the people who are most likely to buy their products.
Businesses segment markets in different ways. In the example, the athletic apparel store used
psychographics to divide the market, which means that the market is divided on the basis of a lifestyle
choice—running. Geographic segmentation involves dividing a market on the basis of location (e.g., zip
code). Demographics are the physical and social characteristics of the population. A business that
segments the market on the basis of demographics considers factors such as the age, gender, and
ethnicity of the population. Rate of usage is a type of behavioral segmentation, which involves dividing
customers into groups according to their response to a product.
</h5></div><h5 id='q51'>51. Which of the following statements is true about a marketing plan:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. It is more beneficial for large companies to have a marketing plan than it is for small businesses.</option><option value="B">B. An important component of the marketing plan is the business plan.</option><option value="C">C. A good marketing plan contains the business's specific marketing goals and strategies.</option><option value="D">D. The marketing plan has a narrow audience, so it takes a business minimal time to prepare it.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: A good marketing plan contains the business's specific marketing goals and strategies.</h5><h5>A marketing plan
is a set of procedures or strategies for attracting the target customer to a business. A good marketing
plan is specific—it defines the business's specific marketing goals and the specific ways (strategies) in
which the business plans to achieve those goals. As a component of the business plan, the marketing
plan is read by a wide audience (e.g., managers, potential investors, and board members) and is
important for both large and small businesses. Although writing a marketing plan can involve quite a bit of
time to research and write, it is worth the effort because it provides a solid foundation for the business's
marketing activities.
</h5></div><h5 id='q52'>52. If a situation analysis reveals that the company has a comprehensive, current, and flexible database
system, it has identified a(n)</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. internal strength.</option><option value="B">B. external asset.</option><option value="C">C. product benefit.</option><option value="D">D. technological flaw.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: internal strength.</h5><h5>A situation analysis is a determination of a company's current business situation and
the direction in which it is headed. A comprehensive situation analysis involves evaluating the internal
and external circumstances that are currently affecting the business environment. Conducting a situation
analysis helps the company make business decisions that make the most of its strengths, such as
maintaining a comprehensive, current, and flexible database. Companies can also use the situation
analysis to improve internal weaknesses and adjust to external challenges. A comprehensive, current,
and flexible database system is not an external asset, product benefit, or technological flaw.
</h5></div><h5 id='q53'>53. Nelson needs to find out the exact model number of a printer to order the correct ink cartridge for a
customer. To obtain accurate information quickly, Nelson should access</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. his company's contact directory.</option><option value="B">B. the manufacturer's accounting department.</option><option value="C">C. his company's intranet.</option><option value="D">D. the manufacturer's production manager.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: his company's intranet.</h5><h5>An intranet is an internal network similar to the Internet that is accessible only by
authorized personnel. It is used to access information and communicate with others within an
organization. A company intranet often consists of internal databases, which provide computerized
storage for information and facts. Businesses typically maintain information in their databases that are
relevant to their operations—product specifications, inventory levels, vendor contact information,
customer sales records, etc. When an employee needs information, such as the model number of a
customer's printer, s/he can quickly obtain the customer's sales records by accessing data stored on the
intranet, which will ensure that the employee orders the correct printer cartridge for his/her customer. The
manufacturer's accounting department, its production manager, and the company's contact directory are
unlikely to have the information needed.
</h5></div><h5 id='q54'>54. Mason Publishing included the following statement in a newsletter that was sent to its sales staff about its
new electronic reader:
CEO Lucinda Marcelli said, "This product supports our ongoing efforts to revolutionize the ways in which
students across the country learn."
This is an example of</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. paraphrasing a comment to explain specific product benefits.</option><option value="B">B. including a quotation to introduce an item during a sales meeting.</option><option value="C">C. using a quotation to communicate product information.</option><option value="D">D. summarizing the features of a new item by using a testimonial.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: using a quotation to communicate product information.</h5><h5>In this situation, the quotation provides the reader
with information about the product's purpose—to help students learn in new ways. Lucinda may have
made the statement at a sales meeting, but there is not enough information provided to determine when
or where she said it. Because the statement is placed in quotation marks, it is written exactly as it was
spoken, rather than paraphrased. A testimonial is a statement by an identified user of a product
proclaiming the benefits received from the use of the product. The statement does not provide any
information about the product's features, nor does it provide enough information to determine if Lucinda
has actually used the new product to provide a testimonial.
</h5></div><h5 id='q55'>55. Which of the following is an example of unethical business behavior in relation to information
management:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Sharing customers' personal information to others with their permission</option><option value="B">B. Telling employees that the business may monitor their telephone calls at work</option><option value="C">C. Keeping employees' payroll records in unsecured computer databases</option><option value="D">D. Using opt-in e-mail to communicate product information with customers</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: Keeping employees' payroll records in unsecured computer databases</h5><h5>Businesses have an ethical
obligation to store their confidential information (e.g., payroll records) in secure and confidential ways.
One way to protect confidential information is to limit others' accessibility to it. Requiring qualified
employees to use computer passwords to access the confidential information can reduce the risk of
unethical behavior—such as snooping or spying. Telling employees about telephone monitoring policies;
requesting customers' permission to share their information with others; and using opt-in e-mail to
communicate with customers are ethical actions.
</h5></div><h5 id='q56'>56. A primary disadvantage of keeping business records in digital formats is that</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. records become inaccessible due to obsolete technology.</option><option value="B">B. businesses cannot update data quickly.</option><option value="C">C. businesses are unable to file documents on computers.</option><option value="D">D. documents must be kept for a minimum of three years.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: records become inaccessible due to obsolete technology.</h5><h5>As technology evolves, new tools and storage
formats replace the older, less efficient ones. For example, most of today's computers cannot access
data stored on a floppy disk. Rather than keeping out-of-date equipment on hand to read older files,
businesses often migrate their older records to current technology, which is costly in terms of time and
money. When businesses use current technology, they can update their data and business records
quickly. Similar to manual record-keeping processes, businesses can develop and "file" their documents
on computers in organized ways. Businesses are required to keep certain types of records (e.g.,
financial) for a certain time, but they do not need to keep all documents for a minimum amount of time.
</h5></div><h5 id='q57'>57. Under what circumstances should a business obtain copyright protection for its intellectual property?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. If it develops a unique manufacturing process</option><option value="B">B. When it produces an original artistic work</option><option value="C">C. If it owns a distinctive mark or emblem</option><option value="D">D. When it maintains a comprehensive customer list</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: When it produces an original artistic work</h5><h5>Intellectual property is the business's intangible assets that
result from thinking processes. A business can legally protect its intellectual property from unauthorized
use by registering it with the appropriate government agency. A copyright legally protects artistic works
such as books, music, paintings, etc. A patent protects manufacturing processes and inventions. A
trademark legally protects symbols, designs, or words used by producers to identify their goods or
services. Trade-secret laws protect property such as customer lists and recipes.
</h5></div><h5 id='q58'>58. Businesses rely on projects because the business environment is</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. free from competition.</option><option value="B">B. inflexible.</option><option value="C">C. dynamic.</option><option value="D">D. hard to understand.

2013 HS ICDC

MARKETING CLUSTER EXAM

7
</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: dynamic.</h5><h5>Businesses rely on projects because the business environment is dynamic (always changing).
Projects allow businesses to take advantage of new opportunities at a moment's notice. The business
environment is not necessarily hard to understand nor is it inflexible. The business environment is full of
competition, another reason it's important for businesses to undertake projects.
</h5></div><h5 id='q59'>59. When developing a request for quotation (RFQ) for prospective vendors, a business should always
include</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. statistics and a checklist.</option><option value="B">B. prices and a purchase order.</option><option value="C">C. guidelines and discounts.</option><option value="D">D. specifications and deadlines.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: specifications and deadlines.</h5><h5>The request for quotation (RFQ) summarizes the details about the
business's needs, bid requirements (guidelines), and deadlines. The business should include statistical
data if the prospective vendor needs them to respond to the RFQ. Businesses typically do not include
prices, purchase orders, discounts, and checklists in their RFQs.
</h5></div><h5 id='q60'>60. Which of the following is an example of a good or service that is produced through a capital-intensive
conversion process:</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Hair cut</option><option value="B">B. Handmade quilt</option><option value="C">C. Sport utility vehicle</option><option value="D">D. Computer repair</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is C: Sport utility vehicle</h5><h5>The conversion process is the stage of production in which inputs are turned into
goods or services. Capital-intensive conversion processes depend on the use of equipment to create
outputs. Businesses use capital-intensive conversion processes to make mass-produced goods such as
vehicles, fuel, and canned food items. Cutting hair, making a quilt by hand, and repairing a computer are
labor-intensive conversion processes because they rely heavily on the skills of workers to create the
goods or services.
</h5></div><h5 id='q61'>61. To maintain a quality work culture throughout all levels of an organization, it is important for businesses
to</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. train employees thoroughly.</option><option value="B">B. solve problems with minimal input.</option><option value="C">C. emphasize short-term gains.</option><option value="D">D. focus primarily on financial issues.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: train employees thoroughly.</h5><h5>An important aspect of maintaining a quality work culture is making sure
that employees know how to perform their jobs correctly and efficiently. And for employees to perform
their jobs to the best of their abilities, businesses need to provide them with thorough training.
Businesses often provide ongoing training so that employees are able to keep up with technological
changes. Businesses also create and maintain a quality work culture by getting input from internal and
external sources to solve problems when needed. Emphasizing short-term gains and focusing primarily
on financial issues are barriers to maintaining a quality work culture.
</h5></div><h5 id='q62'>62. What can an employee do on a regular basis to maintain an organized workspace?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Place all paperwork in storage boxes</option><option value="B">B. Make copies of all computer documents</option><option value="C">C. Discard outdated files and papers</option><option value="D">D. Shred documents that are over one year old</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Discard outdated files and papers</h5><h5>Throwing away papers that you no longer need helps reduce clutter
and keeps your workspace organized. And when your workspace is organized, it is easier to find the
things that you need to perform your work efficiently. Making copies of all computer documents—
especially of items that you do not need—tends to increase clutter. Depending on the type of work that
you do, you may need to keep hard copies on hand; therefore, you probably will not want to place all of
your paperwork in storage boxes or shred documents that are over one year old. Also, businesses are
required to keep certain types of records (e.g., financial) for several years.
</h5></div><h5 id='q63'>63. Which of the following is an example of job shadowing:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Tom asks an advertising manager about various professional organizations in marketing.</option><option value="B">B. Kayla follows the public-relations director of a local company to learn about his/her career.</option><option value="C">C. Delia talks with an event coordinator about the ways in which she can donate her time to a local
charity.</option><option value="D">D. Brian sets up a time to meet with a sales representative to find out about her/his job duties.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: Kayla follows the public-relations director of a local company to learn about his/her career.</h5><h5>Job
shadowing involves following an employee while s/he is working to gain insight about a specific
occupation or career. Job shadowing allows Kayla to watch a public-relations professional's day-to-day
work activities. The experience may help Kayla decide if she would like to work in the public-relations
profession. Tom is asking the advertising manager about professional organizations, which are groups
that provide businesspeople with professional development and networking opportunities. Delia wants to
do volunteer work, and Brian is setting up an exploratory interview, which is a meeting to gather
information about a specific topic.
</h5></div><h5 id='q64'>64. During a job interview, it is important to monitor nonverbal cues including your</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. handshake and vocal intensity.</option><option value="B">B. posture and eye contact.</option><option value="C">C. diction and arm gestures.</option><option value="D">D. clothing and pitch.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is B: posture and eye contact.</h5><h5>Employers are more likely to hire enthusiastic people who appear confident in
their abilities. Your gestures and posture communicate a lot about how you feel about yourself, so it is
important to watch your nonverbal cues during a job interview. Using a firm handshake and exhibiting
good posture indicate that you are self-confident. Maintaining eye contact and nodding your head show
the interviewer that you are listening to him/her. And your clothing can communicate your personality and
the level of care that you take with your appearance. Crossing your arms may suggest that you are
uncomfortable or that you disagree with something the other person is saying. Vocal intensity, pitch, and
diction are important verbal cues that you should monitor during the interview.
</h5></div><h5 id='q65'>65. Which of the following situations is most likely to cause the price of corn-based products to increase:</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Corn producers reduce marketing activities.</option><option value="B">B. The demand for corn-based products declines.</option><option value="C">C. A long drought damages the corn crops.</option><option value="D">D. The rate of inflation stabilizes.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: A long drought damages the corn crops.</h5><h5>Crop damage yields less corn, which decreases the supply
available to meet demand. When demand is greater than supply, prices tend to increase. Because many
types of products contain corn, their prices typically go up as well. If the corn supply is high and demand
for it declines, the price of corn tends to decrease. Low or stable inflation would not cause the price of
corn to increase. Reduced marketing activities are unlikely to drive up the price of corn.
</h5></div><h5 id='q66'>66. Which of the following is an example of price fixing:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. A grocery store dramatically increases the prices of bottled water during a natural disaster.</option><option value="B">B. Three computer-chip manufacturers agree to sell their products within a certain price range.</option><option value="C">C. A building-materials company sets a high price for a new product and lowers it over time.</option><option value="D">D. Two restaurants offer the percentage-off coupons for their large pizzas for a limited time.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is B: Three computer-chip manufacturers agree to sell their products within a certain price range.</h5><h5>Price fixing
is an illegal arrangement that occurs when businesses agree on prices of their goods or services. Price
fixing hinders competition because it results in little choice for the consumer. Dramatically increasing
prices for necessary items during a natural disaster is an example of price gouging. Price skimming
involves setting high prices for new products and lowering them over time. Offering coupons is a form of
sales promotion.
</h5></div><h5 id='q67'>67. During what phase of the product life cycle is a business most likely to reduce its prices because copycat
products have entered the marketplace?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Growth</option><option value="B">B. Maturity</option><option value="C">C. Trough</option><option value="D">D. Peak</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: Growth</h5><h5>One factor that businesses consider when they adjust a product's price is its life-cycle stage.
During the product's growth stage, competitors are entering the market with copycat products. When
consumers have more products from which to choose, the business is likely to reduce the product's price
to remain competitive in the marketplace. During the maturity stage of the product's life cycle, businesses
tend to focus on stabilizing the product's price to maintain a share of the market. Trough and peak are
phases of the business cycle.
</h5></div><h5 id='q68'>68. During which stage of the product life cycle is the product failure rate the highest?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Introduction</option><option value="B">B. Growth</option><option value="C">C. Maturity</option><option value="D">D. Decline</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is A: Introduction</h5><h5>The product failure rate is highest during the introduction stage of the product life cycle. It
might be because the company neglected to complete its research, because the product is not quite
ready, because the company does not have an effective launch plan, or because the company simply
does not have the resources necessary to market the product successfully. The product failure rate is not
as high in the growth, maturity, and decline stages.
</h5></div><h5 id='q69'>69. Which of the following is an ethical issue that affects many businesses' product/service-management
function:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Using bait-and-switch tactics</option><option value="B">B. Engaging in collusion</option><option value="C">C. Testing on animals</option><option value="D">D. Setting unrealistic sales goals

2013 HS ICDC

MARKETING CLUSTER EXAM

8
</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Testing on animals</h5><h5>Product testing on animals involves exposing animals to the product (e.g., cosmetics,
medications) in a variety of ways to determine if it is safe for human use. Because many people believe
that this is an unethical practice, many companies are looking for alternative ways to test the safety of
their products. Collusion or price fixing is an illegal practice in which businesses agree on the prices of
their goods or services, resulting in little choice for the consumer. Bait-and-switch advertising occurs
when a business promotes a low-priced item to attract customers to whom it then tries to sell a higher
priced item. Setting unrealistic sales goals is an ethical issue related to the selling function.
</h5></div><h5 id='q70'>70. Hannah studied international business in college and has worked for various international corporations.
Over the years, she met many businesspeople who did not understand how cultural differences affect
their business relationships. Hannah decided to start her own consulting firm to advise businesspeople
about the cultural issues that they may encounter when doing business overseas. Hannah identified a
product opportunity on the basis of</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. accidental discovery.</option><option value="B">B. a popular hobby.</option><option value="C">C. a technological issue.</option><option value="D">D. personal expertise.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: personal expertise.</h5><h5>A mutual fund is a type of ownership investment
that involves collecting money from many people and then investing it in an assortment of different
securities such as stocks or bonds. The benefit to shareholders of placing money in mutual funds is that
a well-trained fund manager has the expertise to make smart investment decisions on their behalf.
Shareholders are not guaranteed a minimal amount of return on their mutual-fund investments, but
because the funds are spread out among different securities, the risk of a total financial loss is reduced.
Disadvantages to investing in mutual funds are that shareholders pay fees for someone to manage their
investments, and the mutual-fund earnings are taxable.
</h5></div><h5 id='q71'>71. Which of the following is an idea-generation technique that uses programmed thinking:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Forced questioning</option><option value="B">B. Mind mapping</option><option value="C">C. Attribute listing</option><option value="D">D. Synectics</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: Attribute listing</h5><h5>Programmed thinking is a process that involves generating ideas in logical, analytical,
and organized ways. Attribute listing is an idea-generation technique that involves listing the
characteristics or attributes of something and then finding ways to improve these attributes. For example,
suppose that a business wants to improve a bike. The business would begin by listing attributes of the
bike—the wheels, seat, frame, gears, chain, etc. When listing the attributes, the business might decide
that it could improve the seat by using different padding or by changing the shape of the seat to make it
more comfortable for the rider. Mind mapping, forced questioning, and synectics are idea-generation
techniques that use lateral thinking, which is a process that involves generating ideas in purposely
illogical ways.
</h5></div><h5 id='q72'>72. Car break-ins often result because drivers leave their laptops, smartphones, and wallets on the car seat,
making the items highly visible to potential thieves. As a result, an automobile manufacturer designed a
hidden compartment in the front passenger seat for drivers to store their valuable items. This is an
example of an idea generation strategy in which the business</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. developed a new product to replace an outdated product.</option><option value="B">B. changed an existing product to attract a younger market.</option><option value="C">C. improved an existing product to solve a common problem.</option><option value="D">D. created a new product to gain the competitive advantage.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is C: improved an existing product to solve a common problem.</h5><h5>The problem many people face is car breakins. The automobile manufacturer took an existing item—a car passenger seat—and improved it by
adding a storage compartment to the design of the seat. The storage area in the car seat can be used to
hide valuables, lowering the risk of thieves breaking into the cars. The improved product may provide the
auto manufacturer with a competitive advantage. There is not enough information to determine the type
of market that the automobile manufacturer wants to attract. It is likely that this feature would be attractive
to many types of drivers.
</h5></div><h5 id='q73'>73. Fairlawn Manufacturing will replace or repair the motor of its Cut-rite riding lawnmower for one year after
the purchase date. This is an example of a(n)</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. limited warranty.</option><option value="B">B. full warranty.</option><option value="C">C. unconditional guarantee.</option><option value="D">D. service guarantee.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: limited warranty.</h5><h5>A warranty is a promise made by the seller to the customer that the seller will repair or
replace a product that does not perform as expected. In the example, the manufacturer states that it will
replace a specific part (motor) of the lawnmower if it does not work properly; therefore, it is providing the
customer with a limited warranty on the product. A full warranty is a warranty that covers the entire
product. A guarantee is a promise made to the consumer that a product's purchase price will be refunded
if the product is not satisfactory.
</h5></div><h5 id='q74'>74. To prevent people with severe peanut allergies from accidentally consuming food items prepared in
peanut oil, many governments require food manufacturers to</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. seal the packaging to prevent product tampering.</option><option value="B">B. label the packaging with a hazardous product symbol.</option><option value="C">C. provide nutritional information on the packaging.</option><option value="D">D. list all ingredients on the products' packaging.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: list all ingredients on the products' packaging.</h5><h5>Listing the ingredients on food packaging allows
consumers to read the contents of processed foods. This is important because consumers who are
allergic to certain foods or food additives can determine if the product is safe for them to eat by reviewing
the ingredients that are listed on the packaging. Hazardous product symbols are typically added to the
packages of non-food Items (e.g., cleaning products) that contain dangerous chemicals. Many
governments require food manufacturers to include nutritional information on their labels or packaging;
however, this requirement is not tied specifically to allergies. It is important to seal packages to prevent
product tampering but this will not prevent people from accidentally consuming foods to which they are
allergic.
</h5></div><h5 id='q75'>75. An electronics business decided to remove the X2L digital camera from its product mix because it was
taking away sales from its FZG1 premier digital camera. This is an example of</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. product alteration.</option><option value="B">B. product cannibalization.</option><option value="C">C. inventory substitution.</option><option value="D">D. inventory shrinkage.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: product cannibalization.</h5><h5>Businesses watch and adjust their product lines to meet customers' changing
needs and wants, which helps them compete effectively in the marketplace and generate profits. A
business might decide to remove a product from its product mix to avoid or eliminate cannibalization,
which occurs when the sale of one of a company's products takes away sales from another product. In
short, the business will give up one product to extend the life cycle of another product. Alteration is a
product-mix strategy that involves making changes to the company's products or lines. Alteration may
involve completely redesigning a product or changing things such as color, style, or packaging.
Substitution involves using a similar product in place of another good or service. A business might
substitute one or a few products, but it is unlikely to substitute items for its entire inventory. Inventory
shrinkage involves inventory losses due to shoplifting, employee theft, breakage, misplaced goods, or
poor record keeping.
</h5></div><h5 id='q76'>76. A benefit to the seller of bundling products is that doing so</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. reduces product-quality problems.</option><option value="B">B. eliminates the need to comparison shop.</option><option value="C">C. often lowers the marketing costs.</option><option value="D">D. usually decreases product-placement activities.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is C: often lowers the marketing costs.</h5><h5>Product bundling involves combining several products and selling them
for one all-inclusive price. Bundling products often lowers a business's marketing costs because the
business is selling three items together as one unit rather than three individual items. Bundling products
for one low price communicates value to consumers and may reduce their comparison shopping
activities, but comparison shopping cannot be eliminated. Bundling products does not reduce productquality problems, but changes in production processes might improve the quality of products. Product
placement is a form of advertising media that uses products as props (e.g., in films or television shows).
Product bundling does not usually decrease a business's promotion goals in relation to productplacement.
</h5></div><h5 id='q77'>77. Which of the following is an example of a business that uses product class as a positioning strategy:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Focusing on the value of a line of cosmetics</option><option value="B">B. Emphasizing a 100,000-mile car warranty</option><option value="C">C. Associating an artificial sweetener with sugar</option><option value="D">D. Communicating a resort's luxury services</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: Associating an artificial sweetener with sugar</h5><h5>Positioning is a product mix strategy in which a business
creates a certain image or impression of a product in the minds of consumers. One strategy businesses
might use to position their products is by associating the good or service with a particular product
category. Sugar, artificial sweeteners, and certain herbs are items that people use to sweeten foods and
beverages to enhance their taste. Emphasizing a warranty is using a product benefit to position the car. A
business that focuses on value is using price to position its products. When a resort communicates
information about its luxury services, it is using quality to position its product.
</h5></div><h5 id='q78'>78. Although Sara's favorite soft drink is Diet Coke, she will order Diet Pepsi if a restaurant does not serve
Diet Coke. This is an example of brand</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. preference.</option><option value="B">B. insistence.</option><option value="C">C. adoption.</option><option value="D">D. perception.

2013 HS ICDC

MARKETING CLUSTER EXAM

9
</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: preference.</h5><h5>Brand preference is the combined impressions (perceptions) and experiences associated
with a particular company, good, or service. Product adoption is the point at which a consumer decides if
s/he will buy a new product again. If the consumer begins to buy a product on a regular basis, s/he is
developing brand loyalty. Brand preference is the stage of brand loyalty in which consumers prefer to buy
a certain brand (e.g., Diet Coke) but will accept substitutes (e.g., Diet Pepsi) if the brand is not available.
Brand insistence is the stage of brand loyalty in which consumers insist upon buying a specific brand and
will not accept substitutes.
</h5></div><h5 id='q79'>79. Which of the following are types of corporate brands:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Disney, Apple, and Nike</option><option value="B">B. Procter and Gamble, Mountain Dew, and Disney</option><option value="C">C. Harley-Davidson, Apple, and Tide</option><option value="D">D. Nike, Harley-Davidson, and Tide</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: Disney, Apple, and Nike</h5><h5>A corporate brand is all of the impressions and experiences that consumers
associate with a particular company. Disney, Apple, Nike, Procter and Gamble, and Harley-Davidson are
corporate brands. Tide is one of Procter and Gamble's product brands; Mountain Dew is one of
PepsiCo's product brands.
</h5></div><h5 id='q80'>80. Determine the type of and purpose for promotion used in the following example:
Procter and Gamble donates thousands of bottles of its Dawn dishwashing soap to wildlife conservation
programs to clean animals that are affected by oil spills and other ecological hazards.</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Product; To reinforce the company's commitment to producing high-quality items</option><option value="B">B. Institutional; To show the company’s support of learning and educational initiatives</option><option value="C">C. Product; To create a positive image of the company's employees</option><option value="D">D. Institutional; To indicate the company's interest in environmental issues</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: Institutional; To indicate the company's interest in environmental issues</h5><h5>Institutional or corporate
promotion involves creating a certain image of the business in the eyes of consumers. In the example,
Procter and Gamble donates a product that it makes to various conservation groups and causes for the
purpose of cleaning and saving wild animals. By doing so, the company is reinforcing an image that
indicates its interest in and concern about the environment. The company would most likely demonstrate
its support of learning and education by donating items to schools or offering college scholarships. The
primary purpose of product promotion is to persuade consumers to buy a good or service.
</h5></div><h5 id='q81'>81. What elements of the promotional mix are ideal to use when promoting products to large, personal
consumer markets?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Sales promotion and advertising</option><option value="B">B. Personal selling and publicity</option><option value="C">C. Advertising and personal selling</option><option value="D">D. Personal selling and sales promotion</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: Sales promotion and advertising</h5><h5>An appropriate blend of the promotional elements enables businesses
to communicate effectively with their target markets. Advertising, sales promotion, and publicity are ideal
ways to promote products such as shampoo and breakfast cereal to people who routinely buy and use
these items. Businesses typically use personal selling to communicate with industrial markets or to
promote complex products.
</h5></div><h5 id='q82'>82. A soft-drink company posts a film clip on YouTube and Facebook that features its employees drinking the
company's best-selling beverage while they are performing a flash-mob routine. What is the company
using to promote its products?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Advergaming</option><option value="B">B. Streaming audio</option><option value="C">C. Viral video</option><option value="D">D. Custom messaging</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: Viral video</h5><h5>The soft-drink company is attempting to create buzz about its products by posting a video on
popular social media web sites. The goal is to have people share the video link with their friends and
family, who in turn, share it with others. In this way, the video is “viral” because the message spreads or
passes from person to person similar to an illness or virus. Because the message goes out to the
masses, it is a nonpersonal form of communication rather than a customized message. Streaming audio
allows a person to listen to a message in real time without downloading it to a computer. Advergaming
uses video games to advertise products.
</h5></div><h5 id='q83'>83. When a government regulatory agency accuses a company of running a deceptive advertisement, the
company voluntarily agrees to stop running the ad without admitting guilt. In this situation, the remedy
used is</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. a cease-and-desist order.</option><option value="B">B. a consent order.</option><option value="C">C. corrective advertising.</option><option value="D">D. affirmative disclosure.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: a consent order.</h5><h5>The government uses a variety of remedies to protect consumers from deceptive
advertising practices. When the government issues a consent order, the company that is accused of
deception voluntarily stops running an advertisement without admitting guilt. If the company refuses to
stop running the ad, the government may issue a cease-and-desist order. A cease-and-desist order
requires a marketer to stop running a questionable advertisement until a hearing is held to determine if
the advertisement is inappropriate or misleading. Corrective advertising explains and amends information
that was deceiving in a previous advertisement. Affirmative disclosure is a type of corrective action in
which the government orders the advertiser to include product information in future advertisements that it
omitted in its previous advertisements.
</h5></div><h5 id='q84'>84. Which of the following is most likely to contain indoor billboards:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Buses, parking lots, and enclosed malls</option><option value="B">B. Highways, road intersections, and subway terminals</option><option value="C">C. Subway terminals, airport terminals, and enclosed malls</option><option value="D">D. Parking garages, highways, and buses</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Subway terminals, airport terminals, and enclosed malls</h5><h5>Billboards are a form of out-of-home media.
Indoor billboards are panels or boards to which advertising posters are adhered. Businesses often place
indoor billboards in high-traffic areas such as subway and airport terminals, enclosed malls, and parking
garages. Businesses often place outdoor billboards by highways, busy road intersections, and parking
lots. Buses often carry advertising in the form of transit posters.
</h5></div><h5 id='q85'>85. What is the primary goal of viral marketing?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Staging</option><option value="B">B. Sharing
</option><option value="C">C. Managing</option><option value="D">D. Manipulating
</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: Sharing
</h5><h5>Explanation not available</h5></div><h5 id='q86'>86. A retailer sends a sales announcement and coupon with the monthly summary of accounts that it sends
to its customers. What form of direct mail is the retailer using?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Classified ads</option><option value="B">B. Media circulars</option><option value="C">C. Self-mailers</option><option value="D">D. Statement stuffers</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: Statement stuffers</h5><h5>Statement stuffers are promotional pieces that companies often include with invoices
or account statements mailed to existing customers. For example, department stores often include
coupons with credit-card statements to encourage their customers to shop at their stores or order
merchandise from their web sites. Statement stuffers are cost effective because businesses save money
on postage. Circulars are advertising inserts that are usually included in newspapers. Self-mailers are
direct-mail pieces (e.g. postcards) that do not need envelopes. Classified ads are small print
advertisements that specifically state a particular offering or want (e.g., jobs, garage sales, etc.).
</h5></div><h5 id='q87'>87. The Skintastic Cosmetic Company implemented a challenging sales promotion in which its independent
sales consultants could earn bonuses, prizes, and vacations. This is an example of a company using
___________ as a sales incentive.</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. cooperative advertising</option><option value="B">B. sweepstakes</option><option value="C">C. push money</option><option value="D">D. loyalty programs</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: push money</h5><h5>Demand that exceeds supply typically correlates with a rise in inflation. The level
of production efficiency does not always increase when inflation increases.
</h5></div><h5 id='q88'>88. What component of a print advertisement contains the sales message?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Illustration</option><option value="B">B. Copy</option><option value="C">C. Tag line</option><option value="D">D. Headline

2013 HS ICDC

MARKETING CLUSTER EXAM

10
</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: Copy</h5><h5>The purpose of the copy (text) is to communicate information about the product. An illustration is a
graphic element. The headline is a phrase that is placed at the top of an advertisement that is used to
attract attention. The tag line (slogan) is a phrase that is easy to remember and is often used throughout
a business's promotional efforts to reinforce the company's brand.
</h5></div><h5 id='q89'>89. A snack-food company donates energy bars to runners who are participating in a race to raise money for
cancer research. The business is engaging in a(n)</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. advertising campaign to improve investor relations.</option><option value="B">B. media blitz to exhibit social responsibility.</option><option value="C">C. selling activity to support its image.</option><option value="D">D. public-relations activity for a charitable cause.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: public-relations activity for a charitable cause.</h5><h5>The purpose of the public-relations function is to establish
goodwill between the business and its various publics. One way for a business to build goodwill with the
community is by participating in charitable events. This might involve providing financial support, goods
(e.g., energy bars), or volunteers for the event. A media blitz is an intense effort to communicate
information through all possible channels. There is not enough information provided to determine if event
organizers used media blitz to publicize the race. The snack-food company is not engaging in a selling
activity or an advertising campaign. These activities are not part of the public-relations business function.
</h5></div><h5 id='q90'>90. An important aspect of maintaining positive public relations is communicating with external audiences
such as</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. stockholders, employees, and government agencies.</option><option value="B">B. local businesses, charitable organizations, and customers.</option><option value="C">C. charitable organizations, executive managers, and local businesses.</option><option value="D">D. customers, employees, and the board of directors.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: local businesses, charitable organizations, and customers.</h5><h5>The purpose of the public-relations function
is to establish goodwill between the business and its various publics or audiences. External audiences
include local businesses, charitable organizations, customers, government agencies, and the community
at large. Internal audiences include the company's employees, executive managers, and board of
directors (if the company is a corporation).
</h5></div><h5 id='q91'>91. Which of the following is a budgeting issue that a business considers when deciding whether to
participate in a trade show:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Venue's personal appeal</option><option value="B">B. Target audience size</option><option value="C">C. Booth rental space</option><option value="D">D. Competitors' attendance</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Booth rental space</h5><h5>Trade shows are events where businesses display and/or demonstrate their products
to build sales leads and interest. A business considers many factors when deciding if it should participate
in a particular trade show. There are many costs associated with trade shows including employees' travel
and lodging expenses, booth rental space, audio/visual rentals and Internet hookups, display shipping
costs, etc. The target audience size, venue appeal, and competitors' attendance are considerations that
do not relate to budgeting.
</h5></div><h5 id='q92'>92. What component of the promotional plan describes the specific tools that the business will use to
promote its goods and services?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Evaluation</option><option value="B">B. Objectives</option><option value="C">C. Budget</option><option value="D">D. Tactics</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: Tactics</h5><h5>A promotional plan is a framework for the promotional activities of a business. A primary reason
for developing a promotional plan is to create effective communication programs that will help the
business achieve its marketing goals. A comprehensive promotional plan outlines the specific tactics or
actions that the business will use to carry out its promotional strategies. Objectives are the desired
outcomes that the business hopes to achieve by carrying out the various tactics. The budget is a tool that
projects the expenses and income related to the promotional activities. The evaluation component
describes how the business plans to measure the success of its promotional activities.
</h5></div><h5 id='q93'>93. A business can help its salespeople build a clientele by</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. showing interest in the customers' needs.</option><option value="B">B. following up with customers immediately after a sale.</option><option value="C">C. having favorable adjustment and return policies.</option><option value="D">D. setting high performance goals.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: having favorable adjustment and return policies.</h5><h5>Salespeople are the employees who interact with
customers, but the business sets the policies that they must follow. Customers like to know that they can
return products if they are not satisfied. Therefore, having liberal return policies helps create customer
loyalty and repeat business. In most cases, customers do not take advantage of these policies but
appreciate the convenience that they offer. Salespeople can take steps to increase their clientele by
following up with customers and by showing interest in the customers' needs and their concerns.
Although sales goals are necessary, setting unrealistic or overly high performance goals does not help
salespeople build a clientele.
</h5></div><h5 id='q94'>94. The details regarding quotas for each salesperson would be outlined in what type of selling policy?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Service</option><option value="B">B. Terms-of-sale</option><option value="C">C. Selling-activity</option><option value="D">D. Qualifying the customer</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: Selling-activity</h5><h5>The details regarding quotas for each salesperson would be outlined in a selling-activity
policy. Selling-activity policies involve salespeople's interactions with customers. Terms-of-sale policies
involve the parts of the sale that concern customers most (e.g., pricing, discounts, etc.). Service policies
involve what happens after the sale. Qualifying the customer is another selling-activity policy that involves
ensuring that a customer is right for the purchase.
</h5></div><h5 id='q95'>95. Which of the following is a form of technology that allows a salesperson to make a professional sales
presentation to group members who are located in different locations:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Data-mining software</option><option value="B">B. Global positioning system</option><option value="C">C. Webinar</option><option value="D">D. Autoresponder</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: Webinar</h5><h5>A webinar is a live, interactive, online meeting. The advantage of holding a webinar is that the
presenter can communicate information to people who are in different physical locations. Because
employees can access the computers from different locations, a webinar is a cost-effective way to hold a
sales meeting because it reduces the company's travel expenses. A global positioning system (GPS) is
an electronic device that provides drivers with accurate directions to destinations. Data-mining software
searches different computer databases to look for patterns and relationships among data. Autoresponder
is an e-mail function that automatically returns a specified message to anyone who e-mailed a particular
address.
</h5></div><h5 id='q96'>96. Determine if the following situation is an illegal selling practice:
A salesperson says to a customer, "My business will buy all of its janitorial supplies from your company if
you buy all of your office furniture from my business."</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Yes. The salesperson is suggesting reciprocity, which is illegal if it hinders competition.</option><option value="B">B. Yes. The salesperson is engaging in price discrimination, which is illegal in many jurisdictions.</option><option value="C">C. No. The salesperson is proposing a limited partnership, which is a common and legal practice.</option><option value="D">D. No. The salesperson is using tie-in sales tactics to facilitate a long-term sales relationship.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: Yes. The salesperson is suggesting reciprocity, which is illegal if it hinders competition.</h5><h5>Reciprocity
occurs when one company agrees to buy products from a second company only if the second company
agrees to buy products from the first company. This sales practice usually is considered illegal if it
eliminates competition or prevents the second company from buying from other suppliers. Price
discrimination is an illegal activity in which a business charges different customers different prices for
similar amounts and types of products. A limited partnership is a partnership agreement in which a
partner's liability is limited to the amount of the investment. Tie-in sales tactics (also known as tying
agreements) are illegal arrangements that require customers to buy other products in order to obtain
desired goods and services.
</h5></div><h5 id='q97'>97. The best way for salespeople to obtain detailed information about a complex product is by</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. asking a customer who uses the product.</option><option value="B">B. reading a product brochure.</option><option value="C">C. attending a training session.</option><option value="D">D. conducting a product demonstration.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: attending a training session.</h5><h5>Salespeople often attend training sessions to acquire product knowledge so
that they can clearly explain complex products to their customers. Often, manufacturing representatives
will train salespeople to ensure that they thoroughly understand the product, which will help them provide
customers with accurate product information. A product brochure is unlikely to contain detailed
information about a complex product. Asking a customer about the product might be appropriate with
some types of items; however, the manufacturers have detailed information available for complex
products. Salespeople must learn about the product before they can conduct a product demonstration for
their customers.
</h5></div><h5 id='q98'>98. The salesperson says, “Mrs. Jones, the Model 2XY upright vacuum cleaner has attachments that allow
you to remove dust from furniture, draperies, and ceiling fans. It also has a steamer that deep cleans
carpets.” This is an example of a salesperson describing the product's</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. unique style.</option><option value="B">B. multiple uses.</option><option value="C">C. durability.</option><option value="D">D. construction.

2013 HS ICDC

MARKETING CLUSTER EXAM

11
</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is B: multiple uses.</h5><h5>Salespeople are more likely to make a sale if they clearly communicate a product's
features and benefits. Some products perform multiple functions, which are features that provide benefits
—customers do not need to buy individual items to perform each function. The vacuum cleaner can
perform several functions—it sweeps up dirt from carpets and floors; it has attachments to remove dust
from furniture, draperies, and ceiling fans; and it deep cleans carpets. The example does not
communicate information about the vacuum cleaner's construction, durability, or style.
</h5></div><h5 id='q99'>99. When a business's salespeople take time to discover their customers' needs, the business is likely to
benefit because</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. customers tend to return fewer products.</option><option value="B">B. product reviews become unnecessary.</option><option value="C">C. salespeople usually earn higher commissions.</option><option value="D">D. customers are likely to qualify sales leads.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: customers tend to return fewer products.</h5><h5>Discovering customer needs is the phase of the selling process
in which the salesperson determines what a customer needs or wants by asking questions and listening
to the customer's responses. When salespeople determine what their customers really want, they can
select the most appropriate product to show them. In turn, customers are more likely to be satisfied with
their purchases and less likely to return products, which is a benefit to the business. Customers often
post product reviews—positive and negative—on the businesses' web sites. When salespeople take time
to discover customer needs, customers tend to be happier with their purchases and therefore more likely
to provide favorable product reviews. A higher commission is a potential benefit to salespeople.
Salespeople, rather than customers, qualify sales leads.
</h5></div><h5 id='q100'>100. Joe realized that if he had taken more time to proofread his work carefully and correct his grammatical
mistakes, he would have received a better grade on his report. In this situation, Joe is</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. assessing a weakness to improve performance.</option><option value="B">B. identifying a way to enhance his creativity.</option><option value="C">C. making a false generalization about himself.</option><option value="D">D. comparing his talents with those of his classmates.

2013 HS ICDC

MARKETING CLUSTER EXAM

3
</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: assessing a weakness to improve performance.</h5><h5>Self assessment involves objectively looking at your own
strengths and weaknesses, so you can make the best of your strengths and take steps to improve your
weaknesses. In the situation provided, Joe's weakness was the grammatical errors that he failed to find
and correct in his research report. He determined that he could improve his performance by taking more
time to proofread his work in the future before submitting it to his teacher. A false generalization is
making a broad assumption with very little supporting evidence. A false generalization that Joe might
make is that he is a terrible writer because he received a low grade on one paper. Joe is not making a
false generalization, identifying a way to enhance his creativity, or comparing his talents with those of his
classmates.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Marketing/Marketing_2_Whole_Master.js"></script></html>