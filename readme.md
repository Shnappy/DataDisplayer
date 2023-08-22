#Quick Notes

##Results of the project

I didn't manage to get the data off the endpoint mentioned in the spec despite the fact I attempted a lot of things. I came to a conclusion there is some information that is missing in the spec, since authorization seems to work but the parameters appear wrong. (I tried both curl on console and postman and I would guess there is a missing extra parameter in the spec)

However, I attempted my best to show off the following:

1. Project follows the MVC pattern
2. OOP approach is used
3. Exception handling (not good, but hey, it's kinda here!)


Because of the issue I was getting at the start, I didn't manage to implement the chart generation. Since the specs mentioned it has to be a php project, I assumed it has to be pure php. That cancels a more simplistic html with js approach. The other way would be using a php library just for that like phpChart, but setting it up and adding a dependency would take some tinkering to do and I was already almost beyond my 1 hour budget.

##If I would continue this project I would:

1. Mock the output of the endpoint
2. Implement exception handling more adequately
3. Add a logger
4. Make the chart genertion work
