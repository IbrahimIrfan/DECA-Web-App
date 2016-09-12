<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Business-Admin Exam 12</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Shamir and Frieda both own salons in the same town. In a newspaper interview, Shamir presents several
untrue and negative facts about Frieda's salon, and her business suffers as a result. Frieda is likely to file
a tort action against Shamir for</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. negligence.</option><option value="B">B. appropriation.</option><option value="C">C. defamation.</option><option value="D">D. wrongful interference.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: defamation.</h5><h5>A tort action occurs when one party (in this case, Frieda) brings a personal suit against
another party to gain money or other relief in exchange for any harm. In Frieda's case, her business
suffered after Shamir's untrue accusations were printed in the newspaper. Making false statements with
the intent of harming someone else (or their business) is known as defamation. Appropriation is the use
of another person's likeness or any other identifying characteristic without their permission. If Shamir had
used Frieda's name or picture in his advertising materials without getting her permission, that would be
considered appropriation. Negligence is an unintentional tort that occurs when a party doesn't live up to
duties and causes unplanned harm to another party. Shamir intended to cause damage to Frieda's
business, so this wasn't a tort of negligence. Wrongful interference occurs when a third party interferes in
a contractual (or business) relationship between two other parties.
</h5></div><h5 id='q2'>2. Megan is working with a group member who's explaining her part of a project. Megan wants to make sure
her group member knows she's listening, so she says things like, “I see,” “Okay,” and “I understand.”
Which active listening skill is Megan demonstrating:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Paraphrasing the message to test her understanding</option><option value="B">B. Repeating critical information</option><option value="C">C. Using a verbal acknowledgement response</option><option value="D">D. Collecting all the information possible</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: Using a verbal acknowledgement response</h5><h5>In one-on-one or small group conversations like Megan's, a
short verbal response lets the speaker know you are paying close attention. By saying things like, “I see,”
or “Uh-huh,” you let the other person know that you're actively listening. Repeating critical information is
another important active-listening skill that involves repeating things like phone numbers, names, or web
addresses. When you paraphrase the message, you repeat what the other person said, but in your own
words. When you collect all the information possible, you observe gestures, interpret body language, and
listen to the person's tone of voice. All of these are important active-listening skills, but they aren't what
Megan is doing in this example.
</h5></div><h5 id='q3'>3. You have a customer on the phone who always ends up talking about his personal life for far too long.
Today, he's telling you a long story about his recent vacation. However, you have several other calls on
the line and tons of work to do. How should you handle this situation?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Tell the caller you're happy to hear about his vacation, but you have to take another call.</option><option value="B">B. Tell the customer you don't have time to talk about personal issues, so he should stay on topic.</option><option value="C">C. Transfer the call to someone else who has more time to talk to the customer.</option><option value="D">D. Talk to the customer as long as he wants to appear more interested.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: Tell the caller you're happy to hear about his vacation, but you have to take another call.</h5><h5>It's important to
be as professional and polite as possible, even if a talkative caller is taking up too much of your work
time. By saying something courteous yet assertive, like, "I'm happy to hear about your vacation, but I
have to take another call now," you're letting the caller know that you appreciate his personal stories, but
that you also have work to do. This customer brings money to your business, so you don't want to be
rude or risk offending him. You shouldn't tell the customer that you don't have time for him, even if he's
just telling personal stories. You also shouldn't transfer the call to another person, as that would be
considered rude both to the customer and your coworker. Although it's important to sound interested
when you're talking to a customer, you shouldn't talk to them for too long, especially not if you have
important work to do. It's necessary to strike a good balance between making a customer connection and
asserting yourself.
</h5></div><h5 id='q4'>4. Alexis and her team are working on a new project proposal to show their boss. She knows that doing the
project their way will be costly and time-consuming, but she also knows that the results will be great. She
and her team decide to first present the benefits of the project and then draw the conclusion that
investing company time and money would be a good idea. Alexis hopes to convince her boss using</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. geographical order.</option><option value="B">B. deductive organization.</option><option value="C">C. chronological order.</option><option value="D">D. inductive organization.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: inductive organization.</h5><h5>Inductive organization starts with examples, facts, or reasons and saves
conclusions for last. When you need to persuade someone of something, inductive organization can be
especially helpful. This is the case for Alexis and her team. She knows that her boss won't necessarily
want to spend a lot of time and money on the project, so she starts by listing the benefits. If she started
out with the costs, her boss would likely be scared off before she even had the chance to convince him.
Deductive organization is the opposite of inductive organization. It starts with the conclusion, and then
moves to examples, facts, and reasons. This method of organization is best when delivering routine
information or business writing. Chronological order presents information in time sequence. This is useful
when describing history or sales figures. Geographical order involves organizing your information around
location. This method of organization isn't used that often, since there aren't many topics that are easily
organized by location.
</h5></div><h5 id='q5'>5. It's appropriate to write a letter of inquiry when</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. you're summarizing a business report.</option><option value="B">B. thanking a potential employer for an interview.</option><option value="C">C. informing employees of a payroll change.</option><option value="D">D. requesting more information about a company.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: requesting more information about a company.</h5><h5>When you need to request information or ask a question,
you send a letter of inquiry. Letters of inquiry can be written for many different reasons—to request more
information about a company, to ask a question about a product, to inquire about a job opening, to ask
for advice, to request paperwork, etc. A letter that thanks a potential employer for an interview is a followup letter, not a letter of inquiry. When informing employees of a payroll change, you'd likely write a
memo. A business report summary is known as an executive summary. This is meant for people who
don't have time to read the entire business report, and it's not the same thing as a letter of inquiry.
</h5></div><h5 id='q6'>6. In a detailed document, Rachel explains the possible implications of implementing a cooperative
advertising program for her employer's major customers. In this situation, Rachel developed a</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. sales analysis.</option><option value="B">B. troubleshooting proposal.</option><option value="C">C. feasibility report.</option><option value="D">D. request for proposal.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is C: feasibility report.</h5><h5>A feasibility report summarizes the positive and negative consequences or implications
of taking a certain course of action. Troubleshooting reports address specific problems, such as a
problem with a process. A sales analysis is an examination of a company's sales for a certain period of
time. A request for proposal is an invitation that a business extends to suppliers to bid on a particular
project or program.
</h5></div><h5 id='q7'>7. "With fewer staff members available to conduct extensive testing, Calhoun Software has experienced
several product-release failures last year that resulted in costly product returns." This is an example of a
research report</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. executive summary.</option><option value="B">B. problem statement.</option><option value="C">C. recommendation.</option><option value="D">D. pronouncement of intent.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: problem statement.</h5><h5>The problem statement is the heart of the research report—it defines the issue at
hand and summarizes the purpose of the research. In the example, the company defines the problem as
product-release failures due to understaffing. In a few additional paragraphs, the report writer should go
into more detail about the problem. The executive summary is an overview of the entire report. The
audience typically uses the executive summary to determine whether it is worthwhile to read the report
any further. The recommendations section is the proposed course of action and is the last component
presented in the report. A pronouncement (statement) of intent is an agreement to do something.
</h5></div><h5 id='q8'>8. What type of information should be included in the methodology section of a research report?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. References and reliability data</option><option value="B">B. The significance of the study and conclusions</option><option value="C">C. Research procedures and the purpose of the study</option><option value="D">D. A description of the sampling plan and research technique</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is D: A description of the sampling plan and research technique</h5><h5>A research report is a written document that
summarizes an investigation of a particular issue or problem. The methodology section of the report
outlines the research plan and includes a description of the sampling plan, research technique (e.g.,
survey or interview), research procedures, and reliability of the results. The purpose and significance of
the study appear in the introduction section of the research report. References appear at the end of the
report, after the conclusions and recommendations section.
</h5></div><h5 id='q9'>9. Sophia needs to distribute a sales report to her employees. There are lots of numbers and figures, but
the report is pretty self-explanatory. Sophia should communicate this information to her staff via a</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. conference call.</option><option value="B">B. face-to-face meeting.</option><option value="C">C. memo.</option><option value="D">D. voicemail.
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: memo.</h5><h5>If Sophia needs to transmit a message to her staff that involves lots of numbers and figures but
doesn't require much explanation, a memo is her best bet. This way each employee will have a record of
the information to keep on file. A face-to-face meeting would be an inconvenient way to transmit the
necessary information. Sophia would waste valuable time going over each figure, when employees could
just as easily read the information themselves. A conference call and voicemails would also not be ideal.
With either of those options, the employees wouldn't have the information in front of them. The numbers
would also be confusing to explain over the phone. It's always important to choose the correct
information channel. If Sophia chooses the wrong one, she could confuse her employees or distort the
message.
</h5></div><h5 id='q10'>10. There are several auto repair shops in town, but Patricia's stands out. Her auto repair shop does great
work, but what really sets her shop apart is the customer service. Every customer is greeted by a friendly
employee, and s/he is given snacks and drinks while s/he waits for the repairs to be completed. The
great customer service that people can expect from Patricia's business is considered her</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. brand promise.</option><option value="B">B. tagline.</option><option value="C">C. vision.</option><option value="D">D. mission statement.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: brand promise.</h5><h5>A business's brand promise is its (spoken or unspoken) agreement with its customers
that it will consistently meet their expectations. When Patricia's customers visit her business, they know
they'll receive outstanding customer service every time. A brand promise should go above and beyond
goods and services and focus on something other businesses don't offer. For example, the other auto
repair shops in town may do repairs that are just as good, but it's Patricia's outstanding customer service
that sets her apart. A tagline is a company's slogan. Taglines often change based on marketing
campaigns and cultural shifts, but a company's brand promise is permanent. A vision is the future a
business desires to create. Providing great customer service may be part of Patricia's vision, but that
alone is not a vision. A mission statement is a brief summary of what a business owner wants to be
doing. This is not the same as a brand promise.
</h5></div><h5 id='q11'>11. Simone's business doesn't advertise much. Instead, she relies on happy customers to tell their friends,
family, and coworkers about her company. Simone's business uses __________ to gain customers.</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. advocacy</option><option value="B">B. relationship buying</option><option value="C">C. corporate culture</option><option value="D">D. business process management</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: advocacy</h5><h5>Word-of-mouth promotion and referrals to other potential customers are known as advocacy.
This is what Simone uses when she relies on happy customers to spread the word about her business.
Advocacy is a main goal of customer experience management (CEM). Relationship buying occurs when
customers find businesses they like and stick with them. Instead of shopping around, they prefer to stay
with the business they currently patronize. Corporate culture refers to the values and ideals that an
organization encourages among its employees. Business process management focuses on aligning a
business's objectives and activities with customer needs by stressing innovation, flexibility, and most
importantly, technology.
</h5></div><h5 id='q12'>12. Bryant Technical College is offering an online degree in landscape design. This product is considered
a(n)</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. virtual service.</option><option value="B">B. low-quality product.</option><option value="C">C. outsourced service.</option><option value="D">D. merger.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is A: virtual service.</h5><h5>Every customer is greeted by a friendly
employee, and s/he is given snacks and drinks while s/he waits for the repairs to be completed. The
great customer service that people can expect from Patricia's business is considered her
A. brand promise.
C. vision.
B. tagline.
D. mission statement.
11. Simone's business doesn't advertise much. Instead, she relies on happy customers to tell their friends,
family, and coworkers about her company. Simone's business uses __________ to gain customers.
A. advocacy
C. corporate culture
B. relationship buying
D. business process management
12. Bryant Technical College is offering an online degree in landscape design. This product is considered
a(n)
A. virtual service.
C. outsourced service.
B. low-quality product.
D. merger.
13. Nadia's assistant, Roger, rarely does what he's supposed to do. He routinely forgets to schedule her
appointments, orders the wrong supplies for her office, and misses work at least a few times a month. An
employee like Roger is an example of a(n) __________ risk.
A. financial
C. strategic
B. hazard
D. operational
14. Vince is very excited to get his first paycheck from his part-time job. He's expecting about $200, but when
he sees his weekly paystub, he's disappointed to find out he's actually getting much less. Which tax did
Vince forget to take into account:
A. Excise tax
C. Sales tax
B. Property tax
D. Income tax
15. Randy used to work in a factory. However, after technological advances brought robots that could do the
same job for less money, he was laid off. Randy is looking for a new job in a factory, but everything
requires knowledge of computer programs, which he doesn't have. Randy is facing __________
unemployment.
A. structural
C. cyclical
B. frictional
D. seasonal
16. Which of the following is an advantage of a weak dollar:
A. It creates more consumer spending.
C. Employee wages go up.
B. It encourages exports.
D. More jobs are created.
17. American businesspeople believe that maintaining direct eye contact during conversation indicates an
individual's sincerity, interest, and confidence level, while some cultures believe that ongoing direct eye
contact is rude. This is an example of how __________ differs among cultures.
A. social status
C. personal appearance
B. nonverbal communication
D. gender perception
18. In some cultures, it is common for businesspeople to discuss business matters during meals, but
Canadians typically do not. This is a cultural issue related to
A. dining etiquette.
C. language barriers.
B. negotiating style.
D. cognitive intelligence.
19. During a meeting with German businesspeople, an American businessperson introduced a change to the
agenda. Because the German businesspeople were caught off guard by this change, they became upset,
which indicates that German culture tends to
A. prefers a less-structured environment.
C. take greater risks than other cultures.
B. be highly ethnocentric.
D. have a low tolerance for uncertainty.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3

20. Latin-American businesspeople often hold several meetings to build trust and get to know their business
partners. Businesspeople from other cultures often find this practice frustrating because they want to get
down to business. This example illustrates how __________ differs among cultures.
A. regulation
C. ethical behavior
B. language
D. communication style
21. Japanese businesspeople believe that arriving late at an appointment is extremely disrespectful. This
illustrates the importance of understanding cultural issues that relate to
A. decision making.
C. time.
B. assertiveness.
D. location.
22. An individual's status and title are very important in all aspects of Japanese culture, including business
situations. For example, the Japanese businessperson with the most authority sits in the chair furthest
from the door, and the remaining employees sit in descending rank around the table, so the lowest
ranking employee sits nearest to the door. This situation indicates that Japan
A. is a hierarchical society.
C. is an individualist culture.
B. has liberal social standards.
D. has a traditional economic system.
23. Jim Martin is a Canadian businessperson who is traveling to Saudi Arabia to close a business deal. Jim
should dress conservatively by wearing a
A. vest, corduroy pants, and long-sleeve T-shirt.
B. suit, long-sleeve dress shirt, and tie.
C. short-sleeve golf shirt, wristwatch, and casual pants.
D. suit, short-sleeve T-shirt, and a vest.
24. Because Indian businesspeople value their personal space, foreigners should
A. maintain physical distance during conversation.
B. shake hands as a gesture of goodwill.
C. speak loudly and clearly to be heard and understood.
D. begin with social talk before launching into business discussions.
25. Taking responsibility for your actions involves
A. responding to criticism in a defensive manner.
B. letting others accept the blame for your mistakes.
C. justifying your errors.
D. admitting your mistakes.
26. To manage their work commitments in a timely manner, businesspeople should
A. work on enjoyable tasks before tackling the unpleasant tasks.
B. ask their coworkers to help them with routine activities.
C. estimate the time that it takes them to perform their tasks.
D. identify shortcuts that they can take get their work done quickly.
27. Because Tim is not a “morning person,” it takes a little while for him to feel alert and focused. Which of
the following tasks is best for Tim to work on when he first arrives at the office:
A. Prepare a presentation
C. Write a research report
B. Update the departmental budget
D. Read e-mail
28. Gabriel's boss just assigned him a new project. He needs to create a video presentation, which he has
no idea how to do. He starts to get discouraged, but then he reminds himself that this is an opportunity to
learn an important new skill. It will look great on his résumé and score him some bonus points with the
boss. This is an example of which step for maintaining a positive attitude:
A. Surround yourself with positive people
C. Look good
B. Have a sense of humor
D. Think positively

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

4

29. Which of the following statements is true of diversity:
A. Valuing diversity means ignoring or minimizing differences.
B. Diversity applies only to minorities.
C. In group settings, diversity increases creativity and innovation.
D. Diversity in the workplace is decreasing.
30. Rob has a job interview this afternoon. In the morning, he goes over his other job offers to figure out
which job he will accept (and what the salary and benefits are) if this employer doesn't offer him a
position. Rob is developing his
A. BATNA.
C. walk-away point.
B. role.
D. style.
31. Which of the following is a factor that often leads to workplace stress and burnout:
A. Lack of task variety
C. Sufficient time to meet deadlines
B. Adequate compensation
D. High control of work assignments
32. Hector's team member isn't motivated to work on their project. She says it looks like too much work, and
she doesn't think it's possible to have it all done in their time frame. To motivate her, Hector's first priority
should be to demonstrate the project's
A. importance.
C. feasibility.
B. desirability.
D. reward.
33. Which of the following is an organizational vision:
A. Penelope's department wants to offer the best customer service in the state.
B. Margaret's company wants to be the best sporting goods store in the country.
C. Franco wants to get his project done by the end of the week.
D. Omar's shoe store plans to increase sales by 15% this quarter.
34. Amira is trying to choose a financial institution. She likes to do her banking in person, and she wants to
make sure she selects an institution that's customer friendly. She wants good interest rates and low fees,
and she'd also prefer to invest with a not-for-profit institution. Amira should invest her money in a(n)
A. investment bank.
C. commercial bank.
B. Internet bank.
D. credit union.
35. Claire is the owner of a small consulting firm and has two employees working for her. What type of
insurance can Clair purchase to limit her tort liability?
A. Professional
C. Workers' compensation
B. Property
D. Economic protection
36. Liana, an accountant, is auditing a business. Would it be ethical for her to buy stock in that business?
A. No, this is considered embezzlement.
B. No, because it's a conflict of interest.
C. Yes, as long as she tells the company about it.
D. Yes, as long as she is careful not to let it affect her accounting decisions.
37. Claudia is creating a balance sheet for her business. She lists the full value of all of her assets, even
some office equipment she hasn't completely paid for. However, to find the true net worth of her
business, Claudia must subtract the money she owes on the equipment, since the debt is considered
a(n)
A. liability.
C. accounts receivable.
B. liquid asset.
D. dividend.
38. Aisha wants to buy new ovens for her bakery. They'll be expensive, but she has some money saved up
that she can use for the purchase. Aisha plans to finance her new equipment using
A. dividends.
C. debt.
B. equity.
D. accounts receivable.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

39. Effective budgets should always be
A. evaluated.
B. optimistic.

5

C. inflexible.
D. secretive.

40. Latisha, a human resources manager at a hospital, is writing a list of the skills, knowledge, and
characteristics for a nurse position she hopes to fill. She focuses on what education a nurse in that
position should have, what personal traits s/he should have, and what s/he should be like. Latisha is
working on a(n)
A. onboarding activity.
C. strategic plan.
B. job description.
D. job specification.
41. To implement a successful knowledge-management system in the workplace, it is important to
A. focus more on organizing knowledge than gathering it.
B. gain the cooperation of employees and support from ownership.
C. select three or more employees to serve as knowledge managers.
D. develop an organizational reward structure that focuses on financial gains.
42. Which of the following is a reason that organizations undertake knowledge management:
A. They know that new knowledge is only created outside the organization.
B. They want to ensure that organizational knowledge isn't wasted.
C. They don't value an organizational culture of learning.
D. They must follow the laws and regulations of their industries.
43. Which of the following is an internal factor that influences employees' willingness to share their tacit
knowledge with coworkers and managers:
A. Economic conditions
C. Public agendas
B. Organizational culture
D. Regulatory environment
44. What technological tool can help businesses understand the types of knowledge that employees need to
perform their jobs efficiently?
A. Probability chart
C. Systems register
B. Accountability matrix
D. Navigation log
45. Which of the following are examples of intellectual property that are protected by trade-secret legislation:
A. Research techniques and artistic works
B. Chemical compounds and manufacturing processes
C. Novels and customer lists
D. Inventions and trade characters
46. Mara recently accepted a job with the Sweet Treat Cookie Company. Her new employer required her to
sign a document stating that she will not reveal the ingredients in the company's cookie recipes to
external sources. This is an example of a(n)
A. injunction.
C. noncompete provision.
B. indictment.
D. nondisclosure agreement.
47. Jack is a computer programmer who is struggling to fix a glitch with his company's new computer
network. During a get-together with some friends who also work in technology, Jack brings up his
dilemma. His friend Janelle suggests a process that helped her solve a similar problem that she
experienced a few weeks ago. Two other friends, Tim and Susan, provide some suggestions as well. In
this situation, Jack and his friends are transferring knowledge by
A. applying Groupthink strategies.
C. forming a strategic alliance.
B. participating in a community of practice.
D. conducting a formal interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

6

48. Dahlia just started her own business last month. Eventually she'll be concerned with other company
goals, but right now she just wants to make sure her business gets off the ground. She knows many
businesses fail within the first few years, so for now she needs to focus on
A. building a larger facility.
C. achieving stability.
B. hiring more employees.
D. developing new goods and services.
49. Reese is writing a paper for his business class. He wants to include an idea he found in one of his
sources. He includes just the main points and rewrites the paragraph in his own words, making sure to
attribute his ideas to the original source. Reese is
A. quoting.
C. summarizing.
B. paraphrasing.
D. plagiarizing.
50. What is the primary function of the Random Access Memory (RAM) component of a computer?
A. Serves as a temporary holding area for files and programs
B. Reads the computer code that provide visual effects
C. Stores data and programs permanently
D. Enables the user to apply point and click commands
51. Which of the following is a primary factor that should be considered when choosing project-management
software:
A. Distribution intensity
C. Group consensus
B. Personal goals
D. Project complexity
52. Which of the following is a project-management software application that duplicates the project database
and enables project managers to evaluate potential changes to the project plan and assess “what if”
scenarios:
A. Transaction processing
C. Encryption
B. Test environment
D. Digital scanning
53. What's one way to maintain secure customer records?
A. Avoid collecting any confidential customer information.
B. Make sure the records are easily accessible for all employees.
C. Link customers' names with their personal information.
D. Encrypt the information customers give you online.
54. Samantha works in a shoe store. Her eight most recent customers wore the following shoe sizes: 9, 7.5,
5.5, 6, 8, 10, 9, and 9. What is the mode of this data set?
A. 9
C. 8.5
B. 8
D. 4.5
55. The local government fined Lenny's Grille because there were 75 more patrons in the facility at one time
than legally permitted. In this situation, the business violated a
A. maximum capacity code.
C. traffic ordinance.
B. federal property law
D. construction permit.
56. Ruben works in the kitchen of a restaurant. His coworker cut herself on a kitchen knife and she's
bleeding profusely. If Ruben wants to help her, what's the most important thing he can do?
A. Clean the wound so it won't get infected
B. Get proper medical training
C. Stay calm and call an emergency number
D. Interview witnesses and fill out an accident report
57. Which of the following is the most important factor to consider when prioritizing work tasks:
A. Employee's aptitude
C. Coworkers' opinions
B. Enjoyment of tasks
D. Due dates of tasks

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

7

58. Sally, Joe, Tim, and Jane are team members who perform different tasks by themselves at the same time
to create a single output. The method of work coordination that the team members are using is the
___________ task interdependence.
A. reversed
C. reciprocal
B. sequential
D. pooled
59. During the execution-and-monitoring stage of project management, the project manager's job is to
A. deliver the project's final product.
B. make sure the project stays on track.
C. secure enough funding to complete the project.
D. assign roles to team members.
60. A project manager has determined that the team completed the software-development phase of the
project four days ahead of schedule. What control activity is the project manager performing?
A. Changing a process
C. Tracking a milestone
B. Evaluating a time constraint
D. Assessing a setback
61. A project's stakeholders asked the project manager to revise three components of a long-term project.
The project manager should share this information with the project's team members because changes
often affect the
A. team members' competence.
C. project's workflow.
B. company's image.
D. team members' performance reviews.
62. Which of the following statements is true of the bidding process:
A. Pre-bid meetings are used to address potential bidder questions.
B. A bid can be signed by any person at the supplier's company.
C. All bids should be shared with each competitor as a bargaining tool.
D. The supplier with a substantially lower bid is usually the best choice.
63. Cookery Manufacturing orders heating elements from the Kenton Company to produce ovens. Recently,
customers complained to Cookery that their ovens were not heating properly. Cookery researched the
issue, and determined that the customers purchased ovens with defective heating elements. Kenton and
Cookery took action by replacing the defective parts for the customers. In this situation, Cookery and
Kenton maintained a positive working relationship by
A. working together to resolve a problem.
B. collecting information about a new product.
C. changing the production process.
D. developing a standards plan.
64. When a handbag company embroiders a customer's name or monogram on a cloth tote bag, it is
processing a(n)
A. open requisition.
C. special order.
B. blanket requisition.
D. reorder.
65. Which of the following is an example of a reorder:
A. The Powell Company did not order enough paper towels for the month, so it ordered an
additional four cases.
B. Sims Steakhouse received six out of eight cases of glassware on Monday because the vendor
ran out of stock.
C. Mr. and Mrs. Travis ordered a dining-room set in a wood finish that the furniture store doesn't
normally carry.
D. Henry's Hardware Store ordered 35 model-N1 hammers and 2 cases of ¼” stainless steel bolts
from Franklin Tool Manufacturers.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

8

66. Which of the following is an example of a business obtaining raw-materials inventory:
A. An accounting firm orders pencils, copy paper, and post-it notes for its staff.
B. A department-store chain orders shirts, ties, and socks from different vendors for resale.
C. A petroleum processing plant orders a replacement part for a large piece of equipment.
D. A snack-food manufacturer orders potatoes, oil, and salt to make its potato chips.
67. “We can accept the volume pricing that you are offering, but we would like the merchandise to leave your
facility within 24 hours rather than 48 hours, after the order is placed.” In this situation, the negotiator
wants to obtain
A. additional discounts.
C. better lead time.
B. more technical support.
D. an extended warranty.
68. Which of the following is a non-price issue that a business might negotiate with a vendor when
purchasing expensive, complex equipment:
A. Post-sale service
C. Volume reductions
B. Payment terms
D. Compensation
69. Which of the following statements is true of quality control:
A. It consists mostly of common sense procedures.
B. It's necessary only for large businesses.
C. It must be measured in some way to be effective.
D. It doesn't require much planning to implement.
70. What's the most effective way to save money on business and equipment maintenance?
A. Create a maintenance schedule, and stick to it.
B. Only allow outside technicians to maintain equipment.
C. Use the least expensive supplies you can find.
D. Invest in cleaning equipment only when absolutely necessary.
71. Wellston Industries wants to compare a current business situation with a target situation. Which of the
following tools will help Wellston obtain the information that it wants:
A. Decision tree
C. Gap analysis
B. Mind map
D. Critical path study
72. Christine is buying a new computer. If she's making her decision logically, which of the following is true:
A. Her decision-making process is highly subjective.
B. She's listening to her friends' opinions.
C. She's looking at her alternatives from a neutral point of view.
D. Her decision is influenced by how the computers are presented.
73. Perry is thinking about being a project manager, but he's not sure. His guidance counselor suggests he
have a discussion with someone who is currently employed as a project manager. What benefit will Perry
get from an informational interview like this one?
A. The project manager will help him with his college application.
B. The project manager will probably give him a job.
C. The project manager can tell Perry whether or not project management is the right career for
him.
D. The project manager can tell him what a real day on the job is like.
74. Javier had an interview with a potential employer, Dan Martinez. The interview was pretty casual and
informal. How should Javier begin his thank you note?
A. Hi Dan
B. Dear Dan
C. Dear Mr. Martinez
D. He doesn't need to send a thank you note for a casual interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

9

75. Marjane's been at her job for a few years, and she always shows up on time and works hard. However,
she keeps being passed over for a promotion. When she talks to her boss about it, her boss says that
while Marjane's a good employee, she'll need to work on her soft skills if she wants to be promoted to a
managerial position. What should Marjane do?
A. Take a course in teamwork and communication
B. Go to graduate school and get an advanced degree
C. Become proficient in a new computer program
D. Get another year of work experience and then ask for a promotion again
76. Which of the following provides a business's employees with a foundation for acceptable behavior in the
workplace:
A. Articles of incorporation
C. Grievance procedures
B. Organizational chart
D. Rules of conduct
77. The production manager of a company that produces wrenches, hammers, and electric drills would most
likely report to the
A. operations assistant.
C. director of purchasing.
B. quality control line supervisor.
D. vice president of manufacturing.
78. Which of the following is a tool that businesses should use to set their overall organizational goals:
A. Mission statement
C. Marketing plan
B. Financial budget
D. Productivity benchmarks
79. A boutique owner set a goal to open two additional stores in the next three years. What type of
organizational goal has the boutique owner set?
A. Control
C. Profit
B. Growth
D. Market share
80. Employees are more likely to be successful in helping a company achieve its organizational goals when
they
A. are promoted to management.
C. work independently.
B. have appropriate training.
D. socialize with their coworkers.
81. In which of the following documents does the project manager clearly define the project's terms and
conditions for stakeholders:
A. Statement of work
C. The project audit
B. Team agenda
D. Project schedule
82. Many experts believe that providing too much detail in the work breakdown structure (WBS) work
packages often causes the project manager to
A. micromanage the project.
C. simplify project deliverables.
B. allocate project resources.
D. develop a SWOT analysis.
83. Which of the following is a true statement about the work breakdown structure (WBS) in project
management:
A. The project scope remains the same after making changes to the WBS.
B. Each work package should take between eight and 80 hours to complete.
C. The project manager should require team members to approve the WBS.
D. Team members develop the WBS dictionary after they carry out their work tasks.
84. The team's project manager said, “Leah, your efficiency rate increased by 10 percent this week, which is
far above average. You have made great progress in a short time!” In this situation, the project manager
is
A. providing evaluative information.
C. requesting a project update.
B. making a suggestion for improvement.
D. supporting a team member's decision.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

10

85. After providing the stakeholders with the project deliverables, Lisa analyzed and documented the
project's actual results with the initial project goals. What did Lisa do?
A. Conduct a post-implementation review
C. Develop a project-issues log
B. Prepare a lessons-learned report
D. Compose final delivery instructions
86. The focus of quality management should be on
A. satisfying customers.
B. beating the competition.

C. staying within the bounds of the law.
D. encouraging employees.

87. Francine likes the auto shop where she takes her car for an oil change because it has a comfortable
waiting room with good magazines. This illustrates which important characteristic of quality service
providers?
A. Assurance
C. Responsiveness
B. Reliability
D. Tangibles
88. The focus of the Six Sigma framework involves maximizing overall quality and
A. expanding product lines.
C. preventing problems.
B. hiring qualified employees.
D. emphasizing innovation.
89. The Hastings Company implemented a series of gradual changes throughout the company over time that
resulted in more durable products and greater employee efficiency. What type of continuous
improvement does this situation exemplify?
A. Accelerated
C. Recovery
B. Breakthrough
D. Incremental
90. Jack asked a customer to provide some information about his company's competitors. In return, Jack told
the customer that he would give him/her the lowest possible price for the company's new line of products.
The customer was not comfortable with Jack's behavior and ended the 15-year partnership with the
company. This is an example of how unethical business behavior can negatively affect
A. prospecting practices.
C. buyer/seller relationships.
B. product pricing and quality.
D. management style.
91. What technology can businesses use to reduce the risk of network security breaches?
A. Concurrency control applications
C. Intrusion detection systems
B. Teleprompter devices
D. Pirated software programs
92. Companies use risk-matrix software applications to
A. determine the amount of their insurance premiums.
B. prevent identity-theft activities and eliminate external risks.
C. organize their financial data in secure locations.
D. identify and prioritize their primary business risks.
93. To lower risks associated with noncompliance, a company should
A. monitor changes in laws affecting its business activities.
B. hire an environmental attorney to oversee all business functions.
C. limit the potential of personal injury by purchasing property insurance.
D. encourage all employees to understand the advanced principles of contract law.
94. The core activity of managerial planning involves
A. modifying behavior.
B. determining objectives.

C. implementing procedures.
D. identifying gains.

95. What type of plan do businesses often implement when an original plan fails to produce the desired
results?
A. Production
C. Contingency
B. Communications
D. Strategic

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

11

96. An important activity associated with the organizing function of management is
A. developing a blueprint.
C. evaluating performance.
B. defining employees' roles.
D. creating tangible outputs.
97. Coordinating business activities is an important aspect of the organizing function of management
because it
A. defines the company's mission statement.
B. enables the business to prepare precise forecasts.
C. establishes clear relationships among the company's resources.
D. ensures that the employees understand all the business's activities.
98. Which of the following has a negative effect on an understaffed business:
A. Fewer premiums
C. Increased errors
B. Decreased turnover
D. Higher property taxes
99. Kate says, “I am very pleased with your progress on the project, Devon. Take the rest of the day off, and
we'll talk about the next phase of the project tomorrow.” What directing activity is Kate performing?
A. Delegating responsibility
C. Motivating an employee
B. Establishing a schedule
D. Training a worker
100. Effective managerial control often involves
A. providing incentives.
B. setting long-term goals.

C. taking corrective action.
D. assigning tasks.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

12

1. C
Defamation. A tort action occurs when one party (in this case, Frieda) brings a personal suit against
another party to gain money or other relief in exchange for any harm. In Frieda's case, her business
suffered after Shamir's untrue accusations were printed in the newspaper. Making false statements with
the intent of harming someone else (or their business) is known as defamation. Appropriation is the use
of another person's likeness or any other identifying characteristic without their permission. If Shamir had
used Frieda's name or picture in his advertising materials without getting her permission, that would be
considered appropriation. Negligence is an unintentional tort that occurs when a party doesn't live up to
duties and causes unplanned harm to another party. Shamir intended to cause damage to Frieda's
business, so this wasn't a tort of negligence. Wrongful interference occurs when a third party interferes in
a contractual (or business) relationship between two other parties.
</h5></div><h5 id='q13'>13. Nadia's assistant, Roger, rarely does what he's supposed to do. He routinely forgets to schedule her
appointments, orders the wrong supplies for her office, and misses work at least a few times a month. An
employee like Roger is an example of a(n) __________ risk.</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. financial</option><option value="B">B. hazard</option><option value="C">C. strategic</option><option value="D">D. operational</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: operational</h5><h5>Operational risks are the possible events and situations that can result from employee
actions, core processes, and daily business activities. Unfortunately, people and processes aren't perfect
—as long as a business deals with people, it will always have some degree of operational risk. Take
Nadia's employee Roger, for example, whose human errors are considered operational risks. Hazard
risks are potential events or situations that can cause injury or harm to people, property, or the
environment. Most hazard risks can only cause business losses, not gains. Strategic risks are broad risks
that often concern the overall business environment. Financial risks are possible events or situations that
directly influence a company's cash flow.
</h5></div><h5 id='q14'>14. Vince is very excited to get his first paycheck from his part-time job. He's expecting about $200, but when
he sees his weekly paystub, he's disappointed to find out he's actually getting much less. Which tax did
Vince forget to take into account:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Excise tax</option><option value="B">B. Property tax</option><option value="C">C. Sales tax</option><option value="D">D. Income tax</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: Income tax</h5><h5>Income tax is based on the amount of money you earn. Because of income tax, part of each
of Vince's paychecks is given to the government. Income tax is the biggest source of federal tax revenue.
Property tax is a tax on real estate and personal possessions. Sales tax is a tax on the sale/exchange of
goods. Sales taxes are placed on most retail transactions. An excise tax is a type of sales tax that's
placed on something specific, such as alcohol or tobacco. Excise taxes are typically either used on goods
that are harmful to consumers or commodities that are in short supply.
</h5></div><h5 id='q15'>15. Randy used to work in a factory. However, after technological advances brought robots that could do the
same job for less money, he was laid off. Randy is looking for a new job in a factory, but everything
requires knowledge of computer programs, which he doesn't have. Randy is facing __________
unemployment.</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. structural</option><option value="B">B. frictional</option><option value="C">C. cyclical</option><option value="D">D. seasonal</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: structural</h5><h5>Structural unemployment occurs when workers' skills don't match up with the jobs available.
This often happens when there are technological advances, like in Randy's situation. Although he is a
skilled worker, the jobs available need a different set of skills. In Randy's case, his best option is to get
more education or training so he will have the necessary skills to become employed again. Frictional
unemployment occurs when the right jobs and workers just haven't been matched up. Unlike with
structural employment, there is a job that utilizes the employee's skills, but s/he just hasn't found it yet.
Cyclical unemployment happens when there's an overall decline in the economy. For example, when a
recession hits, fewer people are able to find employment. This is not the case for Randy, as there are
plenty of jobs. He just doesn't have the skills necessary for any of them. Seasonal unemployment is
predictable and expected in many industries. For example, teachers aren't usually employed in the
summer.
</h5></div><h5 id='q16'>16. Which of the following is an advantage of a weak dollar:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. It creates more consumer spending.</option><option value="B">B. It encourages exports.</option><option value="C">C. Employee wages go up.</option><option value="D">D. More jobs are created.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: It encourages exports.</h5><h5>A weak dollar is a dollar that's worth less than another (foreign) currency. A weak
dollar creates many disadvantages for the economy, but one advantage is that it encourages exports. A
weak dollar means that foreign currency is able to buy more goods. A weak dollar actually creates less
consumer spending because imported products become more expensive, meaning that consumers can't
afford to buy as much. Employee wages typically go down, since employers have to pay more for their
supplies. In addition, employers usually can't afford to hire new employees. In fact, they often have to lay
off workers.
</h5></div><h5 id='q17'>17. American businesspeople believe that maintaining direct eye contact during conversation indicates an
individual's sincerity, interest, and confidence level, while some cultures believe that ongoing direct eye
contact is rude. This is an example of how __________ differs among cultures.</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. social status</option><option value="B">B. nonverbal communication</option><option value="C">C. personal appearance</option><option value="D">D. gender perception</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: nonverbal communication</h5><h5>Nonverbal communication involves the use of gestures or facial expressions
rather than the use of words. The meaning of gestures and facial expressions vary by culture. As
described in the example, maintaining eye contact indicates interest in the American culture; however,
some cultures rarely maintain eye contact because they consider it a rude gesture. Social status refers to
a person's social class, which may be influenced by education, money, surname, title, occupation, and
geographic location. Clothing, makeup, and hygiene are issues that relate to appearance. Gender refers
to an individual's sex—male or female.
</h5></div><h5 id='q18'>18. In some cultures, it is common for businesspeople to discuss business matters during meals, but
Canadians typically do not. This is a cultural issue related to</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. dining etiquette.</option><option value="B">B. negotiating style.</option><option value="C">C. language barriers.</option><option value="D">D. cognitive intelligence.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: dining etiquette.</h5><h5>Because dining customs and traditions vary, foreign businesspeople should learn about
the proper dining etiquette before visiting another country. Researching a country's dining etiquette can
prevent embarrassing situations such as talking about business matters at an inappropriate time (e.g.,
dinner). Negotiating style is the manner in which a person behaves during the negotiation process.
Language barriers are obstacles that hinder the understanding of messages among cultures that speak
different languages. Cognitive intelligence is a person's capacity to learn and understand.
</h5></div><h5 id='q19'>19. During a meeting with German businesspeople, an American businessperson introduced a change to the
agenda. Because the German businesspeople were caught off guard by this change, they became upset,
which indicates that German culture tends to</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. prefers a less-structured environment.</option><option value="B">B. be highly ethnocentric.</option><option value="C">C. take greater risks than other cultures.</option><option value="D">D. have a low tolerance for uncertainty.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3
</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: have a low tolerance for uncertainty.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3
</h5><h5>Explanation not available</h5></div><h5 id='q20'>20. Latin-American businesspeople often hold several meetings to build trust and get to know their business
partners. Businesspeople from other cultures often find this practice frustrating because they want to get
down to business. This example illustrates how __________ differs among cultures.</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. regulation</option><option value="B">B. language</option><option value="C">C. ethical behavior</option><option value="D">D. communication style</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: communication style</h5><h5>Communication style is the way in which people interact and exchange
information. Cultures vary in the way they communicate. Some cultures are direct and prefer to get down
to business. Others, such as the Latin-American culture, prefer to take time to get to know their business
partners. The example does not illustrate language, ethical, or regulatory differences.
</h5></div><h5 id='q21'>21. Japanese businesspeople believe that arriving late at an appointment is extremely disrespectful. This
illustrates the importance of understanding cultural issues that relate to</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. decision making.</option><option value="B">B. assertiveness.</option><option value="C">C. time.</option><option value="D">D. location.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: time.</h5><h5>The concept of punctuality differs among cultures. In Japan, arriving late to an appointment
indicates a lack of consideration or importance to the other party. In business situations, a late arrival
may affect the ability to reach a business agreement. On the other hand, some cultures view the concept
of time differently. A businessperson might keep a client waiting because s/he wants to finish a task so
that the client has his/her undivided attention. Assertiveness is a communication factor. Decision making
is the process of choosing among alternatives. Location is a space or geographic consideration.
</h5></div><h5 id='q22'>22. An individual's status and title are very important in all aspects of Japanese culture, including business
situations. For example, the Japanese businessperson with the most authority sits in the chair furthest
from the door, and the remaining employees sit in descending rank around the table, so the lowest
ranking employee sits nearest to the door. This situation indicates that Japan</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. is a hierarchical society.</option><option value="B">B. has liberal social standards.</option><option value="C">C. is an individualist culture.</option><option value="D">D. has a traditional economic system.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: is a hierarchical society.</h5><h5>A hierarchy is a system in which people or groups have roles in society based
on authority, rank, or status. In the situation presented, each Japanese employee sits according to the
rank or position that s/he holds in the company, which is a characteristic of a hierarchical organization.
Because the Japanese culture embraces this attitude in other aspects of day-to-day life, such as family
and social settings, Japan is a hierarchical society. Hierarchical societies tend to have strict social
standards. A collectivist culture is a society that values a strong and loyal group orientation. Japan is a
collectivist culture that has a capitalist economic system.
</h5></div><h5 id='q23'>23. Jim Martin is a Canadian businessperson who is traveling to Saudi Arabia to close a business deal. Jim
should dress conservatively by wearing a</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. vest, corduroy pants, and long-sleeve T-shirt.</option><option value="B">B. suit, long-sleeve dress shirt, and tie.</option><option value="C">C. short-sleeve golf shirt, wristwatch, and casual pants.</option><option value="D">D. suit, short-sleeve T-shirt, and a vest.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: suit, long-sleeve dress shirt, and tie.</h5><h5>In Saudi Arabia, it is inappropriate to display bare shoulders, legs,
and arms. To project the proper image and not offend Saudi Arabians, foreign businesspeople should
wear conservative clothing that covers most of the body. Men should wear dark suits (jacket and slacks),
a long-sleeve dress shirt, and a tie. Vests may be worn under suit jackets. Corduroy or casual pants,
long-sleeve T-shirts, and short- sleeve golf shirts are casual attire. A wristwatch is an accessory.
</h5></div><h5 id='q24'>24. Because Indian businesspeople value their personal space, foreigners should</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. maintain physical distance during conversation.</option><option value="B">B. shake hands as a gesture of goodwill.</option><option value="C">C. speak loudly and clearly to be heard and understood.</option><option value="D">D. begin with social talk before launching into business discussions.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: maintain physical distance during conversation.</h5><h5>Personal space is the physical distance between two or
more individuals. Culture influences the amount of personal space that a person is comfortable with.
Indians tend to prefer a lot of personal space, so foreigners should maintain some physical distance from
their Indian business partners during face-to-face interactions. Shaking hands is a greeting. Vocal volume
and clarity are verbal communication considerations. The importance of social talk is a factor that relates
to the culture's communication style.
</h5></div><h5 id='q25'>25. Taking responsibility for your actions involves</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. responding to criticism in a defensive manner.</option><option value="B">B. letting others accept the blame for your mistakes.</option><option value="C">C. justifying your errors.</option><option value="D">D. admitting your mistakes.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: admitting your mistakes.</h5><h5>Taking responsibility for your actions often involves admitting that you made a
mistake and that you are willing to accept the consequences of your actions. Although it is difficult to
admit your mistakes, taking responsibility for them indicates that you are an honest person, which is a
trait that employers value. Letting others accept blame for your mistakes, justifying your errors, and
responding to criticism in a defensive manner are not ways in which you take responsibility for your
actions.
</h5></div><h5 id='q26'>26. To manage their work commitments in a timely manner, businesspeople should</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. work on enjoyable tasks before tackling the unpleasant tasks.</option><option value="B">B. ask their coworkers to help them with routine activities.</option><option value="C">C. estimate the time that it takes them to perform their tasks.</option><option value="D">D. identify shortcuts that they can take get their work done quickly.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: estimate the time that it takes them to perform their tasks.</h5><h5>When businesspeople estimate the time that it
takes to perform their tasks, it helps them to plan, prioritize, and manage their workloads effectively.
Planning their work helps businesspeople avoid scheduling activities too close together, which can affect
the quality of their work. For example, if it takes a businessperson one hour to prepare a status report
that is due at 4:00 p.m., s/he should not start the report at 3:30 p.m. Because coworkers have their own
work commitments, they only should help in emergencies with management's approval. Pleasant tasks
are not always priorities for businesspeople. Taking shortcuts and performing work too quickly often
results in errors and low-quality work.
</h5></div><h5 id='q27'>27. Because Tim is not a “morning person,” it takes a little while for him to feel alert and focused. Which of
the following tasks is best for Tim to work on when he first arrives at the office:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Prepare a presentation</option><option value="B">B. Update the departmental budget</option><option value="C">C. Write a research report</option><option value="D">D. Read e-mail</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: Read e-mail</h5><h5>Most people have times of the day when they feel more energetic and focused. Some
people, like Tim, need a few minutes to get going in the morning. If possible, it is best for these
individuals to first work on simple or routine tasks, such as reading e-mail or listening to voicemail
messages. When Tim feels more alert and focused, he is better prepared to work on more cognitivebased or complex tasks, such as updating the departmental budget, writing a research report, or
preparing a presentation.
</h5></div><h5 id='q28'>28. Gabriel's boss just assigned him a new project. He needs to create a video presentation, which he has
no idea how to do. He starts to get discouraged, but then he reminds himself that this is an opportunity to
learn an important new skill. It will look great on his résumé and score him some bonus points with the
boss. This is an example of which step for maintaining a positive attitude:</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Surround yourself with positive people</option><option value="B">B. Have a sense of humor</option><option value="C">C. Look good</option><option value="D">D. Think positively

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

4
</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: Think positively

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

4
</h5><h5>Explanation not available</h5></div><h5 id='q29'>29. Which of the following statements is true of diversity:</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Valuing diversity means ignoring or minimizing differences.</option><option value="B">B. Diversity applies only to minorities.</option><option value="C">C. In group settings, diversity increases creativity and innovation.</option><option value="D">D. Diversity in the workplace is decreasing.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: In group settings, diversity increases creativity and innovation.</h5><h5>Diversity brings different views,
experiences, and strengths to the table. This is invaluable in a group setting. Think of it this way: If you fill
a brainstorming session with people who are exactly like you, you won't get any new ideas. However, if
you find people who have different backgrounds and experiences, they will likely have solutions you
might not have thought of. Diversity doesn't just apply to minorities, and it doesn't refer only to race or
ethnicity. Diversity includes everyone, which is why it's so important to learn to value diversity. Although
some people think that valuing diversity means ignoring or minimizing differences, that's not the case.
Instead, we should openly acknowledge differences and see them as assets, not problems. Diversity in
the workplace is actually greatly increasing. A few decades ago, the workforce consisted predominantly
of white males. Today, white males make up less than half the workforce in the United States. That's why
employees who value diversity are in high demand, and companies without them will find it difficult to
succeed.
</h5></div><h5 id='q30'>30. Rob has a job interview this afternoon. In the morning, he goes over his other job offers to figure out
which job he will accept (and what the salary and benefits are) if this employer doesn't offer him a
position. Rob is developing his</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. BATNA.</option><option value="B">B. role.</option><option value="C">C. walk-away point.</option><option value="D">D. style.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: BATNA.</h5><h5>Rob is developing his Best Alternative to a Negotiated Agreement, also known as his BATNA. If
this job interview doesn't result in an offer, Rob is prepared with another option. Rob's BATNA also gives
him leverage if he needs to negotiate salary or benefits. He won't feel pressured to take whatever the
employer offers him because he knows he has another alternative. Rob is not developing his role—
knowing your role is primarily useful in group negotiations, where different group members may take on
different roles (such as "good cop" or "bad cop"). The walk-away point is the point at which it is no longer
feasible or profitable to do business with the other party. This is also useful for Rob to determine before
his interview, but it's not what he's doing in this example. Style refers to the way a person negotiates.
Although everyone has a negotiating style, this is not what Rob is determining.
</h5></div><h5 id='q31'>31. Which of the following is a factor that often leads to workplace stress and burnout:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Lack of task variety</option><option value="B">B. Adequate compensation</option><option value="C">C. Sufficient time to meet deadlines</option><option value="D">D. High control of work assignments</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is A: Lack of task variety</h5><h5>Stress is a mental, physical, or emotional feeling of pressure or tension. Burnout is a
type of exhaustion that results from too much stress, which is a mental, physical, or emotional feeling of
pressure or tension. Many things can cause stress and burnout in the workplace including inadequate
compensation (pay), unrealistic deadlines, little control over work assignments, and monotony. Monotony
involves performing the same task repeatedly, which often leads to boredom, indifference, and a lack of
motivation. When workers lack a variety of challenging tasks or assignments, they are more likely to
suffer from stress and job burnout.
</h5></div><h5 id='q32'>32. Hector's team member isn't motivated to work on their project. She says it looks like too much work, and
she doesn't think it's possible to have it all done in their time frame. To motivate her, Hector's first priority
should be to demonstrate the project's</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. importance.</option><option value="B">B. desirability.</option><option value="C">C. feasibility.</option><option value="D">D. reward.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: feasibility.</h5><h5>Feasibility is the achievability of a goal. If Hector can demonstrate to his team member that
the project truly can be done within their time frame, she'll feel much more motivated. Desirability is also
an important factor in increasing motivation, but even if a project seems valuable, employees won't be
that motivated if they think it's impossible. They may give up easily if they see the project as a losing
battle. Although it's wise to let employees know why a project is important, it's more important to first
make sure they know that it can be done. Rewards are also important, since they let employees know
that their work is recognized and appreciated. This often makes employees look forward to working on
future projects, but in the case of this project, the first priority is making sure team members see the
feasibility.
</h5></div><h5 id='q33'>33. Which of the following is an organizational vision:</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Penelope's department wants to offer the best customer service in the state.</option><option value="B">B. Margaret's company wants to be the best sporting goods store in the country.</option><option value="C">C. Franco wants to get his project done by the end of the week.</option><option value="D">D. Omar's shoe store plans to increase sales by 15% this quarter.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: Margaret's company wants to be the best sporting goods store in the country.</h5><h5>Organizational vision refers
to the future a company's leaders desire to create. Margaret's plan for her company's future is considered
an organizational vision. A team vision complements an organizational vision, but it's more tailored to
specific work tasks. Penelope's departmental plan, for instance, is considered a team vision. Franco's
desire to get his project done by the end of the week is considered a goal, not a vision. His goal is likely
part of a larger team or organizational vision. Omar's plan to increase his shoe store's sales is also
considered a goal. Goals are typically short-term, while visions are long-term.
</h5></div><h5 id='q34'>34. Amira is trying to choose a financial institution. She likes to do her banking in person, and she wants to
make sure she selects an institution that's customer friendly. She wants good interest rates and low fees,
and she'd also prefer to invest with a not-for-profit institution. Amira should invest her money in a(n)</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. investment bank.</option><option value="B">B. Internet bank.</option><option value="C">C. commercial bank.</option><option value="D">D. credit union.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: credit union.</h5><h5>Amira would likely be happy banking with a credit union. Credit unions are not-for-profit
financial institutions that are owned by their members. Because of this, they have the customers' best
interests at heart. They also usually have better interest rates and lower fees than some other types of
financial institutions. If Amira enjoys doing her banking in person, an Internet bank would likely be a bad
choice for her. Internet banks do all of their transactions online. Amira also wouldn't be happy with a
commercial bank. Although commercial banks offer a wide array of services, they do not always offer
good interest rates. Investment banks don't accept deposits, so they wouldn't be a good choice for Amira.
Instead of dealing with the general public, investment banks typically work with businesses.
</h5></div><h5 id='q35'>35. Claire is the owner of a small consulting firm and has two employees working for her. What type of
insurance can Clair purchase to limit her tort liability?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Professional</option><option value="B">B. Property</option><option value="C">C. Workers' compensation</option><option value="D">D. Economic protection</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: Professional</h5><h5>A tort is a private wrongdoing against a person or business. Professional liability insurance
limits financial losses that occur if a client files a lawsuit against a business professional (e.g.,
accountant, attorney, and architect). Property insurance covers losses associated with theft, fire, flood,
etc. Businesses purchase workers' compensation insurance to provide benefits to employees who are
injured on the job. Economic protection insurance is a fictitious term.
</h5></div><h5 id='q36'>36. Liana, an accountant, is auditing a business. Would it be ethical for her to buy stock in that business?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. No, this is considered embezzlement.</option><option value="B">B. No, because it's a conflict of interest.</option><option value="C">C. Yes, as long as she tells the company about it.</option><option value="D">D. Yes, as long as she is careful not to let it affect her accounting decisions.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: No, because it's a conflict of interest.</h5><h5>Since Liana knows everything about the business's financial
information, it's unethical for her to buy stock in the company. It's considered a conflict of interest for her
to own stock in the company she's auditing, as this affects her objectivity and independence. She has a
vested interest in making sure that the company's financial records are good, since she stands to profit.
Embezzlement is when someone steals something that's been placed in his or her care. Although owning
stock in the company she's auditing would be unethical, Liana wouldn't actually be stealing anything. Just
because Liana tells the company about her stock doesn't make it ethical. She may think that she will be
able to keep her personal investing and her work life separate, but it's still a conflict of interest that she
should be careful to avoid.
</h5></div><h5 id='q37'>37. Claudia is creating a balance sheet for her business. She lists the full value of all of her assets, even
some office equipment she hasn't completely paid for. However, to find the true net worth of her
business, Claudia must subtract the money she owes on the equipment, since the debt is considered
a(n)</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. liability.</option><option value="B">B. liquid asset.</option><option value="C">C. accounts receivable.</option><option value="D">D. dividend.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: liability.</h5><h5>Liabilities are the financial obligations a business has. In Claudia's case, the money she still
owes on her office equipment is considered a liability. To find the net worth of her business, she must
subtract her total liabilities from her total assets. This gives her an accurate picture of her business's
health. A liquid asset is cash or any asset that can be quickly converted into cash. Accounts receivable
are money owed to the business for purchases made by customers. Dividends are sums of money paid
to investors or stockholders as earnings on investments.
</h5></div><h5 id='q38'>38. Aisha wants to buy new ovens for her bakery. They'll be expensive, but she has some money saved up
that she can use for the purchase. Aisha plans to finance her new equipment using</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. dividends.</option><option value="B">B. equity.</option><option value="C">C. debt.</option><option value="D">D. accounts receivable.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM
</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: equity.</h5><h5>Assets a company already owns and can use to finance a new venture are known as equity.
Aisha's using equity when she purchases new ovens with money she already has saved up. Dividends
are sums of money paid to investors or stockholders as earnings on investments. Debt refers to taking
out a loan from a bank or other lending institution. Since Aisha already has her money, she doesn't have
to go into debt to buy the new ovens. Accounts receivable refers to all the money owed to the business
by others.
</h5></div><h5 id='q39'>39. Effective budgets should always be</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. evaluated.</option><option value="B">B. optimistic.

5
</option><option value="C">C. inflexible.</option><option value="D">D. secretive.
</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: evaluated.</h5><h5>An effective budget is one that is evaluated regularly. The real value of a budget comes in
using it to assess the company's progress in achieving its goals. A budget must be evaluated from time
to time to move the business forward. Budgets should not be optimistic; rather, they should be realistic.
It's important to base budgets on realistic estimates. If a business isn't honest with its budget, the budget
won't be very helpful. Because budgets are estimates, it's crucial that they remain flexible. There will
always be factors outside a business's control that may require a change in the budget. Budgets
shouldn't be secretive; instead, they should be clearly communicated with all employees. When each
person in the company is aware of his/her effect on the company's profits, s/he will be more motivated to
be cost-conscious.
</h5></div><h5 id='q40'>40. Latisha, a human resources manager at a hospital, is writing a list of the skills, knowledge, and
characteristics for a nurse position she hopes to fill. She focuses on what education a nurse in that
position should have, what personal traits s/he should have, and what s/he should be like. Latisha is
working on a(n)</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. onboarding activity.</option><option value="B">B. job description.</option><option value="C">C. strategic plan.</option><option value="D">D. job specification.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is D: job specification.</h5><h5>A job specification is an explanation of the skills, knowledge, and characteristics
required for a job. It describes what a person in that position should be. When Latisha lists the education
and personal traits she wants a nurse to have, she's creating a job specification. A job description is an
explanation of the responsibilities and tasks associated with a specific job. It describes what an employee
in the position does. If Latisha wrote a job description for the nurse position, she would explain the actual
duties of the job. Strategic planning is long-range planning (about three to five years) for the company as
a whole. Onboarding activities are part of the staffing process and include employee orientation and
various types of paperwork, like insurance, tax-withholding, direct deposit, and citizenship information.
</h5></div><h5 id='q41'>41. To implement a successful knowledge-management system in the workplace, it is important to</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. focus more on organizing knowledge than gathering it.</option><option value="B">B. gain the cooperation of employees and support from ownership.</option><option value="C">C. select three or more employees to serve as knowledge managers.</option><option value="D">D. develop an organizational reward structure that focuses on financial gains.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: gain the cooperation of employees and support from ownership.</h5><h5>To collect, maintain, and use knowledge
effectively, business owners need to encourage and support knowledge-management initiatives, and
employees must be willing to share their knowledge. Challenges to an effective knowledge management
system include focusing more on organizing the knowledge than gathering it and developing an
organizational reward structure that focuses on financial gains. Businesses that implement a successful
knowledge-management system typically have a knowledge leader or manager and a knowledge team
that consists of employees from different departments.
</h5></div><h5 id='q42'>42. Which of the following is a reason that organizations undertake knowledge management:</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. They know that new knowledge is only created outside the organization.</option><option value="B">B. They want to ensure that organizational knowledge isn't wasted.</option><option value="C">C. They don't value an organizational culture of learning.</option><option value="D">D. They must follow the laws and regulations of their industries.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: They want to ensure that organizational knowledge isn't wasted.</h5><h5>Organizations undertake knowledge
management because they want to make sure that organizational knowledge is available for use, not
wasted. New knowledge comes from both within and outside of an organization. Organizations that
undertake knowledge management value an organizational culture of learning. There are no laws or
regulations forcing organizations to manage knowledge.
</h5></div><h5 id='q43'>43. Which of the following is an internal factor that influences employees' willingness to share their tacit
knowledge with coworkers and managers:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Economic conditions</option><option value="B">B. Organizational culture</option><option value="C">C. Public agendas</option><option value="D">D. Regulatory environment</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is B: Organizational culture</h5><h5>As
described in the example, maintaining eye contact indicates interest in the American culture; however,
some cultures rarely maintain eye contact because they consider it a rude gesture. Social status refers to
a person's social class, which may be influenced by education, money, surname, title, occupation, and
geographic location. Clothing, makeup, and hygiene are issues that relate to appearance. Gender refers
to an individual's sex—male or female.
</h5></div><h5 id='q44'>44. What technological tool can help businesses understand the types of knowledge that employees need to
perform their jobs efficiently?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Probability chart</option><option value="B">B. Accountability matrix</option><option value="C">C. Systems register</option><option value="D">D. Navigation log</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is B: Accountability matrix</h5><h5>An accountability matrix is a table that businesses use to assign tasks to workers
and track their progress in relation to various business or project activities. Because an accountability
matrix shows relationships among resources, businesses can use it to capture organizational knowledge
for future use. Businesses may design their own accountability matrices by using word-processing or
spreadsheet applications or by using project-management software programs. A probability chart is a risk
management tool. A navigation log is a tool that tracks the times and locations of aircraft. Systems
register is a fictitious term.
</h5></div><h5 id='q45'>45. Which of the following are examples of intellectual property that are protected by trade-secret legislation:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Research techniques and artistic works</option><option value="B">B. Chemical compounds and manufacturing processes</option><option value="C">C. Novels and customer lists</option><option value="D">D. Inventions and trade characters</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is B: Chemical compounds and manufacturing processes</h5><h5>A trade secret is information that a business
develops or owns that can be used to obtain a competitive advantage or financial gain. Chemical
compounds, manufacturing processes, and research techniques are examples of trade secrets.
Copyrights legally protect novels and artistic works such as musical compositions and paintings from
unauthorized use by others. Trademarks legally protect trade characters, and patents legally protect
inventions.
</h5></div><h5 id='q46'>46. Mara recently accepted a job with the Sweet Treat Cookie Company. Her new employer required her to
sign a document stating that she will not reveal the ingredients in the company's cookie recipes to
external sources. This is an example of a(n)</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. injunction.</option><option value="B">B. indictment.</option><option value="C">C. noncompete provision.</option><option value="D">D. nondisclosure agreement.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: nondisclosure agreement.</h5><h5>On the other hand, some cultures view the concept
of time differently. A businessperson might keep a client waiting because s/he wants to finish a task so
that the client has his/her undivided attention. Assertiveness is a communication factor. Decision making
is the process of choosing among alternatives. Location is a space or geographic consideration.
</h5></div><h5 id='q47'>47. Jack is a computer programmer who is struggling to fix a glitch with his company's new computer
network. During a get-together with some friends who also work in technology, Jack brings up his
dilemma. His friend Janelle suggests a process that helped her solve a similar problem that she
experienced a few weeks ago. Two other friends, Tim and Susan, provide some suggestions as well. In
this situation, Jack and his friends are transferring knowledge by</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. applying Groupthink strategies.</option><option value="B">B. participating in a community of practice.</option><option value="C">C. forming a strategic alliance.</option><option value="D">D. conducting a formal interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

6
</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: participating in a community of practice.</h5><h5>A community of practice is an informal group that is formed by
people who have common interests. In communities of practice, group members share ideas, discuss
problems, and brainstorm solutions. By doing so, the group members are transferring their knowledge
among themselves. One or all members can capture and record the collected knowledge for future
personal or group use. In the example, Jack and his friends share a common bond because all of them
work in technology. When the group met, Jack's friends offered suggestions for resolving his work
dilemma; therefore, the group is a community of practice. Groupthink is a situation that occurs when
conforming to the group becomes more important than expressing individual judgment and ideas. A
strategic alliance is an arrangement that involves two or more businesses entering into a relationship by
combining complementary resources such as technology, skills, capital, or distribution channels for the
benefit of all parties; the relationship is usually short-term or for a single project/transaction. The situation
is not an example of a formal interview.
</h5></div><h5 id='q48'>48. Dahlia just started her own business last month. Eventually she'll be concerned with other company
goals, but right now she just wants to make sure her business gets off the ground. She knows many
businesses fail within the first few years, so for now she needs to focus on</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. building a larger facility.</option><option value="B">B. hiring more employees.</option><option value="C">C. achieving stability.</option><option value="D">D. developing new goods and services.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: achieving stability.</h5><h5>As Dahlia knows, starting a new business isn't easy. Many businesses fail soon after
opening. So, for many start-up companies, achieving stability is a main goal. Other goals can come later,
after the business has stabilized. Hiring more employees and building a larger facility would be
considered expansion. Dahlia will probably consider expanding in the future, but for now she needs to
focus on achieving stability. The same is true of developing new goods and services—later on, when
Dahlia has developed a strong customer base for the goods and services she already has, she may want
to consider developing new ones.
</h5></div><h5 id='q49'>49. Reese is writing a paper for his business class. He wants to include an idea he found in one of his
sources. He includes just the main points and rewrites the paragraph in his own words, making sure to
attribute his ideas to the original source. Reese is</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. quoting.</option><option value="B">B. paraphrasing.</option><option value="C">C. summarizing.</option><option value="D">D. plagiarizing.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: summarizing.</h5><h5>Quoting, paraphrasing, and summarizing are all ways to incorporate another writer's work
into your own. Although they are similar, there are key differences among them. Quoting occurs when
you use someone else's text word-for-word. Paraphrasing involves using a section of the source material,
but putting it into your own words. What Reese is doing is summarizing—putting the ideas in the source
material into his own words but including only the main points. His summary will be much shorter than the
original text, since he's only including the most important information. Quoting, paraphrasing, and
summarizing are not the same as plagiarizing. Plagiarizing occurs when you use someone else's words
and don't credit him/her. That's not what Reese is doing, since he's being careful to cite the original
source. Avoiding plagiarism is very important, since it's dishonest and it can have negative
consequences at school or work.
</h5></div><h5 id='q50'>50. What is the primary function of the Random Access Memory (RAM) component of a computer?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Serves as a temporary holding area for files and programs</option><option value="B">B. Reads the computer code that provide visual effects</option><option value="C">C. Stores data and programs permanently</option><option value="D">D. Enables the user to apply point and click commands</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: Serves as a temporary holding area for files and programs</h5><h5>Random Access Memory or RAM is a
temporary workspace that stores data and programs that the user is actively using. A computer
containing a lot of RAM enables users to open and work on several files and programs at one time. When
the user has finished working with a file or program, s/he saves or stores the information permanently on
the hard drive. The video card is a component of the system that converts code so the user can view
items on the computer monitor. The computer mouse is a tool that enables computer users to enter
commands.
</h5></div><h5 id='q51'>51. Which of the following is a primary factor that should be considered when choosing project-management
software:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Distribution intensity</option><option value="B">B. Personal goals</option><option value="C">C. Group consensus</option><option value="D">D. Project complexity</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is D: Project complexity</h5><h5>There are many programs available to track and manage projects. The complexity of
the project is a primary factor to consider when choosing project-management software. Businesses that
take on occasional, simple projects might consider using a program with basic applications (e.g.,
spreadsheet). Businesses that have several projects occurring at one time or that have a long-term,
complex project with thousands of tasks to track may consider using software with advanced applications
(e.g., scheduling, resource allocation, and report generators). Personal goals, group consensus, and
distribution intensity are not primary factors to consider when choosing project-management software.
</h5></div><h5 id='q52'>52. Which of the following is a project-management software application that duplicates the project database
and enables project managers to evaluate potential changes to the project plan and assess “what if”
scenarios:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Transaction processing</option><option value="B">B. Test environment</option><option value="C">C. Encryption</option><option value="D">D. Digital scanning</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is B: Test environment</h5><h5>Financial risks are possible events or situations that
directly influence a company's cash flow.
</h5></div><h5 id='q53'>53. What's one way to maintain secure customer records?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Avoid collecting any confidential customer information.</option><option value="B">B. Make sure the records are easily accessible for all employees.</option><option value="C">C. Link customers' names with their personal information.</option><option value="D">D. Encrypt the information customers give you online.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is D: Encrypt the information customers give you online.</h5><h5>It's important to make sure that someone can't easily
intercept the important information your customers give you online. They may be submitting addresses,
credit card numbers, social security numbers, and more. You can install security features that will
transmit information in a scrambled language that's understood by your computer but not hackers.
Although it's a good idea to make sure some records are easily accessible to all employees, customer
records should be off-limits for most people. Keep computers password-protected and file cabinets
locked to ensure that everyone won't have access to your customers' personal information. You
shouldn't identify customers' personal information with their names; instead, create a code to identify
customers. That way, even if a criminal does access the paperwork, s/he will have a harder time
identifying the customer. It's not practical to avoid collecting any confidential customer information. It's
best to focus on keeping that information secure.
</h5></div><h5 id='q54'>54. Samantha works in a shoe store. Her eight most recent customers wore the following shoe sizes: 9, 7.5,
5.5, 6, 8, 10, 9, and 9. What is the mode of this data set?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. 9</option><option value="B">B. 8</option><option value="C">C. 8.5</option><option value="D">D. 4.5</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: 9</h5><h5>The mode is the number that appears most frequently in a data set. In this case, that's 9, since three of
Samantha's customers wear a size 9. 8 is the mean, or average, of the shoe sizes. The mean is
discovered by dividing the sum of all the shoe sizes (64) by the number of shoe sizes (8). 8.5 is the
median, also known as the midpoint of the values when they are arranged from smallest to largest. 4.5 is
the range. The range is the difference between the largest and the smallest number in the data set—in
this case, 10 and 5.5.
</h5></div><h5 id='q55'>55. The local government fined Lenny's Grille because there were 75 more patrons in the facility at one time
than legally permitted. In this situation, the business violated a</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. maximum capacity code.</option><option value="B">B. federal property law</option><option value="C">C. traffic ordinance.</option><option value="D">D. construction permit.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: maximum capacity code.</h5><h5>Maximum capacity codes exist to protect a business's employees and
customers from harm if an emergency (e.g., fire) occurs on the premises. If there are too many people in
a facility that has only two exits, it becomes more difficult to get everyone out of the facility safely in
emergencies. The maximum capacity for a business depends on the physical size and layout of the
building, the number of exits in the building, and the jurisdiction's requirements. The business did not
violate a federal property law, traffic ordinance, or construction permit.
</h5></div><h5 id='q56'>56. Ruben works in the kitchen of a restaurant. His coworker cut herself on a kitchen knife and she's
bleeding profusely. If Ruben wants to help her, what's the most important thing he can do?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Clean the wound so it won't get infected</option><option value="B">B. Get proper medical training</option><option value="C">C. Stay calm and call an emergency number</option><option value="D">D. Interview witnesses and fill out an accident report</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: Stay calm and call an emergency number</h5><h5>When dealing with any type of emergency, it's important to
stay calm. If Ruben panics, it will be hard for him to make good decisions. Remaining calm is also helpful
when Ruben calls an emergency number; if he's panicking, the person on the other end of the line may
not be able to understand him. Although having proper medical training is helpful in a situation like this,
it's too late for Ruben to be trained if his coworker is already injured. That's why calling an emergency
number is so important. Trained medical professionals will be much more helpful than untrained
bystanders. Ruben should avoid cleaning the wound and leave all treatment to the professionals.
Although it may be company policy to interview witnesses and fill out an accident report, that can wait
until after Ruben's coworker has received treatment.
</h5></div><h5 id='q57'>57. Which of the following is the most important factor to consider when prioritizing work tasks:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Employee's aptitude</option><option value="B">B. Enjoyment of tasks</option><option value="C">C. Coworkers' opinions</option><option value="D">D. Due dates of tasks

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

7
</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: Due dates of tasks

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

7
</h5><h5>Explanation not available</h5></div><h5 id='q58'>58. Sally, Joe, Tim, and Jane are team members who perform different tasks by themselves at the same time
to create a single output. The method of work coordination that the team members are using is the
___________ task interdependence.</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. reversed</option><option value="B">B. sequential</option><option value="C">C. reciprocal</option><option value="D">D. pooled</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: pooled</h5><h5>Pooled task interdependence involves several employees working independently on different
tasks at the same time. When the employees finish their tasks, they combine or pool their individual
outputs to create the final output. Sequential task interdependence means that one worker must
complete a task before the next worker can perform his/her task. Reciprocal task interdependence occurs
when one team member's work is dependent on others' work and requires extensive sharing of
information and working together on a regular basis. The example does not illustrate reversed task
interdependence.
</h5></div><h5 id='q59'>59. During the execution-and-monitoring stage of project management, the project manager's job is to</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. deliver the project's final product.</option><option value="B">B. make sure the project stays on track.</option><option value="C">C. secure enough funding to complete the project.</option><option value="D">D. assign roles to team members.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: make sure the project stays on track.</h5><h5>During the execution-and-monitoring stage of project management,
the actual work of the project is performed. The project manager's job at this point is to make sure the
project stays on track and to take corrective measures if it doesn't. Delivering the final product occurs
during the closing stage. Securing funding for the project is often the project champion's task and occurs
before the project is authorized. Assigning roles to team members occurs during the planning-anddevelopment stage.
</h5></div><h5 id='q60'>60. A project manager has determined that the team completed the software-development phase of the
project four days ahead of schedule. What control activity is the project manager performing?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Changing a process</option><option value="B">B. Evaluating a time constraint</option><option value="C">C. Tracking a milestone</option><option value="D">D. Assessing a setback</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is C: Tracking a milestone</h5><h5>Tracking milestones is a control activity that project managers perform. Milestones
are the major points or phases in a project's life cycle that have been reached. In the situation described,
the software-development phase is a milestone because it was completed, which means the project can
proceed to the next stage of the project. Because this phase of the project was running ahead of
schedule, the project manager is not evaluating a time constraint or assessing a setback. There is no
information provided to determine if the project manager has decided to change a process.
</h5></div><h5 id='q61'>61. A project's stakeholders asked the project manager to revise three components of a long-term project.
The project manager should share this information with the project's team members because changes
often affect the</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. team members' competence.</option><option value="B">B. company's image.</option><option value="C">C. project's workflow.</option><option value="D">D. team members' performance reviews.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: project's workflow.</h5><h5>When the scope of the project increases, it usually means that team members will
need to do additional tasks to complete the project. Therefore, it is important for the project manager to
share information about the changes with his/her team members. Changes in the project's scope do not
always affect the company's image, nor do they affect the team members' competence or performance
reviews.
</h5></div><h5 id='q62'>62. Which of the following statements is true of the bidding process:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Pre-bid meetings are used to address potential bidder questions.</option><option value="B">B. A bid can be signed by any person at the supplier's company.</option><option value="C">C. All bids should be shared with each competitor as a bargaining tool.</option><option value="D">D. The supplier with a substantially lower bid is usually the best choice.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: Pre-bid meetings are used to address potential bidder questions.</h5><h5>Sometimes, if there are lots of
questions about a project or if the project is very complicated, a company may decide to hold a pre-bid
meeting. This meeting can clear up confusion and answer questions about the project. Bids shouldn't be
signed by just anyone at a company—it's important that the bid is signed by someone who has the
authority to actually make decisions. It might seem like a good idea to share bids to create competition
among suppliers, but bids should always be kept confidential. Although a low price is hard to resist, it's
best to be careful if one supplier offers a bid that's substantially lower than all the others. They may be
cutting corners on service or quality to get such a low price.
</h5></div><h5 id='q63'>63. Cookery Manufacturing orders heating elements from the Kenton Company to produce ovens. Recently,
customers complained to Cookery that their ovens were not heating properly. Cookery researched the
issue, and determined that the customers purchased ovens with defective heating elements. Kenton and
Cookery took action by replacing the defective parts for the customers. In this situation, Cookery and
Kenton maintained a positive working relationship by</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. working together to resolve a problem.</option><option value="B">B. collecting information about a new product.</option><option value="C">C. changing the production process.</option><option value="D">D. developing a standards plan.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: working together to resolve a problem.</h5><h5>To maintain positive relationships, businesses and their vendors
must work together to resolve problems. In the example, Cookery and Kenton worked together to replace
defective heating elements supplied by Kenton that were used in ovens that Cookery produced and sold.
The situation does not indicate that the two companies were collecting information about a new product,
changing the production process, or developing a standards plan.
</h5></div><h5 id='q64'>64. When a handbag company embroiders a customer's name or monogram on a cloth tote bag, it is
processing a(n)</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. open requisition.</option><option value="B">B. blanket requisition.</option><option value="C">C. special order.</option><option value="D">D. reorder.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: special order.</h5><h5>A special order is a request for a custom product or an item that a vendor does not
normally stock. A blanket order is an order that covers all or part of a business's product requirements for
a certain period of time. An open order is placed with one of several available vendors who can meet the
business's immediate requirements (e.g., time, price, quantity). A reorder is an order for the same goods
previously ordered from the same vendor.
</h5></div><h5 id='q65'>65. Which of the following is an example of a reorder:</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. The Powell Company did not order enough paper towels for the month, so it ordered an
additional four cases.</option><option value="B">B. Sims Steakhouse received six out of eight cases of glassware on Monday because the vendor
ran out of stock.</option><option value="C">C. Mr. and Mrs. Travis ordered a dining-room set in a wood finish that the furniture store doesn't
normally carry.</option><option value="D">D. Henry's Hardware Store ordered 35 model-N1 hammers and 2 cases of ¼” stainless steel bolts
from Franklin Tool Manufacturers.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

8
</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: The Powell Company did not order enough paper towels for the month, so it ordered an
additional four cases.</h5><h5>Explanation not available</h5></div><h5 id='q66'>66. Which of the following is an example of a business obtaining raw-materials inventory:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. An accounting firm orders pencils, copy paper, and post-it notes for its staff.</option><option value="B">B. A department-store chain orders shirts, ties, and socks from different vendors for resale.</option><option value="C">C. A petroleum processing plant orders a replacement part for a large piece of equipment.</option><option value="D">D. A snack-food manufacturer orders potatoes, oil, and salt to make its potato chips.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: A snack-food manufacturer orders potatoes, oil, and salt to make its potato chips.</h5><h5>Raw-materials
inventory are goods (inputs) that a business uses to make a finished good (output). Finished products are
completed goods that are ready to be marketed to consumers. MRO goods are maintenance, repair, and
operating supplies such as office supplies and replacement parts for equipment.
</h5></div><h5 id='q67'>67. “We can accept the volume pricing that you are offering, but we would like the merchandise to leave your
facility within 24 hours rather than 48 hours, after the order is placed.” In this situation, the negotiator
wants to obtain</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. additional discounts.</option><option value="B">B. more technical support.</option><option value="C">C. better lead time.</option><option value="D">D. an extended warranty.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: better lead time.</h5><h5>When negotiating with vendors, businesses consider many issues including payment
terms, shipping terms, discounts, and lead time. Lead time is the amount of time it takes to complete a
process. In the example, the business wants the vendor to process and ship its orders within 24 hours,
rather than 48 hours, which indicates that the business wants better lead time from the vendor. The
negotiator is not asking for more technical support, additional discounts, or an extended warranty.
</h5></div><h5 id='q68'>68. Which of the following is a non-price issue that a business might negotiate with a vendor when
purchasing expensive, complex equipment:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Post-sale service</option><option value="B">B. Payment terms</option><option value="C">C. Volume reductions</option><option value="D">D. Compensation</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is A: Post-sale service</h5><h5>Every customer is greeted by a friendly
employee, and s/he is given snacks and drinks while s/he waits for the repairs to be completed. The
great customer service that people can expect from Patricia's business is considered her
A. brand promise.
C. vision.
B. tagline.
D. mission statement.
11. Simone's business doesn't advertise much. Instead, she relies on happy customers to tell their friends,
family, and coworkers about her company. Simone's business uses __________ to gain customers.
A. advocacy
C. corporate culture
B. relationship buying
D. business process management
12. Bryant Technical College is offering an online degree in landscape design. This product is considered
a(n)
A. virtual service.
C. outsourced service.
B. low-quality product.
D. merger.
13. Nadia's assistant, Roger, rarely does what he's supposed to do. He routinely forgets to schedule her
appointments, orders the wrong supplies for her office, and misses work at least a few times a month. An
employee like Roger is an example of a(n) __________ risk.
A. financial
C. strategic
B. hazard
D. operational
14. Vince is very excited to get his first paycheck from his part-time job. He's expecting about $200, but when
he sees his weekly paystub, he's disappointed to find out he's actually getting much less. Which tax did
Vince forget to take into account:
A. Excise tax
C. Sales tax
B. Property tax
D. Income tax
15. Randy used to work in a factory. However, after technological advances brought robots that could do the
same job for less money, he was laid off. Randy is looking for a new job in a factory, but everything
requires knowledge of computer programs, which he doesn't have. Randy is facing __________
unemployment.
A. structural
C. cyclical
B. frictional
D. seasonal
16. Which of the following is an advantage of a weak dollar:
A. It creates more consumer spending.
C. Employee wages go up.
B. It encourages exports.
D. More jobs are created.
17. American businesspeople believe that maintaining direct eye contact during conversation indicates an
individual's sincerity, interest, and confidence level, while some cultures believe that ongoing direct eye
contact is rude. This is an example of how __________ differs among cultures.
A. social status
C. personal appearance
B. nonverbal communication
D. gender perception
18. In some cultures, it is common for businesspeople to discuss business matters during meals, but
Canadians typically do not. This is a cultural issue related to
A. dining etiquette.
C. language barriers.
B. negotiating style.
D. cognitive intelligence.
19. During a meeting with German businesspeople, an American businessperson introduced a change to the
agenda. Because the German businesspeople were caught off guard by this change, they became upset,
which indicates that German culture tends to
A. prefers a less-structured environment.
C. take greater risks than other cultures.
B. be highly ethnocentric.
D. have a low tolerance for uncertainty.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3

20. Latin-American businesspeople often hold several meetings to build trust and get to know their business
partners. Businesspeople from other cultures often find this practice frustrating because they want to get
down to business. This example illustrates how __________ differs among cultures.
A. regulation
C. ethical behavior
B. language
D. communication style
21. Japanese businesspeople believe that arriving late at an appointment is extremely disrespectful. This
illustrates the importance of understanding cultural issues that relate to
A. decision making.
C. time.
B. assertiveness.
D. location.
22. An individual's status and title are very important in all aspects of Japanese culture, including business
situations. For example, the Japanese businessperson with the most authority sits in the chair furthest
from the door, and the remaining employees sit in descending rank around the table, so the lowest
ranking employee sits nearest to the door. This situation indicates that Japan
A. is a hierarchical society.
C. is an individualist culture.
B. has liberal social standards.
D. has a traditional economic system.
23. Jim Martin is a Canadian businessperson who is traveling to Saudi Arabia to close a business deal. Jim
should dress conservatively by wearing a
A. vest, corduroy pants, and long-sleeve T-shirt.
B. suit, long-sleeve dress shirt, and tie.
C. short-sleeve golf shirt, wristwatch, and casual pants.
D. suit, short-sleeve T-shirt, and a vest.
24. Because Indian businesspeople value their personal space, foreigners should
A. maintain physical distance during conversation.
B. shake hands as a gesture of goodwill.
C. speak loudly and clearly to be heard and understood.
D. begin with social talk before launching into business discussions.
25. Taking responsibility for your actions involves
A. responding to criticism in a defensive manner.
B. letting others accept the blame for your mistakes.
C. justifying your errors.
D. admitting your mistakes.
26. To manage their work commitments in a timely manner, businesspeople should
A. work on enjoyable tasks before tackling the unpleasant tasks.
B. ask their coworkers to help them with routine activities.
C. estimate the time that it takes them to perform their tasks.
D. identify shortcuts that they can take get their work done quickly.
27. Because Tim is not a “morning person,” it takes a little while for him to feel alert and focused. Which of
the following tasks is best for Tim to work on when he first arrives at the office:
A. Prepare a presentation
C. Write a research report
B. Update the departmental budget
D. Read e-mail
28. Gabriel's boss just assigned him a new project. He needs to create a video presentation, which he has
no idea how to do. He starts to get discouraged, but then he reminds himself that this is an opportunity to
learn an important new skill. It will look great on his résumé and score him some bonus points with the
boss. This is an example of which step for maintaining a positive attitude:
A. Surround yourself with positive people
C. Look good
B. Have a sense of humor
D. Think positively

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

4

29. Which of the following statements is true of diversity:
A. Valuing diversity means ignoring or minimizing differences.
B. Diversity applies only to minorities.
C. In group settings, diversity increases creativity and innovation.
D. Diversity in the workplace is decreasing.
30. Rob has a job interview this afternoon. In the morning, he goes over his other job offers to figure out
which job he will accept (and what the salary and benefits are) if this employer doesn't offer him a
position. Rob is developing his
A. BATNA.
C. walk-away point.
B. role.
D. style.
31. Which of the following is a factor that often leads to workplace stress and burnout:
A. Lack of task variety
C. Sufficient time to meet deadlines
B. Adequate compensation
D. High control of work assignments
32. Hector's team member isn't motivated to work on their project. She says it looks like too much work, and
she doesn't think it's possible to have it all done in their time frame. To motivate her, Hector's first priority
should be to demonstrate the project's
A. importance.
C. feasibility.
B. desirability.
D. reward.
33. Which of the following is an organizational vision:
A. Penelope's department wants to offer the best customer service in the state.
B. Margaret's company wants to be the best sporting goods store in the country.
C. Franco wants to get his project done by the end of the week.
D. Omar's shoe store plans to increase sales by 15% this quarter.
34. Amira is trying to choose a financial institution. She likes to do her banking in person, and she wants to
make sure she selects an institution that's customer friendly. She wants good interest rates and low fees,
and she'd also prefer to invest with a not-for-profit institution. Amira should invest her money in a(n)
A. investment bank.
C. commercial bank.
B. Internet bank.
D. credit union.
35. Claire is the owner of a small consulting firm and has two employees working for her. What type of
insurance can Clair purchase to limit her tort liability?
A. Professional
C. Workers' compensation
B. Property
D. Economic protection
36. Liana, an accountant, is auditing a business. Would it be ethical for her to buy stock in that business?
A. No, this is considered embezzlement.
B. No, because it's a conflict of interest.
C. Yes, as long as she tells the company about it.
D. Yes, as long as she is careful not to let it affect her accounting decisions.
37. Claudia is creating a balance sheet for her business. She lists the full value of all of her assets, even
some office equipment she hasn't completely paid for. However, to find the true net worth of her
business, Claudia must subtract the money she owes on the equipment, since the debt is considered
a(n)
A. liability.
C. accounts receivable.
B. liquid asset.
D. dividend.
38. Aisha wants to buy new ovens for her bakery. They'll be expensive, but she has some money saved up
that she can use for the purchase. Aisha plans to finance her new equipment using
A. dividends.
C. debt.
B. equity.
D. accounts receivable.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

39. Effective budgets should always be
A. evaluated.
B. optimistic.

5

C. inflexible.
D. secretive.

40. Latisha, a human resources manager at a hospital, is writing a list of the skills, knowledge, and
characteristics for a nurse position she hopes to fill. She focuses on what education a nurse in that
position should have, what personal traits s/he should have, and what s/he should be like. Latisha is
working on a(n)
A. onboarding activity.
C. strategic plan.
B. job description.
D. job specification.
41. To implement a successful knowledge-management system in the workplace, it is important to
A. focus more on organizing knowledge than gathering it.
B. gain the cooperation of employees and support from ownership.
C. select three or more employees to serve as knowledge managers.
D. develop an organizational reward structure that focuses on financial gains.
42. Which of the following is a reason that organizations undertake knowledge management:
A. They know that new knowledge is only created outside the organization.
B. They want to ensure that organizational knowledge isn't wasted.
C. They don't value an organizational culture of learning.
D. They must follow the laws and regulations of their industries.
43. Which of the following is an internal factor that influences employees' willingness to share their tacit
knowledge with coworkers and managers:
A. Economic conditions
C. Public agendas
B. Organizational culture
D. Regulatory environment
44. What technological tool can help businesses understand the types of knowledge that employees need to
perform their jobs efficiently?
A. Probability chart
C. Systems register
B. Accountability matrix
D. Navigation log
45. Which of the following are examples of intellectual property that are protected by trade-secret legislation:
A. Research techniques and artistic works
B. Chemical compounds and manufacturing processes
C. Novels and customer lists
D. Inventions and trade characters
46. Mara recently accepted a job with the Sweet Treat Cookie Company. Her new employer required her to
sign a document stating that she will not reveal the ingredients in the company's cookie recipes to
external sources. This is an example of a(n)
A. injunction.
C. noncompete provision.
B. indictment.
D. nondisclosure agreement.
47. Jack is a computer programmer who is struggling to fix a glitch with his company's new computer
network. During a get-together with some friends who also work in technology, Jack brings up his
dilemma. His friend Janelle suggests a process that helped her solve a similar problem that she
experienced a few weeks ago. Two other friends, Tim and Susan, provide some suggestions as well. In
this situation, Jack and his friends are transferring knowledge by
A. applying Groupthink strategies.
C. forming a strategic alliance.
B. participating in a community of practice.
D. conducting a formal interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

6

48. Dahlia just started her own business last month. Eventually she'll be concerned with other company
goals, but right now she just wants to make sure her business gets off the ground. She knows many
businesses fail within the first few years, so for now she needs to focus on
A. building a larger facility.
C. achieving stability.
B. hiring more employees.
D. developing new goods and services.
49. Reese is writing a paper for his business class. He wants to include an idea he found in one of his
sources. He includes just the main points and rewrites the paragraph in his own words, making sure to
attribute his ideas to the original source. Reese is
A. quoting.
C. summarizing.
B. paraphrasing.
D. plagiarizing.
50. What is the primary function of the Random Access Memory (RAM) component of a computer?
A. Serves as a temporary holding area for files and programs
B. Reads the computer code that provide visual effects
C. Stores data and programs permanently
D. Enables the user to apply point and click commands
51. Which of the following is a primary factor that should be considered when choosing project-management
software:
A. Distribution intensity
C. Group consensus
B. Personal goals
D. Project complexity
52. Which of the following is a project-management software application that duplicates the project database
and enables project managers to evaluate potential changes to the project plan and assess “what if”
scenarios:
A. Transaction processing
C. Encryption
B. Test environment
D. Digital scanning
53. What's one way to maintain secure customer records?
A. Avoid collecting any confidential customer information.
B. Make sure the records are easily accessible for all employees.
C. Link customers' names with their personal information.
D. Encrypt the information customers give you online.
54. Samantha works in a shoe store. Her eight most recent customers wore the following shoe sizes: 9, 7.5,
5.5, 6, 8, 10, 9, and 9. What is the mode of this data set?
A. 9
C. 8.5
B. 8
D. 4.5
55. The local government fined Lenny's Grille because there were 75 more patrons in the facility at one time
than legally permitted. In this situation, the business violated a
A. maximum capacity code.
C. traffic ordinance.
B. federal property law
D. construction permit.
56. Ruben works in the kitchen of a restaurant. His coworker cut herself on a kitchen knife and she's
bleeding profusely. If Ruben wants to help her, what's the most important thing he can do?
A. Clean the wound so it won't get infected
B. Get proper medical training
C. Stay calm and call an emergency number
D. Interview witnesses and fill out an accident report
57. Which of the following is the most important factor to consider when prioritizing work tasks:
A. Employee's aptitude
C. Coworkers' opinions
B. Enjoyment of tasks
D. Due dates of tasks

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

7

58. Sally, Joe, Tim, and Jane are team members who perform different tasks by themselves at the same time
to create a single output. The method of work coordination that the team members are using is the
___________ task interdependence.
A. reversed
C. reciprocal
B. sequential
D. pooled
59. During the execution-and-monitoring stage of project management, the project manager's job is to
A. deliver the project's final product.
B. make sure the project stays on track.
C. secure enough funding to complete the project.
D. assign roles to team members.
60. A project manager has determined that the team completed the software-development phase of the
project four days ahead of schedule. What control activity is the project manager performing?
A. Changing a process
C. Tracking a milestone
B. Evaluating a time constraint
D. Assessing a setback
61. A project's stakeholders asked the project manager to revise three components of a long-term project.
The project manager should share this information with the project's team members because changes
often affect the
A. team members' competence.
C. project's workflow.
B. company's image.
D. team members' performance reviews.
62. Which of the following statements is true of the bidding process:
A. Pre-bid meetings are used to address potential bidder questions.
B. A bid can be signed by any person at the supplier's company.
C. All bids should be shared with each competitor as a bargaining tool.
D. The supplier with a substantially lower bid is usually the best choice.
63. Cookery Manufacturing orders heating elements from the Kenton Company to produce ovens. Recently,
customers complained to Cookery that their ovens were not heating properly. Cookery researched the
issue, and determined that the customers purchased ovens with defective heating elements. Kenton and
Cookery took action by replacing the defective parts for the customers. In this situation, Cookery and
Kenton maintained a positive working relationship by
A. working together to resolve a problem.
B. collecting information about a new product.
C. changing the production process.
D. developing a standards plan.
64. When a handbag company embroiders a customer's name or monogram on a cloth tote bag, it is
processing a(n)
A. open requisition.
C. special order.
B. blanket requisition.
D. reorder.
65. Which of the following is an example of a reorder:
A. The Powell Company did not order enough paper towels for the month, so it ordered an
additional four cases.
B. Sims Steakhouse received six out of eight cases of glassware on Monday because the vendor
ran out of stock.
C. Mr. and Mrs. Travis ordered a dining-room set in a wood finish that the furniture store doesn't
normally carry.
D. Henry's Hardware Store ordered 35 model-N1 hammers and 2 cases of ¼” stainless steel bolts
from Franklin Tool Manufacturers.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

8

66. Which of the following is an example of a business obtaining raw-materials inventory:
A. An accounting firm orders pencils, copy paper, and post-it notes for its staff.
B. A department-store chain orders shirts, ties, and socks from different vendors for resale.
C. A petroleum processing plant orders a replacement part for a large piece of equipment.
D. A snack-food manufacturer orders potatoes, oil, and salt to make its potato chips.
67. “We can accept the volume pricing that you are offering, but we would like the merchandise to leave your
facility within 24 hours rather than 48 hours, after the order is placed.” In this situation, the negotiator
wants to obtain
A. additional discounts.
C. better lead time.
B. more technical support.
D. an extended warranty.
68. Which of the following is a non-price issue that a business might negotiate with a vendor when
purchasing expensive, complex equipment:
A. Post-sale service
C. Volume reductions
B. Payment terms
D. Compensation
69. Which of the following statements is true of quality control:
A. It consists mostly of common sense procedures.
B. It's necessary only for large businesses.
C. It must be measured in some way to be effective.
D. It doesn't require much planning to implement.
70. What's the most effective way to save money on business and equipment maintenance?
A. Create a maintenance schedule, and stick to it.
B. Only allow outside technicians to maintain equipment.
C. Use the least expensive supplies you can find.
D. Invest in cleaning equipment only when absolutely necessary.
71. Wellston Industries wants to compare a current business situation with a target situation. Which of the
following tools will help Wellston obtain the information that it wants:
A. Decision tree
C. Gap analysis
B. Mind map
D. Critical path study
72. Christine is buying a new computer. If she's making her decision logically, which of the following is true:
A. Her decision-making process is highly subjective.
B. She's listening to her friends' opinions.
C. She's looking at her alternatives from a neutral point of view.
D. Her decision is influenced by how the computers are presented.
73. Perry is thinking about being a project manager, but he's not sure. His guidance counselor suggests he
have a discussion with someone who is currently employed as a project manager. What benefit will Perry
get from an informational interview like this one?
A. The project manager will help him with his college application.
B. The project manager will probably give him a job.
C. The project manager can tell Perry whether or not project management is the right career for
him.
D. The project manager can tell him what a real day on the job is like.
74. Javier had an interview with a potential employer, Dan Martinez. The interview was pretty casual and
informal. How should Javier begin his thank you note?
A. Hi Dan
B. Dear Dan
C. Dear Mr. Martinez
D. He doesn't need to send a thank you note for a casual interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

9

75. Marjane's been at her job for a few years, and she always shows up on time and works hard. However,
she keeps being passed over for a promotion. When she talks to her boss about it, her boss says that
while Marjane's a good employee, she'll need to work on her soft skills if she wants to be promoted to a
managerial position. What should Marjane do?
A. Take a course in teamwork and communication
B. Go to graduate school and get an advanced degree
C. Become proficient in a new computer program
D. Get another year of work experience and then ask for a promotion again
76. Which of the following provides a business's employees with a foundation for acceptable behavior in the
workplace:
A. Articles of incorporation
C. Grievance procedures
B. Organizational chart
D. Rules of conduct
77. The production manager of a company that produces wrenches, hammers, and electric drills would most
likely report to the
A. operations assistant.
C. director of purchasing.
B. quality control line supervisor.
D. vice president of manufacturing.
78. Which of the following is a tool that businesses should use to set their overall organizational goals:
A. Mission statement
C. Marketing plan
B. Financial budget
D. Productivity benchmarks
79. A boutique owner set a goal to open two additional stores in the next three years. What type of
organizational goal has the boutique owner set?
A. Control
C. Profit
B. Growth
D. Market share
80. Employees are more likely to be successful in helping a company achieve its organizational goals when
they
A. are promoted to management.
C. work independently.
B. have appropriate training.
D. socialize with their coworkers.
81. In which of the following documents does the project manager clearly define the project's terms and
conditions for stakeholders:
A. Statement of work
C. The project audit
B. Team agenda
D. Project schedule
82. Many experts believe that providing too much detail in the work breakdown structure (WBS) work
packages often causes the project manager to
A. micromanage the project.
C. simplify project deliverables.
B. allocate project resources.
D. develop a SWOT analysis.
83. Which of the following is a true statement about the work breakdown structure (WBS) in project
management:
A. The project scope remains the same after making changes to the WBS.
B. Each work package should take between eight and 80 hours to complete.
C. The project manager should require team members to approve the WBS.
D. Team members develop the WBS dictionary after they carry out their work tasks.
84. The team's project manager said, “Leah, your efficiency rate increased by 10 percent this week, which is
far above average. You have made great progress in a short time!” In this situation, the project manager
is
A. providing evaluative information.
C. requesting a project update.
B. making a suggestion for improvement.
D. supporting a team member's decision.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

10

85. After providing the stakeholders with the project deliverables, Lisa analyzed and documented the
project's actual results with the initial project goals. What did Lisa do?
A. Conduct a post-implementation review
C. Develop a project-issues log
B. Prepare a lessons-learned report
D. Compose final delivery instructions
86. The focus of quality management should be on
A. satisfying customers.
B. beating the competition.

C. staying within the bounds of the law.
D. encouraging employees.

87. Francine likes the auto shop where she takes her car for an oil change because it has a comfortable
waiting room with good magazines. This illustrates which important characteristic of quality service
providers?
A. Assurance
C. Responsiveness
B. Reliability
D. Tangibles
88. The focus of the Six Sigma framework involves maximizing overall quality and
A. expanding product lines.
C. preventing problems.
B. hiring qualified employees.
D. emphasizing innovation.
89. The Hastings Company implemented a series of gradual changes throughout the company over time that
resulted in more durable products and greater employee efficiency. What type of continuous
improvement does this situation exemplify?
A. Accelerated
C. Recovery
B. Breakthrough
D. Incremental
90. Jack asked a customer to provide some information about his company's competitors. In return, Jack told
the customer that he would give him/her the lowest possible price for the company's new line of products.
The customer was not comfortable with Jack's behavior and ended the 15-year partnership with the
company. This is an example of how unethical business behavior can negatively affect
A. prospecting practices.
C. buyer/seller relationships.
B. product pricing and quality.
D. management style.
91. What technology can businesses use to reduce the risk of network security breaches?
A. Concurrency control applications
C. Intrusion detection systems
B. Teleprompter devices
D. Pirated software programs
92. Companies use risk-matrix software applications to
A. determine the amount of their insurance premiums.
B. prevent identity-theft activities and eliminate external risks.
C. organize their financial data in secure locations.
D. identify and prioritize their primary business risks.
93. To lower risks associated with noncompliance, a company should
A. monitor changes in laws affecting its business activities.
B. hire an environmental attorney to oversee all business functions.
C. limit the potential of personal injury by purchasing property insurance.
D. encourage all employees to understand the advanced principles of contract law.
94. The core activity of managerial planning involves
A. modifying behavior.
B. determining objectives.

C. implementing procedures.
D. identifying gains.

95. What type of plan do businesses often implement when an original plan fails to produce the desired
results?
A. Production
C. Contingency
B. Communications
D. Strategic

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

11

96. An important activity associated with the organizing function of management is
A. developing a blueprint.
C. evaluating performance.
B. defining employees' roles.
D. creating tangible outputs.
97. Coordinating business activities is an important aspect of the organizing function of management
because it
A. defines the company's mission statement.
B. enables the business to prepare precise forecasts.
C. establishes clear relationships among the company's resources.
D. ensures that the employees understand all the business's activities.
98. Which of the following has a negative effect on an understaffed business:
A. Fewer premiums
C. Increased errors
B. Decreased turnover
D. Higher property taxes
99. Kate says, “I am very pleased with your progress on the project, Devon. Take the rest of the day off, and
we'll talk about the next phase of the project tomorrow.” What directing activity is Kate performing?
A. Delegating responsibility
C. Motivating an employee
B. Establishing a schedule
D. Training a worker
100. Effective managerial control often involves
A. providing incentives.
B. setting long-term goals.

C. taking corrective action.
D. assigning tasks.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

12

1. C
Defamation. A tort action occurs when one party (in this case, Frieda) brings a personal suit against
another party to gain money or other relief in exchange for any harm. In Frieda's case, her business
suffered after Shamir's untrue accusations were printed in the newspaper. Making false statements with
the intent of harming someone else (or their business) is known as defamation. Appropriation is the use
of another person's likeness or any other identifying characteristic without their permission. If Shamir had
used Frieda's name or picture in his advertising materials without getting her permission, that would be
considered appropriation. Negligence is an unintentional tort that occurs when a party doesn't live up to
duties and causes unplanned harm to another party. Shamir intended to cause damage to Frieda's
business, so this wasn't a tort of negligence. Wrongful interference occurs when a third party interferes in
a contractual (or business) relationship between two other parties.
</h5></div><h5 id='q69'>69. Which of the following statements is true of quality control:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. It consists mostly of common sense procedures.</option><option value="B">B. It's necessary only for large businesses.</option><option value="C">C. It must be measured in some way to be effective.</option><option value="D">D. It doesn't require much planning to implement.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: It must be measured in some way to be effective.</h5><h5>To truly monitor your quality control progress, it's
important to have some sort of measurement system in place. The type of measurement you use
depends on what your business provides or produces. Quality control is important for businesses of all
sizes, not just large ones. Quality control doesn't consist of common sense procedures. In fact, it can be
a very complicated process. That's why it's so important to plan your quality control system and
extensively train all employees.
</h5></div><h5 id='q70'>70. What's the most effective way to save money on business and equipment maintenance?</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Create a maintenance schedule, and stick to it.</option><option value="B">B. Only allow outside technicians to maintain equipment.</option><option value="C">C. Use the least expensive supplies you can find.</option><option value="D">D. Invest in cleaning equipment only when absolutely necessary.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is A: Create a maintenance schedule, and stick to it.</h5><h5>The best way to save money on maintenance is to make
sure you do it regularly. It's always cheaper to prevent a problem than it is to fix it. By creating a schedule
and then sticking to it, you'll reduce the chance of equipment breakdowns. This can save you money in
repairs and unexpected downtime. Instead of allowing only outside technicians to maintain equipment,
it's better to train everyone in the office to follow the maintenance schedule. This way, when you run into
problems, anyone at your company will be able to fix the equipment, and you won't have to spend the
money to call in an outside technician. Although it's tempting to use the cheapest supplies you can find,
sometimes you really do get what you pay for. Cheaper supplies often end up breaking down faster, so
it's best to focus on quality. Cleaning and repairing equipment only when you absolutely have to can lead
to unexpected problems and breakdowns—it's better to stick to a schedule and make maintenance a part
of your everyday routine.
</h5></div><h5 id='q71'>71. Wellston Industries wants to compare a current business situation with a target situation. Which of the
following tools will help Wellston obtain the information that it wants:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Decision tree</option><option value="B">B. Mind map</option><option value="C">C. Gap analysis</option><option value="D">D. Critical path study</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: Gap analysis</h5><h5>A business uses a gap analysis to compare the current status of an activity or process with
the desired outcome for that activity or process. Businesses use gap analyses to evaluate many types of
business functions and activities including necessary skills, training, technology, and profitability. A mind
map is a creative thinking technique that involves generating ideas by making associations. A decision
tree is a method that businesses often use to facilitate the decision-making process. It involves using a
tree-shaped image in which each branch of the tree represents a possible occurrence or outcome.
Critical path refers to a project management tool that illustrates all activities needed to complete a task in
the order in which they need performed.
</h5></div><h5 id='q72'>72. Christine is buying a new computer. If she's making her decision logically, which of the following is true:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Her decision-making process is highly subjective.</option><option value="B">B. She's listening to her friends' opinions.</option><option value="C">C. She's looking at her alternatives from a neutral point of view.</option><option value="D">D. Her decision is influenced by how the computers are presented.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is C: She's looking at her alternatives from a neutral point of view.</h5><h5>If Christine makes her decision based on
logic, she compares and contrasts information, apart from personal involvement or emotion. By logically
choosing a new computer, she is looking at her alternatives from a neutral point of view, instead of from
her own (or someone else's) perspective. If she listens to her friends' opinions, then she is being
influenced by framing, not logic. Logic involves making a decision objectively, not subjectively. Christine's
decision won't be influenced by how the situation is presented, as in framing, because she is focusing on
the facts.
</h5></div><h5 id='q73'>73. Perry is thinking about being a project manager, but he's not sure. His guidance counselor suggests he
have a discussion with someone who is currently employed as a project manager. What benefit will Perry
get from an informational interview like this one?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. The project manager will help him with his college application.</option><option value="B">B. The project manager will probably give him a job.</option><option value="C">C. The project manager can tell Perry whether or not project management is the right career for
him.</option><option value="D">D. The project manager can tell him what a real day on the job is like.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: The project manager can tell him what a real day on the job is like.</h5><h5>Perry can gain many benefits from
doing an informational interview with a current project manager. The project manager can tell him what
his/her typical work day is like, what sort of education or training s/he had, what s/he likes or dislikes
about the job, and what sorts of skills it takes to excel in her/his position. Personal information like this
may help Perry decide whether or not project management is the profession for him. Perry shouldn't
assume the project manager will give him a job, although having a connection may come in handy when
he's job hunting many years down the road. The project manager will not be able to make Perry's
decisions for him; all s/he can do is tell Perry about his/his experience. It's probably not a good idea for
Perry to expect the project manager to help him with his application; after all, it's a pretty big favor to ask
someone to speak with him. He should make sure not to ask too much of the interviewee. He also should
make sure to write a thank you note.
</h5></div><h5 id='q74'>74. Javier had an interview with a potential employer, Dan Martinez. The interview was pretty casual and
informal. How should Javier begin his thank you note?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Hi Dan</option><option value="B">B. Dear Dan</option><option value="C">C. Dear Mr. Martinez</option><option value="D">D. He doesn't need to send a thank you note for a casual interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

9
</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: Dear Mr. Martinez</h5><h5>Even if the interview was fairly casual, it's always better to err on the side of formality.
If Javier isn't sure whether he should refer to his potential employer as Mr. Martinez or Dan, he should go
with Mr. Martinez. It's very unlikely that his potential employer will take offense to that, but he may take
offense to being referred to by his first name. Starting a thank you letter with “Hi Dan” is definitely too
informal. It's important to send follow-up letters after every job interview. This includes casual interviews,
interviews that didn't go well, and interviews for jobs you don't think you want.
</h5></div><h5 id='q75'>75. Marjane's been at her job for a few years, and she always shows up on time and works hard. However,
she keeps being passed over for a promotion. When she talks to her boss about it, her boss says that
while Marjane's a good employee, she'll need to work on her soft skills if she wants to be promoted to a
managerial position. What should Marjane do?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Take a course in teamwork and communication</option><option value="B">B. Go to graduate school and get an advanced degree</option><option value="C">C. Become proficient in a new computer program</option><option value="D">D. Get another year of work experience and then ask for a promotion again</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: Take a course in teamwork and communication</h5><h5>While education and experience are certainly important
when it comes to career advancement, soft skills can sometimes be even more important. These include
skills like communication, teamwork, attitude, conflict negotiation, problem-solving, and adaptability.
These aren't technical skills, but they can make the difference between a good manager and a bad one.
Marjane's manager wants her to improve her soft skills before he promotes her, so she should focus on
learning about things like teamwork and communication. She can do this by taking a course, asking a
mentor at work to help her, or taking on a volunteer project where she can work on these skills. Either
way, Marjane's boss will probably be pleased to see her take the initiative. Getting an advanced degree
and becoming proficient in a new computer program are technical skills. These may be valuable, but they
aren't the soft skills that Marjane's boss wants to see. Getting another year of experience won't help
Marjane if she doesn't focus on learning about teamwork, communication, and other soft skills.
</h5></div><h5 id='q76'>76. Which of the following provides a business's employees with a foundation for acceptable behavior in the
workplace:</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Articles of incorporation</option><option value="B">B. Organizational chart</option><option value="C">C. Grievance procedures</option><option value="D">D. Rules of conduct</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: Rules of conduct</h5><h5>The rules of conduct outline a company's policies, procedures, and expectations
regarding employees' behavior in the workplace. An organizational chart is a graphical representation of
the flow of authority within an organization. Formal methods of settling disagreements between workers
and employers are grievance procedures. Articles of incorporation is a document outlining a corporation's
name, purpose, location, amount of stock to be issued, names of the board of directors, and other
information about the conditions under which the business will operate.
</h5></div><h5 id='q77'>77. The production manager of a company that produces wrenches, hammers, and electric drills would most
likely report to the</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. operations assistant.</option><option value="B">B. quality control line supervisor.</option><option value="C">C. director of purchasing.</option><option value="D">D. vice president of manufacturing.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is D: vice president of manufacturing.</h5><h5>The chain of command defines the level of authority in a business and
specifies the individual who supervises particular employees. The advantage to having a chain of
command is that it provides the business with structure and organization. Large companies often set up
their chain of command by department. For example, the production manager of a tool manufacturing
company would likely report to the vice president of manufacturing. The quality control line supervisor
would most likely report to the production manager. The director of purchasing manages the business's
purchasing department. An operations assistant provides administrative support for the operations
function of the business and would most likely report to the operations manager.
</h5></div><h5 id='q78'>78. Which of the following is a tool that businesses should use to set their overall organizational goals:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Mission statement</option><option value="B">B. Financial budget</option><option value="C">C. Marketing plan</option><option value="D">D. Productivity benchmarks</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Mission statement</h5><h5>The problem statement is the heart of the research report—it defines the issue at
hand and summarizes the purpose of the research. In the example, the company defines the problem as
product-release failures due to understaffing. In a few additional paragraphs, the report writer should go
into more detail about the problem. The executive summary is an overview of the entire report. The
audience typically uses the executive summary to determine whether it is worthwhile to read the report
any further. The recommendations section is the proposed course of action and is the last component
presented in the report. A pronouncement (statement) of intent is an agreement to do something.
</h5></div><h5 id='q79'>79. A boutique owner set a goal to open two additional stores in the next three years. What type of
organizational goal has the boutique owner set?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Control</option><option value="B">B. Growth</option><option value="C">C. Profit</option><option value="D">D. Market share</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Growth</h5><h5>Growth goals are organizational goals that businesses set to expand and grow. Expansion may
include merging with another company, adding more products to the product mix, adding a production
shift, or opening additional stores. Control goals are the organization's goals for monitoring the work. A
profit goal is the amount of money the business wants to make after its expenses are paid. A marketshare goal is the desired portion of a total market that the business wants to attract.
</h5></div><h5 id='q80'>80. Employees are more likely to be successful in helping a company achieve its organizational goals when
they</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. are promoted to management.</option><option value="B">B. have appropriate training.</option><option value="C">C. work independently.</option><option value="D">D. socialize with their coworkers.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is B: have appropriate training.</h5><h5>Because each business functions differently, it is important for a company to
provide its employees with training. Well-trained employees have the skills and knowledge to do their
work correctly and efficiently. When employees do their work correctly and efficiently, they are helping
the company achieve its organizational goals. Employees who receive promotions, work independently,
and socialize with coworkers may or may not help the company achieve its organizational goals.
</h5></div><h5 id='q81'>81. In which of the following documents does the project manager clearly define the project's terms and
conditions for stakeholders:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Statement of work</option><option value="B">B. Team agenda</option><option value="C">C. The project audit</option><option value="D">D. Project schedule</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: Statement of work</h5><h5>The statement of work (SOW) is a document that outlines the terms, commitments,
and conditions of the project. It includes information about the project's activities, timelines, and
deliverables. An agenda is an outline of a meeting's discussion topics that is distributed to attendees
before the meeting. A project audit is a review of an in-progress project to determine both the successes
and the problems that need improvement to complete the project. A project schedule documents the
elements of the project in the order of time in which they need to be completed.
</h5></div><h5 id='q82'>82. Many experts believe that providing too much detail in the work breakdown structure (WBS) work
packages often causes the project manager to</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. micromanage the project.</option><option value="B">B. allocate project resources.</option><option value="C">C. simplify project deliverables.</option><option value="D">D. develop a SWOT analysis.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: micromanage the project.</h5><h5>Because this phase of the project was running ahead of
schedule, the project manager is not evaluating a time constraint or assessing a setback. There is no
information provided to determine if the project manager has decided to change a process.
</h5></div><h5 id='q83'>83. Which of the following is a true statement about the work breakdown structure (WBS) in project
management:</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. The project scope remains the same after making changes to the WBS.</option><option value="B">B. Each work package should take between eight and 80 hours to complete.</option><option value="C">C. The project manager should require team members to approve the WBS.</option><option value="D">D. Team members develop the WBS dictionary after they carry out their work tasks.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: Each work package should take between eight and 80 hours to complete.</h5><h5>The 8/80 rule for dividing
project work packages states that no package should take less than eight hours or more than 80 hours to
complete. This rule intends to keep work packages in manageable units—not too small or too large.
Making changes to the WBS changes the project scope. The project manager may get input from others
when developing the WBS, but s/he does not need to get team members' approval. A WBS dictionary is
a tool that helps inform project team members about the scope, status, milestones, and deliverables
associated with each project activity. Team members do not develop the WBS dictionary after they carry
out their work tasks.
</h5></div><h5 id='q84'>84. The team's project manager said, “Leah, your efficiency rate increased by 10 percent this week, which is
far above average. You have made great progress in a short time!” In this situation, the project manager
is</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. providing evaluative information.</option><option value="B">B. making a suggestion for improvement.</option><option value="C">C. requesting a project update.</option><option value="D">D. supporting a team member's decision.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

10
</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is A: providing evaluative information.</h5><h5>The team manager is providing the team member with positive,
evaluative information about her work performance. The team manager is not making a suggestion for
improvement, requesting a project update, or supporting a team member's decision.
</h5></div><h5 id='q85'>85. After providing the stakeholders with the project deliverables, Lisa analyzed and documented the
project's actual results with the initial project goals. What did Lisa do?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Conduct a post-implementation review</option><option value="B">B. Prepare a lessons-learned report</option><option value="C">C. Develop a project-issues log</option><option value="D">D. Compose final delivery instructions</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: Conduct a post-implementation review</h5><h5>After the stakeholders receive the project deliverables, the project
manager develops a post-implementation review. The post-implementation review is a formal, detailed
assessment of the completed project in relation to the project's objectives. The document assesses the
project's budgets, deadlines, and processes, as well as the stakeholders' satisfaction with the results or
deliverables. The "lessons-learned" document summarizes the project's successes and failures. Project
managers often refer to the “lessons-learned” document when working on similar projects. A projectissues log is a documentation of problems or challenges that occur during the execution phase of the
project. Lisa was not composing final delivery instructions.
</h5></div><h5 id='q86'>86. The focus of quality management should be on</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. satisfying customers.</option><option value="B">B. beating the competition.
</option><option value="C">C. staying within the bounds of the law.</option><option value="D">D. encouraging employees.
</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: satisfying customers.</h5><h5>In this situation, Rachel developed a
A. sales analysis.
C. feasibility report.
B. troubleshooting proposal.
D. request for proposal.
7. "With fewer staff members available to conduct extensive testing, Calhoun Software has experienced
several product-release failures last year that resulted in costly product returns." This is an example of a
research report
A. executive summary.
C. recommendation.
B. problem statement.
D. pronouncement of intent.
8. What type of information should be included in the methodology section of a research report?
A. References and reliability data
B. The significance of the study and conclusions
C. Research procedures and the purpose of the study
D. A description of the sampling plan and research technique
9. Sophia needs to distribute a sales report to her employees. There are lots of numbers and figures, but
the report is pretty self-explanatory. Sophia should communicate this information to her staff via a
A. conference call.
C. memo.
B. face-to-face meeting.
D. voicemail.

Copyright © 2013 by MBA Research and Curriculum Center®, Columbus, Ohio

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

2

10. There are several auto repair shops in town, but Patricia's stands out. Her auto repair shop does great
work, but what really sets her shop apart is the customer service. Every customer is greeted by a friendly
employee, and s/he is given snacks and drinks while s/he waits for the repairs to be completed. The
great customer service that people can expect from Patricia's business is considered her
A. brand promise.
C. vision.
B. tagline.
D. mission statement.
11. Simone's business doesn't advertise much. Instead, she relies on happy customers to tell their friends,
family, and coworkers about her company. Simone's business uses __________ to gain customers.
A. advocacy
C. corporate culture
B. relationship buying
D. business process management
12. Bryant Technical College is offering an online degree in landscape design. This product is considered
a(n)
A. virtual service.
C. outsourced service.
B. low-quality product.
D. merger.
13. Nadia's assistant, Roger, rarely does what he's supposed to do. He routinely forgets to schedule her
appointments, orders the wrong supplies for her office, and misses work at least a few times a month. An
employee like Roger is an example of a(n) __________ risk.
A. financial
C. strategic
B. hazard
D. operational
14. Vince is very excited to get his first paycheck from his part-time job. He's expecting about $200, but when
he sees his weekly paystub, he's disappointed to find out he's actually getting much less. Which tax did
Vince forget to take into account:
A. Excise tax
C. Sales tax
B. Property tax
D. Income tax
15. Randy used to work in a factory. However, after technological advances brought robots that could do the
same job for less money, he was laid off. Randy is looking for a new job in a factory, but everything
requires knowledge of computer programs, which he doesn't have. Randy is facing __________
unemployment.
A. structural
C. cyclical
B. frictional
D. seasonal
16. Which of the following is an advantage of a weak dollar:
A. It creates more consumer spending.
C. Employee wages go up.
B. It encourages exports.
D. More jobs are created.
17. American businesspeople believe that maintaining direct eye contact during conversation indicates an
individual's sincerity, interest, and confidence level, while some cultures believe that ongoing direct eye
contact is rude. This is an example of how __________ differs among cultures.
A. social status
C. personal appearance
B. nonverbal communication
D. gender perception
18. In some cultures, it is common for businesspeople to discuss business matters during meals, but
Canadians typically do not. This is a cultural issue related to
A. dining etiquette.
C. language barriers.
B. negotiating style.
D. cognitive intelligence.
19. During a meeting with German businesspeople, an American businessperson introduced a change to the
agenda. Because the German businesspeople were caught off guard by this change, they became upset,
which indicates that German culture tends to
A. prefers a less-structured environment.
C. take greater risks than other cultures.
B. be highly ethnocentric.
D. have a low tolerance for uncertainty.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

3

20. Latin-American businesspeople often hold several meetings to build trust and get to know their business
partners. Businesspeople from other cultures often find this practice frustrating because they want to get
down to business. This example illustrates how __________ differs among cultures.
A. regulation
C. ethical behavior
B. language
D. communication style
21. Japanese businesspeople believe that arriving late at an appointment is extremely disrespectful. This
illustrates the importance of understanding cultural issues that relate to
A. decision making.
C. time.
B. assertiveness.
D. location.
22. An individual's status and title are very important in all aspects of Japanese culture, including business
situations. For example, the Japanese businessperson with the most authority sits in the chair furthest
from the door, and the remaining employees sit in descending rank around the table, so the lowest
ranking employee sits nearest to the door. This situation indicates that Japan
A. is a hierarchical society.
C. is an individualist culture.
B. has liberal social standards.
D. has a traditional economic system.
23. Jim Martin is a Canadian businessperson who is traveling to Saudi Arabia to close a business deal. Jim
should dress conservatively by wearing a
A. vest, corduroy pants, and long-sleeve T-shirt.
B. suit, long-sleeve dress shirt, and tie.
C. short-sleeve golf shirt, wristwatch, and casual pants.
D. suit, short-sleeve T-shirt, and a vest.
24. Because Indian businesspeople value their personal space, foreigners should
A. maintain physical distance during conversation.
B. shake hands as a gesture of goodwill.
C. speak loudly and clearly to be heard and understood.
D. begin with social talk before launching into business discussions.
25. Taking responsibility for your actions involves
A. responding to criticism in a defensive manner.
B. letting others accept the blame for your mistakes.
C. justifying your errors.
D. admitting your mistakes.
26. To manage their work commitments in a timely manner, businesspeople should
A. work on enjoyable tasks before tackling the unpleasant tasks.
B. ask their coworkers to help them with routine activities.
C. estimate the time that it takes them to perform their tasks.
D. identify shortcuts that they can take get their work done quickly.
27. Because Tim is not a “morning person,” it takes a little while for him to feel alert and focused. Which of
the following tasks is best for Tim to work on when he first arrives at the office:
A. Prepare a presentation
C. Write a research report
B. Update the departmental budget
D. Read e-mail
28. Gabriel's boss just assigned him a new project. He needs to create a video presentation, which he has
no idea how to do. He starts to get discouraged, but then he reminds himself that this is an opportunity to
learn an important new skill. It will look great on his résumé and score him some bonus points with the
boss. This is an example of which step for maintaining a positive attitude:
A. Surround yourself with positive people
C. Look good
B. Have a sense of humor
D. Think positively

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

4

29. Which of the following statements is true of diversity:
A. Valuing diversity means ignoring or minimizing differences.
B. Diversity applies only to minorities.
C. In group settings, diversity increases creativity and innovation.
D. Diversity in the workplace is decreasing.
30. Rob has a job interview this afternoon. In the morning, he goes over his other job offers to figure out
which job he will accept (and what the salary and benefits are) if this employer doesn't offer him a
position. Rob is developing his
A. BATNA.
C. walk-away point.
B. role.
D. style.
31. Which of the following is a factor that often leads to workplace stress and burnout:
A. Lack of task variety
C. Sufficient time to meet deadlines
B. Adequate compensation
D. High control of work assignments
32. Hector's team member isn't motivated to work on their project. She says it looks like too much work, and
she doesn't think it's possible to have it all done in their time frame. To motivate her, Hector's first priority
should be to demonstrate the project's
A. importance.
C. feasibility.
B. desirability.
D. reward.
33. Which of the following is an organizational vision:
A. Penelope's department wants to offer the best customer service in the state.
B. Margaret's company wants to be the best sporting goods store in the country.
C. Franco wants to get his project done by the end of the week.
D. Omar's shoe store plans to increase sales by 15% this quarter.
34. Amira is trying to choose a financial institution. She likes to do her banking in person, and she wants to
make sure she selects an institution that's customer friendly. She wants good interest rates and low fees,
and she'd also prefer to invest with a not-for-profit institution. Amira should invest her money in a(n)
A. investment bank.
C. commercial bank.
B. Internet bank.
D. credit union.
35. Claire is the owner of a small consulting firm and has two employees working for her. What type of
insurance can Clair purchase to limit her tort liability?
A. Professional
C. Workers' compensation
B. Property
D. Economic protection
36. Liana, an accountant, is auditing a business. Would it be ethical for her to buy stock in that business?
A. No, this is considered embezzlement.
B. No, because it's a conflict of interest.
C. Yes, as long as she tells the company about it.
D. Yes, as long as she is careful not to let it affect her accounting decisions.
37. Claudia is creating a balance sheet for her business. She lists the full value of all of her assets, even
some office equipment she hasn't completely paid for. However, to find the true net worth of her
business, Claudia must subtract the money she owes on the equipment, since the debt is considered
a(n)
A. liability.
C. accounts receivable.
B. liquid asset.
D. dividend.
38. Aisha wants to buy new ovens for her bakery. They'll be expensive, but she has some money saved up
that she can use for the purchase. Aisha plans to finance her new equipment using
A. dividends.
C. debt.
B. equity.
D. accounts receivable.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

39. Effective budgets should always be
A. evaluated.
B. optimistic.

5

C. inflexible.
D. secretive.

40. Latisha, a human resources manager at a hospital, is writing a list of the skills, knowledge, and
characteristics for a nurse position she hopes to fill. She focuses on what education a nurse in that
position should have, what personal traits s/he should have, and what s/he should be like. Latisha is
working on a(n)
A. onboarding activity.
C. strategic plan.
B. job description.
D. job specification.
41. To implement a successful knowledge-management system in the workplace, it is important to
A. focus more on organizing knowledge than gathering it.
B. gain the cooperation of employees and support from ownership.
C. select three or more employees to serve as knowledge managers.
D. develop an organizational reward structure that focuses on financial gains.
42. Which of the following is a reason that organizations undertake knowledge management:
A. They know that new knowledge is only created outside the organization.
B. They want to ensure that organizational knowledge isn't wasted.
C. They don't value an organizational culture of learning.
D. They must follow the laws and regulations of their industries.
43. Which of the following is an internal factor that influences employees' willingness to share their tacit
knowledge with coworkers and managers:
A. Economic conditions
C. Public agendas
B. Organizational culture
D. Regulatory environment
44. What technological tool can help businesses understand the types of knowledge that employees need to
perform their jobs efficiently?
A. Probability chart
C. Systems register
B. Accountability matrix
D. Navigation log
45. Which of the following are examples of intellectual property that are protected by trade-secret legislation:
A. Research techniques and artistic works
B. Chemical compounds and manufacturing processes
C. Novels and customer lists
D. Inventions and trade characters
46. Mara recently accepted a job with the Sweet Treat Cookie Company. Her new employer required her to
sign a document stating that she will not reveal the ingredients in the company's cookie recipes to
external sources. This is an example of a(n)
A. injunction.
C. noncompete provision.
B. indictment.
D. nondisclosure agreement.
47. Jack is a computer programmer who is struggling to fix a glitch with his company's new computer
network. During a get-together with some friends who also work in technology, Jack brings up his
dilemma. His friend Janelle suggests a process that helped her solve a similar problem that she
experienced a few weeks ago. Two other friends, Tim and Susan, provide some suggestions as well. In
this situation, Jack and his friends are transferring knowledge by
A. applying Groupthink strategies.
C. forming a strategic alliance.
B. participating in a community of practice.
D. conducting a formal interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

6

48. Dahlia just started her own business last month. Eventually she'll be concerned with other company
goals, but right now she just wants to make sure her business gets off the ground. She knows many
businesses fail within the first few years, so for now she needs to focus on
A. building a larger facility.
C. achieving stability.
B. hiring more employees.
D. developing new goods and services.
49. Reese is writing a paper for his business class. He wants to include an idea he found in one of his
sources. He includes just the main points and rewrites the paragraph in his own words, making sure to
attribute his ideas to the original source. Reese is
A. quoting.
C. summarizing.
B. paraphrasing.
D. plagiarizing.
50. What is the primary function of the Random Access Memory (RAM) component of a computer?
A. Serves as a temporary holding area for files and programs
B. Reads the computer code that provide visual effects
C. Stores data and programs permanently
D. Enables the user to apply point and click commands
51. Which of the following is a primary factor that should be considered when choosing project-management
software:
A. Distribution intensity
C. Group consensus
B. Personal goals
D. Project complexity
52. Which of the following is a project-management software application that duplicates the project database
and enables project managers to evaluate potential changes to the project plan and assess “what if”
scenarios:
A. Transaction processing
C. Encryption
B. Test environment
D. Digital scanning
53. What's one way to maintain secure customer records?
A. Avoid collecting any confidential customer information.
B. Make sure the records are easily accessible for all employees.
C. Link customers' names with their personal information.
D. Encrypt the information customers give you online.
54. Samantha works in a shoe store. Her eight most recent customers wore the following shoe sizes: 9, 7.5,
5.5, 6, 8, 10, 9, and 9. What is the mode of this data set?
A. 9
C. 8.5
B. 8
D. 4.5
55. The local government fined Lenny's Grille because there were 75 more patrons in the facility at one time
than legally permitted. In this situation, the business violated a
A. maximum capacity code.
C. traffic ordinance.
B. federal property law
D. construction permit.
56. Ruben works in the kitchen of a restaurant. His coworker cut herself on a kitchen knife and she's
bleeding profusely. If Ruben wants to help her, what's the most important thing he can do?
A. Clean the wound so it won't get infected
B. Get proper medical training
C. Stay calm and call an emergency number
D. Interview witnesses and fill out an accident report
57. Which of the following is the most important factor to consider when prioritizing work tasks:
A. Employee's aptitude
C. Coworkers' opinions
B. Enjoyment of tasks
D. Due dates of tasks

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

7

58. Sally, Joe, Tim, and Jane are team members who perform different tasks by themselves at the same time
to create a single output. The method of work coordination that the team members are using is the
___________ task interdependence.
A. reversed
C. reciprocal
B. sequential
D. pooled
59. During the execution-and-monitoring stage of project management, the project manager's job is to
A. deliver the project's final product.
B. make sure the project stays on track.
C. secure enough funding to complete the project.
D. assign roles to team members.
60. A project manager has determined that the team completed the software-development phase of the
project four days ahead of schedule. What control activity is the project manager performing?
A. Changing a process
C. Tracking a milestone
B. Evaluating a time constraint
D. Assessing a setback
61. A project's stakeholders asked the project manager to revise three components of a long-term project.
The project manager should share this information with the project's team members because changes
often affect the
A. team members' competence.
C. project's workflow.
B. company's image.
D. team members' performance reviews.
62. Which of the following statements is true of the bidding process:
A. Pre-bid meetings are used to address potential bidder questions.
B. A bid can be signed by any person at the supplier's company.
C. All bids should be shared with each competitor as a bargaining tool.
D. The supplier with a substantially lower bid is usually the best choice.
63. Cookery Manufacturing orders heating elements from the Kenton Company to produce ovens. Recently,
customers complained to Cookery that their ovens were not heating properly. Cookery researched the
issue, and determined that the customers purchased ovens with defective heating elements. Kenton and
Cookery took action by replacing the defective parts for the customers. In this situation, Cookery and
Kenton maintained a positive working relationship by
A. working together to resolve a problem.
B. collecting information about a new product.
C. changing the production process.
D. developing a standards plan.
64. When a handbag company embroiders a customer's name or monogram on a cloth tote bag, it is
processing a(n)
A. open requisition.
C. special order.
B. blanket requisition.
D. reorder.
65. Which of the following is an example of a reorder:
A. The Powell Company did not order enough paper towels for the month, so it ordered an
additional four cases.
B. Sims Steakhouse received six out of eight cases of glassware on Monday because the vendor
ran out of stock.
C. Mr. and Mrs. Travis ordered a dining-room set in a wood finish that the furniture store doesn't
normally carry.
D. Henry's Hardware Store ordered 35 model-N1 hammers and 2 cases of ¼” stainless steel bolts
from Franklin Tool Manufacturers.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

8

66. Which of the following is an example of a business obtaining raw-materials inventory:
A. An accounting firm orders pencils, copy paper, and post-it notes for its staff.
B. A department-store chain orders shirts, ties, and socks from different vendors for resale.
C. A petroleum processing plant orders a replacement part for a large piece of equipment.
D. A snack-food manufacturer orders potatoes, oil, and salt to make its potato chips.
67. “We can accept the volume pricing that you are offering, but we would like the merchandise to leave your
facility within 24 hours rather than 48 hours, after the order is placed.” In this situation, the negotiator
wants to obtain
A. additional discounts.
C. better lead time.
B. more technical support.
D. an extended warranty.
68. Which of the following is a non-price issue that a business might negotiate with a vendor when
purchasing expensive, complex equipment:
A. Post-sale service
C. Volume reductions
B. Payment terms
D. Compensation
69. Which of the following statements is true of quality control:
A. It consists mostly of common sense procedures.
B. It's necessary only for large businesses.
C. It must be measured in some way to be effective.
D. It doesn't require much planning to implement.
70. What's the most effective way to save money on business and equipment maintenance?
A. Create a maintenance schedule, and stick to it.
B. Only allow outside technicians to maintain equipment.
C. Use the least expensive supplies you can find.
D. Invest in cleaning equipment only when absolutely necessary.
71. Wellston Industries wants to compare a current business situation with a target situation. Which of the
following tools will help Wellston obtain the information that it wants:
A. Decision tree
C. Gap analysis
B. Mind map
D. Critical path study
72. Christine is buying a new computer. If she's making her decision logically, which of the following is true:
A. Her decision-making process is highly subjective.
B. She's listening to her friends' opinions.
C. She's looking at her alternatives from a neutral point of view.
D. Her decision is influenced by how the computers are presented.
73. Perry is thinking about being a project manager, but he's not sure. His guidance counselor suggests he
have a discussion with someone who is currently employed as a project manager. What benefit will Perry
get from an informational interview like this one?
A. The project manager will help him with his college application.
B. The project manager will probably give him a job.
C. The project manager can tell Perry whether or not project management is the right career for
him.
D. The project manager can tell him what a real day on the job is like.
74. Javier had an interview with a potential employer, Dan Martinez. The interview was pretty casual and
informal. How should Javier begin his thank you note?
A. Hi Dan
B. Dear Dan
C. Dear Mr. Martinez
D. He doesn't need to send a thank you note for a casual interview.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

9

75. Marjane's been at her job for a few years, and she always shows up on time and works hard. However,
she keeps being passed over for a promotion. When she talks to her boss about it, her boss says that
while Marjane's a good employee, she'll need to work on her soft skills if she wants to be promoted to a
managerial position. What should Marjane do?
A. Take a course in teamwork and communication
B. Go to graduate school and get an advanced degree
C. Become proficient in a new computer program
D. Get another year of work experience and then ask for a promotion again
76. Which of the following provides a business's employees with a foundation for acceptable behavior in the
workplace:
A. Articles of incorporation
C. Grievance procedures
B. Organizational chart
D. Rules of conduct
77. The production manager of a company that produces wrenches, hammers, and electric drills would most
likely report to the
A. operations assistant.
C. director of purchasing.
B. quality control line supervisor.
D. vice president of manufacturing.
78. Which of the following is a tool that businesses should use to set their overall organizational goals:
A. Mission statement
C. Marketing plan
B. Financial budget
D. Productivity benchmarks
79. A boutique owner set a goal to open two additional stores in the next three years. What type of
organizational goal has the boutique owner set?
A. Control
C. Profit
B. Growth
D. Market share
80. Employees are more likely to be successful in helping a company achieve its organizational goals when
they
A. are promoted to management.
C. work independently.
B. have appropriate training.
D. socialize with their coworkers.
81. In which of the following documents does the project manager clearly define the project's terms and
conditions for stakeholders:
A. Statement of work
C. The project audit
B. Team agenda
D. Project schedule
82. Many experts believe that providing too much detail in the work breakdown structure (WBS) work
packages often causes the project manager to
A. micromanage the project.
C. simplify project deliverables.
B. allocate project resources.
D. develop a SWOT analysis.
83. Which of the following is a true statement about the work breakdown structure (WBS) in project
management:
A. The project scope remains the same after making changes to the WBS.
B. Each work package should take between eight and 80 hours to complete.
C. The project manager should require team members to approve the WBS.
D. Team members develop the WBS dictionary after they carry out their work tasks.
84. The team's project manager said, “Leah, your efficiency rate increased by 10 percent this week, which is
far above average. You have made great progress in a short time!” In this situation, the project manager
is
A. providing evaluative information.
C. requesting a project update.
B. making a suggestion for improvement.
D. supporting a team member's decision.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

10

85. After providing the stakeholders with the project deliverables, Lisa analyzed and documented the
project's actual results with the initial project goals. What did Lisa do?
A. Conduct a post-implementation review
C. Develop a project-issues log
B. Prepare a lessons-learned report
D. Compose final delivery instructions
86. The focus of quality management should be on
A. satisfying customers.
B. beating the competition.

C. staying within the bounds of the law.
D. encouraging employees.

87. Francine likes the auto shop where she takes her car for an oil change because it has a comfortable
waiting room with good magazines. This illustrates which important characteristic of quality service
providers?
A. Assurance
C. Responsiveness
B. Reliability
D. Tangibles
88. The focus of the Six Sigma framework involves maximizing overall quality and
A. expanding product lines.
C. preventing problems.
B. hiring qualified employees.
D. emphasizing innovation.
89. The Hastings Company implemented a series of gradual changes throughout the company over time that
resulted in more durable products and greater employee efficiency. What type of continuous
improvement does this situation exemplify?
A. Accelerated
C. Recovery
B. Breakthrough
D. Incremental
90. Jack asked a customer to provide some information about his company's competitors. In return, Jack told
the customer that he would give him/her the lowest possible price for the company's new line of products.
The customer was not comfortable with Jack's behavior and ended the 15-year partnership with the
company. This is an example of how unethical business behavior can negatively affect
A. prospecting practices.
C. buyer/seller relationships.
B. product pricing and quality.
D. management style.
91. What technology can businesses use to reduce the risk of network security breaches?
A. Concurrency control applications
C. Intrusion detection systems
B. Teleprompter devices
D. Pirated software programs
92. Companies use risk-matrix software applications to
A. determine the amount of their insurance premiums.
B. prevent identity-theft activities and eliminate external risks.
C. organize their financial data in secure locations.
D. identify and prioritize their primary business risks.
93. To lower risks associated with noncompliance, a company should
A. monitor changes in laws affecting its business activities.
B. hire an environmental attorney to oversee all business functions.
C. limit the potential of personal injury by purchasing property insurance.
D. encourage all employees to understand the advanced principles of contract law.
94. The core activity of managerial planning involves
A. modifying behavior.
B. determining objectives.

C. implementing procedures.
D. identifying gains.

95. What type of plan do businesses often implement when an original plan fails to produce the desired
results?
A. Production
C. Contingency
B. Communications
D. Strategic

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

11

96. An important activity associated with the organizing function of management is
A. developing a blueprint.
C. evaluating performance.
B. defining employees' roles.
D. creating tangible outputs.
97. Coordinating business activities is an important aspect of the organizing function of management
because it
A. defines the company's mission statement.
B. enables the business to prepare precise forecasts.
C. establishes clear relationships among the company's resources.
D. ensures that the employees understand all the business's activities.
98. Which of the following has a negative effect on an understaffed business:
A. Fewer premiums
C. Increased errors
B. Decreased turnover
D. Higher property taxes
99. Kate says, “I am very pleased with your progress on the project, Devon. Take the rest of the day off, and
we'll talk about the next phase of the project tomorrow.” What directing activity is Kate performing?
A. Delegating responsibility
C. Motivating an employee
B. Establishing a schedule
D. Training a worker
100. Effective managerial control often involves
A. providing incentives.
B. setting long-term goals.

C. taking corrective action.
D. assigning tasks.

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

12

1. C
Defamation. A tort action occurs when one party (in this case, Frieda) brings a personal suit against
another party to gain money or other relief in exchange for any harm. In Frieda's case, her business
suffered after Shamir's untrue accusations were printed in the newspaper. Making false statements with
the intent of harming someone else (or their business) is known as defamation. Appropriation is the use
of another person's likeness or any other identifying characteristic without their permission. If Shamir had
used Frieda's name or picture in his advertising materials without getting her permission, that would be
considered appropriation. Negligence is an unintentional tort that occurs when a party doesn't live up to
duties and causes unplanned harm to another party. Shamir intended to cause damage to Frieda's
business, so this wasn't a tort of negligence. Wrongful interference occurs when a third party interferes in
a contractual (or business) relationship between two other parties.
</h5></div><h5 id='q87'>87. Francine likes the auto shop where she takes her car for an oil change because it has a comfortable
waiting room with good magazines. This illustrates which important characteristic of quality service
providers?</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Assurance</option><option value="B">B. Reliability</option><option value="C">C. Responsiveness</option><option value="D">D. Tangibles</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: Tangibles</h5><h5>A comfortable waiting room with good magazines is an example of a service provider having
quality tangibles—a characteristic that customers are looking for. Reliability means that the service is
consistently well-performed. Responsiveness means that the service provider provides the service
willingly and promptly. Assurance means that the customer finds the service provider to be
knowledgeable and trustworthy.
</h5></div><h5 id='q88'>88. The focus of the Six Sigma framework involves maximizing overall quality and</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. expanding product lines.</option><option value="B">B. hiring qualified employees.</option><option value="C">C. preventing problems.</option><option value="D">D. emphasizing innovation.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is C: preventing problems.</h5><h5>Diversity in
the workplace is actually greatly increasing. A few decades ago, the workforce consisted predominantly
of white males. Today, white males make up less than half the workforce in the United States. That's why
employees who value diversity are in high demand, and companies without them will find it difficult to
succeed.
</h5></div><h5 id='q89'>89. The Hastings Company implemented a series of gradual changes throughout the company over time that
resulted in more durable products and greater employee efficiency. What type of continuous
improvement does this situation exemplify?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Accelerated</option><option value="B">B. Breakthrough</option><option value="C">C. Recovery</option><option value="D">D. Incremental</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: Incremental</h5><h5>Continuous improvement is the ongoing practice of looking for ways to increase the levels of
excellence of a process, good, or service. Incremental improvement involves many employees carrying
out small changes over time. Breakthrough improvements often occur suddenly and result in immediate,
drastic changes. Accelerated improvements occur when a business makes a series of improvements
very quickly in a short period of time. Recovery involves regaining control of something.
</h5></div><h5 id='q90'>90. Jack asked a customer to provide some information about his company's competitors. In return, Jack told
the customer that he would give him/her the lowest possible price for the company's new line of products.
The customer was not comfortable with Jack's behavior and ended the 15-year partnership with the
company. This is an example of how unethical business behavior can negatively affect</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. prospecting practices.</option><option value="B">B. product pricing and quality.</option><option value="C">C. buyer/seller relationships.</option><option value="D">D. management style.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: buyer/seller relationships.</h5><h5>When employees behave unethically in business situations, they jeopardize
the business's image and financial well-being. In the example, an employee asked a customer to do
something that the customer did not feel was right, so the customer ended a long-term relationship with
the business, which cost the business future sales and profits. The employee's behavior did not affect
product pricing and quality, prospecting practices, or management style.
</h5></div><h5 id='q91'>91. What technology can businesses use to reduce the risk of network security breaches?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Concurrency control applications</option><option value="B">B. Teleprompter devices</option><option value="C">C. Intrusion detection systems</option><option value="D">D. Pirated software programs</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Intrusion detection systems</h5><h5>An intrusion detection system monitors and detects computer hacking
activities that compromise the security of a business's computer data. Typically used in television studios,
a teleprompter is an off-camera device that projects a script for speakers or performers. The purpose of
concurrency control applications is to address issues that occur when multiple computer users access
the same data at the same time. Pirated software is computer programs that are illegally copied and used
by individuals other than the software owners.
</h5></div><h5 id='q92'>92. Companies use risk-matrix software applications to</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. determine the amount of their insurance premiums.</option><option value="B">B. prevent identity-theft activities and eliminate external risks.</option><option value="C">C. organize their financial data in secure locations.</option><option value="D">D. identify and prioritize their primary business risks.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: identify and prioritize their primary business risks.</h5><h5>Risk-matrix software applications help businesses
evaluate different categories of risk such as information security, investments, development costs, etc.
The purpose of the risk-matrix software application is not to organize financial data in secure locations or
determine the amount of their insurance premiums. Risk-matrix software applications do not eliminate
external risks such as identity theft.
</h5></div><h5 id='q93'>93. To lower risks associated with noncompliance, a company should</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. monitor changes in laws affecting its business activities.</option><option value="B">B. hire an environmental attorney to oversee all business functions.</option><option value="C">C. limit the potential of personal injury by purchasing property insurance.</option><option value="D">D. encourage all employees to understand the advanced principles of contract law.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: monitor changes in laws affecting its business activities.</h5><h5>Compliance with the law is an important aspect
of managing business risk. If a business does not monitor changes in the laws that affect its operations,
the business may become noncompliant. Noncompliance often involves paying government fines, which
are financial losses for the business. Environmental attorneys have specialized knowledge of laws that
affect the natural environment (e.g., pollution and water quality). The degree to which a business's
activities affect the environment influences the need to hire an environmental attorney. Businesses
purchase property insurance to limit losses related to buildings and land. Contract law is a category of
law that specializes in contracts or formal agreements. Encouraging all employees to understand the
advanced principles of contract law does not lower a business's noncompliance risks.
</h5></div><h5 id='q94'>94. The core activity of managerial planning involves</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. modifying behavior.</option><option value="B">B. determining objectives.
</option><option value="C">C. implementing procedures.</option><option value="D">D. identifying gains.
</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: determining objectives.
</h5><h5>Explanation not available</h5></div><h5 id='q95'>95. What type of plan do businesses often implement when an original plan fails to produce the desired
results?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Production</option><option value="B">B. Communications</option><option value="C">C. Contingency</option><option value="D">D. Strategic

2013 HS ICDC

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

11
</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: Contingency</h5><h5>A contingency plan is an alternative course of action. For example, a business that
originally plans to hold an event outside might develop an alternative plan to hold the event indoors if the
weather forecast calls for rain during the event. Strategic planning involves long-term planning (more
than one year) and focuses on the general future of company. A production plan outlines the way the
business will use inputs to create outputs. A communications plan outlines the way the business's
information will be distributed.
</h5></div><h5 id='q96'>96. An important activity associated with the organizing function of management is</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. developing a blueprint.</option><option value="B">B. defining employees' roles.</option><option value="C">C. evaluating performance.</option><option value="D">D. creating tangible outputs.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: defining employees' roles.</h5><h5>Organizing is the management function of setting up the way the
business's work will be done. Organizing involves assigning responsibility and tasks to human resources,
which defines each employee's role in the business. The planning function of management involves
deciding what will be done and how it will be accomplished. The planning function involves developing a
blueprint for the organization's activities. Controlling is the management function that monitors the work
effort, which includes evaluating productivity or performance against established standards. The
production process involves creating or making outputs.
</h5></div><h5 id='q97'>97. Coordinating business activities is an important aspect of the organizing function of management
because it</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. defines the company's mission statement.</option><option value="B">B. enables the business to prepare precise forecasts.</option><option value="C">C. establishes clear relationships among the company's resources.</option><option value="D">D. ensures that the employees understand all the business's activities.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: establishes clear relationships among the company's resources.</h5><h5>Organizing involves determining the
types of resources the business needs and how the various resources will work together to accomplish
the business's goals in the most efficient ways. Therefore, the organizing function of business establishes
clear relationships among employees and defines the ways in which the tasks that employees perform
connect to one another. The organizing function does not enable the business to prepare precise
forecasts, define the company's mission statement, or ensure that all employees understand all the
business's activities.
</h5></div><h5 id='q98'>98. Which of the following has a negative effect on an understaffed business:</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Fewer premiums</option><option value="B">B. Decreased turnover</option><option value="C">C. Increased errors</option><option value="D">D. Higher property taxes</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: Increased errors</h5><h5>Staffing is the management function of finding workers for a business. An understaffed
business does not have enough employees to carry out the work. When employees have more
responsibilities than they can adequately handle, they are more likely to make errors, which is costly to
the business. An understaffed business often experiences high turnover because employees burn out
and find new jobs. A premium is an item that a business offers free to the purchaser of a particular
product. Understaffing a business does not typically affect the number of premiums that a business offers
its customers, nor does it affect the business's property tax rate.
</h5></div><h5 id='q99'>99. Kate says, “I am very pleased with your progress on the project, Devon. Take the rest of the day off, and
we'll talk about the next phase of the project tomorrow.” What directing activity is Kate performing?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Delegating responsibility</option><option value="B">B. Establishing a schedule</option><option value="C">C. Motivating an employee</option><option value="D">D. Training a worker</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: Motivating an employee</h5><h5>Directing is the management function of providing guidance to workers and
work projects. Directing often involves motivating employees, which is getting employees to strive to
achieve management's objectives because they want to achieve them. Managers motivate employees in
a variety of ways, such as providing positive feedback, pay raises, and incentives (e.g., time off).
Establishing a schedule and delegating responsibility are organizing activities. Training is a staffing
activity.
</h5></div><h5 id='q100'>100. Latin-American businesspeople often hold several meetings to build trust and get to know their business
partners. Businesspeople from other cultures often find this practice frustrating because they want to get
down to business. This example illustrates how __________ differs among cultures.</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. regulation</option><option value="B">B. language</option><option value="C">C. ethical behavior</option><option value="D">D. communication style</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: communication style</h5><h5>Communication style is the way in which people interact and exchange
information. Cultures vary in the way they communicate. Some cultures are direct and prefer to get down
to business. Others, such as the Latin-American culture, prefer to take time to get to know their business
partners. The example does not illustrate language, ethical, or regulatory differences.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Business-Admin_12_Whole_Homework.js"></script></html>