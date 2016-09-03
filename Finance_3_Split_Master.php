<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance Exam 8</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. The federal courts are part of the</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. executive branch.</option><option value="B">B. judicial system.

1
</option><option value="C">C. legislative body.</option><option value="D">D. advisory cabinet.
</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: judicial system.

1
</h5><h5>Explanation not available</h5></div><h5 id='q2'>2. Business A's failure to keep an agreement to supply Business B with a certain good or service is an
example of a situation that is covered by __________ law.</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. property</option><option value="B">B. antitrust</option><option value="C">C. trade</option><option value="D">D. contract</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is D: contract</h5><h5>A contract is an agreement between two or more businesses stating that one party is to do
something in return for something provided by the other party. Contract law recognizes contracts as
voluntary promises that must be fulfilled. If Business A fails to honor its agreement to supply Business B
with a good or service, Business A is in breach of contract. This is a situation that is covered by contract
law, and Business B would be able to appeal to the legal system to enforce the contract. Trade law deals
with transactions between nations. Antitrust laws deal with restraint of trade. Property law deals with real
property.
</h5></div><h5 id='q3'>3. Last week, a man who frequents Alice's health club and goes to the same church approached her and
struck up a conversation. After a bit of small talk, the man said that he would love to help Alice earn some
money on the stock market. “You can trust me,” the man said. “We go to the same church and the same
gym. In fact, our minister and the manager of the gym just gave me a ton of money to invest for them!”
The man is attempting to commit __________ fraud.</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. group affinity</option><option value="B">B. natural resource investing</option><option value="C">C. private placement offering</option><option value="D">D. life settlement</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: group affinity</h5><h5>Group affinity fraud typically involves a scammer who either claims or actually is a member
of the investor's group. In this case, the man is a member of the same health club and attends the same
church as Alice. Because the scammer is a member of the same group, investors may falsely believe
they can trust the scammer, especially if the scammer has lured in a few well-respected group members
(like the minister or the gym manager) to buy into the scam early on. Natural resource investing fraud
occurs when a scammer convinces investors to put money in fraudulent energy investments. Investors
are tempted by the scammer's promise of a fast, easy return. Private placement offering fraud involves
convincing investors to buy nonexistent stock from businesses. Life settlement fraud occurs when a
scammer purchases a large life insurance policy from the insured for an unreasonably small amount of
money. This usually occurs when the insured person needs money to pay necessities such as medicine
and medical care before death.
</h5></div><h5 id='q4'>4. When individuals purchase items such as high-performance sport cars, rare collectibles, and jewelry
containing large, precious gemstones, they must often pay ___________ taxes.</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. gift</option><option value="B">B. luxury</option><option value="C">C. estate</option><option value="D">D. property</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: luxury</h5><h5>Governments increase their revenues by charging taxes on non-essential, often very expensive
goods and services, such as high-end automobiles, rare collectibles, and jewelry. This type of tax is
called a luxury tax. An individual who receives a certain amount of money as a gift may be required to
pay a gift tax. Property taxes are paid on buildings (e.g., homes) and land. A person who inherits some or
all of a deceased person's assets pays an estate tax, which is based on the net value of the assets or
estate.
</h5></div><h5 id='q5'>5. A barrier to businesses' pursuing governance, risk management, and compliance in the finance industry
is</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. the trust placed in company officials.</option><option value="B">B. a business's ability to stay within its risk tolerance.</option><option value="C">C. the desire to eliminate re-work of financial statements.</option><option value="D">D. individuals' defense of their departmental specialties.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: individuals' defense of their departmental specialties.</h5><h5>It is difficult to take an enterprise-wide approach to
governance, risk management, and compliance when data are held by individual departments, and the
departments fail to share information. A business's ability to stay within its risk tolerance level, its officials'
ability to attain trust, and its desire to eliminate the re-working of financial statements are benefits of
government, risk management, and compliance.
</h5></div><h5 id='q6'>6. While reviewing a business's general ledger, a virtual auditor identified two identical journal entries within
the same accounting period. What reasoning technique did the virtual auditor use?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Contextual</option><option value="B">B. Symbolic</option><option value="C">C. Comparative</option><option value="D">D. Cross-source</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: Symbolic</h5><h5>A virtual auditor uses several different reasoning techniques to evaluate financial activities.
Symbolic reasoning looks for "signatures"—clues—of noncompliance as well as patterns of events such
as duplicate journal entries within one accounting period. Contextual reasoning involves determining the
seriousness of the noncompliance incident identified by symbolic reasoning. Comparative reasoning
identifies and compares similar transactions and information. It does not focus on identical transactions
such as duplicate journal entries. Cross-source reasoning inspects transactions within multiple financial
systems.
</h5></div><h5 id='q7'>7. One way for an audience to show that it supports a speaker's opinion is by ____________ the speaker.</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. applauding</option><option value="B">B. heckling</option><option value="C">C. ignoring</option><option value="D">D. tolerating</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: applauding</h5><h5>When the audience applauds or claps, it is showing that it supports what the speaker is
saying. Applause encourages the speaker to continue expressing his/her thoughts. Heckling or making
fun of someone is an action that indicates disapproval. When people ignore the speaker, they are not
actively listening to the speaker and not indicating their support. If a person tolerates another individual's
opinion, s/he does not necessarily agree with an opinion, but supports the individual's right to express
that opinion.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1071

FINANCE CLUSTER EXAM

1. The federal courts are part of the</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. effective listening.</option><option value="B">B. written communication.</option><option value="C">C. distracted listening.</option><option value="D">D. nonverbal communication.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: nonverbal communication.</h5><h5>1071

FINANCE CLUSTER EXAM—KEY

13

10. D
Conducting research about the company prior to the interview. From the research, Shawn can write a few
questions that directly relate to the company or its industry. Even though additional questions may come
up during the interview, it is always best to be prepared with relevant questions based on research. It is
important that Shawn confirms that the questions are relevant by researching them himself instead of
taking his friends' (or anyone else's) advice. Questions about the interviewer's personal life are not
relevant to the job interview.
</h5></div><h5 id='q9'>9. Which of the following is not one of the three main reasons for active listening:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Providing instructions</option><option value="B">B. Gathering information</option><option value="C">C. Giving honest responses</option><option value="D">D. Connecting with people</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: Giving honest responses</h5><h5>The three main reasons for active listening are gathering information, forming
an opinion, and connecting with and helping people. A person receiving instructions, not providing them,
would want to use active listening skills.
</h5></div><h5 id='q10'>10. Shawn is preparing for an interview with a local company. He knows that he should ask relevant
questions about the job at the end of the interview. Which of the following will help him prepare these
questions:</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Finding background information about the interviewer's high school and asking him/her about
that to form a personal relationship</option><option value="B">B. Relying on the interviewer to generate the questions</option><option value="C">C. Asking his friends what questions they think he should ask</option><option value="D">D. Conducting research about the company prior to the interview

®
</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: Conducting research about the company prior to the interview

®
</h5><h5>Explanation not available</h5></div><h5 id='q11'>11. Which of the following is the primary reason that employees who answer a business's telephone should
try to connect each call correctly:</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. To keep from putting callers on hold</option><option value="B">B. To give good customer service</option><option value="C">C. To handle the minimum number of calls</option><option value="D">D. To demonstrate their telephone skills</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is B: To give good customer service</h5><h5>Customers who call businesses often become irritated if they are not
connected to the correct person or office the first time. Being transferred several times in order to do
business with the company may cause customers to hang up and not contact the business again. In
some situations, it is necessary to put callers on hold before they can be connected to the appropriate
individual or department. Demonstrating telephone skills and keeping the number of calls handled to a
minimum are not valid reasons for connecting calls correctly.
</h5></div><h5 id='q12'>12. When you state a fact, it's important to</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. generalize.</option><option value="B">B. think before you speak.
</option><option value="C">C. be accurate.</option><option value="D">D. change your mind.
</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: be accurate.</h5><h5>When you state a fact, it's important to be accurate. Make sure you can support your
statement. Don't generalize. Stating a fact is not usually about thinking before you speak (as in stating an
opinion) or about changing your mind (as in hearing a fact stated by another person).
</h5></div><h5 id='q13'>13. A primary use of flow charts in business documents or presentations is to</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. compare and contrast data.</option><option value="B">B. identify trends.</option><option value="C">C. explain relationships.</option><option value="D">D. summarize numerical data.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: explain relationships.</h5><h5>Graphic aids help to clarify, reinforce, and summarize information. Flow charts help
explain relationships. For example, an organizational chart illustrates a business's chain of command.
Flow charts may also show the ways in which sequential processes work, such as project management.
Line graphs are often used to illustrate timelines and to identify trends. Bar charts are effective graphic
aids to compare and contrast data. Tables are often used to summarize complex numerical data.
</h5></div><h5 id='q14'>14. Which of the following is likely to be the result when coworkers do not communicate well with each other:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Shared job responsibilities</option><option value="B">B. Human relations problems</option><option value="C">C. Efficient work area</option><option value="D">D. Increased job understanding</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: Human relations problems</h5><h5>Workers who lack good communication skills have trouble making
themselves understood and sharing information with others. This can cause problems among employees,
especially those who work closely together. Job understanding might decrease if a supervisor has poor
communication skills. Shared job responsibilities and efficiency in the work area are benefits of good
communication among employees.
</h5></div><h5 id='q15'>15. What trait is being demonstrated when employees treat customers with respect and without prejudice?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Empathy</option><option value="B">B. Integrity</option><option value="C">C. Honesty</option><option value="D">D. Consideration</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is D: Consideration</h5><h5>Employees should treat others, whether they are customers, coworkers, or supervisors,
with consideration. This means being helpful and respectful and not being prejudiced. Business image,
work environment, and employees' personal images are all reflected in the manner in which people are
addressed. Empathy is the ability to put oneself in another's place. Honesty and integrity refer to a
person's truthfulness and ethics.
</h5></div><h5 id='q16'>16. What should help businesspeople adapt their communication styles to appeal to clients from other
cultures?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Being patient, flexible, and empathetic</option><option value="B">B. Being confident, biased, and manipulative</option><option value="C">C. Being sensitive, transparent, and demanding</option><option value="D">D. Being respectful, indifferent, and honest</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is A: Being patient, flexible, and empathetic</h5><h5>Explanation not available</h5></div><h5 id='q17'>17. Customer relationship management increases sales and profits by increasing</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. product quality.</option><option value="B">B. prices.</option><option value="C">C. customer loyalty.</option><option value="D">D. competition.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: customer loyalty.</h5><h5>Customer relationship management increases sales and profits by increasing customer
loyalty. Over the long term, focusing on customers and establishing relationships with them increases a
business's sales and profit. CRM does not increase prices, product quality, or competition.
</h5></div><h5 id='q18'>18. What is the primary responsibility of a financial planner?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. To double a client's investment</option><option value="B">B. To provide appropriate financial guidance</option><option value="C">C. To ensure that his/her clients can retire</option><option value="D">D. To maximize her/his clients' tax obligation</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: To provide appropriate financial guidance</h5><h5>Financial planners are responsible for helping their clients
achieve their financial goals by providing sound advice and suggesting appropriate financial products—
such as investments, insurance, saving and budgeting, etc. Although financial planning involves using
financial tools to grow the client's wealth, the financial planner cannot guarantee that the client's
investment will double in value or that the client will generate enough investment income to retire at a
certain age. A financial planner will work to minimize a client's tax obligation rather than maximize it.
</h5></div><h5 id='q19'>19. Customer Relationship Management (CRM) processes should support the basic steps of the
__________ cycle.</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. accounting</option><option value="B">B. customer life</option><option value="C">C. customer complaint</option><option value="D">D. business</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: customer life</h5><h5>The basic steps of the customer life cycle involve attracting present and new customers,
acquiring new customers, serving the customers, and retaining the customers. The accounting cycle
begins when a sale is made and ends when the books are closed in accounting. Business cycles are the
rise and fall in economic activity that businesses experience. Customer complaint cycle is a fictitious
term.
</h5></div><h5 id='q20'>20. Which of the following would normally be considered a scarce natural resource in the U.S.:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Water</option><option value="B">B. Land</option><option value="C">C. Air</option><option value="D">D. Money</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: Land</h5><h5>Land is limited in supply, we can't make any more of it, and it supplies us with many other valuable
resources (oil, coal, gas, etc.). Air and water are presently in abundant supply in America. Money is a
symbol of value, not a natural resource.
</h5></div><h5 id='q21'>21. What type of utility is created when a business allows consumers to make purchases on credit?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Time</option><option value="B">B. Possession</option><option value="C">C. Form</option><option value="D">D. Place</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: Possession</h5><h5>Possession utility is usefulness created when ownership of a product is transferred from the
seller to the user. Credit allows customers to take possession of purchases and pay for them later. Time
utility is usefulness created when products are made available at the time they are needed or wanted by
consumers. Place utility is usefulness created by making sure that goods or services are available at the
place where they are needed or wanted by customers. Form utility is usefulness created by altering or
changing the form or shape of a good to make it more useful to the consumer.
</h5></div><h5 id='q22'>22. Determining what consumers want in order to promote and sell those goods and services is a function of
the business activity of</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. risk management.</option><option value="B">B. quality management.</option><option value="C">C. production.</option><option value="D">D. marketing.

</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is D: marketing.

</h5><h5>Explanation not available</h5></div><h5 id='q23'>23. A banking institution is well-suited for a divisional organizational structure broken down by</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. job function.</option><option value="B">B. customer type.</option><option value="C">C. product.</option><option value="D">D. process.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: customer type.</h5><h5>A banking institution is well-suited for a divisional organizational structure broken down
by customer type—consumer and industrial customers, for example. The traditional functional structure
may not be the best organizational design for a bank, nor would be a divisional structure broken down by
product or process.
</h5></div><h5 id='q24'>24. Property and income are not distributed equally in a private enterprise system because skilled workers
usually</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. belong to a union.</option><option value="B">B. receive higher salaries.</option><option value="C">C. work longer hours.</option><option value="D">D. pay higher taxes.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: receive higher salaries.</h5><h5>In a private enterprise system, an unequal distribution of income exists because
workers with high levels of education, training, skills, and efficiency generally receive higher salaries than
less qualified workers. Some people own a great deal of property while others own little or none because
they do not have the money to buy it. Skilled workers may also pay higher taxes, belong to a union, or
work longer hours, but those factors do not affect the distribution of property and income.
</h5></div><h5 id='q25'>25. Two local businesses in the same industry are working hard to attract as many customers as possible.
What these businesses are engaged in is</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. production.</option><option value="B">B. monopolistic practices.</option><option value="C">C. unethical behavior.</option><option value="D">D. competition.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: competition.</h5><h5>This rivalry can be direct or indirect. Direct competition occurs between businesses which
sell similar goods or services, while indirect competition occurs between businesses which sell dissimilar
products. Businesses tend to focus their competitive strategies on their direct competitors. Monopolistic
describes the condition which exists when there is a lack of competition. Competing for customers is not
unethical behavior. In fact, competition is encouraged in a private enterprise system. Production is the
development or manufacture of new goods and services.
</h5></div><h5 id='q26'>26. Which of the following is a category of worker that is not included in the unemployment rate, although this
category indicates that there is a problem in the economy:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Professional</option><option value="B">B. Underemployed</option><option value="C">C. Terminated</option><option value="D">D. Semiskilled</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: Underemployed</h5><h5>The underemployed include workers who are working part-time when they want to work
full-time, or who are overqualified for the job they currently have, but cannot find a job that matches their
skills. The underemployed are not included in the unemployment rate because they are working.
However, this category is an indication that there is a problem in the economy because there are not
enough jobs for qualified workers. For example, a college graduate with a degree in marketing who is
working part-time as a clerk in a retail store because s/he could not find an appropriate job is
underemployed. The unemployment rate only includes those people who are out of work and actively
seeking employment. The unemployment rate includes workers who have been terminated. These
workers might be professionals or semiskilled.
</h5></div><h5 id='q27'>27. Which of the following are among the internal causes of business cycles:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Seasonal and climatic changes, aggregate demand, inventory levels, and international relations</option><option value="B">B. Political change, investment in capital goods, international relations, and money supply</option><option value="C">C. Discoveries and innovations, inventory levels, international relations, and money supply</option><option value="D">D. Aggregate demand, money supply, investment in capital goods, and inventory levels</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: Aggregate demand, money supply, investment in capital goods, and inventory levels</h5><h5>Internal causes of
business cycles take place within the economic system. Aggregate demand is the total demand for an
economy's goods and services. The money supply is the total quantity of money that exists at one time in
the country. Capital goods investment results in the production of new equipment, the construction of
new business facilities, or the expansion of present facilities. Increasing inventory levels expands
economic activities, while decreasing inventories causes economic contraction. Political changes,
seasonal and climatic changes, discoveries and innovation, and international relations are external
factors that cause business cycles.
</h5></div><h5 id='q28'>28. It is important to analyze situations which reduce your self-esteem so that similar results in the future can
be</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. avoided.</option><option value="B">B. created.</option><option value="C">C. ensured.</option><option value="D">D. obtained.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: avoided.</h5><h5>Situations that reduce one's self-esteem are usually distressing or painful. The idea is to
determine how you can more effectively handle similar situations in the future so that you can avoid
another lowering of self-esteem. No one would want to obtain, ensure, or create such situations.
</h5></div><h5 id='q29'>29. Responsible employees follow a code of ethics, which means that they have</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. good judgment.</option><option value="B">B. integrity.</option><option value="C">C. good manners.</option><option value="D">D. initiative.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: integrity.</h5><h5>Integrity is adhering to an established set of personal ethics and sound moral principles. People
with integrity know right from wrong, and they try to do what is right. Having good manners or good
judgment would not depend on integrity. Initiative is the willingness to act without having to be told to do
so.
</h5></div><h5 id='q30'>30. Which of the following statements is true of constructive criticism:</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Constructive criticism serves no useful purpose.</option><option value="B">B. Constructive criticism should result in change.</option><option value="C">C. People who use constructive criticism are aggressive.</option><option value="D">D. People should resent receiving constructive criticism.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: Constructive criticism should result in change.</h5><h5>Constructive criticism is evaluative information designed to
help someone improve. It is especially useful when it is offered to workers to enable them to improve
their performance or behavior on the job and should result in change. Resenting constructive criticism is
likely to create negative results. Using constructive criticism does not make a person aggressive.
</h5></div><h5 id='q31'>31. One way that businesspeople can develop cultural sensitivity is to</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. revise research techniques.</option><option value="B">B. preserve communication methods.</option><option value="C">C. acquire foreign language skills.</option><option value="D">D. maintain current leadership styles.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: acquire foreign language skills.</h5><h5>The workplace is becoming more global and multinational. In order to be
successful, businesspeople need to develop their sensitivity to other cultures and traditions. One way that
they can do this is to acquire foreign language skills. By learning something about the language of their
customers or coworkers, they will develop an understanding of the foreign culture and become more
sensitive to, and understanding of, the differences. Businesspeople do not develop cultural sensitivity by
revising research techniques, maintaining current leadership styles, or preserving communication
methods. In fact, businesspeople may need to revise their style of leadership and change the way they
communicate in order to develop cultural sensitivity.
</h5></div><h5 id='q32'>32. After Sarah reaches an agreement and establishes terms with Greg, she should</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. assess the negotiating session.</option><option value="B">B. change Greg's negotiating style.</option><option value="C">C. identify a fair compromise.</option><option value="D">D. determine Greg's position and interests.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: assess the negotiating session.</h5><h5>Once both parties reach an agreement and establish terms, the
negotiating session is complete. This is the stage when the negotiator assesses how the session went.
When a negotiator reviews or evaluates his/her actions, s/he can make adjustments for the next
negotiating session. Negotiators cannot change the other person's negotiating style after the session
occurs. For optimal success, negotiators should know the other person's position and interests before the
negotiation begins. Negotiators reach a compromise during the negotiation.
</h5></div><h5 id='q33'>33. Which of the following is NOT one of the steps of the informal process of reaching a consensus:</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Write down your ideas.</option><option value="B">B. Discuss why everyone should agree.</option><option value="C">C. Create a list of alternatives.</option><option value="D">D. Revise your idea list.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: Discuss why everyone should agree.</h5><h5>In reaching a consensus by an informal method, three of the steps
are to (1) Write down your ideas, (2) Revise your idea list, and (3) Create a list of alternatives. Discussing
why everyone should agree is not one of them, because not everyone has to agree. Coming to a
consensus might be impossible.
</h5></div><h5 id='q34'>34. Which of the following is a result of an achievement orientation:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Continuous improvement</option><option value="B">B. Lower standards</option><option value="C">C. Less risk-taking</option><option value="D">D. Automatic raises and promotions

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: Continuous improvement</h5><h5>Retrieved August 17, 2012, from
http://www.oversightsystems.com/pdf/whitepapers/Compliance_to_Cash_060725.pdf
7. A
Applauding. When the audience applauds or claps, it is showing that it supports what the speaker is
saying. Applause encourages the speaker to continue expressing his/her thoughts. Heckling or making
fun of someone is an action that indicates disapproval. When people ignore the speaker, they are not
actively listening to the speaker and not indicating their support. If a person tolerates another individual's
opinion, s/he does not necessarily agree with an opinion, but supports the individual's right to express
that opinion.
</h5></div><h5 id='q35'>35. What do employees sometimes need to help them put their knowledge into action on the job?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Coaching</option><option value="B">B. Cross training</option><option value="C">C. Counseling</option><option value="D">D. Consensus building</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: Coaching</h5><h5>Coaching is enabling other people to reach their true potential by helping them to overcome
the barriers that are keeping them from doing so. Although coaching may involve some teaching,
teaching is not its main focus. When you coach others, it isn't because they need knowledge; it's because
they are having difficulty putting that knowledge into action. They need help to improve their
performance. Cross training is a systematic approach for teaching employees how to perform other
people's jobs. Counseling is an oral communication method in which a supervisor and an employee
discuss the employee's problem, and the supervisor tries to motivate the employee to find a solution.
Consensus building is a group's process of coming to agreement.
</h5></div><h5 id='q36'>36. The supervisor who exercises very little or no control over employees is using the __________ style of
leadership.</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. democratic</option><option value="B">B. authoritarian</option><option value="C">C. subordinate</option><option value="D">D. laissez-faire</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: laissez-faire</h5><h5>The laissez-faire leader offers only general guidance and permits employees to use their
own initiative. Democratic leaders seek input from employees and exert moderate control. Authoritarian
leaders rely on their own judgment and prefer total control. Subordinate is not a term widely used to
describe a leadership style.
</h5></div><h5 id='q37'>37. Which type of credit applies to utilities that have been consumed but not yet paid for?</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Secured loan</option><option value="B">B. Revolving credit</option><option value="C">C. Service credit</option><option value="D">D. Unsecured loan</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is C: Service credit</h5><h5>Service credit applies to utilities (gas, water, sewer, etc.) that have been consumed but
not yet paid for. Revolving credit refers to an account with a credit limit that may be paid in full each
month or partially paid with finance charges on the outstanding balance. A secured loan is credit backed
by collateral. An unsecured loan is credit backed by a promissory note (promise to pay).
</h5></div><h5 id='q38'>38. A critical aspect of financial planning involves</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. setting broad financial goals.</option><option value="B">B. obtaining several credit cards.
</option><option value="C">C. investing money in high-risk securities.</option><option value="D">D. saving money for unexpected situations.
</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: saving money for unexpected situations.
</h5><h5>Explanation not available</h5></div><h5 id='q39'>39. Which of the following is a financial want rather than a financial need:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Shelter</option><option value="B">B. Food</option><option value="C">C. Clothing</option><option value="D">D. Education</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: Education</h5><h5>Education is a financial want rather than a financial need. Financial needs are the basics that
are necessary for survival. Food, clothing, and shelter are necessary for survival, but education isn't.
</h5></div><h5 id='q40'>40. The key factors involved in compounding growth are the amount of money you invest, how much your
investment grows each year, and</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. how you earn the money that you invest.</option><option value="B">B. how long your money is invested.</option><option value="C">C. your educational background and career.</option><option value="D">D. your mutual fund manager's education.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: how long your money is invested.</h5><h5>The most important factors to consider in compounding growth are
how much money you invest, how much your investment grows each year, and how long your money is
invested. Investing is using money to make money, which means that if you invest money in the stock
market, for example, you are likely to make an average of 10 percent each year. As the years pass, your
investment will grow tremendously because you will be earning interest on interest. So, it is beneficial to
invest for as long as possible to earn the largest amount of compound interest as possible. How you earn
the money that you invest, your educational background and career, and your mutual fund manager's
education have a much smaller impact on compounding growth than time does.
</h5></div><h5 id='q41'>41. When reconciling your check register, it is important to __________ your balance.</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. add your debit card transactions to</option><option value="B">B. subtract all applicable fees from</option><option value="C">C. subtract your earned interest from</option><option value="D">D. add ATM withdrawals to</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: subtract all applicable fees from</h5><h5>The check register is a central location to record and track all of the
checks that you write and the amount of money you spend in your checking account. Each month, you
receive a bank statement that details your checking-account activity. You should reconcile your check
register with your bank statement to ensure that they match. This step is important for many reasons. For
example, if you forget to enter transactions in your check register, you may overdraft your account and be
fined for insufficient funds. When reconciling your check register, you want to make sure that you have
subtracted all fees including debit card transactions and ATM withdrawals. You should add the interest
earned if your account is set up to earn interest.
</h5></div><h5 id='q42'>42. On January 3, Anna mailed her credit-card payment, which was due on January 5. The credit-card issuer
received the payment on January 7. What most likely appeared on Anna's credit-card statement the
following month?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Application charge</option><option value="B">B. Late fee</option><option value="C">C. Processing charge</option><option value="D">D. Over-limit fee</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: Late fee</h5><h5>Credit-card issuers often charge late fees for payments that do not arrive on time. Some creditcard issuers charge application fees, which involves billing a customer for applying for credit. Processing
fees are charges to complete certain activities. Over-limit fees are charges applied for credit transactions
that go over or exceed the credit-card holder's credit limit.
</h5></div><h5 id='q43'>43. Which of the following international financial institutions provides financing and advice to countries to
encourage economic development:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Liberty Institute</option><option value="B">B. Small Business Administration</option><option value="C">C. Commonwealth of Nations</option><option value="D">D. World Bank Group</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: World Bank Group</h5><h5>The World Bank Group, which includes the World Bank as well as several other
international organizations, is an international financial institution that provides financing and advice to
impoverished countries to encourage economic development and eliminate poverty. The Small Business
Administration is a U.S. government financial institution that provides financial assistance and advice to
American small businesses. The Commonwealth of Nations and the Liberty Institute are not financial
institutions. The Commonwealth of Nations is an international organization that promotes world peace,
democracy, and free trade. The Liberty Institute is an international organization based in the country of
Georgia that advocates civil liberties as well as public accountability and effective governance.
</h5></div><h5 id='q44'>44. Frankfort and Sons, an American firm, is preparing to issue bonds overseas. Even though the bonds will
be sold outside the U.S., they will be denominated in American dollars. These bonds are called</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Savings bonds.</option><option value="B">B. Yankee bonds.</option><option value="C">C. Interbonds.</option><option value="D">D. Eurobonds.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: Eurobonds.</h5><h5>Eurobonds are bonds sold in a foreign country in the currency of the issuing company.
Frankfort and Sons, for example, is an American firm, so its Eurobonds will be denominated in American
dollars. However, these bonds will be sold overseas, not in the United States. Yankee bonds are issued
in the U.S. by a foreign company and denominated in American dollars. Interbonds are fictitious. Savings
bonds are issued by the U.S. Department of the Treasury. They are nontransferable securities that can
be cashed prior to their maturity date.
</h5></div><h5 id='q45'>45. Convergence and consolidation in the finance industry have resulted in a(n)</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. one-stop shopping environment for consumers.</option><option value="B">B. highly compartmentalized finance industry.</option><option value="C">C. more accurate picture of financial firms' financial condition.</option><option value="D">D. single supervisory agency to regulate the finance industry.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: one-stop shopping environment for consumers.</h5><h5>Convergence, which is the merging of financial providers
from different financial sectors, and consolidation, which is the merging of financial providers within the
same institutional category, have created a one-stop shopping environment for consumers. Rather than
having to go to different financial providers for different financial products and services, customers can
find all of the financial products that they need—banking services, insurance policies, brokerage services,
etc.—in one place, from one company. Rather than creating a highly compartmentalized finance industry,
convergence and consolidation have created finance companies that want to be everything to everybody.
Rather than specializing in any one service, many of today's financial firms offer a vast array of products
and services. As financial firms merge and grow in size, it becomes more difficult for financial experts and
the government to get an accurate picture of the firms' current financial condition. As finance corporations
expand their product offerings to encompass several financial sectors, it becomes increasingly difficult to
determine which agency should oversee the companies. There is no single supervisory agency to
regulate the entire finance industry.
</h5></div><h5 id='q46'>46. When the value of the dollar decreases in foreign exchange markets, the inflation rate tends to</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. fall slowly.</option><option value="B">B. rise.</option><option value="C">C. stabilize.</option><option value="D">D. fall rapidly.

</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: rise.</h5><h5>Inflation is the rapid rise in prices. Different factors can affect the rate of inflation. One factor that
affects the inflation rate is the value of the dollar in foreign exchange markets. If the value of the dollar
decreases, inflation tends to increase. The value of the dollar in foreign market exchanges is also
affected by many factors, which influence investors' perceptions and confidence levels. Some factors
include the nation's political stability, various economic indicators (e.g., unemployment), and the nation's
trade deficits and imbalances. Therefore, if the investors' confidence decreases, foreign investment tends
to decrease, which causes the value of the dollar to decrease. When the value of the dollar decreases in
foreign markets, the inflation rate does not tend to fall slowly, fall rapidly, or stabilize.
</h5></div><h5 id='q47'>47. What is a characteristic of an emerging market?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Low gross domestic product due to high foreign investment</option><option value="B">B. Strong and highly developed infrastructure</option><option value="C">C. High-yield bond markets that operate in a secure economic climate</option><option value="D">D. Unstable stock markets in a transitional economy</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: Unstable stock markets in a transitional economy</h5><h5>Emerging markets are growing markets (e.g., stock,
bond, commodities, etc.) that result when a country initiates reforms that move it from a closed economy
to an open or market economy. Because the markets are new, they are untried and relatively unstable,
which is a high risk for investors. However, these markets also have the potential to provide investors
with high returns, as the country's business activity increases and its economy grows. Developing
countries tend to experience gains in gross domestic product due to higher production and business
activity, which is often facilitated by high foreign investment. The infrastructure of developing countries
often improves when the government and investors provide the financial resources to support it.
</h5></div><h5 id='q48'>48. Which of the following is not found in a company's annual report:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. What the important achievements were</option><option value="B">B. What the company did that year</option><option value="C">C. A listing of all the things that went wrong</option><option value="D">D. Some ideas about where the company will go next</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: A listing of all the things that went wrong</h5><h5>A company's annual report is usually a glossy, four-color print
piece in which the key management tries to shine the best possible light on what the company did that
year and what the important achievements were. Management also may provide some ideas on where
the company will go next. The annual report is not a place where management wants to highlight all the
things that went wrong.
</h5></div><h5 id='q49'>49. An investor using a securities table can learn about a stock's volatility by checking the stock's</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. VOL.</option><option value="B">B. DIV.</option><option value="C">C. 52-Week HI/LO.</option><option value="D">D. CLOSE.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: 52-Week HI/LO.</h5><h5>The highest and lowest prices paid during the past year can be used to learn how
volatile a stock is. If the range between the lowest and highest prices is large, then the stock's price has
risen or fallen sharply in the past year. Such a stock would be considered volatile. The stock's dividend,
volume, and closing price are much less reliable indicators of a stock's volatility.
</h5></div><h5 id='q50'>50. Which of the following is one reason why businesses gather information:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. To handle emergencies</option><option value="B">B. To eliminate risks</option><option value="C">C. To test employees</option><option value="D">D. To make decisions</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: To make decisions</h5><h5>One reason why businesses gather information is to use that information for making
decisions for the business. No business can be efficiently managed without information. Businesses
depend heavily on advance information to help them make decisions about what may happen tomorrow.
Gathering information will not help businesses to eliminate all risks but will help them to reduce risk.
Businesses do not gather information specifically to test employees or to handle emergencies, although
they may use information to make decisions about those issues.
</h5></div><h5 id='q51'>51. A business owner applying for a bank loan would probably ask the accounting department to provide
records that show the value of the company's total</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. cash.</option><option value="B">B. assets.</option><option value="C">C. inventory.</option><option value="D">D. equipment.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: assets.</h5><h5>All the items that a business owns that have value are its assets. Businesses applying for loans
usually have their accounting department compute the total value of their assets to present to the lending
institution as verification of their ability to repay the loan. Cash, inventory, and equipment are types of
business assets whose value would be listed on a balance sheet.
</h5></div><h5 id='q52'>52. Which of the following is a key component of managing working capital:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Cash conversion cycle</option><option value="B">B. Depreciation of plant assets</option><option value="C">C. GAAP</option><option value="D">D. Capital structure</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: Cash conversion cycle</h5><h5>Working capital is the cash available for the business to use in its day-to-day
operations. The cash conversion cycle is a key component of managing working capital. It refers to how
long a business's money is "tied up" between purchasing raw materials and receiving cash from sales.
GAAP refers to the generally accepted accounting principles which provide a consistent framework for
reporting financial data. The depreciation (reduction in value) of plant assets does not affect working
capital. Capital structure refers to a business's mix of financing.
</h5></div><h5 id='q53'>53. Which of the following is an advantage of a rolling budget?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. It requires less effort than an annual budget.</option><option value="B">B. It allows you to have a year-long budget in place at all times.</option><option value="C">C. It sets an annual budget that does not change.</option><option value="D">D. It has to be consulted less frequently by managers.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: It allows you to have a year-long budget in place at all times.</h5><h5>One advantage to rolling budgets is that
there is always a year-long budget in place. As each month goes by, another one is added. A rolling
budget does not require less effort than an annual budget, but the effort is divided up throughout the
year. Rolling budgets do not set an unchangeable annual budget. Indeed, they are often more flexible
than a typical annual budget because they are assessed more frequently. Managers consult rolling
budgets more frequently, not less.
</h5></div><h5 id='q54'>54. What is a common consequence of poor financial-information management?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Understandable feedback</option><option value="B">B. Simplified processes</option><option value="C">C. Ineffective leadership</option><option value="D">D. Inaccurate data</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: Inaccurate data</h5><h5>Tables are often used to summarize complex numerical data.
</h5></div><h5 id='q55'>55. A financial-information management system can help a financial manager to make which of the following
types of decisions:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Employee scheduling</option><option value="B">B. Capital budgeting</option><option value="C">C. Vendor selections</option><option value="D">D. Adding/dropping products</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: Capital budgeting</h5><h5>A financial-information management system is a set of processes, people, and
equipment used to gather, store, organize, and provide financial information to decision-makers. A
financial manager might use a financial-information management system to make capital budgeting
decisions. Capital budgeting involves developing a plan to acquire and finance long-term business
assets. Financial managers would not use a financial-information management system to schedule
employees. Although a financial-information management system might be useful when selecting
vendors or adding/dropping products, those decisions would not be made by financial managers.
</h5></div><h5 id='q56'>56. Which of the following leads accountants to apply unethical earnings-management practices:</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Meeting analysts' estimated earnings</option><option value="B">B. Postponing a large purchase to a later time</option><option value="C">C. Accelerating payment of expenses when earnings are high</option><option value="D">D. Selling securities for a gain</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: Meeting analysts' estimated earnings</h5><h5>Managers are often pressured to ensure that analysts' estimated
earnings are reached. Managers should focus on use of accounting principles that provide the most
accurate results rather than on providing the most desired results. Otherwise, they will be guilty of
cooking the books to provide a more favorable financial report than actually exists. Postponing
purchases, accelerating expense payments, and selling securities for a gain are ethical earningsmanagement practices.
</h5></div><h5 id='q57'>57. Which of the following technologies is frequently used to provide a source for master data management
in the finance industry:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. SutiExpense Application</option><option value="B">B. Accounting systems</option><option value="C">C. Databases</option><option value="D">D. ERP (Enterprise Resource Planning)

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: ERP (Enterprise Resource Planning)

</h5><h5>Explanation not available</h5></div><h5 id='q58'>58. Before implementing data mining procedures, a business must first identify how the financial information
is</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. internalized.</option><option value="B">B. analyzed.</option><option value="C">C. viewed.</option><option value="D">D. categorized.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: categorized.</h5><h5>Data mining is the process of searching computer databases to look for patterns and
relationships among information. Before a business can retrieve certain types of information, it must
identify how the data are stored and categorized in the database. After identifying storage and
categorization methods, the business decides which approach to use to obtain the information. After the
information is obtained, the business views and analyzes it.
</h5></div><h5 id='q59'>59. Which of the following capabilities would be most useful when using budgeting applications:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Deleting files from the prior year automatically</option><option value="B">B. Creating unlimited scenarios to depict the impact of decisions</option><option value="C">C. Selecting records to audit at random</option><option value="D">D. Allowing overspent budgets to smoothly move through the system</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: Creating unlimited scenarios to depict the impact of decisions</h5><h5>When using budgeting applications, users
can benefit by creating a variety of "what-if" scenarios in order to develop the most realistic budget.
Automatic deletion of files would be a disadvantage since the prior year's budget is used in developing
the future budget. An audit trail should be maintained on all data entries rather than audits occurring at
random. An effective budgeting application would set limits on how much over budget an account can go
and flag the overage so that steps can be taken to handle the situation.
</h5></div><h5 id='q60'>60. Which of the following statements regarding business budgeting software is true:</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Most budgeting software can be used to measure the impact of different actions on the budget.</option><option value="B">B. Creating line-item projections using budgeting software is extremely time-consuming.</option><option value="C">C. Budgeting software makes it difficult to adapt to changing economic conditions.</option><option value="D">D. Most budgeting software is appropriate for both business and personal use.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: Most budgeting software can be used to measure the impact of different actions on the budget.</h5><h5>Explanation not available</h5></div><h5 id='q61'>61. Helena's manager asked her to put together a report containing a number of different financial ratios,
including the company's current ratio and rate of return on equity. To create the report, Helena should
use __________ software.</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. financial analysis</option><option value="B">B. budgeting</option><option value="C">C. data mining</option><option value="D">D. field service</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: financial analysis</h5><h5>Businesses often use financial analysis applications to quickly and easily examine
their financial health. The software calculates and reports many different financial ratios, compares a
business's financial performance to that of competitors and industry standards, and increases the finance
department's productivity. Budgeting software allows business owners and managers to develop
budgets, study each item in a budget individually and together as a whole, and measure the impact that
different actions would have on the budget. Data mining software is often used to find relationships or
patterns among a vast amount of company data. Data mining software is also used to analyze data;
however, not all data mining software analyzes financial data. Field service software is typically used by
businesses with sales and service teams who do most of their work outside the office. Professionals such
as plumbers and home health care aides use field service software to report their hours, activities,
clients, etc.
</h5></div><h5 id='q62'>62. What type of database should a business use to compare financial data?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Relational</option><option value="B">B. Abstract</option><option value="C">C. Decisive</option><option value="D">D. Ordinal</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: Relational</h5><h5>A relational database contains tables of separate, yet related, files or data organized in a
computer system. Businesspeople can obtain various types of financial information from the relational
database to compare with other information. Abstract, decisive, and ordinal are not types of databases
that businesses use to compare financial data.
</h5></div><h5 id='q63'>63. A business that fails to provide accurate financial information in the required timeframe to a government
agency may be subject to</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. monetary fines.</option><option value="B">B. tax reductions.</option><option value="C">C. payroll exemptions.</option><option value="D">D. regulatory subsidies.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: monetary fines.</h5><h5>Businesses that do not provide accurate and timely financial information in the
appropriate format to the government may be required to pay fines, which are costly to businesses. The
government would not reward business delinquency by offering tax reductions, payroll exemptions, or
subsidies (financial assistance).
</h5></div><h5 id='q64'>64. The XTY Company is experiencing a cash-flow problem, and is falling behind in paying its bills. It recently
received payment on an invoice in the amount of $450 and wants to use it to pay its vendors. Review the
following information and determine which vendor the company should pay first: Vendor A, $300, due in
two weeks; Vendor B, $75, due five days ago; Vendor C, $325, due 30 days ago; Vendor D, $110, due in
three days.</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Vendor B</option><option value="B">B. Vendor A</option><option value="C">C. Vendor C</option><option value="D">D. Vendor D</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: Vendor C</h5><h5>Sometimes, businesses experience temporary or short-term cash-flow problems when the
anticipated inflow of cash falls short. When this type of situation occurs, the business needs to determine
how to handle it. To do this, the business needs to carefully monitor its cash flow, so it can plan how and
when it will pay its bills. XTY should pay Vendor C first because it is the oldest invoice that hasn't been
paid. A business's credit rating can be negatively affected if the business does not pay its bills within a
reasonable amount of time. Although Vendor B's bill was due five days ago, the business is probably
within its payment grace period with the vendor. The bills that are not yet due should be paid after the
overdue bill is paid.
</h5></div><h5 id='q65'>65. When a business is using the financial accounting system to prepare and report financial information,
what should it do?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Include more data than is needed to establish credibility</option><option value="B">B. Implement the financial data registration guidelines (FDRG)</option><option value="C">C. Follow accounting standards such as GAAP or IFRS</option><option value="D">D. Attach copies of all transaction receipts to the reports or forms</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: Follow accounting standards such as GAAP or IFRS</h5><h5>Because businesses must use the financial
accounting system to prepare financial information for external audiences (i.e., shareholders and
government agencies), the information must be presented in a consistent way. The generally accepted
accounting principles (GAAP) are currently used by most accountants in the U.S. to ensure that they
prepare financial reports in a consistent manner. However, much of the rest of the world uses the
International Financial Reporting Standards (IFRS) to prepare and report financial information. Use of the
financial accounting system is a government requirement rather than a way for the business to establish
credibility. Businesses do not need to attach copies of all transaction receipts to reports or forms;
however, receipts and documentation must be available for review if the government requests or requires
it for an additional audit. Financial data registration guidelines is a fictitious term.
</h5></div><h5 id='q66'>66. What is the significance of the base year in horizontal trend analysis?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. It represents the time period in which a trend is first detected.</option><option value="B">B. It is the time period that is used as the basis for comparisons.</option><option value="C">C. It is the time period in which the difference between revenue and expenses is the greatest.</option><option value="D">D. It represents the time period in which the difference between accounts receivable and accounts
payable is the smallest.

</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is B: It is the time period that is used as the basis for comparisons.</h5><h5>The base year is the starting point for
comparisons; therefore, each category on a financial statement in the base year is 100%. By subtracting
the base year's amount from each future amount, and then dividing by the base year amount, you can
determine the percent of increase or decrease from year to year. The other responses do not relate to
the base year that is used in horizontal analysis.
</h5></div><h5 id='q67'>67. Bonnie is responsible for determining whether her firm should extend credit to a potential business
customer. The customer's trade reference information should include</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. a list of the items that the business typically purchases from each supplier.</option><option value="B">B. the name of the purchasing agent who buys from the business's suppliers.</option><option value="C">C. the articles of incorporation for each of the suppliers.</option><option value="D">D. the current balance that the customer owes to each of its existing suppliers.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: the current balance that the customer owes to each of its existing suppliers.</h5><h5>Businesses often analyze
customer financial information to determine their customers' creditworthiness. If a potential business
customer applies for a loan or line of credit, the creditor is likely to review the customer's bank
information, financial statements, and trade references. These trade references should come from three
or four of the customer's existing suppliers who have already extended credit to the customer. Each trade
reference should provide information such as the customer's credit line, high balance, current balance,
and payment history. Reviewing this information will help the company to determine whether it wants to
extend credit to the customer, too. The name of the customer's purchasing agent, each supplier's articles
of incorporation, and a list of the items that the business typically purchases from each supplier are not
usually needed when determining whether to extend credit to a potential customer.
</h5></div><h5 id='q68'>68. The IHF Company is experiencing a temporary cash shortage and doesn't have enough cash available to
cover its payroll for this pay period. Since the company expects to receive a large payment from a
customer in the next four weeks, though, management has decided to obtain a short-term loan to pay
company employees. By analyzing financial data, company management was able to identify</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. possible investment opportunities.</option><option value="B">B. methods to reduce expenses.</option><option value="C">C. financial risks and deficiencies.</option><option value="D">D. ways to reduce the cost of credit.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: financial risks and deficiencies.</h5><h5>By analyzing relevant financial data, management has determined that
the company is facing a risky financial situation—it does not have enough cash available to pay its
employees. As a result, the company plans to temporarily borrow capital to cover its expenses. Although
the company would probably like to find ways to reduce expenses, identify possible investment
opportunities, and determine ways to reduce the cost of credit, those were not reasons for reviewing
financial data in this situation.
</h5></div><h5 id='q69'>69. Kenneth is comparing his business's actual sales revenue against his budgeted sales revenue. He hopes
to figure out why his actual sales last month were lower than what he had budgeted. Kenneth is
conducting a __________ analysis.</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. variance</option><option value="B">B. break-even</option><option value="C">C. competitive</option><option value="D">D. market</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: variance</h5><h5>Business managers and owners often analyze their financial data to identify and attempt to
explain differences between budgeted costs and actual costs or budgeted sales and actual sales. The
difference or discrepancy between the budgeted and actual costs is called a variance. Break-even
analysis involves identifying the level of sales needed to reach the break-even point at various prices. A
competitive analysis is the process of comparing a business's income statement with that of its
competitors to see how it is doing by industry standards. A market analysis is a systematic study of
potential customers.
</h5></div><h5 id='q70'>70. The people who work to produce goods and services are known as</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. raw materials.</option><option value="B">B. capital.</option><option value="C">C. human resources.</option><option value="D">D. facilities.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: human resources.</h5><h5>The people who work to produce goods and services are known as human resources,
and they are invaluable to a company. Capital, raw materials, and facilities are other resources that
businesses use; they are all controlled by human resources.
</h5></div><h5 id='q71'>71. After the popularity of a product dropped, the business needed a new product to promote that would help
to improve its image. Which marketing function would come up with the new product?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Channel management</option><option value="B">B. Product/Service management</option><option value="C">C. Selling</option><option value="D">D. Promotion</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: Product/Service management</h5><h5>Their focus is on collecting and storing financial data for the
accounting department. SutiExpense is a mobile expense management application used to monitor,
manage, and simplify travel and expense recordkeeping. Users are able to attach receipts "on the go"
from their smart phones, enabling them to save both time and money.
</h5></div><h5 id='q72'>72. To determine the types of information that the business needs to operate, it is often beneficial to</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. obtain employees' input.</option><option value="B">B. upgrade the computer network.</option><option value="C">C. develop a production schedule.</option><option value="D">D. revise business's goals.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: obtain employees' input.</h5><h5>Because employees perform the work, they know what types of information
they need to complete their tasks efficiently. Employees often have ideas about improving work
processes and retrieving needed information. Upgrading the computer network, developing a production
schedule, and revising business goals will not help businesses assess their information needs.
</h5></div><h5 id='q73'>73. Which of the following are characteristics of effective business information:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Applicable, historical, and complete</option><option value="B">B. Current, simple, and accessible</option><option value="C">C. Usable, accurate, and retrievable</option><option value="D">D. Organized, complex, and superficial</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: Usable, accurate, and retrievable</h5><h5>Companies use many sources of internal and external information to
make decisions about their business activities. Effective information should be usable (applicable),
accurate, and retrievable (accessible). Whether the information needs to be current, historical, organized,
complete, simple, or complex depends on the type of information the company needs, and how the
company intends to use the information. Making important business decisions based on superficial
information could be costly to companies.
</h5></div><h5 id='q74'>74. William is thinking about getting a new smartphone, so he logged on a well known web site to read
others' opinions and experiences with different types of smartphones that are currently on the market.
William is reading Internet product reviews to</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. compare the prices of smartphones from various online stores.</option><option value="B">B. make an informed buying decision.</option><option value="C">C. determine which company has the best phone plan.</option><option value="D">D. reaffirm his recent purchasing selection.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is B: make an informed buying decision.</h5><h5>The Internet has revolutionized the ways in which business is
conducted. The Internet provides customers with the ability to obtain product information in a variety of
ways—from business web sites, blogs, newsfeeds, and consumer information web sites. In the example,
William is doing research to find out how other users like different smartphones before he makes a
decision about the one that he wants to buy. William will likely visit various smartphone e-tailers to get
product specifications and pricing before making his decision. Although phone plans are often a factor
when making a mobile-phone purchasing decision, there is not enough information provided to determine
whether phone plans will affect William's buying decision. William hasn't purchased his smartphone yet,
so he can't reaffirm his recent purchase.
</h5></div><h5 id='q75'>75. Eli is using an online search engine to obtain business information. To obtain narrow search results for a
specific phrase, which of the following should Eli place around the text:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Asterisks</option><option value="B">B. Quotation marks</option><option value="C">C. Number sign</option><option value="D">D. Equal sign</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: Quotation marks</h5><h5>A search engine is a software program that automatically crawls the Web looking for
information pertaining to specified search terms and displays a list of results. To narrow the scope of the
information that the search query returns, Eli should place quotation marks around the specific phrase,
such as “International Internet Marketing Association.” By using quotation marks, the search will return
results with those words in the exact way the researcher enters them, which narrows the scope of the
returned results. Asterisks, the number sign, and the equal sign are not keystroke options that will narrow
online search results.
</h5></div><h5 id='q76'>76. The ability to quickly and accurately calculate mathematical data is one of the characteristics of a
__________ software program.</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. database</option><option value="B">B. spreadsheet</option><option value="C">C. graphics</option><option value="D">D. word-processing

</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: spreadsheet</h5><h5>Spreadsheet software programs are designed to organize, calculate, and analyze
mathematical or numerical information. Businesses are able to enter mathematical information into rows
and columns, and the software provides accurate calculations in a matter of seconds. Database software
programs maintain information according to specific criteria. Word-processing software programs are
used to create text documents. Graphics software programs are used to combine text and pictures to
create visual impact.
</h5></div><h5 id='q77'>77. When posting a new page to an existing web site, the new page should be linked to the</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. pop-up ads.</option><option value="B">B. home page.</option><option value="C">C. personal computer.</option><option value="D">D. online catalog.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: home page.</h5><h5>Most business web sites are designed using a hierarchical system. The home page is at the
top of the hierarchy—it is the starting point from which all other pages on the web site are connected and
accessed. Therefore, it is important that the new page be linked to the home page so web surfers can
navigate to the new page using their personal computers. Pop-up ads are promotional messages that
appear in a separate browser window. The new page does not need to be linked to a pop-up ad. A
business may or may not include an online catalog on its web site. If the new page is related to the online
catalog, it should be linked to the catalog, which should be linked to the home page in the navigation
scheme.
</h5></div><h5 id='q78'>78. Keeping reliable financial records helps businesses to</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. time their promotions appropriately.</option><option value="B">B. track income and expenses.</option><option value="C">C. prevent depreciation from occurring.</option><option value="D">D. retrieve records in a disaster.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: track income and expenses.</h5><h5>Keeping reliable financial records helps businesses to track income and
expenses. No record can prevent depreciation from occurring. Financial records do not facilitate
retrieving records in a disaster, but they are some of the important records that will need to be preserved.
Promotional records, not financial records, help businesses to time their promotions appropriately.
</h5></div><h5 id='q79'>79. After replacing a light bulb in a ceiling fixture above the selling floor, an employee should immediately</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. dispose of the old bulb.</option><option value="B">B. answer his/her page.</option><option value="C">C. put away the ladder.</option><option value="D">D. determine his/her next assignment.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is C: put away the ladder.</h5><h5>Anything left on the selling floor is dangerous for both customers and store
personnel. This includes boxes, hand trucks, or supplies. The other alternatives are activities that might
occur after the ladder is replaced.
</h5></div><h5 id='q80'>80. Which of the following is an example of point-of-sale fraud:</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Employees undercharging their friends</option><option value="B">B. Competitors accessing computer files</option><option value="C">C. Customers replacing price tags</option><option value="D">D. Vendors taking funds from the register</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Employees undercharging their friends</h5><h5>Point-of-sale fraud are attempts to cheat a business out of
money at the time of purchase. Employees sometimes commit fraud at the point of sale which results in
financial losses for the business. Employees who undercharge their friends when ringing up their
purchase are committing point-of-sale fraud because they are selling items for less than the actual value.
The business is losing part of the money it should have received for the sale. Customers who replace
price tags are committing a type of fraud known as price-ticket switching. Vendors who take funds from a
business's register are pilfering. Competitors who access a business's computer files are committing
computer fraud.
</h5></div><h5 id='q81'>81. What project-management activity involves determining when project tasks should be performed?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Evaluating</option><option value="B">B. Monitoring</option><option value="C">C. Scheduling</option><option value="D">D. Processing</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is C: Scheduling</h5><h5>Project management is the process of planning, scheduling, and monitoring the progress of
a project to achieve a specific goal. Scheduling is the process of developing plans that list the order of
tasks that need to be performed and their completion dates. Schedules are tools that help project
managers and team members organize their tasks, manage their time, and meet stated deadlines.
Monitoring is periodically checking the progress of an activity or task. Evaluating is reviewing or
examining the value or importance of something. Processing is carrying out a task.
</h5></div><h5 id='q82'>82. Which of the following is often the key to successfully managing a project:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Listening to complaints</option><option value="B">B. Being organized</option><option value="C">C. Modifying requirements</option><option value="D">D. Requiring reports</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: Being organized</h5><h5>Being organized is often the key to a successful project. The manager must be able to
take ideas and bring each piece together in an orderly way to achieve project goals. The manager
assigns tasks, prepares schedules, and monitors the progress. Therefore, the manager needs to have
the ability to stay organized and focused to keep the project on target. When managing projects, it is
important to handle complaints rather than simply listen to them. Requirement modifications should be
made only if necessary. Requiring reports is not the key to successfully managing a project. In fact,
simple projects often do not require reports.
</h5></div><h5 id='q83'>83. Which of the following is often a factor that a business considers when evaluating a vendor's
performance:</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Accounting methods</option><option value="B">B. Business plan</option><option value="C">C. Invoice number</option><option value="D">D. Order accuracy</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: Order accuracy</h5><h5>Businesses evaluate their vendors' strengths and weaknesses to determine if changes
should be made. One factor that businesses evaluate is the accuracy of a vendor's orders. If the vendor
consistently sends incorrect items, the business can work with the vendor to correct the problems, or it
can decide to terminate the relationship with the vendor. Other considerations might include invoice
accuracy, order lead-time, and delivery time. The business does not usually evaluate the vendor's
business plan, invoice numbers, or accounting methods.
</h5></div><h5 id='q84'>84. A small business owner receives notice that the business's monthly rent will increase next year. The
owner should include this increase in an estimate of next year's</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. sales revenue.</option><option value="B">B. projected income.</option><option value="C">C. operating costs.</option><option value="D">D. inventory costs.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: operating costs.</h5><h5>The costs of doing business, such as paying rent and utilities, are known as operating
costs. Most businesses try to project what their operating costs will be to know how much money will be
needed to run the business. Projected income is an estimate of the amount of money the business owner
expects to earn. Inventory costs involve the amount of money a business owner must spend to purchase
goods for resale. Sales revenue is income from sales.
</h5></div><h5 id='q85'>85. Which of the following is considered an advantage to the store of having employees carry out regular
housekeeping duties:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Merchandise will be easy for customers to find.</option><option value="B">B. Employees will learn a valuable skill.</option><option value="C">C. Customers will be less likely to return.</option><option value="D">D. Clean aisles can be used for storage.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: Merchandise will be easy for customers to find.</h5><h5>If a retail store is neat and clean and the merchandise is
well organized, it is easier for customers to shop the store. In addition, customers perceive the store and
its merchandise in a more positive manner and are likely to become regular customers. Housekeeping
skills are considered routine rather than valuable skills. Aisles should be kept clear and uncluttered, not
used for storage.
</h5></div><h5 id='q86'>86. Which of the following is a personal effort that would help an employee to reach a high level of efficiency:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Following company policies</option><option value="B">B. Being organized</option><option value="C">C. Working rapidly</option><option value="D">D. Taking additional training</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Being organized</h5><h5>Being organized is often the key to a successful project. The manager must be able to
take ideas and bring each piece together in an orderly way to achieve project goals. The manager
assigns tasks, prepares schedules, and monitors the progress. Therefore, the manager needs to have
the ability to stay organized and focused to keep the project on target. When managing projects, it is
important to handle complaints rather than simply listen to them. Requirement modifications should be
made only if necessary. Requiring reports is not the key to successfully managing a project. In fact,
simple projects often do not require reports.
</h5></div><h5 id='q87'>87. What effect do demands on your time have on the supply of time available to you?</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Supply stays the same.</option><option value="B">B. Supply decreases.</option><option value="C">C. Supply increases.</option><option value="D">D. Supply matches time demanded.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is A: Supply stays the same.</h5><h5>No matter what we do, we cannot expand the day beyond 24 hours. Since the
supply of time is fixed, we have to use it efficiently.
</h5></div><h5 id='q88'>88. Comprehending our personal wants and needs, interests, values, and motives, and recognizing their
effects on our behavior, is known as</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. self-control.</option><option value="B">B. self-understanding.</option><option value="C">C. self-esteem.</option><option value="D">D. self-fulfillment.

</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: self-understanding.</h5><h5>Self-understanding makes it much easier to identify and understand similar
characteristics in others. Self-control is the ability to direct the course of your own behavior. Self-esteem
is how you feel about yourself at any given time. Self-fulfillment is reaching one's fullest potential.
</h5></div><h5 id='q89'>89. A source of employment information that can be used free of charge by everyone is a public employment
agency, which is operated by</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. local businesses.</option><option value="B">B. the school system.</option><option value="C">C. the government.</option><option value="D">D. private employers.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: the government.</h5><h5>For example, the U.S.
government consists of three primary parts—the judicial, executive, and legislative branches. The judicial
system (branch) is the court system. The courts interpret and apply the laws. The president and the
presidential cabinet are part of the executive branch of the government. The presidential cabinet consists
of experts who advise the president about various issues. The legislative branch (i.e., the U.S. Congress)
enacts the laws.
</h5></div><h5 id='q90'>90. What is an important quality that all résumés should possess?</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Length</option><option value="B">B. Neatness</option><option value="C">C. Creativity</option><option value="D">D. Complexity</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: Neatness</h5><h5>All résumés should be neatly prepared. Neat résumés make a good first impression on
prospective employers who often form opinions of applicants based on their résumés. A neat résumé
indicates that the person will be careful and thorough on the job. Also, employers are more likely to read
neat résumés than those that are sloppy or contain errors. Résumés should not be creative but should
contain exact information. Résumés should be brief rather than long. They should not be complex but
easy to read and understand.
</h5></div><h5 id='q91'>91. The primary reason why many people engage in career-oriented networking activities is to</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. cultivate a wide circle of social and personal contacts.</option><option value="B">B. develop an extensive list of sales prospects and contacts.</option><option value="C">C. obtain letters of recommendation from previous employers.</option><option value="D">D. connect with others who might help them accomplish professional goals.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: connect with others who might help them accomplish professional goals.</h5><h5>People engage in networking
activities by communicating with customers, friends, family, teachers, and former coworkers. Networking
often provides people with information regarding work-related opportunities, such as job openings.
Although networking is often used to develop a list of sales prospects and contacts, many people are not
involved in selling activities in their occupation. Career-networking activities are primarily used to improve
or enhance work-related situations rather than social standing. Obtaining letters of recommendations is
often a result of networking activities. However, it is not always the primary reason why people network.
</h5></div><h5 id='q92'>92. Which of the following is an example of the impact of technology on the financial-services industry:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Greater demand for investment professionals</option><option value="B">B. More walk-in bank customers</option><option value="C">C. Rising concern about fraud and identity theft</option><option value="D">D. Blurring the lines between banking, insurance, and investments</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Rising concern about fraud and identity theft</h5><h5>One of the impacts of technology on the financial-services
industry is rising concern about fraud and identity theft since so many financial products and services are
now bought and sold online. Encryption technology helps guard against fraud and theft. Banks have
fewer walk-in customers when they offer online banking. Blurred lines between the banking, insurance,
and investment industries is the result of deregulation. Greater demand for investment professionals is
the result of changing demographics.
</h5></div><h5 id='q93'>93. To become a certified financial planner, an individual must accomplish at least three things: acquire the
required education, pay the appropriate fee, and</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. pass the certification examination.</option><option value="B">B. join a financial planning association.</option><option value="C">C. recognize the value of certification.</option><option value="D">D. solve financial problems.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: pass the certification examination.</h5><h5>Passing the exam verifies that the individual is qualified to be a
financial planner. It is not necessary to join an association first. Recognizing the value of certification is
something you might do before you seek certification. Solving financial problems is something you intend
to do after certification.
</h5></div><h5 id='q94'>94. Joining a professional organization is one way for financial planners to</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. formulate business plans.</option><option value="B">B. establish personal priorities.</option><option value="C">C. build business contacts.</option><option value="D">D. develop organizational charts.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: build business contacts.</h5><h5>A professional organization is a group of persons in the same profession who
form a society to further their common interests. The primary focus of the professional organization is to
expand professional knowledge and maintain high professional standards. Joining a professional
organization helps financial planners network with others in the same field. Networking provides financial
planners with information about employment opportunities and prospective client contacts. Financial
planners do not join professional organizations to establish personal priorities, formulate business plans,
or develop organizational charts.
</h5></div><h5 id='q95'>95. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. advertising.</option><option value="B">B. cooperating.</option><option value="C">C. networking.</option><option value="D">D. up-selling.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: networking.</h5><h5>Networking involves connecting with individuals who might help accomplish career and
professional goals. By serving on trade association committees, co-authoring articles for publication, and
treating business contacts to dinner or golf, Brynn creates situations in which she has the opportunity to
get to know other professionals and possibly build relationships that will be beneficial for everyone
involved. Cooperating with others shows a willingness to work together to resolve differences or achieve
common goals. Although Brynn is cooperating with others while carrying out these activities, her ultimate
goal is to build a network of business professionals who can help her to achieve her career goals.
Advertising is any paid form of nonpersonal presentation of ideas, images, goods, or services. Up-selling
is a sales technique in which a higher priced product than the one originally requested by the customer is
suggested.
</h5></div><h5 id='q96'>96. To save money, an automobile manufacturer imports substandard parts for its car engines. Many of the
cars that contain engines with the imported parts have caught on fire. Now, the manufacturer is facing a
class-action lawsuit. This is an example of risk associated with</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. product safety.</option><option value="B">B. domestic trade.</option><option value="C">C. service quality.</option><option value="D">D. trade secrets.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: product safety.</h5><h5>Businesses risk financial losses and damaged reputations when they use lower-quality
goods and materials. In the example, the manufacturer used low-quality parts that affected the
performance and safety of the car engine. When car engines catch on fire and people are injured, the
manufacturer may be legally required to pay damages to the injured parties. The risks in the example are
not associated with domestic trade, service quality, nor trade secrets.
</h5></div><h5 id='q97'>97. Which of the following is most likely to be an unethical risk management activity:</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Reporting that an employee is embezzling from the organization</option><option value="B">B. Paying a share of the loss exposures pooled through insurance</option><option value="C">C. Withholding pertinent information from insurance underwriters</option><option value="D">D. Securing fair, favorable premium rates from insurers</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: Withholding pertinent information from insurance underwriters</h5><h5>While withholding pertinent information
from or misrepresenting information to insurance underwriters may help risk managers to obtain unfairly
favorable premium rates from insurers in the short-term, doing so is highly unethical and likely to cause
problems in the long-term, such as when the company attempts to renew the policy. However, securing
fair, favorable premium rates from insurers through ethical, honest actions is acceptable. Companies are
typically required to pay a share of the loss exposures pooled through insurance. Embezzling from the
organization is unethical, but reporting that someone within the company is embezzling is good, ethical
risk management.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1071

FINANCE CLUSTER EXAM

1. The federal courts are part of the</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. content theories.</option><option value="B">B. contingency plans.</option><option value="C">C. endorsement records.</option><option value="D">D. monetary regulations.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: monetary regulations.</h5><h5>1071

FINANCE CLUSTER EXAM—KEY

13

10. D
Conducting research about the company prior to the interview. From the research, Shawn can write a few
questions that directly relate to the company or its industry. Even though additional questions may come
up during the interview, it is always best to be prepared with relevant questions based on research. It is
important that Shawn confirms that the questions are relevant by researching them himself instead of
taking his friends' (or anyone else's) advice. Questions about the interviewer's personal life are not
relevant to the job interview.
</h5></div><h5 id='q99'>99. Risk retention groups are typically only allowed to offer __________ insurance coverage.</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. health</option><option value="B">B. life</option><option value="C">C. homeowners</option><option value="D">D. liability

</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: liability

</h5><h5>Explanation not available</h5></div><h5 id='q100'>100. Which of the following would normally be considered a scarce natural resource in the U.S.:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Water</option><option value="B">B. Land</option><option value="C">C. Air</option><option value="D">D. Money</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: Land</h5><h5>Land is limited in supply, we can't make any more of it, and it supplies us with many other valuable
resources (oil, coal, gas, etc.). Air and water are presently in abundant supply in America. Money is a
symbol of value, not a natural resource.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Finance/Finance_3_Split_Master.js"></script></html>