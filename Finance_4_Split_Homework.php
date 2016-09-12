<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance Exam 9</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. What effect do some environmental laws have on businesses?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Limit equipment purchases</option><option value="B">B. Require more employees</option><option value="C">C. Control exterior landscapes</option><option value="D">D. Increase operating costs</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: Increase operating costs</h5><h5>Environmental laws are intended to conserve and protect the natural
environment. Many of these laws have an impact on the way businesses operate by requiring them to
decrease pollution or control waste. As a result, businesses often need to spend money to comply with
the rules and regulations, which leads to an increase in operating costs. For example, a business might
need to purchase pollution-control devices. Environmental laws do not require businesses to hire more
employees or develop exterior landscapes. The laws do not limit equipment purchases. In fact,
businesses may need to buy more equipment to comply with the laws.
</h5></div><h5 id='q2'>2. Limited liability is a characteristic of what form of business ownership?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Sole proprietorship</option><option value="B">B. Partnership</option><option value="C">C. Corporation</option><option value="D">D. Joint proprietorship</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: Corporation</h5><h5>Stockholders in corporations have limited liability; that is, their losses are limited to the
amount of money that they have invested in the business. Partnerships and sole proprietorships have
unlimited liability, meaning that the business owners are personally liable for debts incurred by the
business. Joint proprietorship is not a form of business ownership.
</h5></div><h5 id='q3'>3. An important purpose of full-disclosure laws and regulations is to</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. provide information to investors so they can make informed decisions.</option><option value="B">B. allow company employees to use inside information for personal gain.</option><option value="C">C. require companies to disclose all information about their operations.</option><option value="D">D. prevent a stock's par value from dropping below its market value.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: provide information to investors so they can make informed decisions.</h5><h5>Full-disclosure laws and
regulations require companies to disclose—publicize—any information that could affect the value of the
firms' stocks. Investors need this information so they can make informed buy, hold, or sell decisions
about investments. Full-disclosure laws also prevent company employees and other insiders from using
privileged information for their personal gain. Full-disclosure laws do not require companies to disclose
every bit of information about their operations—some undisclosed trade secrets are permitted. Fulldisclosure laws and regulations are not designed to impact par values of stock.
</h5></div><h5 id='q4'>4. Which of the following has the fiduciary responsibility to make decisions on behalf of a company's
shareholders:</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. The municipal court system</option><option value="B">B. The industry's professional organization</option><option value="C">C. The company's line staff</option><option value="D">D. The corporation's board of directors</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: The corporation's board of directors</h5><h5>The board of directors consists of individuals who are appointed or
elected to make decisions on behalf of the company's owners-the shareholders. Professional
organizations, the company's line staff, and the municipal court systems do not make decisions for a
corporation on behalf of the shareholders.
</h5></div><h5 id='q5'>5. Which of the following is an estate-tax deduction:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Property passing directly to the surviving spouse</option><option value="B">B. Valuable art and collectibles left to children</option><option value="C">C. Charitable contributions that are unqualified</option><option value="D">D. Money left to friends or distant relatives</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: Property passing directly to the surviving spouse</h5><h5>An estate tax is a tax on the fair-market value of assets
that are transferred to another person upon the owner's death. In some situations, beneficiaries can
obtain estate-tax deductions. The marital deduction is a deduction that applies when the deceased
individual's property passes directly to the surviving spouse. Estate-tax deductions apply to some
qualified charitable contributions. Valuable art, collectibles, and money that are left to children, relatives,
and friends are not tax deductible under estate-tax code.
</h5></div><h5 id='q6'>6. When financial institutions follow government regulations pertaining to the industry, the institutions are</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. being independent.</option><option value="B">B. being ethical.</option><option value="C">C. in compliance.</option><option value="D">D. in mediation.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is C: in compliance.</h5><h5>There are various government regulations pertaining to the finance industry that financial
institutions are required to follow. When financial institutions follow the regulations, they are in
compliance with the laws and regulations. Many of these laws affect how financial information is reported,
and how the privacy of personal financial information is protected. When financial institutions follow
government regulations, they are abiding by the law rather than being ethical. Being ethical is voluntary
whereas being in compliance is required by law. The financial institutions are not in mediation or being
independent.
</h5></div><h5 id='q7'>7. Rather than studying individual customer data, First Bell Bank is interested in analyzing groups of
customers. Members of a group should be similar and markedly different from other customer groups.
Which of the following Customer Relationship Management (CRM) activities should be used to prepare
First Bell Bank's customer data for analysis:</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Regression</option><option value="B">B. Estimation</option><option value="C">C. Clustering</option><option value="D">D. Prediction</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: Clustering</h5><h5>Clustering involves dividing customers in a database into groups based on their similarities
and differences. Estimation is used to determine a value for an unknown variable such as a sales
forecast. Regression involves using existing values to forecast what continual values will be. Prediction
uses historical data to build a model to forecast future customer behavior.
</h5></div><h5 id='q8'>8. Which of the following reasoning processes does a virtual auditor use to identify financial system
transactions that are very similar to each other but are not exactly alike:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Cross-source reasoning</option><option value="B">B. Contextual reasoning</option><option value="C">C. Temporal reasoning</option><option value="D">D. Comparative reasoning</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is D: Comparative reasoning</h5><h5>A virtual auditor, which is a type of compliance technology, uses multiple
reasoning processes to continuously review financial transactions and processes to identify errors and/or
compliance violations. Comparative reasoning is used to identify financial system transactions that are
very similar to each other but not exactly alike. For example, after identifying two close matches,
comparative reasoning is used to determine if one transaction was entered multiple times or if the two
entries in the system are for two separate transactions. Contextual reasoning is used to consider each
financial transaction's circumstances and how it compares to historical patterns in the system. Temporal
reasoning involves considering the timing of a financial transaction. Cross-source reasoning is used to
compare financial transactions and processes in multiple financial systems.
</h5></div><h5 id='q9'>9. Restating the message in your own words is called</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. repetition.</option><option value="B">B. analysis.
</option><option value="C">C. paraphrasing.</option><option value="D">D. reception.
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: paraphrasing.</h5><h5>Paraphrasing, an important active-listening strategy, is restating a message in your own
words in order to confirm or clarify its meaning. Repetition is also an active strategy. Analysis involves
evaluating the information. Reception involves hearing the information, not necessarily restating it.
</h5></div><h5 id='q10'>10. All calls coming into a business should end as pleasantly as possible in order to</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. provide callers with accurate information.</option><option value="B">B. make the best use of your time.</option><option value="C">C. help you to get a good review.</option><option value="D">D. leave a good last impression with callers.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: leave a good last impression with callers.</h5><h5>Leaving a good last impression is just as important as creating
a positive first impression. Employees do not want the professional image they have created to be ruined
in the last seconds of the call. Concluding calls pleasantly may help you to get a good performance
review, but that is not the purpose of it. Providing callers with accurate information and making good use
of your time are not part of ending calls pleasantly.
</h5></div><h5 id='q11'>11. In oral presentation, a thesis statement is</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. a structure for the presentation.</option><option value="B">B. the purpose of a presentation.
</option><option value="C">C. a complete statement of the main idea.</option><option value="D">D. how the audience should respond.
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is C: a complete statement of the main idea.</h5><h5>A thesis is a single, complete statement of the main idea. It is not
a statement of purpose, nor does it describe how the audience should respond. It is not the structure for
the presentation, but is the starting point for the structure.
</h5></div><h5 id='q12'>12. Requests, directions, and information are often communicated in writing because messages sent in
writing are less likely to be</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. businesslike.</option><option value="B">B. misunderstood.</option><option value="C">C. clear.</option><option value="D">D. friendly.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: misunderstood.</h5><h5>Clearly written communications can prevent problems that may be caused by poor
listening or speaking skills. The written message can also be checked for clarity and accuracy before it is
delivered. Both writing and speech can be friendly or businesslike in tone.
</h5></div><h5 id='q13'>13. Which of the following is an example of a simple written report that a business might prepare on a regular
basis:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Findings of a major investigation</option><option value="B">B. Results of a research study</option><option value="C">C. Minutes of a staff meeting</option><option value="D">D. Analysis of a publicity campaign</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: Minutes of a staff meeting</h5><h5>Simple written reports are often intended to provide information to the
business's employees. An example of a simple written report that a business might prepare on a regular
basis is the minutes of a staff meeting. Businesses often have routine staff meetings and prepare a brief
summary to distribute to all employees. This serves to remind employees of the topics discussed and
provide that information to employees who may have been unable to attend. Results of a research study,
findings of a major investigation, and analysis of a publicity campaign are examples of complex written
reports.
</h5></div><h5 id='q14'>14. What type of information is often transmitted through upward communication?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Suggestions</option><option value="B">B. Instructions</option><option value="C">C. Evaluations</option><option value="D">D. Corrections</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is A: Suggestions</h5><h5>Upward communication involves sending a message to someone at a higher level in the
business. Many businesses encourage upward communication by making it possible for employees to
send suggestions and comments to management. Employees who have suggestions on how to improve
quality or make positive changes are given an opportunity to transmit that information upward to
managers. Instructions, evaluations, and corrections are usually transmitted from a higher level down to
employees at a lower level.
</h5></div><h5 id='q15'>15. Businesses use technology to build positive customer relations by</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. calling customers at home.</option><option value="B">B. creating targeted marketing campaigns.</option><option value="C">C. placing pop-up advertisements on web sites.</option><option value="D">D. sending unsolicited e-mails.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: creating targeted marketing campaigns.</h5><h5>Explanation not available</h5></div><h5 id='q16'>16. A positive result of handling customer complaints properly is that it will</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. increase returns.</option><option value="B">B. promote goodwill.</option><option value="C">C. foster objections.</option><option value="D">D. increase markdowns.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: promote goodwill.</h5><h5>Goodwill is a positive feeling a person has toward a business. Properly settling
complaints will promote goodwill, which may increase sales for the business. Increased returns and
increased markdowns are negative outcomes of handling complaints improperly. Handling complaints
properly does not affect objections—customers' reasons for not buying.
</h5></div><h5 id='q17'>17. What do finance professionals need to do to build long-term relationships with their clients?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Follow-up with clients every two years</option><option value="B">B. Invest all clients' money conservatively</option><option value="C">C. Be honest, open, and trustworthy</option><option value="D">D. Require clients to sign a short-term contract</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: Be honest, open, and trustworthy</h5><h5>While it is important for finance professionals to help their clients
manage their finances and grow their wealth, it is also important that they earn their clients' trust. Finance
professionals earn their clients' trust by behaving ethically and being honest and open. By doing so,
finance professionals are more likely to build long-term relationships with their clients. Finance
professionals must help clients set financial goals with which the clients are comfortable—some clients
can or want to make risky investments, while others take a more conservative approach. Earning trust
and helping clients meet their financial goals also involve ongoing, consistent, and frequent
communication with their clients. Requiring clients to sign a short-term contract will not always help
finance professionals build long-term relationships with their clients.
</h5></div><h5 id='q18'>18. When providing product information to clients, finance professionals should use</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. technical terms.</option><option value="B">B. simple explanations.</option><option value="C">C. financial acronyms.</option><option value="D">D. standard responses.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: simple explanations.</h5><h5>When providing product information to clients, finance professionals should keep
the clients' point-of-view in mind. Clients may not be familiar with finance industry jargon, technical terms,
or acronyms. Therefore, finance professionals should use simple, clear language that clients understand.
While standard responses are sometimes helpful to finance professionals, it is usually better to keep
individual clients in mind when providing product information since different clients are likely to have
different knowledge bases.
</h5></div><h5 id='q19'>19. What are potential risks to a business that fails to follow government regulations?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Bankruptcy, higher sales, and lower stock values</option><option value="B">B. Penalties, higher stock values, and lower credibility</option><option value="C">C. Lower stock values, fines, and higher sales</option><option value="D">D. Fines, penalties, and bankruptcy</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: Fines, penalties, and bankruptcy</h5><h5>When a business does not follow or comply with government
regulations, it may experience negative consequences. The government might issue penalties or high
fines for noncompliance. Noncompliance may result in a poor public image that lowers the business's
credibility with the public. Customers may stop buying from the business and start buying products from
the business's competitors, resulting in lower sales. Lower sales negatively affect the business's financial
health and may cause the business to file for bankruptcy. If the business is a corporation, noncompliance
issues may negatively affect its stock values.
</h5></div><h5 id='q20'>20. By deciding to buy or not to buy, consumers control what goods and services will be produced and at
what price through their</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. capital investment.</option><option value="B">B. gross income.</option><option value="C">C. limited wants.</option><option value="D">D. economic votes.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: economic votes.</h5><h5>Consumers vote for products and prices by purchasing and against products and prices
by not purchasing. Their purchases are made from their discretionary income, the part of their gross
income that they can decide to spend or save. Capital investment is the funds used to start and to
maintain a business. Wants are wishes or longing for things that are lacking, and they are unlimited.
</h5></div><h5 id='q21'>21. What does utility reveal about consumers?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Preferences</option><option value="B">B. Income
</option><option value="C">C. Background</option><option value="D">D. Influences
</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: Preferences</h5><h5>Though a consumer's income and background may affect his/her purchase decisions, the
consumer's preferences are what utility reveals. Utility does not show what influences a consumer—or
what a consumer influences.
</h5></div><h5 id='q22'>22. The market price is the actual price that prevails in a market</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. at the beginning of each quarter.</option><option value="B">B. at any particular moment.</option><option value="C">C. on the first of each month.</option><option value="D">D. at the beginning of the fiscal year.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: at any particular moment.</h5><h5>The market price is the actual price that prevails in a market at any particular
moment and may change whenever the seller desires to change it. The market price could change as
frequently or infrequently as necessary and is not based on the price prevailing on a specific day or time
of the year.
</h5></div><h5 id='q23'>23. Businesses that contribute money to local educational, cultural, and training programs are showing social
responsibility to their</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. customers.</option><option value="B">B. employees.</option><option value="C">C. communities.</option><option value="D">D. stockholders.

</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: communities.</h5><h5>Social responsibility is the duty of business to contribute to the well-being of society. Many
of the decisions that business owners make affect not only the business but the community in which the
business exists. One way that businesses demonstrate social responsibility to their communities is by
contributing money to local educational, cultural, and training programs. Businesses use other methods
to demonstrate social responsibility toward their employees, customers, and stockholders.
</h5></div><h5 id='q24'>24. Which of the following demonstrates the interrelationship among primary business activities:</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. A new product is introduced, so business advertisements must adjust in response.</option><option value="B">B. A business changes its goals, so its strategies and tactics change, too.</option><option value="C">C. One business activity changes, so the others must adjust in response.</option><option value="D">D. A business manager becomes vice president, so his/her department must adjust to the change.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: One business activity changes, so the others must adjust in response.</h5><h5>Since the primary business
activities are interrelated, when one business activity changes, the others must adjust in response.
Changes in the products introduced, changes in specific employee roles, and changes in business
strategies/tactics do not represent the interrelationship of business activities overall. They represent
smaller changes that take place within specific business activities.
</h5></div><h5 id='q25'>25. A higher standard of living is achieved in a country when productivity</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. and population increase at a similar rate.</option><option value="B">B. remains the same and population increases.</option><option value="C">C. increases at a rate faster than population.</option><option value="D">D. decreases and population remains the same.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is C: increases at a rate faster than population.</h5><h5>A higher standard of living is the direct result of higher
productivity. A decrease in productivity will lead to a lower standard of living. An increase in population,
when combined with a similar increase in productivity, could actually lead to a lower standard of living.
Similarly, when productivity remains the same while population increases, a lower standard of living will
probably result.
</h5></div><h5 id='q26'>26. When a leader keeps trying in spite of setbacks, s/he is demonstrating which characteristic of emotional
intelligence:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Confidence</option><option value="B">B. Proactive behavior</option><option value="C">C. Positive working relationships</option><option value="D">D. Perseverance</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is D: Perseverance</h5><h5>Leaders are often the people who keep trying in spite of setbacks and seemingly
impossible obstacles. This is perseverance. With characteristics from emotional intelligence, such as
motivation, leaders learn to outlast disappointment and fatigue. Trying in spite of setbacks is not the
same as proactive behavior—taking action before problems develop. It is also not the same as
confidence or getting along with a variety of people (positive working relationships).
</h5></div><h5 id='q27'>27. Which of the following personal traits would be affected by your physical health:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Self-confidence</option><option value="B">B. Cultural background</option><option value="C">C. Gender</option><option value="D">D. Ethnic heritage</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: Self-confidence</h5><h5>Physical health can affect your self-confidence. Most personal traits are interdependent,
and changes in one may affect another. Physical health can affect an individual's self-confidence, selfesteem, attitude, creativity, assertiveness, etc. Gender refers to whether an individual is male or female,
a factor that is not affected by physical health. Ethnic heritage is the cultural background handed down to
individuals by the ethnic group, or culture, into which they were born.
</h5></div><h5 id='q28'>28. You have been assigned a project to do at work, and your manager told you to take all the time you
need. You know the task can be done in two days, but you also know you can take as long as two weeks.
What trait will help you to make the right decision?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Empathy</option><option value="B">B. Integrity</option><option value="C">C. Patience</option><option value="D">D. Body language</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is B: Integrity</h5><h5>Integrity is adhering to an established set of personal ethics and sound moral principles. People
with integrity do not take more time than is necessary to do a job because they know that increases
expenses for a business. Patience is the ability to endure life's aggravations and difficulties calmly. Body
language is nonverbal communication, and empathy is the ability to put yourself in another's place.
</h5></div><h5 id='q29'>29. What is one of the main reasons that employees behave unethically?</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. To do what everyone else does</option><option value="B">B. To create positive customer relations</option><option value="C">C. To become managers</option><option value="D">D. To obtain publicity</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is A: To do what everyone else does</h5><h5>Employees who behave unethically often justify their actions by
believing that everyone else does it. Some employees may see their coworkers use company equipment
for personal projects and then do the same themselves. Most employees realize that such behavior is
unethical and use "Everyone else does it" as an excuse. Unethical behavior would not result in long-term,
positive customer relations. Most people would not want their unethical behavior to be publicized.
Although some people may behave unethically to become managers, it is not a main reason for unethical
behavior.
</h5></div><h5 id='q30'>30. Which of the following responses expresses empathy:</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. "I am so glad you liked the restaurant. We go there a lot."</option><option value="B">B. "I am so excited that we are leaving tomorrow on vacation."</option><option value="C">C. "I am so sorry. I understand how difficult that must have been for you."</option><option value="D">D. "I was so sorry to hear about the bad accident."</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is C: "I am so sorry. I understand how difficult that must have been for you."</h5><h5>Empathy is the ability to put
yourself in another person's place. It enables you to imagine how the other person sees things and feels
about them. The other alternatives are comments that do not involve empathy.
</h5></div><h5 id='q31'>31. One reason why ethics is often a consideration when providing information is because of the issue of</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. respect.</option><option value="B">B. privacy.</option><option value="C">C. safety.</option><option value="D">D. diversity.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: privacy.</h5><h5>Many types of information are private or confidential. As a result, ethics is a consideration when
providing information because it would be unethical to pass on private or confidential information about
an individual without that person's knowledge or consent. This also applies to providing information about
a company or organization that might be private or confidential. Respect, safety, and diversity are not
ethical considerations when providing information.
</h5></div><h5 id='q32'>32. Why do many businesses develop programs and activities to help reduce employee stress?</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. To exhibit empathy</option><option value="B">B. To encourage creativity</option><option value="C">C. To eliminate conflict</option><option value="D">D. To maintain productivity</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is D: To maintain productivity</h5><h5>Stress is a mental, physical, or emotional feeling of pressure or tension.
Excessive stress can have a negative effect on employees, such as reducing productivity. When
employees feel stress, they may not work efficiently. Also, stress may cause employees to miss work
because of stress-related illnesses. To maintain productivity, many businesses develop activities and
programs that help employees reduce stress. For example, some businesses provide recreational
activities such as exercise programs during the work day. Some businesses provide quiet areas for
employees to relax or listen to music. The intention is to reduce stress so employees will remain healthy
and productive. Businesses do not develop programs and activities to help reduce employee stress to
encourage creativity, eliminate conflict, or exhibit empathy.
</h5></div><h5 id='q33'>33. A credit plan that requires a signed contract, a down payment, and the balance to be paid over a specific
period of time is called __________ credit.</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. revolving</option><option value="B">B. installment</option><option value="C">C. open</option><option value="D">D. regular</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: installment</h5><h5>Customers must usually pay a finance charge, or interest, for the privilege of using this kind
of credit. Revolving credit plans do not require down payments. Regular, or open, credit allows credit
users to buy at any time during a set period, usually 30 days.
</h5></div><h5 id='q34'>34. The amount of interest you earn in a typical savings account is about</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. 11 percent.</option><option value="B">B. 10 percent.</option><option value="C">C. one percent.</option><option value="D">D. 15 percent.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: one percent.</h5><h5>The amount of interest you earn in a typical savings account is about one percent. Making
10, 11, or 15 percent would only be possible through investing.
</h5></div><h5 id='q35'>35. If you are 17 right now, what is the best age to begin investing?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. 27</option><option value="B">B. 32</option><option value="C">C. 17</option><option value="D">D. 25

</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: 17</h5><h5>If you are 17 now, the best age to begin investing is 17! The sooner you begin to take advantage of
the compounding growth of the stock market, the better. Compounding is your best friend, because right
now, time is on your side. As a teenager, you have more years ahead of you to invest than your
grandparents, your parents, and even your older siblings. Waiting until you're 25, 27, or 32 could cost you
hundreds of thousands of dollars.
</h5></div><h5 id='q36'>36. How do finance companies commonly raise capital?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Investing deposits from savers</option><option value="B">B. Investing funds from premium payments</option><option value="C">C. Issuing notes, bonds, and other obligations</option><option value="D">D. Establishing mutual funds and investment banks</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: Issuing notes, bonds, and other obligations</h5><h5>Finance companies, also known as credit companies, are a
type of financial institution. Finance companies raise capital by issuing notes, bonds, and other
obligations. They use this capital to provide loans to businesses and consumers. Insurance companies
raise capital by investing funds from premiums and offering loans to clients. Deposit-taking institutions
accept funds from savers and use those funds to offer loans to borrowers. Investment institutions, not
finance companies, establish mutual funds and investment banks.
</h5></div><h5 id='q37'>37. Mortgages and government bonds are examples of</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. debt instruments.</option><option value="B">B. equity products.
</option><option value="C">C. unrated investments.</option><option value="D">D. interest-free services.
</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: debt instruments.</h5><h5>Debt instruments are assets that generate income, usually by charging interest, for the
asset provider. For example, a mortgage is a financial product (asset) provided by a financial institution
(asset provider or lender) to a home or business owner. The borrower pays back the mortgage or loan
with interest. Charging and collecting interest is the way that the financial institution makes money by
providing the loan. Government bonds are debt instruments because the organizations or individuals who
purchase the bonds (asset providers) earn interest (income) on the bond from the bond issuer
(government). An equity instrument involves acquiring ownership of an asset, such as stock. Mortgages
and government bonds are not examples of unrated investments or interest-free services.
</h5></div><h5 id='q38'>38. A primary factor that has led to the consolidation of financial firms is the desire</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. for fewer products.</option><option value="B">B. for fewer assets.</option><option value="C">C. to lower costs.</option><option value="D">D. to lower risks.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: to lower costs.</h5><h5>Consolidation is the merging of financial providers within the same institutional category.
For example, consolidation occurs when two banks merge to form one bank. By consolidating, the
financial firms can achieve economies of scale, which result in reduced redundancy and lower costs.
Consolidation can increase the assets (liquid capital) for all of the financial firms involved. Consolidation
can also provide consumers with a wider range of financial products. Consolidation may or may not lower
business risk.
</h5></div><h5 id='q39'>39. The Money for You Bank recently merged with the Keeping You Safe Insurance Company. The merger is
an example of __________ in the finance industry.</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. consolidation</option><option value="B">B. convergence</option><option value="C">C. tactical planning</option><option value="D">D. licensing</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is B: convergence</h5><h5>Convergence occurs when financial providers from different financial sectors (e.g.,
banking services and insurance) merge. Consolidation takes place when financial providers within the
same institutional category merge. For example, if two banks were to merge, they would be consolidating
their companies. Tactical planning is short-range planning (one year) of specific actions the business will
take. Two businesses should look much further ahead than just one year before making the decision to
merge. Licensing is a business structure that requires the authorization or permission from an owner of
another entity to use trademarked, copyrighted, or patented material for a specific activity, during a
specific time period, for the profit of both parties. Businesses that enter into licensing agreements do not
merge.
</h5></div><h5 id='q40'>40. Falling interest rates typically cause</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. stock prices to increase.</option><option value="B">B. stock prices to decrease.
</option><option value="C">C. a stock market to crash.</option><option value="D">D. no change in stock prices.
</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: stock prices to increase.</h5><h5>Falling interest rates typically cause stock prices to increase. When interest
rates fall, it becomes less expensive for companies to acquire funds needed to finance projects and
operations. Because their borrowing costs decrease, the companies' earnings often increase. As a result
of higher earnings, the companies' stock prices increase as well. Falling interest rates usually cause a
positive change in stock prices, not a decrease in stock prices. A stock market crash is a sudden,
dramatic decline in stock prices.
</h5></div><h5 id='q41'>41. When an emerging market suffers an economic decline, foreign investors usually</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. help the emerging market to recover economically.</option><option value="B">B. use the opportunity to invest more in the emerging market.</option><option value="C">C. quickly withdraw their money from the emerging market.</option><option value="D">D. pay less for each transaction in the emerging market.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is C: quickly withdraw their money from the emerging market.</h5><h5>When an emerging market suffers an economic
decline, market prices are likely to decline as well. Rather than investing more in the emerging market at
the lowered prices and helping the emerging market to recover, foreign investors are typically selfinterested. Therefore, they are likely to withdraw their money from the emerging market and invest the
funds in more stable markets elsewhere in the world. The loss of foreign investors' funds often wreaks
even more havoc on the emerging market. An economic decline is not likely to reduce transaction costs
in the emerging market.
</h5></div><h5 id='q42'>42. April is a college student who wants to open a bank account for the first time. She has $500 cash to
deposit in the account initially. The bank she chooses is not near her dorm, and it's difficult for her to get
there. She has a part-time job and receives a bi-weekly paycheck that will be directly deposited into her
account. Which of the following types of accounts should she ask for at the bank:</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Checking</option><option value="B">B. Savings</option><option value="C">C. Money market</option><option value="D">D. Certificate of deposit</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is A: Checking</h5><h5>April's paycheck is going to be directly deposited into her account. Two options that April will
have for accessing that money will be either to go to the bank to withdraw needed money or to leave the
money in the bank and draw upon the money by writing checks. Since it is difficult for April to get to the
bank, opening a checking account is a good idea. To withdraw cash from a savings account, April would
have to go to the bank, which is difficult. April does not have enough cash to open a money market
account. Her bi-weekly paycheck could not be directly deposited into a certificate of deposit.
</h5></div><h5 id='q43'>43. Which of the following is not a standard financial statement:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Income statement</option><option value="B">B. Balance sheet</option><option value="C">C. Shareholder sheet</option><option value="D">D. Cash flow statement</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is C: Shareholder sheet</h5><h5>There is no such thing as a shareholder sheet. The balance sheet, income statement,
and cash flow statement are three standard financial statements that are found in annual reports.
</h5></div><h5 id='q44'>44. What does an income statement show about a company over a period of time?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Profitability</option><option value="B">B. Reliability</option><option value="C">C. Equity</option><option value="D">D. Liabilities</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Profitability</h5><h5>The income statement shows a company's profitability over a period of time. Reliability,
equity, and liabilities are not part of the income statement.
</h5></div><h5 id='q45'>45. The numbers listed in a stock table's 52-week high and low column tell you</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. the best prices for the stock.</option><option value="B">B. if the stock price is overvalued.</option><option value="C">C. the range of prices for the year.</option><option value="D">D. the range of where the stock price should be.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is C: the range of prices for the year.</h5><h5>The numbers in a stock table's 52-week high and low column tell you
the range of the prices for the year. But, the numbers simply give the range for the year. Alone they do
not tell an investor if the stock is overvalued, what the best price for the stock is, or where the range
should be.
</h5></div><h5 id='q46'>46. Which of the following is a true statement about ticker symbols:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. They uniquely identify a company.</option><option value="B">B. They tell you what kind of stock it is.</option><option value="C">C. They are made up of the first three letters of a company's name.</option><option value="D">D. They are only given to companies on the New York Stock Exchange.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: They uniquely identify a company.</h5><h5>Ticker symbols are simply a type of shorthand for company names
that uniquely identify them, but they do not tell investors anything else about the company, such as what
kind of stock the symbol represents. Sometimes the ticker symbols correspond to a company name, but
not always. And as such, they would typically not be made up of a company's first three letters. All stock
markets use ticker symbols, not just the New York Stock Exchange.
</h5></div><h5 id='q47'>47. Which of the following is an example of a lending investment:</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Stocks</option><option value="B">B. Homes</option><option value="C">C. Antiques</option><option value="D">D. Bonds

</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bonds

</h5><h5>Explanation not available</h5></div><h5 id='q48'>48. Bennett has just finished college and has moved into her own apartment that is located on a bus line.
She'll be able to take the bus to her new job that she's scheduled to start in a month. In fact, she'll need
to rely on bus transportation until she saves money to buy a car. What insurance coverage should she
have?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Renter's insurance and temporary short-term health insurance</option><option value="B">B. Health and life insurance</option><option value="C">C. Renter's insurance and COBRA</option><option value="D">D. Auto insurance and temporary short-term health insurance</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: Renter's insurance and temporary short-term health insurance</h5><h5>Although Bennett has not started her new
job, she should obtain renter's insurance to protect her belongings in the apartment. Since she hasn't
started her job yet, she should get temporary health insurance that would provide coverage from 1-12
months. Health insurance will probably be provided by Bennett's employer once she starts working. Auto
insurance is not needed since she will be using bus transportation. COBRA is short-term group coverage
that individuals can obtain when they're between jobs. They're, in effect, continuing their coverage with
their previous employer. No information was provided as to whether Bennett had prior employment.
</h5></div><h5 id='q49'>49. A labor strike against a major employer is an example of a(n) __________ risk.</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. human</option><option value="B">B. natural</option><option value="C">C. economic</option><option value="D">D. internal</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: economic</h5><h5>Economic risks are risks caused by changes in the market that force a lowering of prices, a
change of product, or failure of businesses. Business conditions, such as a labor strike, can create
economic risks for businesses. Labor strikes affect other businesses since many of their customers will
be out of work and unable to buy goods and services. The other businesses affected by a labor strike
may experience decreases in sales and profit, or even be forced to close. Human risks are chances of
loss caused by human weakness and unpredictability. Natural risks are chances of loss which result from
natural phenomena. Internal is not a type of risk.
</h5></div><h5 id='q50'>50. What type of financial records do businesses need to maintain in order to keep track of their
transactions?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Tax identification</option><option value="B">B. Accounts receivable</option><option value="C">C. Payroll information</option><option value="D">D. Operating procedure</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is B: Accounts receivable</h5><h5>Accounts receivable are the monies owed to a business by its customers.
Businesses maintain financial records that include an exact listing of each transaction that occurs in the
business. The records include expenses, money received, and any money owed which is referred to as
accounts receivable. Businesses need to know how much money will be coming in over a period of time
in order to keep track of current financial status. Tax identification, payroll information, and operating
procedures are not types of financial records that businesses need to maintain in order to keep track of
their transactions.
</h5></div><h5 id='q51'>51. Which of the following is the basic calculation used to analyze an income statement:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Assets minus liabilities</option><option value="B">B. Revenue plus sales</option><option value="C">C. Income minus expenses</option><option value="D">D. Sales plus operating costs</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: Income minus expenses</h5><h5>The basic calculation used to analyze an income statement is “income minus
expenses.” All the money a business earns minus all of its expenses gives an exact picture of how well
the company is doing financially. If the outcome is positive, the business has a profit. If the outcome is
negative, the business has a loss. Revenue, sales, and assets are included in a business's income.
Liabilities and operating costs are included in a business's expenses.
</h5></div><h5 id='q52'>52. Which of the following is a common financial-information management problem:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Multiple financial data sources and systems within an organization</option><option value="B">B. Overreliance on a master source and system for financial data</option><option value="C">C. Strict organizational data governance policies and processes</option><option value="D">D. Insufficient financial information due to compliance regulations</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: Multiple financial data sources and systems within an organization</h5><h5>One of the most common problems
faced by financial-information management is multiple financial data sources and systems within an
organization. Because of the different, sometimes incompatible data sources and systems, it is often
difficult for managers to get a single view of their companies' financials. Therefore, organizational
overreliance on a master source and system for financial data is not typically a financial-information
management problem. Few companies have a single master source of data nor a single system for
recording and reporting the data. Rather than strict organizational data governance policies and
processes, most companies suffer from inadequate data governance. Due to increased compliance
regulations, most companies have much more financial information than ever before.
</h5></div><h5 id='q53'>53. A primary responsibility of financial-information management is to</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. report financial transactions.</option><option value="B">B. negotiate contracts with vendors.</option><option value="C">C. develop new products.</option><option value="D">D. implement sales policies.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: report financial transactions.</h5><h5>Financial-information management is the ongoing process of gathering,
maintaining, and storing financial data. Businesses use financial data to develop reports that aid the
business decision-making process and meet compliance requirements. An important aspect of financial
information management is maintaining data about financial transactions such as accounts receivable
(e.g., customer sales transactions) and accounts payable (monetary outflows). The business's buyers
negotiate contracts with vendors. Buyers may or may not use financial information as leverage during the
negotiation process with vendors. The product/service management function of the business focuses on
new product development. The selling function of the business implements sales policies.
</h5></div><h5 id='q54'>54. Which of the following is an example of a businessperson exhibiting unethical behavior in relation to a
business's financial information:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. An unauthorized employee reviews a client's financial information.</option><option value="B">B. An auditor verifies the accuracy of a corporation's financial statements.</option><option value="C">C. A banker requests financial information from a business to process a loan.</option><option value="D">D. A manager examines the business's financial records to develop a budget.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: An unauthorized employee reviews a client's financial information.</h5><h5>Businesses have an ethical duty to
protect their clients' financial information. Businesses must develop and implement procedures that
reduce the risk of theft or unauthorized access to confidential financial information by internal and
external sources. Verifying the accuracy of financial statements, requesting financial information to
process a loan, and examining financial records to develop a budget are necessary and ethical practices.
</h5></div><h5 id='q55'>55. Which of the following is a technological tool that businesses use to archive their financial records:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Electronic data interchange</option><option value="B">B. Direct-response software</option><option value="C">C. Digital microfilm scanner</option><option value="D">D. Web-development programs</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: Digital microfilm scanner</h5><h5>Businesses must keep a variety of financial information for a certain length of
time, often for several years. Many businesses have saved their archived financial information on
microfilm. Microfilm is a type of film that stores photographed images and text in a condensed format for
easy storage. A digital microfilm scanner can take existing microfilm, which is older technology, and
convert it into a digital format. The advantage to switching microfilm records to a digital format is that
businesses can easily view the data on computers and share information quickly through the Internet.
Direct-response software is a computer program that helps businesses automate their direct-marketing
efforts. Electronic data interchange (EDI) is a network of computers that allows businesses to share
information. Businesses use web-development programs to develop and maintain web sites.
</h5></div><h5 id='q56'>56. Why has online technology's use increased in financial-information management?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Recognition that the security of transactions is no longer an issue</option><option value="B">B. Removal of electronic information exchange procedures</option><option value="C">C. Passage of laws that recognize electronic documents as legally binding</option><option value="D">D. Protection of customers' right to privacy</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: Passage of laws that recognize electronic documents as legally binding</h5><h5>As businesses have become
more comfortable with the use of electronic information, their willingness to accept electronic documents
as legally binding contracts has also increased. This has been buoyed by the passage of laws
recognizing electronic documents and signatures as legally binding. Electronic information exchange
procedures have not been removed. These procedures provide a way for people to exchange information
electronically. Security remains an issue for online financial-information management. Although the
customers' right to privacy is an issue, it has not contributed to the increased use of online technology in
financial-information management.
</h5></div><h5 id='q57'>57. The primary reason that businesses use data mining techniques to obtain various types of financial
information is to</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. manage their working capital effectively.</option><option value="B">B. develop their financial goals.</option><option value="C">C. identify relationships and patterns among data.</option><option value="D">D. analyze the accuracy of their accounting records.

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is C: identify relationships and patterns among data.</h5><h5>Data mining is the process of searching computer
databases to look for patterns and relationships among information. Businesses use the information they
obtain from data mining to make business decisions, such as determining which customers may qualify
for credit. Businesses do not use data mining techniques to develop financial goals, manage their
working capital, or analyze the accuracy of their accounting records.
</h5></div><h5 id='q58'>58. Alyssa is starting a small business out of her home. When she accesses a business “how-to” web site,
Alyssa finds software downloads and printable worksheets that will help her plan and manage her
business's income and expenses. The software and worksheets are types of</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. statistical information.</option><option value="B">B. legal data.</option><option value="C">C. budgeting tools.</option><option value="D">D. organizational charts.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: budgeting tools.</h5><h5>A budget is an estimate of income and expense for a specific timeframe. A budget is an
important financial tool that helps the business manage its money. Many web sites provide budgeting
tools such as software downloads or free printable worksheets. Legal data, statistical information, and
organizational charts are not tools that help small-business owners plan and manage their income and
expenses.
</h5></div><h5 id='q59'>59. What is a benefit of managing budgeting data efficiently through budgeting applications?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Decreases auditors' ability to trace the numbers used in budgets</option><option value="B">B. Increases amount of time that needs to be spent on value-added activities</option><option value="C">C. Decreases the need for having an audit trail</option><option value="D">D. Increases management's confidence in budgets</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: Increases management's confidence in budgets</h5><h5>The efficient management of budget data benefits
businesses in a variety of ways, including error detection and control, decreasing the time needed for
completing the accounting cycle, and increasing management's confidence, not only in budgets, but also
in financial statements and performance scorecards, etc. Since use of efficient budgeting applications
decreases the amount of time required to complete the accounting cycle, financial professionals have
time to spend on value-added activities, such as decision-making and presentation of information, rather
than having to spend more time on them. An audit trail and increased ability to trace the numbers used in
budgets are natural outgrowths of the use of budgeting applications.
</h5></div><h5 id='q60'>60. Businesses often use computer-spreadsheet software for “what-if” financial planning by plugging in
different numerical data into formulas, which provide possible</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. distribution methods.</option><option value="B">B. production strategies.</option><option value="C">C. financial outcomes.</option><option value="D">D. accounting standards.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is C: financial outcomes.</h5><h5>Computer spreadsheet software has the ability to calculate formulas and organize
numerical data. When a business inputs different values or sets of numerical data in a spreadsheet, the
spreadsheet software calculates the values or sets of data, which provides different outcomes based on
the values or sets of data that were used. By reviewing the various outcomes, the business can
determine the best course of action to take under particular circumstances; the “what ifs” of specific
situations. Production strategies are the activities used to produce goods and services. Distribution
methods are the strategies that a business uses to make sure that products are delivered to the right
people at the right place at the right time. Accounting standards are the degrees to which accounting
practices (financial recordkeeping) meet certain criteria.
</h5></div><h5 id='q61'>61. In which of the following situations would a firm use cost-analysis applications:</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. To predict sales volume for a certain period of time</option><option value="B">B. To determine the number of delinquent accounts</option><option value="C">C. To assess income changes over a certain period of time</option><option value="D">D. To evaluate the amount of money associated with inventory storage</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is D: To evaluate the amount of money associated with inventory storage</h5><h5>To maintain profitability, a firm must
evaluate its costs in relation to its various business functions, which include purchasing, marketing,
human resources, operations, etc. Businesses often analyze the various costs associated with carrying
products. For example, a temperature-sensitive product may require special warehousing
accommodations, which increases the costs associated with storing the product. Businesses use
accounts-receivable applications to determine the number of delinquent accounts. Income reports
summarize income changes. Businesses use budgeting applications to estimate sales volume.
</h5></div><h5 id='q62'>62. To obtain specific financial information from a complex database, the user has to set</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. queries.</option><option value="B">B. symbols.</option><option value="C">C. tabs.</option><option value="D">D. panels.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: queries.</h5><h5>Businesses store their financial information in databases. Businesses can retrieve, manipulate,
and analyze different types of financial information. To obtain specific information from a computer
system, the business must input the type of data and parameters for the data it wants. This process is
setting the queries. The query is the mechanism used to obtain the desired information from the
database. Symbols might be used to set the query, but not always. Tabs are tools used to indent words
and phrases in a word-processing program. Businesses do not set panels to obtain financial data from
databases.
</h5></div><h5 id='q63'>63. What function allows users to customize and automate tasks when developing a database?</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Macro</option><option value="B">B. Split</option><option value="C">C. Break</option><option value="D">D. Consolidate</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: Macro</h5><h5>A macro is a customized keystroke or shortcut that commands the database program to perform
certain tasks automatically, such as inserting a specific table or bolding specific text. Using macros can
increase efficiency when working with complex databases. The split function can divide text or cells. The
break function inserts page breaks. The consolidate function combines data.
</h5></div><h5 id='q64'>64. Because the Keller Company is a public corporation, it must provide its shareholders with accurate
financial information in a(n)</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. accounting portfolio.</option><option value="B">B. informal monthly contract.</option><option value="C">C. complex memorandum.</option><option value="D">D. annual report.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: annual report.</h5><h5>Governments require businesses to provide certain types of financial information to
regulatory agencies and shareholders. Public corporations, which are owned by shareholders, are
required to provide information about their financial standings and performance levels in an annual
report. Public corporations do not provide their shareholders with financial information in an informal
monthly contract, complex memorandum, or accounting portfolio.
</h5></div><h5 id='q65'>65. Which of the following is a financial report that financial institutions often review to decide if they will
approve applicants' requests for business loans:</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Payment voucher</option><option value="B">B. Corporation charter</option><option value="C">C. Petty-cash summary</option><option value="D">D. Cash-flow statement</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is D: Cash-flow statement</h5><h5>A cash-flow statement is a financial report that contains estimates as to when,
where, and how much money will flow into and out of a business in a given timeframe. Lending
institutions want to look at loan applicants' cash-flow statements to determine if they have enough money
to operate. If an applicant seems to have problems paying bills due to continuous cash shortages, a
lending institution may believe it is too risky to process the loan because the applicant may not be able to
pay back the loan. A corporation charter is a permit granted by the government to a business that allows
the business to operate as a corporation. A petty-cash summary documents a business's small cash
transactions. A payment voucher is a receipt.
</h5></div><h5 id='q66'>66. The accounting system used to report a business's financial position that is intended for internal users is
the __________ accounting system.</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. financial</option><option value="B">B. management</option><option value="C">C. computerized</option><option value="D">D. manual</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is B: management</h5><h5>Businesses often prepare financial reports that are intended for internal use, or use by the
management of the business. These reports are used to make day-to-day operating decisions. The
management accounting system reports financial information that helps businesses to decide if they have
funds to hire more employees and increase production, or if they need to reduce costs and improve the
rate of collections. The financial accounting system is used to report a business's financial position to
external users. Computerized and manual are ways of recording the accounting information.
</h5></div><h5 id='q67'>67. Which of the following is essential to the identification of trends in financial data for a horizontal analysis:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Data in a Statement of Cash Flows</option><option value="B">B. Data from the most recent financial report</option><option value="C">C. Data in financial reports from multiple time periods</option><option value="D">D. Data from a zero-based budget</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: Data in financial reports from multiple time periods</h5><h5>Trends indicate the direction that something is
headed. They depict patterns. Horizontal analysis requires the comparison of data over a period of time.
You cannot look at a single financial report and spot trends for a horizontal analysis.
</h5></div><h5 id='q68'>68. By analyzing a customer's financial information, a finance professional should be able to</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. protect the security of the customer's financial information.</option><option value="B">B. declare Chapter 11 bankruptcy for the customer.</option><option value="C">C. develop a financial strategy to help the customer.</option><option value="D">D. determine the customer's newest target market.

</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: develop a financial strategy to help the customer.</h5><h5>Whether the finance professional works internally or
externally, or works with individuals or businesses, s/he should be able to analyze the customer's
financial information to recommend an appropriate financial strategy for the "customer." Business
management would declare a company in bankruptcy based on information provided by the finance
professional. Just having a customer's financial information requires finance professionals to protect its
privacy—analysis is not required. The customer's marketing department would determine its newest
target market, while the finance professional will measure the target market's profitability.
</h5></div><h5 id='q69'>69. Before approving a loan application, a bank is likely to analyze the applicant's</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. debt ratio.</option><option value="B">B. inflation rate.</option><option value="C">C. brand preferences.</option><option value="D">D. performance goals.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: debt ratio.</h5><h5>To reduce the risk of nonpayment or default on a loan, a bank reviews the loan applicant's
debt ratio before approving the loan. The debt ratio indicates the applicant's current level of debt in
relation to his/her current assets (e.g., income, home). If the applicant has a high level of outstanding
debt and few liquid assets, the applicant is more likely to default on the loan. In this situation, the
applicant would most likely be denied the loan. The bank may consider the economy's inflation rate in
relation to the applicant's debt ratio when evaluating the loan application. The bank is not likely to
consider the applicant's brand preferences or performance goals.
</h5></div><h5 id='q70'>70. Which of the following is an example of a businessperson making a business decision by analyzing
financial data:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. William asks the staff accountant to prepare the company's profit-and-loss statement for next
Tuesday's executive board meeting.</option><option value="B">B. After reviewing sales forecasts and income statements, Angela determines that the company has
enough money to hire a new employee.</option><option value="C">C. Timothy obtains a copy of the business's credit rating report from a credit bureau.</option><option value="D">D. So she can prepare the company's tax return, Kate obtains the necessary financial documents
and forms.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: After reviewing sales forecasts and income statements, Angela determines that the company has
enough money to hire a new employee.</h5><h5>Explanation not available</h5></div><h5 id='q71'>71. One of the procedures for orienting new employees often involves</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. providing specialized training.</option><option value="B">B. reviewing previous education.</option><option value="C">C. developing a compensation package.</option><option value="D">D. scheduling a periodic review.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: providing specialized training.</h5><h5>Employees often are hired to perform specific jobs that are unique to
individual companies. Therefore, providing specialized training is often part of orienting new employees.
Although the new employees have the qualifications to do the job, the business may want the job done in
a specific way that requires training. Businesses review previous education and develop a compensation
package before hiring new employees. Periodic reviews are scheduled after employees have been on
the job for a certain length of time.
</h5></div><h5 id='q72'>72. Overall, what does marketing allow us to do?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Limit our spending</option><option value="B">B. Stop buying online
</option><option value="C">C. Live our daily lives</option><option value="D">D. Feel better about shopping
</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is C: Live our daily lives</h5><h5>Overall, marketing allows us to live our daily lives since marketing is involved in
almost everything we do. Limiting our spending and not buying online anymore are negative responses
that may or may not have anything to do with marketing. Feeling better about shopping could be a
positive side effect of marketing.
</h5></div><h5 id='q73'>73. Which of the following is a benefit that businesses receive from using the Internet:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Easier use of satellite radio</option><option value="B">B. Improved methods of manufacturing</option><option value="C">C. Faster connections with suppliers</option><option value="D">D. The ability to call employees on the road</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: Faster connections with suppliers</h5><h5>The Internet gives businesses faster and easier ways to communicate
with both customers and suppliers—through e-mail, chat, video conferencing, etc. It does not necessarily
provide improved methods of manufacturing. Use of satellite radio is the result of satellite technology, not
the Internet. The ability to call employees on the road is the result of cell phone technology.
</h5></div><h5 id='q74'>74. An advantage to a business that uses intranet capabilities is that it allows employees to share the
business's information with</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. customers.</option><option value="B">B. competitors.</option><option value="C">C. each other.</option><option value="D">D. former employees.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: each other.</h5><h5>An intranet is an internal network of computers within an organization that allows employees
to access and share information. Intranet systems benefit businesses because employees can view,
transmit, and share information across departments, divisions, or branches. For example, an intranet
may allow sales staff, purchasing staff, and warehouse staff to view the inventory status of the business's
products simultaneously. This is important because each department works with the business's products
in different ways. The intranet system allows each department to monitor the business's inventory levels
to perform the work. The intranet provides employees access to the same information at any given time,
and helps the business run efficiently. Intranet systems often contain confidential information and are not
shared with competitors, customers, and former employees.
</h5></div><h5 id='q75'>75. Ingrid is able to access information from her desktop publishing software, word-processing software, and
spreadsheet software at the same time on her personal computer. This is an example of an operating
system with __________ capabilities.</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. multiprocessing</option><option value="B">B. multi-user</option><option value="C">C. multitasking</option><option value="D">D. multithreading</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: multitasking</h5><h5>The computer's operating system consists of the components needed to run all of the
computer applications and programs. When the operating system allows the user to open and use more
than one software program at a time, it has multitasking abilities. An operating system that allows more
than one user to access a particular program at one time has multi-user capabilities. An operating system
that allows several central processing units (computers) to access a single program has multiprocessing
capabilities. Multithreading capabilities allow different components of one computer program to run at the
same time.
</h5></div><h5 id='q76'>76. Melanie is putting a copy of each valuable business record in a building far away from her company. She
is practicing which part of disaster planning?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Establish a system for record keeping</option><option value="B">B. Store information off site</option><option value="C">C. Keep potential lawsuits in mind</option><option value="D">D. Computerize valuable business information</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: Store information off site</h5><h5>By putting copies of records in a building far away from her company, Melanie
is storing information off site—a part of disaster planning. Melanie has likely established a system
already, since she has records to preserve. She may or may not choose to computerize her valuable
business information. The records stored off site may or may not be used in a lawsuit in the future. Offsite storage is typically used to avoid hazards, such as fires and floods.
</h5></div><h5 id='q77'>77. Which of the following is a type of business record that a firm can use to track its customers' buying
habits:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Forecast</option><option value="B">B. Invoice</option><option value="C">C. Marketing budget</option><option value="D">D. Annual report</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: Invoice</h5><h5>An invoice is the formal, printed record of a sale that includes all necessary information of a
sales transaction. The information includes the buyer, the seller, items purchased, amounts, prices,
delivery date, credit, discount terms, etc. Businesses can review their invoices to determine their
customers' buying habits because the invoices record the buyers' (customers') names and the items that
the customers have purchased. By reviewing invoices, the business can determine which products are
popular and which are not selling. A forecast is an estimation of something. A marketing budget is an
estimation of the business's marketing income and expenses for a specific timeframe. An annual report is
a summary of the business's financial status.
</h5></div><h5 id='q78'>78. A main reason that environmental scanning is important is so that businesses can be aware of</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. foreign markets.</option><option value="B">B. new products.</option><option value="C">C. competitors' internal environments.</option><option value="D">D. potential threats.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is D: potential threats.</h5><h5>A main reason that environmental scanning is important is so that businesses can be
aware of potential threats and opportunities. These are all too easy to miss if a business isn't aware of its
surroundings. An environmental scan might include information on new products or foreign markets, but
these are not the main reasons for conducting it. Most information about a competitor's internal
environment would not be available to a competing business.
</h5></div><h5 id='q79'>79. Which of the following helps the operations function to control costs and increase productivity:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Hiring of employees</option><option value="B">B. Use of technology</option><option value="C">C. Type of management</option><option value="D">D. Supply of money

</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Use of technology</h5><h5>Operations are the day-to-day activities required for continued business functioning.
Advances in technology make it possible for businesses to use computers to control various aspects of
the operations function. For example, specialized computer programs can design the layout of the
production facility, while other programs can monitor inventory levels and automatically place orders. This
technology reduces the number of employees needed to perform these tasks, which controls costs. Other
computer programs organize and schedule production activities, which decrease costs and increase
productivity. Hiring employees may increase costs and will not necessarily increase productivity. The type
of management and the supply of money do not help the operations function to control costs and
increase productivity.
</h5></div><h5 id='q80'>80. Which of the following is one way that workplace accidents are costly to employees:</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Lost income</option><option value="B">B. Lost production</option><option value="C">C. Lost sales</option><option value="D">D. Lost profits</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Lost income</h5><h5>Workplace accidents are costly to both employees and employers. Some of the ways that
accidents are costly to employees include missing work and losing income. Lost production, lost sales,
and lost profits are some of the ways that accidents are costly to employers.
</h5></div><h5 id='q81'>81. Who is usually responsible for planning a project?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Project coordinator</option><option value="B">B. Project scheduler
</option><option value="C">C. Project assistant</option><option value="D">D. Project manager
</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: Project manager
</h5><h5>Explanation not available</h5></div><h5 id='q82'>82. Do businesses such as banks and dry cleaners engage in production?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. No, the services provided by these businesses are intangible.</option><option value="B">B. Yes, these businesses produce a line of tangible products.</option><option value="C">C. Yes, the services provided by these businesses are their products.</option><option value="D">D. No, these businesses do not engage in production.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: Yes, the services provided by these businesses are their products.</h5><h5>Businesses are engaged in
production, whether they produce goods or services. Even though services are intangible items that
cannot be detected through the senses, services are products that can be sold to customers. Businesses
that provide services must have a system for producing those services.
</h5></div><h5 id='q83'>83. Which of the following is an example of continuous improvement?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Giving managers full responsibility for product quality</option><option value="B">B. Minimizing defect levels to 3.4 per million units produced</option><option value="C">C. Selecting the best possible supplier</option><option value="D">D. Following an annual self-assessment and improvement process</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: Following an annual self-assessment and improvement process</h5><h5>Continuous improvement involves
always moving forward to make improvements. An annual process guides an organization to steadily
improve. While minimizing defects is important to quality, setting a minimum level does not mean
continuous improvement, especially when that minimum is met. Likewise, selecting the best supplier is
not a continuous process. Giving managers responsibility does not necessarily mean they will work to
continually improve.
</h5></div><h5 id='q84'>84. Which of the following is an advantage to a business of a good maintenance program:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Fixed costs are increased.</option><option value="B">B. Customers are more likely to be satisfied.</option><option value="C">C. Maintenance costs can be added to profits.</option><option value="D">D. Emergency repairs will be needed more often.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: Customers are more likely to be satisfied.</h5><h5>The business will operate with fewer inconveniences and
problems that will hurt good customer service. Maintenance costs are part of operating expenses and are
not added to profits. Emergency repairs will be needed less often. Fixed costs, which are not affected by
changes in sales volume, are likely to decrease as fewer repairs or replacements will be needed.
</h5></div><h5 id='q85'>85. Which of the following aspects of personal appearance would likely have the least harmful effect in the
workplace:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Excessively baggy clothes</option><option value="B">B. Body piercings</option><option value="C">C. Visible tattoos</option><option value="D">D. Tailored clothing</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: Tailored clothing</h5><h5>Extremes in clothing and in appearance have grown in recent years—everything from
wild and clashing colors, loose and baggy clothing, to multiple body piercings and visible tattoos. Such
extremes generally send negative messages that are harmful to your personal appearance and success
in the workplace. Tailored clothing is not likely to be harmful to you or your image in the workplace,
although less expensive, nontailored clothing is also appropriate.
</h5></div><h5 id='q86'>86. Planning activities in advance, setting priorities, and avoiding nonproductive diversions are important
aspects of</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. accountability.</option><option value="B">B. natural ability.</option><option value="C">C. productivity.</option><option value="D">D. time management.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: time management.</h5><h5>Employees who have suggestions on how to improve
quality or make positive changes are given an opportunity to transmit that information upward to
managers. Instructions, evaluations, and corrections are usually transmitted from a higher level down to
employees at a lower level.
</h5></div><h5 id='q87'>87. As you develop self-understanding, the things you learn about yourself will help you to understand
others. A positive result of this would be that you are able to</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. do what others want you to do.</option><option value="B">B. get what you want from others.</option><option value="C">C. get along well with others.</option><option value="D">D. help others to become mature.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: get along well with others.</h5><h5>Understanding yourself helps you to understand others, which usually helps
you get along well with them. When you understand why people think or act in a certain way, you can
react in an appropriate fashion. Getting what you want from others or doing what they want you to do
would be negative outcomes of self-understanding. Self-understanding can help you to become a mature
individual, but it doesn't mean you can help others to do the same thing.
</h5></div><h5 id='q88'>88. Employees who have supervisory responsibilities for part or all of the business work in</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. business information technology.</option><option value="B">B. corporate/general management.</option><option value="C">C. securities and investments.</option><option value="D">D. merchandising.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: corporate/general management.</h5><h5>Employees who have suggestions on how to improve
quality or make positive changes are given an opportunity to transmit that information upward to
managers. Instructions, evaluations, and corrections are usually transmitted from a higher level down to
employees at a lower level.
</h5></div><h5 id='q89'>89. What is one of the main reasons for sending an interview follow-up letter?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. To submit personal information</option><option value="B">B. To explain your qualifications</option><option value="C">C. To show your continued interest</option><option value="D">D. To ask supplemental questions</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: To show your continued interest</h5><h5>After every employment interview, you should send the interviewer a
follow-up letter. The purpose of this letter is to thank interviewers for their time and to show that you are
truly interested in obtaining the job. The follow-up letter serves as a reminder to interviewers and helps to
keep your name in front of them. Your qualifications should be explained during the interview but may be
highlighted in a follow-up letter. Applicants usually submit personal information with their résumé before
an interview. The primary purpose of an interview follow-up letter is not to ask additional questions.
</h5></div><h5 id='q90'>90. Which of the following statements about working in the financial-services industry is false:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Financial services professionals can be found in all kinds of companies, from large corporations
to sole proprietorships.</option><option value="B">B. Someone who works in financial services is limited to working at an investment firm, a bank, or
an insurance company.</option><option value="C">C. Financial services professionals can expect to earn higher-than-average salaries.</option><option value="D">D. The financial-services industry includes real estate brokers, fund managers, and auditors.

</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: Someone who works in financial services is limited to working at an investment firm, a bank, or
an insurance company.</h5><h5>Explanation not available</h5></div><h5 id='q91'>91. As an employee of a financial-services firm, Elise helps her clients reduce their debt, build their wealth,
and save for their retirement. Which certification is Elise mostly likely to need to perform her job:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Certified Loan Officer (CLO)</option><option value="B">B. Certified Tax Specialist (CTS)</option><option value="C">C. Certified Financial Planner (CFP)</option><option value="D">D. Chartered Market Technician (CMT)</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Certified Financial Planner (CFP)</h5><h5>Many jurisdictions require finance professionals to obtain certification
or licensure to perform their jobs. Because Elise performs duties that involve financial planning, she is
most likely to have certification as a Certified Financial Planner (CFP), which is a well-known certification
program in the financial industry. Tax specialists obtain a CTS certification. Loan officers obtain a CLO
certification. Businesspeople who work as technical investment analysts obtain a CMT certification.
</h5></div><h5 id='q92'>92. Which of the following is a certification sought by individuals who evaluate companies and industries and
make buy, sell, and hold recommendations for certain securities:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Chartered Financial Consultant (ChFC)</option><option value="B">B. Certified Financial Planner (CFP)</option><option value="C">C. Chartered Financial Analyst (CFA)</option><option value="D">D. Certified Stock Broker (CSB)</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Chartered Financial Analyst (CFA)</h5><h5>This professional designation is sought by financial analysts and is
sponsored by the CFA Institute. Every candidate for the certification is required to complete three levels
of study and exams. Certified Stock Broker is a fictitious designation. Certified Financial Planner and
Chartered Financial Consultant are designations sought by financial planners and financial consultants.
</h5></div><h5 id='q93'>93. Troy is a finance manager for a small firm in town. Last night, he attended a cookout at his neighbor's
house, and met Melissa, who is the owner of a large financial-planning company. Troy and Melissa
exchanged business cards, and they set up an appointment for the following week to discuss business
opportunities. In what type of situation did Troy and Melissa form a professional business relationship?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Corporate environment</option><option value="B">B. Formal event</option><option value="C">C. Educational setting</option><option value="D">D. Social networking</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: Social networking</h5><h5>Networking involves connecting with others who might help them accomplish their
personal career and professional goals. By networking with others working in the same profession,
finance professionals often learn about employment and continuing education opportunities as well as
gain leads for prospective clients. Professional networking can occur under a variety of circumstances,
while at work, during a professional association meeting, or in a social situation, such as the cookout that
Tony attended. Tony and Melissa did not meet at a formal event, in an educational setting, or in a
corporate environment.
</h5></div><h5 id='q94'>94. One way for a company to manage its risk in relation to its employees' workplace behavior is by</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. allowing employees to view all company records.</option><option value="B">B. providing employees with the flexibility to change company policies.</option><option value="C">C. encouraging employees to report workplace misconduct.</option><option value="D">D. permitting employees to use company resources for personal use.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: encouraging employees to report workplace misconduct.</h5><h5>When employees exhibit unethical behavior, it
places employers at risk. Risk might include financial losses related to theft, embezzlement, government
fines, and lawsuits. To lower risk, businesses should implement procedures that encourage employees to
report workplace misconduct. By providing a way to report misconduct to management, the business can
take corrective action to prevent further unethical behavior. Businesses develop policies to maintain a fair
environment. If employees can change policies at anytime, the risk of unethical activity increases. Some
records, such as personnel files and customer financial data, are confidential, and should not be
available for all employees to view. Using company resources (e.g., expensive equipment) can increase
risk because untrained employees may break or misuse the equipment.
</h5></div><h5 id='q95'>95. How do ethics relate to risk management?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Risk management is all about the ethical treatment of customers.</option><option value="B">B. The best form of risk management is adherence to business ethics.</option><option value="C">C. Risk management is insurance for lapses in business ethics.</option><option value="D">D. The best form of business ethics is risk management.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: The best form of risk management is adherence to business ethics.</h5><h5>Every breach of business ethics
represents a potential risk for businesses. The best thing businesses can do to overcome most risks is to
do the right thing—practice business ethics. Risk management includes the ethical treatment of
customers as well as a variety of other factors. Insurance is one way to overcome business risks;
however, risk management is much more than insurance.
</h5></div><h5 id='q96'>96. To reduce the risk of loss due to fire or power outages, a financial business should protect its computer
data by</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. using encryption techniques.</option><option value="B">B. conducting backup procedures.</option><option value="C">C. implementing an authorization process.</option><option value="D">D. monitoring data-transmission rates.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: conducting backup procedures.</h5><h5>Backup procedures involve duplicating computer entries, records, and
transactions on a regular basis and storing the duplicate files in a different location. By having backup
files, the business can retrieve information that might be lost due to a computer crash, a power outage, or
fire. Encryption is the process of transforming information into a secret code so that only the recipient can
read it. An authorization process is a way to limit the access to certain information. Using encryption
techniques, implementing an authorization process, and monitoring data-transmission rates are not ways
in which a business can protect its computer data from loss due to fire or power outages.
</h5></div><h5 id='q97'>97. When businesses continuously monitor the laws and implement changes to remain in compliance, they
are</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. demonstrating negligence.</option><option value="B">B. controlling their risks.</option><option value="C">C. interpreting contracts.</option><option value="D">D. increasing their liabilities.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: controlling their risks.</h5><h5>Risk management is a business activity that involves the planning, controlling,
preventing, and procedures to limit business losses. An important aspect of risk management involves
complying with laws. If a business does not comply with laws, then it may be sued or fined, which could
result in substantial financial losses. A failure to comply with laws may also affect the business's
credibility with its customers. If customers feel that the business behaves in a legally negligent manner,
they may believe that the business is untrustworthy and may decide not to buy from the business. A
business that effectively controls its risks is more likely to reduce its liabilities than increase them. A
contract is a legal agreement between two or more businesses stating that one party is to do something
in return for something provided by the other party.
</h5></div><h5 id='q98'>98. Which of the following situations is an example of a business controlling its internal risks:</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. A law firm allows its malpractice insurance to lapse.</option><option value="B">B. A service business hires illegal immigrants and pays them low wages.</option><option value="C">C. A manufacturer inspects and maintains its equipment on a regular basis.</option><option value="D">D. A retailer sells a particular line of goods below cost.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: A manufacturer inspects and maintains its equipment on a regular basis.</h5><h5>Risk is the possibility of loss.
Some business equipment is dangerous to operate, and can cause serious injury to workers if it is not
periodically checked to ensure that it is working properly. If a worker is injured by faulty equipment, the
business may experience financial losses, particularly if an injured worker files a lawsuit. Because risk
affects a business's financial well-being, the business must take steps to minimize risk. One way for a
business to control internal risk is by inspecting and maintaining its production equipment. Hiring illegal
immigrants, allowing malpractice insurance to lapse, and selling a particular line of goods below cost are
activities that increase a business's financial risk.
</h5></div><h5 id='q99'>99. Why is the choice of a risk measure for internal and external risk of great practical importance?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. It determines the maximum number of clients that can be served effectively by a financial
institution.</option><option value="B">B. It determines the minimum reserve requirements in financial trading.</option><option value="C">C. It identifies the types of risks that the financial institution will encounter.</option><option value="D">D. It designates the audience that will receive the resulting financial reports.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is B: It determines the minimum reserve requirements in financial trading.</h5><h5>Different measures can result in a
lower or higher minimum reserve requirement which results in a lower or higher profit for the financial
institution. Although it does not designate the audience that will receive the resulting financial reports,
some financial measures should be used for internal purposes while other measures are more
appropriate for external audiences. The number of clients to serve and the types of risks to be
encountered are not aspects of selecting a risk measure.
</h5></div><h5 id='q100'>100. By deciding to buy or not to buy, consumers control what goods and services will be produced and at
what price through their</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. capital investment.</option><option value="B">B. gross income.</option><option value="C">C. limited wants.</option><option value="D">D. economic votes.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: economic votes.</h5><h5>Consumers vote for products and prices by purchasing and against products and prices
by not purchasing. Their purchases are made from their discretionary income, the part of their gross
income that they can decide to spend or save. Capital investment is the funds used to start and to
maintain a business. Wants are wishes or longing for things that are lacking, and they are unlimited.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Finance_4_Split_Homework.js"></script></html>