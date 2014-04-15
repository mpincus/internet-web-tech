var quotes = new Array();

quotes[0] = 'There are some people who live in a dream world, and there are some who face reality; and then there are those who turn one into the other. <i>-By Douglas Everett</i>';

quotes[1] = 'Whether you think you can or whether you think you can\'t, you\'re right! <i>-Henry Ford</i>';

quotes[2] = 'I know of no more encouraging fact than the unquestionable ability of man to elevate his life by conscious endeavor. <i>-Henry David Thoreau</i>';

quotes[3] = 'Do not let what you cannot do interfere with what you can do. <i>-John Wooden</i>';

quotes[4] = 'Accept everything about yourself - I mean everything, You are you and that is the beginning and the end - no apologies, no regrets. <i>-Clark Moustakas</i>';

quotes[5] = 'We must accept life for what it actually is - a challenge to our quality without which we should never know of what stuff we are made, or grow to our full stature. <i>-Ida R. Wylie</i>';

quotes[6] = 'High achievement always takes place in the framework of high expectation. <i>-Jack Kinder</i>';

quotes[7] = 'The measure of a man is the way he bears up under misfortune. <i>-Plutarch</i>';

quotes[8] = 'Don\'t wait for your ship to come in, swim out to it. <i>-Anon</i>';

quotes[9] = 'As I grow older, I pay less attention to what men say. I just watch what they do. <i>-Andrew Carnegie</i>';


var whichquote = Math.floor(Math.random() * (quotes.length));
document.write(quotes[whichquote]);