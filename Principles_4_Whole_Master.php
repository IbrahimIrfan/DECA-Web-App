<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles Exam 4</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Brix Beauty Salon used a celebrity's name and photograph in a recent newspaper advertisement, even
though the celebrity had not given Brix permission to use her name and likeness. What tort did Brix
Beauty Salon commit?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Wrongful interference</option><option value="B">B. Appropriation</option><option value="C">C. Defamation</option><option value="D">D. Conversion</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: Appropriation</h5><h5>Torts are civil wrongdoings that cause harm or injury to another party. Appropriation,
wrongful interference, defamation, and conversion are four kinds of torts. Appropriation, which Brix
Beauty Salon committed, involves a business or person who uses—without permission—another
person's name, likeness, and other unique characteristics for the benefit or gain of the user. Brix Beauty
Salon used the celebrity's name and picture to attract customers to the salon. Unfortunately, Brix had not
obtained permission to use the celebrity's name or likeness. As a result, the celebrity could sue Brix for
appropriation. Wrongful interference consists of predatory behavior undertaken by a business to draw
either customers or employees away from a competitor. Defamation involves making false, malicious
statements about a person or organization. Conversion occurs when personal property is taken from the
owner and given to someone else to use.
</h5></div><h5 id='q2'>2. Individuals and businesses who are sued have a legal right to present evidence on their behalf before a
court can impose a penalty. In other words, these individuals and businesses have a right to</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. substantive due process.</option><option value="B">B. procedural due process.</option><option value="C">C. the Takings Clause.</option><option value="D">D. sovereign immunity.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: procedural due process.</h5><h5>Procedural due process exists to ensure that individuals and businesses who
are sued or charged with a crime have the opportunity to present evidence on their behalf before a court
can impose a penalty. Requiring the government to go through a certain set of legal procedures before
taking someone's liberty and/or property provides the person or business in question a greater chance of
being treated fairly. Substantive due process exists to ensure that the government does not take away
our fundamental rights (e.g., privacy). The Takings Clause requires the U.S. government to pay a fair
price for any private property that it takes for public use. Sovereign immunity protects a federal
government from lawsuits brought against it in foreign courts.
</h5></div><h5 id='q3'>3. Most nations' federal agencies must function within certain limits identified in the specific enabling
legislation that gave the agencies their powers. These limits on the federal agencies' activities are an
example of</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. political control.</option><option value="B">B. statutory control.</option><option value="C">C. judicial review.</option><option value="D">D. informational control.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: statutory control.</h5><h5>Four methods used to limit and regulate the activities of federal agencies are statutory
control, political control, judicial review, and informational control. In many countries, the legislative
branch has the power to pass statutes (laws) establishing federal agencies. This enabling legislation
often identifies limits to the agencies' powers. In other words, these statutes control the agencies'
activities. The government wields political control over these agencies by providing (or withholding)
funding, by approving (or speaking out against) individuals nominated to lead these agencies, and by
amending the agencies' enabling legislation. The courts can also control federal agencies by reviewing
and deciding the legality of the agencies' actions. Finally, the public can indirectly control federal
agencies through information. Most federal agencies are required to provide the public with information
on different topics. After reviewing the information, private citizens can take action to influence the
activities of these federal agencies.
</h5></div><h5 id='q4'>4. Paula asks herself questions such as “What do I want to get out of this article?” and “What are the main
points of this article?” whenever she reads an article while conducting research. Paula is using
__________ techniques.</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. prospecting</option><option value="B">B. active reading</option><option value="C">C. summary close</option><option value="D">D. professional editing</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: active reading</h5><h5>To successfully identify and extract relevant information from written materials, you
should use active reading techniques. These techniques include determining what information you are
looking for prior to reading the text, asking questions of and examining the text, and summarizing the
central themes of the text. Prior to reading any article, for instance, Paula specifies the information that
she needs to gather or get out of the written material. Then, she looks for that specific information as she
scans the document. While reading the article, she also summarizes its main points—either mentally or in
writing—to better comprehend the information presented in the article. After asking herself questions and
summarizing the article's main points, Paula is more likely to locate and extract relevant, helpful
information that she can use. Paula is not prospecting, using a summary close, or professionally editing
the article.
</h5></div><h5 id='q5'>5. What is an effective way to support and encourage someone who is talking to you?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Clap as the speaker makes each of her/his main points</option><option value="B">B. Interrupt the speaker to debate what s/he has said</option><option value="C">C. Make comments such as “yes” or “I see” occasionally</option><option value="D">D. Avoid making any noise while the speaker is talking</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: Make comments such as “yes” or “I see” occasionally</h5><h5>When someone talks to you, nod and make short
comments such as “yes” or “I see” occasionally. By doing so, you signal that you are listening to the
speaker and hearing what s/he has to say. And, when you nod and make short comments, you show
your support and encouragement for the speaker. It is very rude to interrupt the speaker to debate what
s/he has said. It is not necessary to clap as the speaker makes each of her/his main points. Rather than
not making any noise while the speaker is talking, you should limit yourself to short comments.
</h5></div><h5 id='q6'>6. In North America, what nonverbal cue often indicates defensiveness?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Fingernail biting</option><option value="B">B. Crossed arms</option><option value="C">C. Raised eyebrows</option><option value="D">D. Hands behind head</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: Crossed arms</h5><h5>Individuals communicate with those around them verbally as well as nonverbally.
Nonverbal cues—including facial expressions, eye contact, body language, tone of voice, and use of
physical space—communicate as much (or more) than a person's words. Nonverbal cues can express
emotions, attitudes, rituals, etc. In North America, crossed arms often indicate defensiveness, although
individuals may also cross their arms because they are cold, frightened, or cautious. Fingernail biting is
typically a sign of nervousness. People often raise their eyebrows when they are surprised or are looking
at something closely. When people put their hands behind their heads, they are indicating that they are
comfortable and open to ideas.
</h5></div><h5 id='q7'>7. Sarah is speaking to a customer who is decisive, forceful, and in a hurry. Sarah should</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. give the customer time to talk about himself/herself.</option><option value="B">B. get to the point of her communication quickly.</option><option value="C">C. discuss detailed statistics and information.</option><option value="D">D. take time to develop a relationship with the customer.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: get to the point of her communication quickly.</h5><h5>Decisive, forceful individuals are typically very goaloriented and interested in results. They usually don't like to waste time, so Sarah should get to the point
of her communication quickly, especially since the customer is in a hurry. The customer is not likely to
want to take time to talk about himself/herself, discuss detailed statistics and information, or develop a
relationship with Sarah.
</h5></div><h5 id='q8'>8. Due to a slump in sales, the RLT Company has decided to lay off 45 workers. Walter, an RLT manager,
must choose three employees from within his department to let go. Although it would be easy to allow his
emotions to influence his actions, Walter must base his decision regarding the layoffs strictly on facts and
data. Walter must be able to defend his decision</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. subjectively.</option><option value="B">B. objectively.</option><option value="C">C. quarterly.</option><option value="D">D. inductively.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is B: objectively.</h5><h5>Rather than allowing his feelings (positive or negative) for his employees to influence his
choice of workers to lay off, Walter must base his decision strictly on facts and accurate data. In other
words, Walter must be able to justify and defend his decision, if necessary. Whenever a person uses
facts rather than emotions to defend her/his decision or idea, that person is defending his/her decision or
idea objectively. Because Walter can defend his ideas objectively, no one can accuse him or his
company of playing favorites or choosing to keep a particular worker simply because Walter likes that
employee or because the worker's family has no other income. Subjective ideas are based on emotion,
not on fact. There is no indication that Walter will be defending his decision inductively or on a quarterly
basis.
</h5></div><h5 id='q9'>9. Which of the following is typically the first step in holding a group discussion:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Find out what group members know about the subject.</option><option value="B">B. Make sure group members understand the group's purpose.</option><option value="C">C. Summarize what the group has said during the discussion.</option><option value="D">D. Build on another group member's comment.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: Make sure group members understand the group's purpose.</h5><h5>The first step in holding a group discussion
is typically making sure that everyone understands the group's purpose and reason for having the
discussion. If group members don't know the desired outcome of the discussion, the discussion itself is
much less likely to be productive. After making sure that everyone knows the group's purpose, it is
important for the group members to agree on some ground rules for the discussion. Then, it's wise to find
out what group members know about the subject. Anyone with knowledge of the subject should share
what s/he knows about it so that the entire group can begin from the same starting point. It is not possible
to build on another group member's comment until someone else in the group contributes to the
discussion. You must also wait until later in the discussion to summarize what the group has said during
the discussion itself.
</h5></div><h5 id='q10'>10. Dale is taking notes during a staff meeting. Dale should</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. write his notes in complete sentences.</option><option value="B">B. organize his notes in a logical manner.</option><option value="C">C. capture every word that is said.</option><option value="D">D. avoid abbreviations and symbols.
</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: organize his notes in a logical manner.</h5><h5>Effective note-taking is essential in school as well as on the job.
Regardless of whether you are in a university lecture hall or in a staff meeting, taking notes helps you to
better remember important information and record facts, figures, and other details that may not be
available elsewhere. Notes that are organized in a logical manner are much clearer, more
understandable, and easier to read than notes that follow no form at all. When taking notes, it is not
necessary to capture every word that is said. Instead, you should focus on the main points and subpoints
of the conversation. It is also not necessary to write notes in complete sentences. To save time and
space, you should use abbreviations and symbols whenever appropriate.
</h5></div><h5 id='q11'>11. A professional wedding photographer is developing a price list of the different photo packages that she
offers. She is listing the packages from the least expensive to the most expensive. She is organizing the
package information</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. by location.</option><option value="B">B. by value.</option><option value="C">C. inductively.</option><option value="D">D. deductively.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is B: by value.</h5><h5>When information is organized by value or size, either the least valuable (i.e., smallest or least
expensive) or most valuable (i.e., largest or most expensive) item is listed first, followed by other items in
ascending (if starting with the least valuable) or descending (if starting with the most valuable) order. The
professional wedding photographer, for instance, is organizing her photo packages in order from least
expensive to most expensive so that customers can quickly determine what is available to them at
different price points. Some information can also be organized by geographic location, such as by state,
county, or city. Information organized in inductive order begins with facts and examples and ends with
conclusions. Information organized deductively, on the other hand, presents the conclusions or main
ideas first, followed by facts and examples that support the conclusions or main ideas. The professional
wedding photographer is not organizing her photo package information inductively, deductively, or by
location.
</h5></div><h5 id='q12'>12. Which of the following is an example of an effective subject line for a professional e-mail:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Can we talk for a minute?</option><option value="B">B. New product information</option><option value="C">C. One more thing . . .</option><option value="D">D. Mtg. rescheduled for 3 p.m.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: Mtg. rescheduled for 3 p.m.</h5><h5>An effective subject line for a professional e-mail should summarize the body
of the message and make it easy for the recipient to understand the purpose of the e-mail. “Mtg.
rescheduled for 3 p.m.”, for example, clearly communicates the focus of the e-mail (the meeting) and
provides enough information for the recipient to understand why the e-mail was sent to him/her (to inform
him/her that the new time for the meeting is 3 p.m.). “New product information” is not specific enough for
the recipient to understand what product is the focus of the message. “One more thing . . .” and “Can we
talk for a minute?” are vague and provide little information to help the recipient understand the reason for
the e-mail.
</h5></div><h5 id='q13'>13. Which of the following is a recipient-focused informational message:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Everything in the store is on sale during the store's 50th anniversary sale!</option><option value="B">B. We're holding a once-in-a-lifetime sale to celebrate our 50th year of business!</option><option value="C">C. You'll save at least 50% on everything in the store during this incredible sale!</option><option value="D">D. Webber Fashions has been in business for 50 years, so we're celebrating!</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: You'll save at least 50% on everything in the store during this incredible sale!</h5><h5>Whenever possible,
informational messages should focus on the recipient, not on the sender. Recipient-focused messages
are more likely to attract the reader's attention and communicate information to the reader effectively.
Recipient-focused messages typically start with the word “you,” such as “You'll save at least 50% on
everything in the store during this incredible sale!” “We're holding a once-in-a-lifetime sale to celebrate
our 50th year of business!” and “Webber Fashions has been in business for 50 years, so we're
celebrating!” are both sender-focused. “Everything in the store is on sale during the store's 50th
anniversary sale!” is neutral-neither recipient- nor sender-focused.
</h5></div><h5 id='q14'>14. Letters of inquiry should be as __________ as possible.</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. verbose</option><option value="B">B. vague</option><option value="C">C. specific</option><option value="D">D. demanding</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: specific</h5><h5>A letter of inquiry is typically a brief e-mail or written letter used to request information,
appointments, funding, or other assistance from letter recipients. Business people frequently write letters
of inquiry to customers, vendors, and other organizations. Letters of inquiry should be as specific and
concise as possible. When writing a letter of inquiry, you should provide pertinent details to the recipient
but not overwhelm him/her with unnecessary information. Letters of inquiry should not be vague, verbose
(wordy), or demanding.
</h5></div><h5 id='q15'>15. Which of the following statements regarding executive summaries is true:</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. You should sequence the main ideas of your executive summary in the same order that they
appear in your full report.</option><option value="B">B. Your executive summary should be approximately one-fourth to one-third as long as your entire
report.</option><option value="C">C. You should always write your executive summary before writing the body and appendices of your
report.</option><option value="D">D. You should use jargon, technical language, abbreviations, and slang frequently throughout your
executive summary.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: You should sequence the main ideas of your executive summary in the same order that they
appear in your full report.</h5><h5>Explanation not available</h5></div><h5 id='q16'>16. Every Friday, Odessa is supposed to remind employees to complete and sign their time sheets before
going home for the weekend. What is the most appropriate channel for Odessa's reminder to
employees?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Phone</option><option value="B">B. Fax</option><option value="C">C. E-mail</option><option value="D">D. Letter</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: E-mail</h5><h5>The most appropriate communication channel for routine workplace messages such as Odessa's
reminder to employees is e-mail. Since her message is likely to be the same each week, she can write
the reminder once and then set up her e-mail program to automatically send the message to each
employee at the end of each week. Phoning each employee to remind him/her would be very timeconsuming. Every employee probably does not have her/his own fax machine. Sending a letter to each
employee every week via the postal service would be expensive.
</h5></div><h5 id='q17'>17. Thomas does not know the answer to Mr. O'Malley's question about a complex product. Which of the
following is the best way for Thomas to respond to Mr. O'Malley's inquiry:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. "I'll need to read the product manual before I can answer your question, Mr. O'Malley. I'll get
back to you next week."</option><option value="B">B. "Let me give you the manufacturer's web-site address. The information is probably available on
the product-specifications page."</option><option value="C">C. "I'm not sure, Mr. O'Malley. My coworker, Reggie, knows a lot about this model. If you can wait a
moment, I will have him speak with you."</option><option value="D">D. "I don't know. We do have a customer who just purchased this model. I'll get Mrs. Thompson's
telephone number for you."</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: "I'm not sure, Mr. O'Malley. My coworker, Reggie, knows a lot about this model. If you can wait a
moment, I will have him speak with you."</h5><h5>If employees do not know the answers to customers' questions,
they should try to find another employee who does. This person may be a coworker, supervisor, or an
individual who works in another department. To provide good customer service, Thomas should do his
best to answer Mr. O'Malley's question as soon as possible. Providing the manufacturer's web-site
address and reading the product manual at a later time are not options that provide prompt customer
service. It is inappropriate to give out customers' telephone numbers to others without their permission.
</h5></div><h5 id='q18'>18. Recently, Miranda Corbin met with a Brazilian entrepreneur to sign a business contract. When Miranda
smiled and gave the entrepreneur the “OK” sign after the contract was signed, the entrepreneur frowned
in disbelief and immediately left the room. Later, Miranda learned that Brazilians view the “OK” sign as an
offensive gesture. Miranda could have avoided the embarrassing breach of etiquette by</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. learning to speak in the country's official language fluently.</option><option value="B">B. conducting research about the country's culture before her meeting.</option><option value="C">C. taking courses about Brazilian literature and history.</option><option value="D">D. touring the Brazilian embassy to obtain information about the country's regulations.

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

3
</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: conducting research about the country's culture before her meeting.</h5><h5>Businesspeople should try to learn
as much as they can about a client's culture, customs, and social values before interacting with them. By
understanding and being aware of cultural differences, businesspeople can adapt their communication
styles to make a positive impression on their clients and not offend them by using gestures that the
culture finds offensive. Learning to speak basic phrases in the country's language and learning about the
country's literature and history might be helpful and interesting; however, these actions would not have
helped Miranda learn about the current cultural and social habits that differ from her native country. Also,
touring the Brazilian embassy to learn about the country's regulations would not have helped Miranda
understand that certain gestures should not be used while meeting with Brazilians.
</h5></div><h5 id='q19'>19. To handle customer complaints effectively, the first thing that employees should do is to</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. take the customers' problems personally.</option><option value="B">B. listen to the customers to understand their concerns.</option><option value="C">C. give the customers what they want to make them happy.</option><option value="D">D. state the business's policies to prevent misunderstandings.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: listen to the customers to understand their concerns.</h5><h5>The first thing an employee should do is to listen to
the customer to try to determine the reason for the complaint. If employees fully understand their
customers' complaints, they will be better able to solve the problem. Employees should express empathy,
but they should not take customers' complaints as personal attacks against them. It is not always
possible to give customers whatever they want to make them happy. In some situations, the business
and the customer may need to compromise. Stating the business's policies before listening to the
customers' complaints may frustrate the customers and make them angry.
</h5></div><h5 id='q20'>20. A company consistently fulfills its brand promise by using</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. product-line extensions.</option><option value="B">B. external publicity.</option><option value="C">C. touch points.</option><option value="D">D. tangible services.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is C: touch points.</h5><h5>Rather than
not making any noise while the speaker is talking, you should limit yourself to short comments.
</h5></div><h5 id='q21'>21. RTM Manufacturing detected a problem with its model YR3 but delayed issuing a product recall for
several weeks. As a result, five customers were injured while using the product. When the product-recall
delay was made public, many customers stopped buying products from RTM. What lesson can be
learned from this situation?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Customers are generally forgiving and are likely to buy from the company again after it pays
damages to the injured customers.</option><option value="B">B. Customers are likely to feel betrayed at first, but they will start buying again when the product
defect has been fixed.</option><option value="C">C. The company's sales would likely have increased if it had issued the product recall right away.</option><option value="D">D. Perceptions of unethical behavior can erode customers' trust and the company's image.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: Perceptions of unethical behavior can erode customers' trust and the company's image.</h5><h5>Explanation not available</h5></div><h5 id='q22'>22. Which of the following are examples of capital goods:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Refineries, iron ore, and computers</option><option value="B">B. Trucks, drum scanners, and minerals</option><option value="C">C. Tractors, laborers, and cranes</option><option value="D">D. Bull dozers, photocopiers, and roads</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bull dozers, photocopiers, and roads</h5><h5>Capital goods are manufactured or constructed items that are used
to produce goods and services. Bull dozers, photocopiers, roads, trucks, drum scanners, tractors, cranes,
refineries, and computers are types of capital goods. Laborers are human resources. Minerals and iron
ore are natural resources.
</h5></div><h5 id='q23'>23. What must happen before the consumption of any economic goods can take place?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Production</option><option value="B">B. Scarcity</option><option value="C">C. Capitalism</option><option value="D">D. Payment</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: Production</h5><h5>The economic goods must be produced before consumers can buy and use them. Scarcity is
the gap between unlimited wants for goods and services and the resources available to obtain the goods
and services. Capitalism is an economic system that depends on honest, healthy competition between
businesses. Payment is a form of exchange, usually money. Some goods and services are provided free
of charge, so payment does not always occur before they are consumed.
</h5></div><h5 id='q24'>24. Pricing the product appropriately is a(n) ___________ activity.</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. financing</option><option value="B">B. operations-management</option><option value="C">C. marketing</option><option value="D">D. information-management</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: marketing</h5><h5>Marketing is an organizational function and a set of processes for creating, communicating,
and delivering value to customers and for managing customer relations in ways that benefit the
organization and its stakeholders. Pricing is the element of marketing that involves determining the
amount of money that businesses will ask in exchange for their products. Operations management is the
process of planning, controlling, and monitoring the day-to-day activities (e.g., purchasing) required for
continued business functioning. Financing is the process of obtaining funds and using them to achieve
the goals of the business. Information management is the process of accessing, processing, maintaining,
evaluating, and disseminating knowledge, facts, or data for the purpose of assisting business decision
making.
</h5></div><h5 id='q25'>25. An overall concern about the well-being of the natural environment has influenced many companies to
use recycled materials in their packaging. In this example, ___________ factors have affected the
business environment.</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. technological</option><option value="B">B. economic</option><option value="C">C. political</option><option value="D">D. social</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: social</h5><h5>Many external factors can affect a business's ability to compete in the marketplace. Social factors
affect businesses because they involve their target markets. Social factors involve changes in values and
attitudes about issues that affect society as a whole. Society has become increasingly concerned about
the well-being of the environment. In response, businesses have taken steps to reduce pollution, create
earth-friendly products, and use recycled materials in their packaging. Economic factors relate to how
people generate revenue to obtain the desired goods and services. Government stability and laws are
political factors that operate in the business environment. Technological trends deal with shifts in the type
of technology available or used.
</h5></div><h5 id='q26'>26. Trevor owns a small business. Last month, the business's income exceeded its operating expenses by
$4,000. To improve the business's efficiency, Trevor decided to use the $4,000 to purchase new
computer software. In this situation, Trevor applied ___________ in an effective way.</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. slack resources</option><option value="B">B. innovative processes</option><option value="C">C. competitive aggression</option><option value="D">D. organizational learning</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: slack resources</h5><h5>Minerals and iron
ore are natural resources.
</h5></div><h5 id='q27'>27. Which of the following statements is true about economic systems:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Governments make most of the economic decisions in all economic systems.</option><option value="B">B. Most economic systems have unlimited resources.</option><option value="C">C. Businesses own the means of production in all economic systems.</option><option value="D">D. People in all economic systems are interdependent.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: People in all economic systems are interdependent.</h5><h5>An economic system is the organized way in which a
country handles its economic decisions and solves its economic problems. All economic systems are
alike in that every country needs an economic system to make decisions about what to do with its limited
resources. All people in all economic systems depend on one another to obtain the things they want—
they are interdependent. Interdependence involves coordinating the activities of producers, consumers,
and government to obtain the desired goods and services. In some economic systems (e.g., communist
command), the government controls practically all of the means of production and distribution. In other
economic systems (e.g., open market), businesses and individuals are primarily responsible for
production and distribution. In open market economic systems, the government regulates business
activities to protect consumers and provide a fair competitive environment among businesses.
</h5></div><h5 id='q28'>28. A business offers a service to customers that other similar businesses do not offer. This is an example of</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. price competition.</option><option value="B">B. direct distribution.</option><option value="C">C. indirect distribution.</option><option value="D">D. nonprice competition.

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

4
</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: nonprice competition.

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

4
</h5><h5>Explanation not available</h5></div><h5 id='q29'>29. A business typically pays property tax to the government when</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. the business sells goods directly to other businesses or individuals.</option><option value="B">B. the value of the business's equipment decreases over time.</option><option value="C">C. the business sells the property for more money than it paid for it.</option><option value="D">D. the business owns the building in which it operates.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: the business owns the building in which it operates.</h5><h5>Businesses that own buildings and land must pay
property taxes to the government at specific intervals. The property-tax amount is based on the value of
the land and building. The value of the land and building is affected by many factors, such as the location
of the property. When the value of a business's goods or equipment decreases over time, it is known as
depreciation. When it sells land or a building, a business pays a capital-gains tax, which is based the
difference between the purchase price and the higher selling price. Sales tax is typically charged on
nonessential goods such as candy, books, and shampoo. Businesses (e.g., retailers) that sell the goods
collect the sales tax from their customers and give the money to the government at set intervals.
</h5></div><h5 id='q30'>30. When the contract negotiations between the labor union and Sweet Confections Candy Company stalled,
union members decided not to buy any of the company's products until an agreement was reached.
Union members also encouraged their friends and family to stop buying the company's candy, too. What
pressure strategy did the labor union use to facilitate resolution with management?</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Boycott</option><option value="B">B. Picketing</option><option value="C">C. Injunction</option><option value="D">D. Lockout</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: Boycott</h5><h5>A boycott is a union strategy in which union members refuse to buy a company's products. The
goal of a boycott is to hurt a business's sales so much that it is forced to concede to union demands.
Picketing is a form of protest that involves positioning union members (pickets) near a business's
entrance during a conflict or strike. Pickets usually carry signs and chant slogans to publicize their
discontent. An injunction is a court order that forbids people from carrying out certain activities (e.g.,
picketing). A lockout occurs when management refuses to allow union members to work. Injunctions and
lockouts are pressure strategies used by management rather than labor unions.
</h5></div><h5 id='q31'>31. A company had a short-term project requiring a fast turnaround. Its manager initially hired five employees
to work on the project but decided more staff was needed to meet the deadline. The manager hired five
more and then, five more. At some point, the manager found that each employee's output decreased as
more employees were added. What economic concept was at work here?</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Law of economies of scale</option><option value="B">B. Law of supply and demand</option><option value="C">C. Law of diminishing returns</option><option value="D">D. Law of elasticity</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: Law of diminishing returns</h5><h5>The reduction in output was not due to the fastest or best workers being hired
initially. Instead, the environment in which the employees worked became less conducive to getting the
job done. At some point, the manager had too many people trying to use a fixed amount of equipment.
The law of diminishing returns applies to the short term since, over time, additional equipment could be
acquired. The law of supply and demand is an economic principle which states that the supply of a good
or service will increase when demand is great and decrease when demand is low. Economies of scale is
the economic concept that the average cost of production decreases as a business expands. Elasticity
refers to the responsiveness of a supply and demand curve to changes in price.
</h5></div><h5 id='q32'>32. Which of the following is a source of frictional unemployment:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Individuals enter the workforce after graduating from school.</option><option value="B">B. A company closes its doors when its products become obsolete.</option><option value="C">C. A business dismisses some of its workers during an economic recession.</option><option value="D">D. The demand for laborers changes based on the time of year.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: Individuals enter the workforce after graduating from school.</h5><h5>Frictional unemployment refers to people
who are temporarily between jobs. These people have the skills and training they need to work but are
unemployed because they are looking for jobs or are between jobs. An example of a source of frictional
unemployment is recent college graduates who have not yet acquired jobs. When people are
unemployed because of outdated skills or obsolete products, structural unemployment exists. Cyclical
unemployment occurs when there is low demand for workers, such as during times of economic
recession when workers are often laid off. Seasonal unemployment occurs when people are out of work
because of factors that involve the time of year.
</h5></div><h5 id='q33'>33. What tends to happen when interest rates decrease?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Consumers save less and spend more</option><option value="B">B. Unemployment rates increase</option><option value="C">C. Business expansions decrease</option><option value="D">D. Consumers save more and spend less</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: Consumers save less and spend more</h5><h5>The cost of borrowing money decreases when interest rates
decrease. Consumers are more likely to purchase large-ticket items (e.g., homes, cars) when the cost of
borrowing decreases. This means consumers are spending more money and saving less. Businesses
benefit when interest rates decrease because the cost to borrow money for expansion is less.
Unemployment tends to increase during an economic downswing. During a economic downswing,
businesses often decrease production, which often results in employee layoffs and hiring freezes.
</h5></div><h5 id='q34'>34. The value of a currency in a floating exchange-rate system is determined by</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. supply and demand.</option><option value="B">B. previous exchange-rate data.</option><option value="C">C. international banks.</option><option value="D">D. the world economic commission.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: supply and demand.</h5><h5>The value of a nation's currency fluctuates in a floating exchange-rate system.
Although many factors can affect the value of a nation's currency, the floating-exchange rate is driven by
the supply of and demand for the currency. For example, suppose that a lot of people want to exchange
their currencies for the Canadian dollar on Tuesday. The increase in demand will cause the price of the
Canadian dollar to increase. If the demand drops, so will the value of the Canadian dollar. Previous
exchange-rate data, international banks, and the world economic commission do not determine the value
of currency in a floating exchange-rate system.
</h5></div><h5 id='q35'>35. Which of the following is an example of an individual who stereotypes others on the basis of gender:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Kate believes that she is smarter than Ronald because she has earned a master's degree, and
Ronald has only completed two years of his college education.</option><option value="B">B. Daniel believes that men are more dedicated to their jobs than women because women are
usually focused on raising children.</option><option value="C">C. Because Lorna is set in her ways and ready to retire, William doesn't think that she will be able to
learn the new computer system quickly.</option><option value="D">D. Because her family has a lot of money to travel, Alexandria thinks that she is more sophisticated
than Pamela.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: Daniel believes that men are more dedicated to their jobs than women because women are
usually focused on raising children.</h5><h5>Explanation not available</h5></div><h5 id='q36'>36. What is a characteristic of self-confident people?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. The desire to cover up their mistakes before others find out about them</option><option value="B">B. The willingness to step out of their comfort zones to take positive risks</option><option value="C">C. The ability to tell as many people as possible about their accomplishments</option><option value="D">D. The ability to modify their beliefs and behaviors to make others happy</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: The willingness to step out of their comfort zones to take positive risks</h5><h5>Self-confidence is a positive belief
in your own talents, skills, and objectives. Self-confident people are willing to take positive risks, which
involve stepping out of their comfort zones. Self-confident people understand that mistakes are a part of
life and do not let the risk of failure keep them from taking action. Self-confident people are willing to
admit their mistakes, accept compliments while remaining humble, and maintain their beliefs and
behaviors even when others are critical of those beliefs and behaviors.
</h5></div><h5 id='q37'>37. Which of the following is an example of unethical work behavior:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Texting friends during a work shift</option><option value="B">B. Arriving at work 15 minutes early</option><option value="C">C. Using supplies to complete work tasks</option><option value="D">D. Taking responsibility for mistakes

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

5
</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: Texting friends during a work shift</h5><h5>Ethical employees are responsible employees who adhere to a
standard of appropriate behavior. Ethical employees are reliable and honest. They complete take
responsibility for their mistakes, use supplies wisely to complete work-related tasks, and often arrive at
work early so they are ready to begin their tasks on time. Ethical employees do not use company time to
conduct personal activities, such as sending text messages to friends.
</h5></div><h5 id='q38'>38. Noah has been monitoring the triggers that frustrate and irritate him at work, so he can learn to handle
difficult situations in more appropriate ways. What technique is Noah using to improve his ability to
manage his emotions and actions?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Punishment</option><option value="B">B. Reward system</option><option value="C">C. Stimulus control</option><option value="D">D. Extinction</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: Stimulus control</h5><h5>Four methods used to limit and regulate the activities of federal agencies are statutory
control, political control, judicial review, and informational control. In many countries, the legislative
branch has the power to pass statutes (laws) establishing federal agencies. This enabling legislation
often identifies limits to the agencies' powers. In other words, these statutes control the agencies'
activities. The government wields political control over these agencies by providing (or withholding)
funding, by approving (or speaking out against) individuals nominated to lead these agencies, and by
amending the agencies' enabling legislation. The courts can also control federal agencies by reviewing
and deciding the legality of the agencies' actions. Finally, the public can indirectly control federal
agencies through information. Most federal agencies are required to provide the public with information
on different topics. After reviewing the information, private citizens can take action to influence the
activities of these federal agencies.
</h5></div><h5 id='q39'>39. Which of the following is an example of an employee invading a coworker's privacy:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Kevin takes Sarah's stapler off her desk after she tells him it is okay to borrow it for a while.</option><option value="B">B. Christina quietly leaves the room and shuts the door when Paul receives a personal phone call.</option><option value="C">C. Martha knocks on the door before entering the meeting room to tell Ryan that his client has
arrived.</option><option value="D">D. John reads the e-mail message on Suzanne's computer screen while she is away from her desk.</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: John reads the e-mail message on Suzanne's computer screen while she is away from her desk.</h5><h5>Explanation not available</h5></div><h5 id='q40'>40. Two coworkers talking about last night's basketball game are engaging in ___________ communication.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. informal</option><option value="B">B. nonverbal</option><option value="C">C. vertical</option><option value="D">D. critical</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: informal</h5><h5>Informal communication often takes place in social situations, such as talking with friends or
coworkers about sports, events, and hobbies. Nonverbal communication transmits information through
facial expression and body language. Vertical communication is a type of formal communication that
involves distributing information from the top of the organization to lower levels of the organization.
Critical communication involves the transmission of serious or time-bound messages.
</h5></div><h5 id='q41'>41. Alicia is trying to persuade members of her work team to implement a new process. Because Alicia used
this process with her former employer, she is very knowledgeable and knows what needs to be done to
make a smooth transition. The work team is likely to go along with the change because Alicia has</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. coached others effectively.</option><option value="B">B. exhibited cultural sensitivity.</option><option value="C">C. demonstrated empathy.</option><option value="D">D. established personal credibility.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: established personal credibility.</h5><h5>Credibility is believability. To be able to persuade others, individuals
need to be credible so others believe what they say. Individuals who are credible have a reputation of
providing accurate information in a fair manner. They are well-informed and use reliable sources to
support their opinions and ideas. As a result, others believe them and often are persuaded to do what
they want. Because Alicia is an honest person who has prior experience with the process, she has
credibility. There is not enough information provided to determine if Alicia has exhibited cultural
sensitivity, demonstrated empathy, or coached others effectively.
</h5></div><h5 id='q42'>42. Frank hurt Maggie's feelings when they disagreed about something. Now, Maggie goes out of her way to
avoid Frank and not confront him about the situation. What conflict-response mode is Maggie using?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Forcing</option><option value="B">B. Yielding</option><option value="C">C. Negotiating</option><option value="D">D. Withdrawal</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: Withdrawal</h5><h5>Conflict-response mode refers to the manner in which a person reacts when a disagreement
occurs. Maggie's conflict-response mode involves ignoring the conflict by withdrawing and avoiding
contact with Frank. Ignoring a situation, or pretending that it doesn't exist, cannot resolve the conflict and
can increase Maggie's stress levels because she may be always thinking of ways to avoid Frank. The
yielding-response mode involves giving the other person what s/he wants, and the negotiating-response
mode involves a compromise. Forcing is using physical or emotional responses such as throwing
punches or using offensive language.
</h5></div><h5 id='q43'>43. Ann has until the end of the day to collect research for a report. Now it is mid-afternoon, and three
coworkers have come into her office to ask for help with work-related problems. Ann is starting to panic,
wondering if she will have the research done by her deadline. In this situation, Ann's source of stress is
related to</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. unclear business policies.</option><option value="B">B. an unrealistic workload.</option><option value="C">C. work interruptions.</option><option value="D">D. difficult working relationships.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is C: work interruptions.</h5><h5>Interruptions prevent employees from focusing on the task at hand. When an
employee experiences several interruptions during a short time span, her/his work falls behind. Falling
behind on a project often triggers stress, especially if a tight deadline is looming. This is what is triggering
Ann's stress. She has fallen behind and doesn't know if she will achieve her deadline because her work
had been interrupted. There is not enough information to determine if Ann feels that her workload is
unrealistic, her employer has unclear policies, or she has difficult relationships with her coworkers.
</h5></div><h5 id='q44'>44. Isabella is the leader of a project team. When a problem occurred during the project, Isabella met with
her team to discuss the ways in which they might resolve the problem. At the end of the meeting, Isabella
said, “I really appreciate all of the ideas that you have presented. After I look through my notes, we'll
meet again tomorrow to discuss our course of action.” In this situation, Isabella is motivating her team
members by</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. evaluating their ideas.</option><option value="B">B. providing an incentive.</option><option value="C">C. asking for their input.</option><option value="D">D. praising an important milestone.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is C: asking for their input.</h5><h5>When a project manager asks team members to help resolve a problem, team
members feel that their opinions and input are valued. When team members feel that their work efforts
are valued, they are often motivated to continue working hard to meet the business's goals. Providing
praise and offering incentives are ways to motivate team members; however, Isabella is not using these
methods to motivate her team members in the situation. Isabella has collected ideas, but there isn't
enough information provided to determine if she has evaluated any of the ideas.
</h5></div><h5 id='q45'>45. Which of the following questions should an individual ask when determining if a personal vision is
realistic:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Will the result be permanent?</option><option value="B">B. What is the mission statement?</option><option value="C">C. Who will set the goals?</option><option value="D">D. Who will carry out the vision's goals?</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Will the result be permanent?</h5><h5>A vision is the future you wish to create. Though visions often develop from
abstract dreams, they must be achievable at some point in the future—they must be realistic. Realistic
visions should yield permanent results, so this is an important question to ask and answer when
determining if a personal vision is actually realistic. If the vision is simple to understand; worth the time,
effort, and money to carry out; and will yield permanent results, then the vision is ready to be
implemented. At this point, the specific mission statement for the vision can be developed, goals can be
set, and human resources to carry out the goals can be determined.
</h5></div><h5 id='q46'>46. An individual who looks at unexpected obstacles from multiple perspectives shows adaptability by</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. applying his/her creativity.</option><option value="B">B. using untapped resources.</option><option value="C">C. taking positive risks.</option><option value="D">D. seeking support from others.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: applying his/her creativity.</h5><h5>Adaptability is the ability to adjust to new circumstances. Some people adapt
to new circumstances easier than others. Often, new circumstances involve overcoming an obstacle.
When an individual can look at the obstacle or problem from different perspectives to resolve the issue,
s/he is generating new ideas or being creative. Using creativity may help individuals become more
resourceful. Positive risk taking often involves implementing a new idea—an idea that an individual
generates through creative thinking. Looking at unexpected situations from different perspectives may
involve seeking input and sometimes support from others; however, this depends on the situation and is
not always necessary.
</h5></div><h5 id='q47'>47. Ben has just finished a complex report and submitted it to his manager. Now, he is taking the afternoon
off to play golf at his favorite golf course. What step of developing an achievement-orientation is Ben
performing?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Asking for feedback</option><option value="B">B. Being a leader</option><option value="C">C. Setting goals</option><option value="D">D. Rewarding personal accomplishments

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

6
</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: Rewarding personal accomplishments

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

6
</h5><h5>Explanation not available</h5></div><h5 id='q48'>48. Collaborative relationships with colleagues from other departments are beneficial to the business
because they often</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. generate innovative ideas.</option><option value="B">B. prevent workplace conflict.</option><option value="C">C. support highly competitive attitudes.</option><option value="D">D. facilitate independent behavior.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: generate innovative ideas.</h5><h5>Collaboration involves working together in a cooperative manner. Colleagues
from different departments often collaborate with one another to accomplish business goals. An
advantage of collaboration is that colleagues from different departments have different perspectives,
which can help generate innovative ideas for developing new products, improving processes, increasing
productivity, and solving problems. Collaboration may reduce conflict, but it does not prevent it from ever
happening. Although a little friendly competition among colleagues might positively affect some business
activities, highly competitive attitudes tend to reduce trust and create a negative work environment. The
goal of collaboration is interdependence (relying on one another) rather than acting independently
(without others' input).
</h5></div><h5 id='q49'>49. Which of the following is a tip that you should follow about office politics:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Listen and observe others.</option><option value="B">B. Voice your opinions readily.</option><option value="C">C. Keep to yourself.</option><option value="D">D. Work hard.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: Listen and observe others.</h5><h5>Office politics exist in every business. People are trying to do their best to look
good to the higher ups so that they can get a promotion, a raise, etc. By listening and observing others,
you can learn how to maneuver the political environment in your company. If you readily voice your
opinions, you may make enemies. Keeping to yourself will not necessarily help you to advance since
people will not have an opportunity to get to know you. In business, working hard is often not enough to
get you noticed by your superiors.
</h5></div><h5 id='q50'>50. Which of the following is an example of a transfer payment:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Unemployment compensation</option><option value="B">B. Weekly paycheck</option><option value="C">C. Investment dividend</option><option value="D">D. Corporate bond</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: Unemployment compensation</h5><h5>Transfer payments are monies paid by the government in which no goods
or services are received in exchange. Examples of transfer payments include disaster aid, veterans'
benefits, and unemployment compensation. People who qualify for unemployment compensation receive
government funds for a limited amount of time when they lose their jobs through no fault of their own.
Employers issue paychecks to employees for the work they have performed. Dividends are earnings on
investments. A corporate bond is a piece of paper (real or virtual) that says a corporation will borrow an
investor's money at a particular interest rate for a particular period of time. Weekly paychecks,
investment dividends, and corporate bonds are not examples of transfer payments.
</h5></div><h5 id='q51'>51. What is a primary consideration when evaluating the time value of money?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Credit limit</option><option value="B">B. Premiums</option><option value="C">C. Interest rate</option><option value="D">D. Tariffs</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: Interest rate</h5><h5>The time value of money is the difference between the money's current purchasing power in
relation to its purchasing power at a future date. For example, when people place their money in a
savings account, they earn interest on the amount (principal) that they put into the account. If bank A
pays a higher interest rate than bank B, an individual's principal will be worth more in the future by
placing it in bank A. Premiums are free items that businesses offer to buyers of particular products. A
credit limit is the maximum amount of money that can be owed on a credit account. Tariffs or duties are
taxes on imported goods.
</h5></div><h5 id='q52'>52. Each pay period, Luke's employer takes a set amount of money out of his paycheck to help the business
pay for group insurance that lowers the costs associated with doctor visits, x-rays, and surgeries. What
type of insurance does Luke have?</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Life</option><option value="B">B. Health</option><option value="C">C. Liability</option><option value="D">D. Homeowners</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is B: Health</h5><h5>Individuals purchase different types of insurance to protect their financial well-being. Obtaining
healthcare insurance through your employer can offset medical and dental costs, which have been
substantially increasing over the past several years. Because businesses usually obtain lower rates for
groups of employees, it is usually more cost-effective to purchase healthcare insurance through
employers rather than through independent agencies. An individual purchases life insurance to protect
others (e.g., family members) from financial losses related to his/her death. An individual purchases
liability insurance to cover costs associated with others' potential property losses or injuries due to
negligence on the part of the insurance owner. Homeowners insurance covers losses associated with the
theft or damage of household belongings.
</h5></div><h5 id='q53'>53. According to Isaac's pay stub, his total earnings before deductions are $1,425. His total deductions are
$255. What is Isaac's net income?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. $1,680</option><option value="B">B. $1,425</option><option value="C">C. $1,170</option><option value="D">D. $1,298</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: $1,170</h5><h5>Isaac's net income is his actual take-home pay, which is equal to his gross income (his total
earnings before deductions) less his withholdings (his total deductions). To calculate his net income,
subtract his total deductions from his total earnings before deductions ($1,425 - $255 = $1,170).
</h5></div><h5 id='q54'>54. Which of the following is the most effective way to avoid excessive credit-card debt:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Pay off low-interest credit cards first</option><option value="B">B. Pay your balance off each month</option><option value="C">C. Choose a credit card with a high limit</option><option value="D">D. Use credit-card cash advances to pay debt</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: Pay your balance off each month</h5><h5>If you must use credit cards, the most effective way to avoid excessive
credit-card debt is to pay your balance off each month. By paying back what you've borrowed each
month, you can avoid paying interest and other costly fees. If you cannot pay your balance off each
month, work to pay off high-interest credit cards first, since high-interest credit cards cost you more in the
long run than low-interest cards. Choose credit cards with low limits so that you have less of an
opportunity to accumulate debt. Credit-card cash advances usually result in extremely high interest
charges, often 20% or more. So, it is wise to avoid cash advances, rather than using them to pay debt.
</h5></div><h5 id='q55'>55. What is Isaac's net income?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Most universities review your financial credit report before accepting you as a student.</option><option value="B">B. The return on your stock investments is based on your financial credit history.</option><option value="C">C. Information in your credit report can impact how much you pay to borrow money.</option><option value="D">D. Information in your credit report appears in your social networking profiles.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: Information in your credit report can impact how much you pay to borrow money.</h5><h5>Many financial advisors
recommend that you validate your financial credit history annually for several reasons. First of all,
information in your credit report can impact whether you get a loan as well as how much you pay to
borrow money. Secondly, you should review your credit report annually to ensure that information that
appears in the report is correct, complete, and current. Thirdly, by reviewing your credit report, you can
ensure that you are not the victim of identity theft. Your financial credit history does not impact your return
on stock investment nor appear in your social networking profiles. Although many employers review your
financial credit report before hiring you, most universities do not review your credit history before
accepting you as a student.
</h5></div><h5 id='q56'>56. Stacia claims that her former investment broker encouraged her to make excessive trades just to collect
the commission fees from each one. Stacia is accusing her former broker of</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. bundling.</option><option value="B">B. skimming.</option><option value="C">C. churning.</option><option value="D">D. flighting.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: churning.</h5><h5>Before selecting a broker, it's vital that you thoroughly understand his/her payment structure.
Many brokers (especially full-service brokers) are paid on commission, which means they make money
every time they conduct a transaction for you. A good broker is reliable and has your best interests at
heart when recommending that you buy or sell certain securities. Unfortunately, a dishonest broker may
encourage you to make excessive trades just to collect the commission fees from each one. This practice
is called churning. Skimming is a price strategy that involves setting prices higher than those of the
competition. Bundling is a marketing strategy that involves offering several products for sale as one
combined product. A flighting strategy is a media timing strategy that concentrates advertising during
peak sales periods followed by periods of no advertising.
</h5></div><h5 id='q57'>57. Since Logan is willing to accept a moderate or high risk in exchange for the potential of a moderate or
high return, he should invest his funds in</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. bonds.</option><option value="B">B. stocks.</option><option value="C">C. savings accounts.</option><option value="D">D. certificates of deposit.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: stocks.</h5><h5>Stocks, mutual funds, real estate, and collectibles are moderate- and high-risk ownership
investments that provide opportunities for return by letting you own something of significance. A stock is
a piece of paper—whether real or virtual—that says you own part of a corporation. As an owner (or
shareholder), you have the rights and responsibilities of ownership. You may be able to sell your stocks
for a profit, making a sizeable sum of money. But, being an owner means you risk losing money, too, if
the corporation suffers financially or goes out of business. Bonds, savings accounts, and certificates of
deposit are lending investments. With a lending investment, you allow someone to borrow your money for
a period of time—for a price. The extra money you receive provides the motivation for lending. Investors
who can't handle much risk put their money into lending investments. Since Logan is willing to accept a
moderate or high in exchange for the potential of a moderate or high return, he should invest in stocks.
</h5></div><h5 id='q58'>58. What type of insurance provides financial support to loved ones in the event of your death?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Disability insurance</option><option value="B">B. Life insurance</option><option value="C">C. Health insurance</option><option value="D">D. Renter's insurance

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

7
</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: Life insurance</h5><h5>Insurance is a contractual agreement in which one company (insurer) will pay for
specified losses incurred by the other company (insured) in return for installment payments (premium).
Many individuals purchase life insurance policies to ensure that their loved ones receive financial support
in the event of death. Life insurance is a wise purchase for an individual whose loved ones (e.g., spouse,
children, parents, etc.) would suffer financially without the deceased's income. Disability insurance
provides financial support in the event that you cannot work due to an injury or illness. Health insurance
helps to cover the cost of medical expenses. Renter's insurance protects you from loss in the event that
your personal property is damaged or lost while living in a rented apartment or house.
</h5></div><h5 id='q59'>59. Finemart's bookkeeper journalizes the business's income and expenditures at the time they occur even if
no money changes hands at that time. Finemart uses the __________ accounting method to record
transactions.</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. cash</option><option value="B">B. accrual</option><option value="C">C. managerial</option><option value="D">D. tax</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: accrual</h5><h5>Businesses using the accrual accounting method journalize income and expenditures at the time
they occur even if no money changes hands at that time. This means that the business enters the
amount of a transaction into the appropriate journal when a customer makes a credit purchase, or when
the business orders goods from a supplier. Businesses using the cash accounting method record income
and expenditures at the time the money changes hands. This means that the business enters the amount
of a transaction into one of its journals on the day the money is received from a customer or paid out to a
creditor. Managerial accounting involves reporting financial data to internal users. Tax accounting
involves recording transactions for tax purposes. Finemart does not use the cash accounting method,
and there is no indication that it is using managerial accounting or tax accounting to record transactions,
either.
</h5></div><h5 id='q60'>60. Ginny is an accountant. Her husband owns a good deal of stock in GRR Enterprises. Why could it be
unethical for Ginny to audit GRR's financial statements?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. GRR needs to avoid due care.</option><option value="B">B. Ginny's husband works for GRR.</option><option value="C">C. A tax accountant should audit GRR.</option><option value="D">D. Ginny has a conflict of interest.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: Ginny has a conflict of interest.</h5><h5>Since Ginny's husband owns a good deal of stock in GRR Enterprises,
her husband has a vested interest in the outcome of GRR's audit. As a result, it could be unethical for
Ginny to perform the audit, especially if her husband's investment in GRR influences her judgment as an
independent auditor. Ginny's husband does not work for GRR; instead, he owns stock in GRR. A certified
public accountant (in the U.S.) or a chartered accountant (in Canada) should perform the audit, not a tax
accountant. GRR should expect its auditor to act with due care and professionalism.
</h5></div><h5 id='q61'>61. Which of the following is a source of cash flowing into a business:</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Taxes</option><option value="B">B. Operating expenses</option><option value="C">C. Cost of goods</option><option value="D">D. Sale of assets</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sale of assets</h5><h5>Cash can flow into a business from a number of different sources, including the sale of
assets. Assets are anything of value that a business owns. In some cases, businesses have assets that
they no longer need. Selling these assets brings in cash. Other sources of cash flowing into a business
include start-up money, sale of products, loans from banks or investors, and interest paid by credit
customers or resulting from interest-bearing savings accounts. Operating expenses, cost of goods, and
taxes are examples of sources of cash that flow out of a business.
</h5></div><h5 id='q62'>62. Talia manages a business's accounts payable, accounts receivable, inventory, and cash. Talia is
responsible for</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. the business's capital structure.</option><option value="B">B. capital investment decisions.</option><option value="C">C. working capital management.</option><option value="D">D. market risk management.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: working capital management.</h5><h5>An organization's finance function is responsible for managing the
business's working capital and making capital investment decisions for the company. Working capital is
the difference between a business's current assets and current liabilities. Working capital management
focuses on the company's current balance of assets and liabilities and involves the management of
accounts payable and receivable, inventory, and cash. Working capital management involves decisions
made for the short-term—one year or less. Capital investment decisions determine which projects the
business will invest in, how the investment(s) will be financed, and whether or not to pay dividends to the
company's shareholders. The business's capital structure consists of the mix of debt and equity financing
used to finance investments and projects. Market risk is the risk of financial loss due to the decreased
value of an investment, and market risk management involves using financial instruments to manage
exposure to market risk. Capital investment decisions, the business's capital structure, and market risk
management are typically long-term in nature. Talia is not responsible for capital investment decisions,
the business's capital structure, or market risk management.
</h5></div><h5 id='q63'>63. What is an advantage of a rolling budget?</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Managers must demonstrate a need for all expenses.</option><option value="B">B. There is always a year-long plan in place.</option><option value="C">C. The master budget is made up of specialized budgets.</option><option value="D">D. The rolling budget eliminates all variances.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: There is always a year-long plan in place.</h5><h5>Many businesses use rolling, or continuous, budgets.
Beginning with a 12-month budget, a new month is added as each month goes by. Advantages to this
system are that there is always a year-long plan in place and that a major, annual budgeting effort is
avoided. In addition, rolling budgets tend to be more flexible. Zero-based budgeting requires managers to
demonstrate the need for every expense instead of relying on figures from a previous period. Rolling
budgets are not always zero-based budgets. While it is true that a master budget is made up of
information from specialized budgets that are generated by individual departments, it is not an advantage
of a rolling budget. The rolling budget does not eliminate all variances, which are the differences between
budgeted amounts and actual amounts.
</h5></div><h5 id='q64'>64. What is an indicator of strong organizational ethics?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Underperforming</option><option value="B">B. Overpromising
</option><option value="C">C. High trust and mutual respect</option><option value="D">D. Refusal to accept responsibility
</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: High trust and mutual respect</h5><h5>Human-resources managers play a significant role in ensuring the
existence and adherence to organizational ethics. In fact, they set the standard for ethical behavior within
their organization and serve as examples for other employees. Indicators of strong organizational ethics
include high trust and mutual respect, complete information, open discussion of different options, and
concrete goals. Overpromising, underperforming, and a refusal to accept responsibility are indicators of
poor ethics.
</h5></div><h5 id='q65'>65. An orientation program typically benefits new employees by</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. reducing employee start-up costs.</option><option value="B">B. reducing new employees' anxiety.</option><option value="C">C. saving supervisors' time.</option><option value="D">D. increasing new employees' compensation.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is B: reducing new employees' anxiety.</h5><h5>Many new employees are anxious and nervous during their first days
or weeks on the job because they are putting themselves into an unknown situation. Without an
orientation, they may not know what to do or how to conduct themselves in the workplace. An effective
orientation program can help to alleviate these new employees' anxiety. Taking part in an orientation
does not usually increase new employees' compensation. While an orientation program typically does
reduce employee start-up costs and save supervisors' time, those are benefits to the organization, not to
the new employees.
</h5></div><h5 id='q66'>66. Which of the following marketing functions helps businesses answer the question “Where will the
products be offered?”:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Product/Service management</option><option value="B">B. Selling</option><option value="C">C. Promotion</option><option value="D">D. Channel management</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: Channel management</h5><h5>An organization's finance function is responsible for managing the
business's working capital and making capital investment decisions for the company. Working capital is
the difference between a business's current assets and current liabilities. Working capital management
focuses on the company's current balance of assets and liabilities and involves the management of
accounts payable and receivable, inventory, and cash. Working capital management involves decisions
made for the short-term—one year or less. Capital investment decisions determine which projects the
business will invest in, how the investment(s) will be financed, and whether or not to pay dividends to the
company's shareholders. The business's capital structure consists of the mix of debt and equity financing
used to finance investments and projects. Market risk is the risk of financial loss due to the decreased
value of an investment, and market risk management involves using financial instruments to manage
exposure to market risk. Capital investment decisions, the business's capital structure, and market risk
management are typically long-term in nature. Talia is not responsible for capital investment decisions,
the business's capital structure, or market risk management.
</h5></div><h5 id='q67'>67. Motives, perception, attitude, lifestyle, personality, and abilities are __________ factors influencing
consumer behavior.</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. psychological</option><option value="B">B. social</option><option value="C">C. political</option><option value="D">D. economic</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: psychological</h5><h5>Consumer behavior encompasses individuals' actions that determine what they buy and
sell. Psychological, social, and personal factors all influence consumer behavior. Psychological factors
include an individual's motives, perception, attitude, lifestyle, personality, abilities, and knowledge.
Consumer behavior is also impacted by social factors such as opinion leaders, a person's family,
reference groups, social class, and culture. Personal factors impacting consumer behavior are specific to
a particular person and include demographic characteristics such as gender, age, ethnicity, etc. While
political and economic factors may influence consumer behavior in some instances, motives, perception,
attitude, lifestyle, personality, and abilities are not political or economic factors.
</h5></div><h5 id='q68'>68. Which of the following is an example of factual information:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. It seems that we have a problem.</option><option value="B">B. I believe that the product is defective.</option><option value="C">C. Last quarter, sales increased by 12%.</option><option value="D">D. Kerry and Dean are the nicest managers.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: Last quarter, sales increased by 12%.</h5><h5>A fact is a true statement—something that is known to be correct.
To prove that sales truly increased by 12% last quarter, you can compare last quarter's sales with the
sales from two quarters ago. An opinion, on the other hand, is a person's point of view or belief about a
topic. "I believe that the product is defective"; "It seems that we have a problem"; and "Kerry and Dean
are the nicest managers" are opinions. They reflect people's beliefs about the product's quality, about a
situation, and about Kerry and Dean.
</h5></div><h5 id='q69'>69. Todd created a graphic organizer to illustrate his business's quality-control processes. He used a
combination of pictures, graphs, and simple statements to sequentially present the information. What did
Todd develop?</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Draft</option><option value="B">B. Outline</option><option value="C">C. Storyboard</option><option value="D">D. Proposal

BUSINESS ADMINISTRATION CORE EXAM

2012 HS ICDC

8
</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Storyboard</h5><h5>Business professionals sometimes use graphic organizers to illustrate certain processes or
to describe a problem and its solution. A storyboard uses a combination of pictures, graphs, and simple
statements to present information in a sequential order. An outline is a general plan giving only the main
points of a topic. A draft is the preliminary version of a piece of writing. A proposal is a plan or
suggestion. Outlines, drafts, and proposals are not graphic organizers.
</h5></div><h5 id='q70'>70. By maintaining information about a company's copyrights, patents, trademarks, and corporate history, the
information management function helps to</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. communicate the company's financial position.</option><option value="B">B. serve customers more effectively and efficiently.</option><option value="C">C. maintain the company's building and equipment.</option><option value="D">D. preserve the company's organizational identity.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: preserve the company's organizational identity.</h5><h5>A company's information management function is
responsible for keeping track of important documents and files pertaining to the company's corporate
history. The function also manages information regarding the company's copyrights, patents, trademarks,
etc. By doing so, information management helps to preserve the company's organizational identity and
history. Maintaining information about a company's copyrights, patents, trademarks, and corporate
history does not help serve customers more effectively and efficiently, maintain the company's building
and equipment, or communicate the company's financial position.
</h5></div><h5 id='q71'>71. Chad needs to e-mail sales data to both Ken and Sherri, but he doesn't want Ken to know that Sherri is
also receiving the message. What e-mail function should Chad use to send the e-mail to Sherri?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Carbon copy</option><option value="B">B. Blind carbon copy</option><option value="C">C. Attachment</option><option value="D">D. Autoresponder</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: Blind carbon copy</h5><h5>The blind carbon copy function (Bcc) is used to keep e-mail addresses private and to
prevent recipients from seeing who else is receiving the e-mail. The blind carbon copy function is
frequently used to send messages to a large group of e-mail recipients. The carbon copy feature (cc) can
also be used when sending e-mail to several people, but every recipient can see everyone else's e-mail
address using this technique. An attachment is a computer file that is sent with an e-mail message. An
autoresponder is a computer program that automatically returns a specified message to anyone who emailed a particular address.
</h5></div><h5 id='q72'>72. Bobbi is searching the Internet for information about business licenses. Unfortunately, many of the
search results are useless to her because they focus on drivers' licenses. What search terms should
Bobbi use to find information specifically about business licenses?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. "business license" driver</option><option value="B">B. +business +license</option><option value="C">C. +business +license -driver</option><option value="D">D. BUSINESS LICENSE</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is C: +business +license -driver</h5><h5>By placing a “+” before a word, you can tell most search engines to look for
web sites containing that word. Likewise, by placing a “-“ before a word, you are telling the search engine
to disregard all web sites that contain that word. So, by entering “+business +license -driver,” Bobbi is
telling her search engine to look for web sites that contain the words “business” and “license” but don't
contain the word “driver.” That way, Bobbi won't have to weed through search results focusing on drivers'
licenses before finding quality information about business licenses. “+business +license” would tell the
search engine to look for web sites containing “business” and “license,” but web sites about drivers'
licenses could potentially appear in the search results. The search phrase “'business license' driver”
would command the search engine to look for web sites that contain the exact phrase “business license”
as well as the word “driver.” Search engines are not typically case-sensitive, so capitalizing the words
“BUSINESS LICENSE” would not have an impact on search results.
</h5></div><h5 id='q73'>73. Which of the following is an acceptable file name for a word-processing document:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Office Calendar 3 30 2012</option><option value="B">B. Office Calendar 3/30/2012*</option><option value="C">C. Office Calendar: 3/30/2012</option><option value="D">D. Office Calendar <3 30 2012></option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: Office Calendar 3 30 2012</h5><h5>Regardless of whether you use a PC or Mac computer, word-processing
programs typically refuse to let you use certain symbols in your file names. Top on this list of prohibited
characters are: \ / : * ? < > | . If you try to use any of those particular symbols in a file name, you'll get a
message that your file name is invalid, and you'll have to choose a new name for the file. Of the list of file
names provided, only “Office Calendar 3 30 2012” is acceptable because it is the only name without any
prohibited symbols.
</h5></div><h5 id='q74'>74. Eugenia is using presentation software to prepare slides for her next workshop. In addition to putting the
name and date of the workshop on the title slide, where else could Eugenia include this information in her
presentation?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Animations</option><option value="B">B. Headers</option><option value="C">C. Footers</option><option value="D">D. Transitions</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: Footers</h5><h5>A footer is a line of text appearing at the bottom of a presentation slide. A presenter may choose
to include the name and date of his/her presentation in the footer to remind viewers of the focus of the
presentation. Slide numbers are also often included in footers for the presenter's and viewers' reference.
A header is a line of text or other data that appears at the top of a presentation slide or word processing
document. The header may include the page number, section title, main title, etc. The date of the
presentation is not typically included in a header. Animations are movements added to objects (e.g., text,
images) on presentation slides. Transitions are animations added to slides. Transitions dictate how one
slide is removed from the screen and replaced with another. The presentation name and date are not
typically included in animations or transitions.
</h5></div><h5 id='q75'>75. Zach is inputting numerical data into an electronic worksheet containing a series of rows and columns.
What is Zach creating?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Web ring</option><option value="B">B. Presentation</option><option value="C">C. Spreadsheet</option><option value="D">D. Business letter</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: Spreadsheet</h5><h5>A spreadsheet, sometimes known as a worksheet, is an electronic grid that shows
information (usually numerical) in a logical manner—typically a series of rows and columns. Presentation
software is typically used to create visual aids supporting an oral presentation. A web ring is a series of
linked web pages that share a common theme. A business letter is a formal letter used by a business
professional to communicate with other businesses and clients.
</h5></div><h5 id='q76'>76. Dale stores his customer records in a remote database that he accesses via the Internet. Where does
Dale maintain his customer files?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. In the cloud</option><option value="B">B. On his hard drive</option><option value="C">C. On a flash drive</option><option value="D">D. In a log file</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: In the cloud</h5><h5>An increasingly popular method for storing business records is in "the cloud." Cloud storage
involves storing your records in a database maintained by a third party at an off-site database storage
facility. Rather than storing his records to his computer hard drive, a flash drive, or other nearby storage
device, Dale uploads his files to the Web and then saves them to the remote database—the cloud. To
retrieve any files that he's saved to the cloud, he simply goes online, logs into the database, and
accesses whatever records he needs. Dale's customer records are not maintained on his hard drive, on a
flash drive, or in a log file.
</h5></div><h5 id='q77'>77. Natalie needs to compile a list of her retail business's suppliers, along with the products that the business
purchases from each. Which of the following internal records is most likely to contain the information that
she needs:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Quality records</option><option value="B">B. Inventory records</option><option value="C">C. Human-resources records</option><option value="D">D. Payroll records</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: Inventory records</h5><h5>Inventory records contain information related to the goods that a business has on
hand or on order. They are also likely to contain information about a retail business's suppliers and the
products that the business purchases from each to sell to consumers. Quality records usually contain
information regarding the degree of excellence of the business's products. Human-resources records
contain information about the business's employees. Payroll records contain information about money
paid to employees in a given period.
</h5></div><h5 id='q78'>78. Which of the following datasets is most likely to be spread out over a wide range of values:
Dataset
A
B
C
D</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Dataset A</option><option value="B">B. Dataset B

Mean
12
14
15
11

Mode
13
9
15
9</option><option value="C">C. Dataset C</option><option value="D">D. Dataset D

Standard Deviation
2.2
4.3
1.5
1.9

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

9
</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: Dataset B

Mean
12
14
15
11

Mode
13
9
15
9</h5><h5>Explanation not available</h5></div><h5 id='q79'>79. Last year, several of Readmore Bookstore's employees hurt their backs while lifting heavy boxes. As a
result, the bookstore is re-teaching its workers how to lift heavy boxes of books safely. What type of
control is the business using to protect its employees' health and safety?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Personal protective equipment</option><option value="B">B. Engineering control</option><option value="C">C. Administrative control</option><option value="D">D. Work-practice control</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: Work-practice control</h5><h5>Four methods used to limit and regulate the activities of federal agencies are statutory
control, political control, judicial review, and informational control. In many countries, the legislative
branch has the power to pass statutes (laws) establishing federal agencies. This enabling legislation
often identifies limits to the agencies' powers. In other words, these statutes control the agencies'
activities. The government wields political control over these agencies by providing (or withholding)
funding, by approving (or speaking out against) individuals nominated to lead these agencies, and by
amending the agencies' enabling legislation. The courts can also control federal agencies by reviewing
and deciding the legality of the agencies' actions. Finally, the public can indirectly control federal
agencies through information. Most federal agencies are required to provide the public with information
on different topics. After reviewing the information, private citizens can take action to influence the
activities of these federal agencies.
</h5></div><h5 id='q80'>80. Jackie is starting a t-shirt business. When should Jackie read the instructions for the heat press, vinyl
cutter, and printer that he'll be using to create his products?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Never; he can figure out the equipment on his own</option><option value="B">B. When any of the equipment malfunctions</option><option value="C">C. Before using the equipment for the first time</option><option value="D">D. When he hires his first employee</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: Before using the equipment for the first time</h5><h5>If Jackie's equipment comes with written instructions, he
should read the instructions carefully prior to using any of the devices. By reading the instructions prior to
use, he is more likely to operate the equipment properly and safely. And, if he operates the equipment
properly and safely from the beginning, he is likely to save himself much time, energy, and trouble in the
long run. He should not wait until the equipment malfunctions or until he hires an employee to read the
instructions.
</h5></div><h5 id='q81'>81. Which of the following actions is most likely to contribute to the creation of a safe business environment:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Running extension cords across main walkways in the business</option><option value="B">B. Salting icy patches on the sidewalk outside the business entrance</option><option value="C">C. Storing inventory in stairwells and in front of emergency exits</option><option value="D">D. Keeping file drawers in high traffic areas open throughout the day</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: Salting icy patches on the sidewalk outside the business entrance</h5><h5>A significant number of workplace
injuries are the result of slipping, tripping, and falling on unsafe walking and work surfaces (e.g., floors,
stairs, sidewalks, loading docks, etc.). One way that businesses can reduce these accidents is by salting
or sanding icy patches on their sidewalks, parking lots, loading docks, and outdoor wheelchair ramps
during winter weather. Employees and customers are likely to trip or fall on extension cords that run
across main walkways in the business, boxes of inventory stored in stairwells and in front of emergency
exits, and protruding file drawers in high traffic areas.
</h5></div><h5 id='q82'>82. While opening a large box of office supplies, Kendall accidentally cut her finger with the box cutters she
was using. Another employee, Beverly, was helping Kendall at the time and witnessed the accident.
What is the first thing that Beverly should do?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Call Kendall's doctor</option><option value="B">B. Fill out an accident report</option><option value="C">C. Administer first aid</option><option value="D">D. Put the office supplies away</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: Administer first aid</h5><h5>If someone you are working with cuts or scratches himself/herself, the first thing that
you should do is administer first aid. Beverly, for instance, should help Kendall treat her cut. If the injury is
serious, you should also call the paramedics and have the worker taken to the hospital for medical
treatment. It is not necessary to call the coworker's doctor. After the worker's injury has been treated, you
and s/he will both need to fill out an accident report. If someone is injured, you should help them, not
ignore them and continue with your work.
</h5></div><h5 id='q83'>83. Although your coworker Edward has always been a pessimistic person, his attitude has been very
negative lately. He obviously has an extreme dislike for the new manager, and recently, his favorite
topics of conversation have been guns and knives. Knowing all this, what should you do?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Call the local sheriff or police chief to discuss Edward's mood</option><option value="B">B. Say nothing because Edward will probably calm down soon</option><option value="C">C. Share this information with your supervisor or the HR department</option><option value="D">D. During a staff meeting, accuse Edward of plotting to kill the manager</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is C: Share this information with your supervisor or the HR department</h5><h5>Discussing weapons at work and
displaying obvious signs of anger or hostility are indicators of potentially dangerous behavior. While there
is some chance that Edward will calm down soon, it would be wise to share your observations with your
supervisor or the HR department, especially given his recent attitude and behavior. Your supervisor or
the HR department can then decide how to handle the situation. Rather than contacting the local sheriff
or police chief to discuss Edward's mood, you should start by sharing your knowledge with someone
inside your company, such as your supervisor or a member of the HR department. Accusing Edward of
plotting to kill the manager during a staff meeting is likely to antagonize Edward, making the situation
worse.
</h5></div><h5 id='q84'>84. How can an individual employee help protect company information on a daily basis?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Log out of his/her computer when leaving work</option><option value="B">B. Store log-in information in a desk drawer at work</option><option value="C">C. Check personal e-mail on a work computer</option><option value="D">D. Transfer files from a home computer to a work computer</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is A: Log out of his/her computer when leaving work</h5><h5>One way that an individual employee can help protect
company information on a daily basis is to log out of his/her computer when leaving work for lunch or for
the evening. By doing so, it becomes much more difficult for an intruder to access company information
on that particular computer. However, if the employee also stores her/his log-in information (i.e.,
username and password) in a desk drawer at work, that very same intruder can easily access company
data if s/he has time and opportunity to look in the drawers of the desk. Checking personal e-mail on a
work computer and transferring files from a home computer to a work computer are potentially
dangerous. They make the computer vulnerable to hackers' attacks and electronic viruses which could
result in the loss of company information.
</h5></div><h5 id='q85'>85. To help project managers identify the resources needed for a project, they often develop</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. summaries.</option><option value="B">B. schedules.</option><option value="C">C. timelines.</option><option value="D">D. checklists.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: checklists.</h5><h5>Developing a checklist involves writing down all of the possible resources that might be
needed for a project. Categorizing the resources (e.g., supplies, equipment, people) is a good way for
project managers to organize their resource information and review and update their lists as needed.
Schedules and timelines are usually developed after the resources have been identified. Summaries
provide an overview of larger documents or complex content.
</h5></div><h5 id='q86'>86. Project managers usually evaluate project results by</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. comparing project standards with actual performance.</option><option value="B">B. setting long-term goals for the project.</option><option value="C">C. conducting external data searches.</option><option value="D">D. developing complex diagrams.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: comparing project standards with actual performance.</h5><h5>Standards are specifications or statements that
are used as a basis for making comparisons or judgments. Project managers often use standards as the
basis for evaluating project results. For example, a project manager might compare the budget allocated
for a specific phase of the project with the actual amount of money spent during that phase to evaluate
the use of financial resources. Project managers set goals at the beginning of a project. Project
managers must obtain a variety of project data (e.g., internal and external) before they can evaluate
project results; therefore, conducting data searches is not a method of evaluating project results. Project
managers may develop diagrams to help them visualize project results so they can evaluate them.
</h5></div><h5 id='q87'>87. Which of the following is a purpose of the competitive bidding process:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. To attract product champions</option><option value="B">B. To increase competition for products</option><option value="C">C. To obtain lower prices from bidders</option><option value="D">D. To limit the number of vendors to pick from

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

10
</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: To obtain lower prices from bidders</h5><h5>By using a competitive bidding process, businesses can obtain lower
prices from vendors thereby decreasing their overall product costs. Competitive bidding occurs between
businesses so that businesses obtain better services as well as better products/materials/components.
The process should encourage as many vendors as possible to attempt to get a contract rather than
limiting the number of vendors to pick from. Competition and product champions are not related to the
competitive bidding process.
</h5></div><h5 id='q88'>88. When selecting vendors, what action is supposed to occur during your initial discussion with potential
vendors?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Provides an opportunity for them to offer their best price</option><option value="B">B. Gives them an opportunity to sell you on their products or services</option><option value="C">C. Finalizes your choice of vendor</option><option value="D">D. Enables you to put together an initial list of vendors to choose from</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: Gives them an opportunity to sell you on their products or services</h5><h5>During this initial meeting, vendors
need to help you understand how their products or services will best meet your needs. Although vendors
will discuss price during the initial discussion, they will usually save their best and final price for the final
round of discussions. The initial discussion with potential vendors enables you to limit the number of
vendors from which you will choose, but it should not be when your vendor choice is made. The initial list
of 8-10 vendors would be done prior to the initial discussion.
</h5></div><h5 id='q89'>89. Which of the following is a barrier for businesses in the adoption of a quality culture:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Stressing standardization of products and services</option><option value="B">B. Having management lead the way</option><option value="C">C. Focusing on quick fixes</option><option value="D">D. Making employees aware of the company's quality program</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: Focusing on quick fixes</h5><h5>When problems occur, people often want to fix the problem as quickly as
possible. That often results in the identification of symptoms rather than determination of the root cause
of the problem. Having management lead the way and stressing standardization are two ways to
encourage a quality culture. Adoption and provision of quality are processes rather than programs.
Naturally, employees should be trained in quality processes.
</h5></div><h5 id='q90'>90. Employees can help control business expenses by handling equipment correctly so that it will last longer
and need fewer repairs. In other words, employees can help control expenses by</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. keeping utility costs at a minimum.</option><option value="B">B. respecting company property.</option><option value="C">C. reporting theft of products.</option><option value="D">D. price-marking products accurately.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: respecting company property.</h5><h5>Controlling expenses helps a business continue operations and save
money to use for other important purposes, such as expanding the business and providing good wages
and benefits to employees. Employees can help control expenses in a number of different ways,
including by respecting company property. One way employees can show respect for company property
is by handling equipment correctly so that it will last longer and need fewer repairs. Employees can also
help with expense control by keeping utility costs at a minimum, reporting theft of products, and pricemarking products accurately. However, those activities are not directly related to handling equipment
correctly.
</h5></div><h5 id='q91'>91. During job interviews, your personal appearance</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. gives potential employers clues about your attitude and skills.</option><option value="B">B. has very little impact on how well you do in the interviews.</option><option value="C">C. must be completely ignored by potential employers.</option><option value="D">D. should be based on what you feel comfortable wearing.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: gives potential employers clues about your attitude and skills.</h5><h5>During job interviews, how you look often
makes a difference in how well you do. Interviewers have limited time to make decisions about an
individual they're interviewing, and they rely heavily on their first impressions. You appearance, including
your clothing and the manner in which you carry yourself, are among the most important factors that
influence their perceptions. Interviewers feel that your appearance reflects not only your attitude but often
the skills you possess as well. Although potential employers are required to ignore ethnicity, gender,
sexual orientation, etc. when selecting new employees, they are legally allowed to consider how you
dress and carry yourself during the interview when making hiring decisions. You should dress
professionally for job interviews, regardless of whether you feel comfortable wearing professional attire or
not.
</h5></div><h5 id='q92'>92. Which of the following factors is driving the need for innovation skills:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Decreased levels of educational attainment</option><option value="B">B. Increased amount of competition</option><option value="C">C. Increased length of time products stay in the market</option><option value="D">D. Decreased customer expectations</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: Increased amount of competition</h5><h5>Global trade has increased the number of markets available for
products, while also increasing the amount of competition that exists for businesses. The increased
competition forces businesses to update existing products and to develop new products at a faster rate
than ever before. Other factors contributing to the need for innovation skills include increased levels of
educational attainment, decreased product life cycles (i.e., the length of time products stay in the market),
and increased customer expectations.
</h5></div><h5 id='q93'>93. Shawn usually makes decisions without seeking help from others. Shawn typically makes decisions with
__________ input.</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. significant</option><option value="B">B. moderate</option><option value="C">C. maximum</option><option value="D">D. minimum</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: minimum</h5><h5>A decision is affected by internal and external influences—and by the decision-making style
you apply. It's important to be aware of what affects how you make a decision. And, it's important to
involve the people who should be included in the decision-making process. If a decision maker decides
without help—as is Shawn's habit—s/he makes the decision with minimum input. If the decision maker
asks for some help before deciding, s/he makes the decision with moderate input. If the decision maker
and an entire group of people decide together, s/he makes the decision with significant or maximum
input. The key is to use each style when it is called for, based on whether the decision affects others,
whether the affected parties want (or need) to have a say in the decision, and who has the information
needed to make the decision.
</h5></div><h5 id='q94'>94. What is a factor related to dependability that employers would expect employees to exhibit?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Enthusiasm</option><option value="B">B. Attendance</option><option value="C">C. Grooming</option><option value="D">D. Initiative</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: Attendance</h5><h5>Employers expect to be able to count on their employees to do their jobs. This includes such
factors as showing up at work when scheduled (attendance), being on time (punctuality), and accepting
responsibility for getting the work done (reliability). Grooming, enthusiasm, and initiative are personal
traits desired by employers, but they do not relate to dependability.
</h5></div><h5 id='q95'>95. Which of the following addresses employees' right to not be bullied in the workplace:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Right to complain without retaliation</option><option value="B">B. Right to a safe work environment</option><option value="C">C. Right to union activity</option><option value="D">D. Right to nondiscriminatory promotion practices</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: Right to a safe work environment</h5><h5>Laws that protect employees from bullying and harassment are
addressed in legislation that relates to employees' right to a safe and non-hostile work environment. The
right to complain without retaliation is addressed in whistleblower laws. Employees' rights to organize and
bargain collectively are protected in the Wagner Act and many other laws in the United States.
Employees' right to nondiscriminatory promotion practices are protected in a variety of laws dealing with
equal employment opportunities and discrimination.
</h5></div><h5 id='q96'>96. Lucy, who works for the Green Corporation, is responsible for handling special events and responding to
requests for information about the company. Lucy works in</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. professional selling.</option><option value="B">B. marketing research.</option><option value="C">C. merchandising.</option><option value="D">D. marketing communications.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: marketing communications.</h5><h5>Marketing communications involves marketing activities that inform, remind,
and/or persuade the targeted audience. Examples of marketing communications techniques include
advertising, direct marketing, digital marketing, publicity/public relations, and sales promotion. Lucy is a
public relations manager—responsible for handling special events and responding to requests for
information about the company. Marketing research jobs focus on marketing activities that involve
determining information needs, collecting data, analyzing data, presenting data, and using data for
marketing planning. Merchandising careers involve marketing activities that are focused on efficient and
effective product planning, selection, and buying for resale. Careers in professional selling involve
marketing and management activities that determine customer needs/wants and respond through
planned, personalized communication to influence purchase decisions and enhance future business
operations.
</h5></div><h5 id='q97'>97. For what aspect of a job-search strategy would you be most likely to use the Internet?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Researching prospective employers</option><option value="B">B. Writing personal letters to hiring managers</option><option value="C">C. Determining pending lawsuits against a company</option><option value="D">D. Finding out what current employees like/dislike about a company

2012 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

11
</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: Researching prospective employers</h5><h5>By researching a company on the Internet, you can obtain a wealth
of information that would be useful to you in your job search. This research would probably include such
things as products offered, location, size of the company, sales, company image, problems, employee
benefits, etc. Knowing about a company can enable you to size up how well you'd fit in with the company.
You would probably use the Internet to write a professional letter to a hiring manager. Writing personal
letters to hiring managers would be inappropriate. Finding out what current employees like/dislike about a
company would be nice, but current employees would probably avoid posting their company dislikes on
the Internet. You might learn about pending lawsuits against a company; however, this would not be the
most likely use that you could make of the Internet when conducting a job search.
</h5></div><h5 id='q98'>98. Why is networking one of the most effective techniques for identifying employment opportunities?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Networks provide emotional support during job searches.</option><option value="B">B. Networks are paid to be the first-to-know about job openings.</option><option value="C">C. Most job openings are never posted in the newspaper.</option><option value="D">D. Most job openings are listed with employment agencies that networks can help you identify.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: Most job openings are never posted in the newspaper.</h5><h5>Many companies inform current employees of job
openings before they post the openings in the newspaper or list them with employment agencies. One
study indicates that 80 percent of job openings are never posted or listed. Through networking, you can
learn of these un-posted job opportunities. Networks are not paid to be the first-to-know about job
openings. Although networks can be a source of emotional support during a job search, that is not why
they are one of the most effective techniques for identifying employment opportunities. Networks do not
help to identify employment agencies; instead, they help to identify job openings with specific companies.
</h5></div><h5 id='q99'>99. Why do many job offers come from participating in an internship?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Employers feel obligated to hire interns.</option><option value="B">B. Interns are more experienced than a person who walks in off the street.</option><option value="C">C. Interns are being repaid for working for free.</option><option value="D">D. Employers have had an opportunity to observe an intern's work.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: Employers have had an opportunity to observe an intern's work.</h5><h5>Through internships, employers have an
opportunity to examine the quality and quantity of a potential employee's work, the person's work ethic,
and the person's ability to work well with others. When interns do quality work, employers want to keep
them onboard. A person walking in off the street may have several years of experience doing similar
work. Employers do not feel obligated to hire interns or feel that they need to repay interns for working for
free. Their goal is to hire quality employees, thereby minimizing their expenses while maximizing output.
</h5></div><h5 id='q100'>100. A company consistently fulfills its brand promise by using</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. product-line extensions.</option><option value="B">B. external publicity.</option><option value="C">C. touch points.</option><option value="D">D. tangible services.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is C: touch points.</h5><h5>Rather than
not making any noise while the speaker is talking, you should limit yourself to short comments.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Principles/Principles_4_Whole_Master.js"></script></html>