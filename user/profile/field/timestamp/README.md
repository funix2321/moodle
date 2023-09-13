[![Moodle Plugin CI](https://github.com/SREd-URV/moodle-profilefield_timestamp/actions/workflows/moodle-ci.yml/badge.svg)](https://github.com/SREd-URV/moodle-profilefield_timestamp/actions/workflows/moodle-ci.yml) [![Releasing in the Plugins directory](https://github.com/SREd-URV/moodle-profilefield_timestamp/actions/workflows/moodle-release.yml/badge.svg)](https://github.com/SREd-URV/moodle-profilefield_timestamp/actions/workflows/moodle-release.yml)

Timestamp Profile Field
===

A user profile field type that shows a timestamp both as human readable and unix time format, with the form:

> divendres, 18 octubre 2013, 11:38 (1382089086)

That is, {default site, human readable date + time format} ({unix timestamp number})


Why this plugin
---

If you synchronize/set user fields to know the time of an important
issue/event related to the user, this field type shows you the timestamp
both in human readable and numeric (unix timestamp value).

We found that as really useful for administrators, either technical or not.

From a technical viewpoint, it is better to store the unix timestamp, but
show it human readable. In forensic cases, the unix timestamp value is
really useful for technicians.


Behaviour
---

It works like the text field, but showing the value in both formats:

* Human readable
* Unix timestamp

However, only the unix timestamp value is stored. If it is allowed to be changed/updated, a date/time selector is shown in the form.


Installation
---

As usual:

* Download the source code (zip or git clone).
* Uncompress to user/profile/field/timestamp.
* Go to **Notifications**


License
---

It is released as GPL v3.

Authors:
* Jordi Pujol-Ahulló jordi.pujol@urv.cat

Copyright 2013 onwards Servei de Recursos Educatius (http://www.sre.urv.cat)
